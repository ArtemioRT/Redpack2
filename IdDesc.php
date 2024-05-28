<?php

namespace App\Service;

class IdDesc
{
    /**
     * The auxiliar
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $auxiliar;

    /**
     * The descripcion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $descripcion;

    /**
     * The equivalencia
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $equivalencia;

    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $id;

    /**
     * Get auxiliar value
     * @return string|null
     */
    public function getAuxiliar()
    {
        return $this->auxiliar;
    }

    /**
     * Set auxiliar value
     * @param string $_auxiliar the auxiliar
     * @return string
     */
    public function setAuxiliar($_auxiliar)
    {
        return ($this->auxiliar = $_auxiliar);
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
     * Get equivalencia value
     * @return string|null
     */
    public function getEquivalencia()
    {
        return $this->equivalencia;
    }

    /**
     * Set equivalencia value
     * @param string $_equivalencia the equivalencia
     * @return string
     */
    public function setEquivalencia($_equivalencia)
    {
        return ($this->equivalencia = $_equivalencia);
    }

    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id value
     * @param int $_id the id
     * @return int
     */
    public function setId($_id)
    {
        return ($this->id = $_id);
    }

}
