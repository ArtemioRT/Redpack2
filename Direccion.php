<?php

namespace App\Service;

class Direccion
{
    /**
     * The calle
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $calle;
    /**
     * The ciudad
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $ciudad;
    /**
     * The codigoPostal
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var int
     */
    public $codigoPostal;
    /**
     * The colonia_Asentamiento
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $colonia_Asentamiento;
    /**
     * The contacto
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $contacto;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $email;
    /**
     * The estado
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $estado;
    /**
     * The iata
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var IdDesc
     */
    public $iata;
    /**
     * The nombre_Compania
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $nombre_Compania;
    /**
     * The numeroExterior
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $numeroExterior;
    /**
     * The numeroInterior
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $numeroInterior;
    /**
     * The pais
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $pais;
    /**
     * The referenciaUbicacion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $referenciaUbicacion;
    /**
     * The telefonos
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var Telefono
     */
    public $telefonos;
    /**
     * Get calle value
     * @return string|null
     */
    public function getCalle()
    {
        return $this->calle;
    }
    /**
     * Set calle value
     * @param string $_calle the calle
     * @return string
     */
    public function setCalle($_calle)
    {
        return ($this->calle = $_calle);
    }
    /**
     * Get ciudad value
     * @return string|null
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
    /**
     * Set ciudad value
     * @param string $_ciudad the ciudad
     * @return string
     */
    public function setCiudad($_ciudad)
    {
        return ($this->ciudad = $_ciudad);
    }
    /**
     * Get codigoPostal value
     * @return int|null
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }
    /**
     * Set codigoPostal value
     * @param int $_codigoPostal the codigoPostal
     * @return int
     */
    public function setCodigoPostal($_codigoPostal)
    {
        return ($this->codigoPostal = $_codigoPostal);
    }
    /**
     * Get colonia_Asentamiento value
     * @return string|null
     */
    public function getColonia_Asentamiento()
    {
        return $this->colonia_Asentamiento;
    }
    /**
     * Set colonia_Asentamiento value
     * @param string $_colonia_Asentamiento the colonia_Asentamiento
     * @return string
     */
    public function setColonia_Asentamiento($_colonia_Asentamiento)
    {
        return ($this->colonia_Asentamiento = $_colonia_Asentamiento);
    }
    /**
     * Get contacto value
     * @return string|null
     */
    public function getContacto()
    {
        return $this->contacto;
    }
    /**
     * Set contacto value
     * @param string $_contacto the contacto
     * @return string
     */
    public function setContacto($_contacto)
    {
        return ($this->contacto = $_contacto);
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $_email the email
     * @return string
     */
    public function setEmail($_email)
    {
        return ($this->email = $_email);
    }
    /**
     * Get estado value
     * @return string|null
     */
    public function getEstado()
    {
        return $this->estado;
    }
    /**
     * Set estado value
     * @param string $_estado the estado
     * @return string
     */
    public function setEstado($_estado)
    {
        return ($this->estado = $_estado);
    }
    /**
     * Get iata value
     * @return IdDesc|null
     */
    public function getIata()
    {
        return $this->iata;
    }
    /**
     * Set iata value
     * @param IdDesc $_iata the iata
     * @return IdDesc
     */
    public function setIata($_iata)
    {
        return ($this->iata = $_iata);
    }
    /**
     * Get nombre_Compania value
     * @return string|null
     */
    public function getNombre_Compania()
    {
        return $this->nombre_Compania;
    }
    /**
     * Set nombre_Compania value
     * @param string $_nombre_Compania the nombre_Compania
     * @return string
     */
    public function setNombre_Compania($_nombre_Compania)
    {
        return ($this->nombre_Compania = $_nombre_Compania);
    }
    /**
     * Get numeroExterior value
     * @return string|null
     */
    public function getNumeroExterior()
    {
        return $this->numeroExterior;
    }
    /**
     * Set numeroExterior value
     * @param string $_numeroExterior the numeroExterior
     * @return string
     */
    public function setNumeroExterior($_numeroExterior)
    {
        return ($this->numeroExterior = $_numeroExterior);
    }
    /**
     * Get numeroInterior value
     * @return string|null
     */
    public function getNumeroInterior()
    {
        return $this->numeroInterior;
    }
    /**
     * Set numeroInterior value
     * @param string $_numeroInterior the numeroInterior
     * @return string
     */
    public function setNumeroInterior($_numeroInterior)
    {
        return ($this->numeroInterior = $_numeroInterior);
    }
    /**
     * Get pais value
     * @return string|null
     */
    public function getPais()
    {
        return $this->pais;
    }
    /**
     * Set pais value
     * @param string $_pais the pais
     * @return string
     */
    public function setPais($_pais)
    {
        return ($this->pais = $_pais);
    }
    /**
     * Get referenciaUbicacion value
     * @return string|null
     */
    public function getReferenciaUbicacion()
    {
        return $this->referenciaUbicacion;
    }
    /**
     * Set referenciaUbicacion value
     * @param string $_referenciaUbicacion the referenciaUbicacion
     * @return string
     */
    public function setReferenciaUbicacion($_referenciaUbicacion)
    {
        return ($this->referenciaUbicacion = $_referenciaUbicacion);
    }
    /**
     * Get telefonos value
     * @return Telefono|null
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }
    /**
     * Set telefonos value
     * @param Telefono $_telefonos the telefonos
     * @return Telefono
     */
    public function setTelefonos($_telefonos)
    {
        return ($this->telefonos = $_telefonos);
    }
}
