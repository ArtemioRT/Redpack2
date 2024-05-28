import requests
import xml.etree.ElementTree as ET
import json

def get_cotizaciones():
    # URL del endpoint SOAP con puerto
    url = "https://wsqa.redpack.com.mx/RedpackAPI_WS/services/RedpackWS?wsdl"

    # Encabezados del request
    headers = {
        'Content-Type': 'text/xml; charset=utf-8',
    }

    # Variables dinámicas
    PIN = "QA nSYOVMfdFOtT7XDpCbPOh4HAnsm7JaarfM8+mtWXu0k="
    idUsuario = "2776"
    codigoPostalConsignatario = "80090"
    codigoPostalRemitente = "80065"

    # Cuerpo del request SOAP con variables dinámicas
    body = f"""
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

    # Enviar el request
    response = requests.post(url, data=body, headers=headers)

    # Parsear el contenido de la respuesta
    root = ET.fromstring(response.content)

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

    # Convertir la lista de cotizaciones a JSON
    cotizaciones_json = json.dumps(cotizaciones, indent=4)

    # Imprimir la lista de cotizaciones en formato JSON
    print(cotizaciones_json)

    # Define la URL para el POST request
    post_url = 'https://nuvaapp.bubbleapps.io/version-test/api/1.1/wf/crear_ot_pt3'

    # Define los datos del payload
    payload = {'cotizaciones': cotizaciones}

    # Envía el POST request
    response = requests.post(post_url, json=payload)

    # Verifica el código de estado de la respuesta
    if response.status_code == 200:
        print('POST request successful')
    else:
        print(f'POST request failed with status code: {response.status_code}')

if __name__ == '__main__':
    get_cotizaciones()
