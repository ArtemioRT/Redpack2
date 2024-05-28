<?php

namespace App\Service;

class Paquete
{
    /**
     * The alto
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var int
     */
    public $alto;
    /**
     * The ancho
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var int
     */
    public $ancho;
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
     * The consecutivo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var int
     */
    public $consecutivo;
    /**
     * The descripcion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $descripcion;
    /**
     * The detallesRastreo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var DetalleRastreo
     */
    public $detallesRastreo;
    /**
     * The formatoEtiqueta
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var base64Binary
     */
    public $formatoEtiqueta;
    /**
     * The largo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var int
     */
    public $largo;
    /**
     * The peso
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $peso;

    /**
     * Get alto value
     * @return int|null
     */
    public function getAlto()
    {
        return $this->alto;
    }
    /**
     * Set alto value
     * @param int $_alto the alto
     * @return int
     */
    public function setAlto($_alto)
    {
        return ($this->alto = $_alto);
    }
    /**
     * Get ancho value
     * @return int|null
     */
    public function getAncho()
    {
        return $this->ancho;
    }
    /**
     * Set ancho value
     * @param int $_ancho the ancho
     * @return int
     */
    public function setAncho($_ancho)
    {
        return ($this->ancho = $_ancho);
    }
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
     * Get consecutivo value
     * @return int|null
     */
    public function getConsecutivo()
    {
        return $this->consecutivo;
    }
    /**
     * Set consecutivo value
     * @param int $_consecutivo the consecutivo
     * @return int
     */
    public function setConsecutivo($_consecutivo)
    {
        return ($this->consecutivo = $_consecutivo);
    }
    /**
     * Get descripcion value
     * @return string|null
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * Set descripcion value
     * @param string $_descripcion the descripcion
     * @return string
     */
    public function setDescripcion($_descripcion)
    {
        return ($this->descripcion = $_descripcion);
    }
    /**
     * Get detallesRastreo value
     * @return DetalleRastreo|null
     */
    public function getDetallesRastreo()
    {
        return $this->detallesRastreo;
    }
    /**
     * Set detallesRastreo value
     * @param DetalleRastreo $_detallesRastreo the detallesRastreo
     * @return DetalleRastreo
     */
    public function setDetallesRastreo($_detallesRastreo)
    {
        return ($this->detallesRastreo = $_detallesRastreo);
    }
    /**
     * Get formatoEtiqueta value
     * @return base64Binary|null
     */
    public function getFormatoEtiqueta()
    {
        return $this->formatoEtiqueta;
    }
    /**
     * Set formatoEtiqueta value
     * @param base64Binary $_formatoEtiqueta the formatoEtiqueta
     * @return base64Binary
     */
    public function setFormatoEtiqueta($_formatoEtiqueta)
    {
        return ($this->formatoEtiqueta = $_formatoEtiqueta);
    }
    /**
     * Get largo value
     * @return int|null
     */
    public function getLargo()
    {
        return $this->largo;
    }
    /**
     * Set largo value
     * @param int $_largo the largo
     * @return int
     */
    public function setLargo($_largo)
    {
        return ($this->largo = $_largo);
    }
    /**
     * Get peso value
     * @return float|null
     */
    public function getPeso()
    {
        return $this->peso;
    }
    /**
     * Set peso value
     * @param float $_peso the peso
     * @return float
     */
    public function setPeso($_peso)
    {
        return ($this->peso = $_peso);
    }
}
