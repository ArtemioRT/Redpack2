<?php

namespace App\Service;

class Resultado
{
    /**
     * The descripcion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $descripcion;
    /**
     * The estatus
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $estatus;
    /**
     * The gravedad
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $gravedad;
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
     * Get estatus value
     * @return int|null
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
    /**
     * Set estatus value
     * @param int $_estatus the estatus
     * @return int
     */
    public function setEstatus($_estatus)
    {
        return ($this->estatus = $_estatus);
    }
    /**
     * Get gravedad value
     * @return int|null
     */
    public function getGravedad()
    {
        return $this->gravedad;
    }
    /**
     * Set gravedad value
     * @param int $_gravedad the gravedad
     * @return int
     */
    public function setGravedad($_gravedad)
    {
        return ($this->gravedad = $_gravedad);
    }
}
