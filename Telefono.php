<?php

namespace App\Service;

class Telefono
{
    /**
     * The LADA
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $LADA;
    /**
     * The extension
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $extension;
    /**
     * The telefono
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $telefono;
    /**
     * Get LADA value
     * @return string|null
     */
    public function getLADA()
    {
        return $this->LADA;
    }
    /**
     * Set LADA value
     * @param string $_lADA the LADA
     * @return string
     */
    public function setLADA($_lADA)
    {
        return ($this->LADA = $_lADA);
    }
    /**
     * Get extension value
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }
    /**
     * Set extension value
     * @param string $_extension the extension
     * @return string
     */
    public function setExtension($_extension)
    {
        return ($this->extension = $_extension);
    }
    /**
     * Get telefono value
     * @return string|null
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    /**
     * Set telefono value
     * @param string $_telefono the telefono
     * @return string
     */
    public function setTelefono($_telefono)
    {
        return ($this->telefono = $_telefono);
    }
}
