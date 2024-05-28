<?php

namespace App\Service;

class DetalleRastreo
{
    /**
     * The descripcionEvento
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $descripcionEvento;
    /**
     * The evento
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $evento;
    /**
     * The fechaEvento
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var dateTime
     */
    public $fechaEvento;
    /**
     * The localizacion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $localizacion;
    /**
     * The observaciones
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $observaciones;

    /**
     * Get descripcionEvento value
     * @return string|null
     */
    public function getDescripcionEvento()
    {
        return $this->descripcionEvento;
    }
    /**
     * Set descripcionEvento value
     * @param string $_descripcionEvento the descripcionEvento
     * @return string
     */
    public function setDescripcionEvento($_descripcionEvento)
    {
        return ($this->descripcionEvento = $_descripcionEvento);
    }
    /**
     * Get evento value
     * @return string|null
     */
    public function getEvento()
    {
        return $this->evento;
    }
    /**
     * Set evento value
     * @param string $_evento the evento
     * @return string
     */
    public function setEvento($_evento)
    {
        return ($this->evento = $_evento);
    }
    /**
     * Get fechaEvento value
     * @return dateTime|null
     */
    public function getFechaEvento()
    {
        return $this->fechaEvento;
    }
    /**
     * Set fechaEvento value
     * @param dateTime $_fechaEvento the fechaEvento
     * @return dateTime
     */
    public function setFechaEvento($_fechaEvento)
    {
        return ($this->fechaEvento = $_fechaEvento);
    }
    /**
     * Get localizacion value
     * @return string|null
     */
    public function getLocalizacion()
    {
        return $this->localizacion;
    }
    /**
     * Set localizacion value
     * @param string $_localizacion the localizacion
     * @return string
     */
    public function setLocalizacion($_localizacion)
    {
        return ($this->localizacion = $_localizacion);
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
}
