import requests
import xml.etree.ElementTree as ET
import json
from flask import Flask, jsonify

app = Flask(__name__)

@app.route('/')
def get_cotizaciones():
    # URL del endpoint SOAP con puerto
    soap_url = "https://wsqa.redpack.com.mx/RedpackAPI_WS/services/RedpackWS?wsdl"

    # Encabezados del request SOAP
    soap_headers = {
        'Content-Type': 'text/xml; charset=utf-8',
    }

    # Variables SOAP
    PIN = "QA nSYOVMfdFOtT7XDpCbPOh4HAnsm7JaarfM8+mtWXu0k="
    idUsuario = "2776"

    # URL para obtener los códigos postales desde Bubble.io
    bubble_url = 'https://nuvaapp.bubbleapps.io/version-test/api/1.1/wf/obtener_codigos_postales'

    # Enviar el request para obtener los códigos postales
    bubble_response = requests.get(bubble_url)
    
    if bubble_response.status_code != 200:
        return jsonify({'error': 'Failed to fetch postal codes from Bubble.io', 'status_code': bubble_response.status_code})

    # Parsear la respuesta de Bubble.io
    postal_codes = bubble_response.json()
    codigoPostalConsignatario = postal_codes.get('codigoPostalConsignatario', '')
    codigoPostalRemitente = postal_codes.get('codigoPostalRemitente', '')

    if not codigoPostalConsignatario or not codigoPostalRemitente:
        return jsonify({'error': 'Postal codes are missing from Bubble.io response'})

    # Cuerpo del request SOAP con variables dinámicas
    soap_body = f"""
    <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ws="http://ws.redpack.com" xmlns:xsd="http://vo.redpack.com/xsd">
       <soapenv:Header/>
       <soapenv:Body>
          <ws:coberturaNacional>
             <ws:PIN>{PIN}</ws:PIN>
             <ws:idUsuario>{idUsuario}</ws:idUsuario>
             <ws:guias>
                <xsd:consignatario>
                   <xsd:codigoPostal>{codigoPostalConsignatario}</xsd:codigoPostal>
                </xsd:consignatario>
                <xsd:remitente>
                   <xsd:codigoPostal>{codigoPostalRemitente}</xsd:codigoPostal>
                </xsd:remitente>
             </ws:guias>
          </ws:coberturaNacional>
       </soapenv:Body>
    </soapenv:Envelope>
    """

    # Enviar el request SOAP
    soap_response = requests.post(soap_url, data=soap_body, headers=soap_headers)

    if soap_response.status_code != 200:
        return jsonify({'error': 'SOAP request failed', 'status_code': soap_response.status_code})

    # Parsear el contenido de la respuesta SOAP
    root = ET.fromstring(soap_response.content)

    # Espacio de nombres
    namespaces = {
        'soapenv': 'http://schemas.xmlsoap.org/soap/envelope/',
        'ns': 'http://ws.redpack.com',
        'ax21': 'http://vo.redpack.com/xsd',
        'xsi': 'http://www.w3.org/2001/XMLSchema-instance'
    }

    # Extraer información de las cotizaciones
    cotizaciones = []
    for cotizacion in root.findall('.//ax21:cotizaciones', namespaces):
        cotizacion_info = {}
        for child in cotizacion:
            if child.tag in ['ax21:descripcion', 'ax21:tiempoSobre', 'ax21:equivalencia', 'ax21:tarifa']:
                cotizacion_info[child.tag.split('}')[-1]] = child.text
            elif child.tag == '{http://vo.redpack.com/xsd}tipoServicio':
                tipo_servicio_info = {}
                auxiliares = []
                for sub_child in child:
                    if sub_child.tag == '{http://vo.redpack.com/xsd}auxiliar':
                        auxiliares.append(sub_child.text)
                    else:
                        tipo_servicio_info[f"servicio-{sub_child.tag.split('}')[-1]}"] = sub_child.text
                for i, auxiliar in enumerate(auxiliares, start=1):
                    tipo_servicio_info[f"servicio-auxiliar{i}"] = auxiliar
                cotizacion_info.update(tipo_servicio_info)
            else:
                cotizacion_info[child.tag.split('}')[-1]] = child.text
        cotizaciones.append(cotizacion_info)

    if not cotizaciones:
        return jsonify({'error': 'No cotizaciones found in SOAP response'})

    # Convertir la lista de cotizaciones a JSON
    cotizaciones_json = json.dumps(cotizaciones, indent=4)
    print(f"Cotizaciones JSON: {cotizaciones_json}")

    # Define la URL para el POST request
    post_url = 'https://nuvaapp.bubbleapps.io/version-test/api/1.1/wf/crear_ot_pt3'

    # Define los datos del payload
    payload = {'cotizaciones': cotizaciones}

    # Envía el POST request
    post_response = requests.post(post_url, json=payload)

    # Verifica el código de estado de la respuesta
    if post_response.status_code == 200:
        post_status = 'POST request successful'
    else:
        post_status = f'POST request failed with status code: {post_response.status_code}'
        print(f"POST response content: {post_response.content}")

    # Retorna la respuesta en formato JSON
    return jsonify({
        'cotizaciones': cotizaciones,
        'post_status': post_status
    })

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=8000, debug=True)

