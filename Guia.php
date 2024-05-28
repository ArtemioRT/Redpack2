<?php

namespace App\Service;

class Guia
{
    /**
     * The auxiliar
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var IdDesc
     */
    public $auxiliar;

    /**
     * The claveDex
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var IdDesc
     */
    public $claveDex;

    /**
     * The consignatario
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var Direccion
     */
    public $consignatario;

    /**
     * The costoSeguro
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $costoSeguro;

    /**
     * The cotizaciones
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var Cotizacion
     */
    public $cotizaciones;

    /**
     * The fechaDocumentacion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var dateTime
     */
    public $fechaDocumentacion;

    /**
     * The fechaSituacion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var dateTime
     */
    public $fechaSituacion;

    /**
     * The flag
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $flag;

    /**
     * The guiaAsegurada
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $guiaAsegurada;

    /**
     * The moneda
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $moneda;

    /**
     * The numeroDeGuia
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $numeroDeGuia;

    /**
     * The observaciones
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $observaciones;

    /**
     * The paquetes
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var Paquete
     */
    public $paquetes;

    /**
     * The personaRecibio
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $personaRecibio;

    /**
     * The pruebaDeEnterga
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var base64Binary
     */
    public $pruebaDeEnterga;

    /**
     * The referencia
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $referencia;

    /**
     * The remitente
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var Direccion
     */
    public $remitente;

    /**
     * The resultadoConsumoWS
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var Resultado
     */
    public $resultadoConsumoWS;

    /**
     * The situacion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var IdDesc
     */
    public $situacion;

    /**
     * The tipoCambio
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $tipoCambio;

    /**
     * The tipoEntrega
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var IdDesc
     */
    public $tipoEntrega;

    /**
     * The tipoEnvio
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var IdDesc
     */
    public $tipoEnvio;

    /**
     * The tipoIdentificacion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var IdDesc
     */
    public $tipoIdentificacion;

    /**
     * The tipoServicio
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var IdDesc
     */
    public $tipoServicio;

    /**
     * The valorDeclarado
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $valorDeclarado;

    /**
     * Get auxiliar value
     * @return IdDesc|null
     */
    public function getAuxiliar()
    {
        return $this->auxiliar;
    }

    /**
     * Set auxiliar value
     * @param IdDesc $_auxiliar the auxiliar
     * @return IdDesc
     */
    public function setAuxiliar($_auxiliar)
    {
        return ($this->auxiliar = $_auxiliar);
    }

    /**
     * Get claveDex value
     * @return IdDesc|null
     */
    public function getClaveDex()
    {
        return $this->claveDex;
    }

    /**
     * Set claveDex value
     * @param IdDesc $_claveDex the claveDex
     * @return IdDesc
     */
    public function setClaveDex($_claveDex)
    {
        return ($this->claveDex = $_claveDex);
    }

    /**
     * Get consignatario value
     * @return Direccion|null
     */
    public function getConsignatario()
    {
        return $this->consignatario;
    }

    /**
     * Set consignatario value
     * @param Direccion $_consignatario the consignatario
     * @return Direccion
     */
    public function setConsignatario($_consignatario)
    {
        return ($this->consignatario = $_consignatario);
    }

    /**
     * Get costoSeguro value
     * @return float|null
     */
    public function getCostoSeguro()
    {
        return $this->costoSeguro;
    }

    /**
     * Set costoSeguro value
     * @param float $_costoSeguro the costoSeguro
     * @return float
     */
    public function setCostoSeguro($_costoSeguro)
    {
        return ($this->costoSeguro = $_costoSeguro);
    }

    /**
     * Get cotizaciones value
     * @return Cotizacion|null
     */
    public function getCotizaciones()
    {
        return $this->cotizaciones;
    }

    /**
     * Set cotizaciones value
     * @param Cotizacion $_cotizaciones the cotizaciones
     * @return Cotizacion
     */
    public function setCotizaciones($_cotizaciones)
    {
        return ($this->cotizaciones = $_cotizaciones);
    }

    /**
     * Get fechaDocumentacion value
     * @return dateTime|null
     */
    public function getFechaDocumentacion()
    {
        return $this->fechaDocumentacion;
    }

    /**
     * Set fechaDocumentacion value
     * @param dateTime $_fechaDocumentacion the fechaDocumentacion
     * @return dateTime
     */
    public function setFechaDocumentacion($_fechaDocumentacion)
    {
        return ($this->fechaDocumentacion = $_fechaDocumentacion);
    }

    /**
     * Get fechaSituacion value
     * @return dateTime|null
     */
    public function getFechaSituacion()
    {
        return $this->fechaSituacion;
    }

    /**
     * Set fechaSituacion value
     * @param dateTime $_fechaSituacion the fechaSituacion
     * @return dateTime
     */
    public function setFechaSituacion($_fechaSituacion)
    {
        return ($this->fechaSituacion = $_fechaSituacion);
    }

    /**
     * Get flag value
     * @return int|null
     */
    public function getFlag()
    {
        return $this->flag;
    }   

    /**
     * Set flag value
     * @param int $_flag the flag
     * @return int
     */
    public function setFlag($_flag)
    {
        return ($this->flag = $_flag);
    }

    /**
     * Get guiaAsegurada value
     * @return boolean|null
     */
    public function getGuiaAsegurada()
    {
        return $this->guiaAsegurada;
    }

    /**
     * Set guiaAsegurada value
     * @param boolean $_guiaAsegurada the guiaAsegurada
     * @return boolean
     */
    public function setGuiaAsegurada($_guiaAsegurada)
    {
        return ($this->guiaAsegurada = $_guiaAsegurada);
    }

    /**
     * Get moneda value
     * @return string|null
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set moneda value
     * @param string $_moneda the moneda
     * @return string
     */
    public function setMoneda($_moneda)
    {
        return ($this->moneda = $_moneda);
    }

    /**
     * Get numeroDeGuia value
     * @return string|null
     */
    public function getNumeroDeGuia()
    {
        return $this->numeroDeGuia;
    }

    /**
     * Set numeroDeGuia value
     * @param string $_numeroDeGuia the numeroDeGuia
     * @return string
     */
    public function setNumeroDeGuia($_numeroDeGuia)
    {
        return ($this->numeroDeGuia = $_numeroDeGuia);
    }

    /**
     * Get observaciones value
     * @return string|null
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set observaciones value
     * @param string $_observaciones the observaciones
     * @return string
     */
    public function setObservaciones($_observaciones)
    {
        return ($this->observaciones = $_observaciones);
    }

    /**
     * Get paquetes value
     * @return Paquete|null
     */
    public function getPaquetes()
    {
        return $this->paquetes;
    }

    /**
     * Set paquetes value
     * @param Paquete $_paquetes the paquetes
     * @return Paquete
     */
    public function setPaquetes($_paquetes)
    {
        return ($this->paquetes = $_paquetes);
    }

    /**
     * Get personaRecibio value
     * @return string|null
     */
    public function getPersonaRecibio()
    {
        return $this->personaRecibio;
    }

    /**
     * Set personaRecibio value
     * @param string $_personaRecibio the personaRecibio
     * @return string
     */
    public function setPersonaRecibio($_personaRecibio)
    {
        return ($this->personaRecibio = $_personaRecibio);
    }

    /**
     * Get pruebaDeEnterga value
     * @return base64Binary|null
     */
    public function getPruebaDeEnterga()
    {
        return $this->pruebaDeEnterga;
    }

    /**
     * Set pruebaDeEnterga value
     * @param base64Binary $_pruebaDeEnterga the pruebaDeEnterga
     * @return base64Binary
     */
    public function setPruebaDeEnterga($_pruebaDeEnterga)
    {
        return ($this->pruebaDeEnterga = $_pruebaDeEnterga);
    }

    /**
     * Get referencia value
     * @return string|null
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set referencia value
     * @param string $_referencia the referencia
     * @return string
     */
    public function setReferencia($_referencia)
    {
        return ($this->referencia = $_referencia);
    }

    /**
     * Get remitente value
     * @return Direccion|null
     */
    public function getRemitente()
    {
        return $this->remitente;
    }

    /**
     * Set remitente value
     * @param Direccion $_remitente the remitente
     * @return Direccion
     */
    public function setRemitente($_remitente)
    {
        return ($this->remitente = $_remitente);
    }

    /**
     * Get resultadoConsumoWS value
     * @return Resultado|null
     */
    public function getResultadoConsumoWS()
    {
        return $this->resultadoConsumoWS;
    }

    /**
     * Set resultadoConsumoWS value
     * @param Resultado $_resultadoConsumoWS the resultadoConsumoWS
     * @return Resultado
     */
    public function setResultadoConsumoWS($_resultadoConsumoWS)
    {
        return ($this->resultadoConsumoWS = $_resultadoConsumoWS);
    }

    /**
     * Get situacion value
     * @return IdDesc|null
     */
    public function getSituacion()
    {
        return $this->situacion;
    }

    /**
     * Set situacion value
     * @param IdDesc $_situacion the situacion
     * @return IdDesc
     */
    public function setSituacion($_situacion)
    {
        return ($this->situacion = $_situacion);
    }

    /**
     * Get tipoCambio value
     * @return float|null
     */
    public function getTipoCambio()
    {
        return $this->tipoCambio;
    }

    /**
     * Set tipoCambio value
     * @param float $_tipoCambio the tipoCambio
     * @return float
     */
    public function setTipoCambio($_tipoCambio)
    {
        return ($this->tipoCambio = $_tipoCambio);
    }

    /**
     * Get tipoEntrega value
     * @return IdDesc|null
     */
    public function getTipoEntrega()
    {
        return $this->tipoEntrega;
    }

    /**
     * Set tipoEntrega value
     * @param IdDesc $_tipoEntrega the tipoEntrega
     * @return IdDesc
     */
    public function setTipoEntrega($_tipoEntrega)
    {
        return ($this->tipoEntrega = $_tipoEntrega);
    }

    /**
     * Get tipoEnvio value
     * @return IdDesc|null
     */
    public function getTipoEnvio()
    {
        return $this->tipoEnvio;
    }

    /**
     * Set tipoEnvio value
     * @param IdDesc $_tipoEnvio the tipoEnvio
     * @return IdDesc
     */
    public function setTipoEnvio($_tipoEnvio)
    {
        return ($this->tipoEnvio = $_tipoEnvio);
    }

    /**
     * Get tipoIdentificacion value
     * @return IdDesc|null
     */
    public function getTipoIdentificacion()
    {
        return $this->tipoIdentificacion;
    }

    /**
     * Set tipoIdentificacion value
     * @param IdDesc $_tipoIdentificacion the tipoIdentificacion
     * @return IdDesc
     */
    public function setTipoIdentificacion($_tipoIdentificacion)
    {
        return ($this->tipoIdentificacion = $_tipoIdentificacion);
    }

    /**
     * Get tipoServicio value
     * @return IdDesc|null
     */
    public function getTipoServicio()
    {
        return $this->tipoServicio;
    }

    /**
     * Set tipoServicio value
     * @param IdDesc $_tipoServicio the tipoServicio
     * @return IdDesc
     */
    public function setTipoServicio($_tipoServicio)
    {
        return ($this->tipoServicio = $_tipoServicio);
    }

    /**
     * Get valorDeclarado value
     * @return float|null
     */
    public function getValorDeclarado()
    {
        return $this->valorDeclarado;
    }

    /**
     * Set valorDeclarado value
     * @param float $_valorDeclarado the valorDeclarado
     * @return float
     */
    public function setValorDeclarado($_valorDeclarado)
    {
        return ($this->valorDeclarado = $_valorDeclarado);
    }

}
