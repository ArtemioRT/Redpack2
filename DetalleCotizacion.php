<?php

namespace App\Service;

class DetalleCotizacion
{
    /**
     * The costoBase
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $costoBase;
    /**
     * The descripcion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $descripcion;
    /**
     * Get costoBase value
     * @return float|null
     */
    public function getCostoBase()
    {
        return $this->costoBase;
    }
    /**
     * Set costoBase value
     * @param float $_costoBase the costoBase
     * @return float
     */
    public function setCostoBase($_costoBase)
    {
        return ($this->costoBase = $_costoBase);
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
}
