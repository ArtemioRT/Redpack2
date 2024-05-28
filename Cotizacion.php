<?php

namespace App\Service;

class Cotizacion
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
     * The detallesCotizacion
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var DetalleCotizacion
     */
    public $detallesCotizacion;
    /**
     * The tarifa
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $tarifa;
    /**
     * The tiempoEntrega
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var date
     */
    public $tiempoEntrega;
    /**
     * The tiempoSobre
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $tiempoSobre;
    /**
     * The tipoServicio
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var IdDesc
     */
    public $tipoServicio;

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
     * Get detallesCotizacion value
     * @return DetalleCotizacion|null
     */
    public function getDetallesCotizacion()
    {
        return $this->detallesCotizacion;
    }
    /**
     * Set detallesCotizacion value
     * @param DetalleCotizacion $_detallesCotizacion the detallesCotizacion
     * @return DetalleCotizacion
     */
    public function setDetallesCotizacion($_detallesCotizacion)
    {
        return ($this->detallesCotizacion = $_detallesCotizacion);
    }
    /**
     * Get tarifa value
     * @return float|null
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }
    /**
     * Set tarifa value
     * @param float $_tarifa the tarifa
     * @return float
     */
    public function setTarifa($_tarifa)
    {
        return ($this->tarifa = $_tarifa);
    }
    /**
     * Get tiempoEntrega value
     * @return date|null
     */
    public function getTiempoEntrega()
    {
        return $this->tiempoEntrega;
    }
    /**
     * Set tiempoEntrega value
     * @param date $_tiempoEntrega the tiempoEntrega
     * @return date
     */
    public function setTiempoEntrega($_tiempoEntrega)
    {
        return ($this->tiempoEntrega = $_tiempoEntrega);
    }
    /**
     * Get tiempoSobre value
     * @return float|null
     */
    public function getTiempoSobre()
    {
        return $this->tiempoSobre;
    }
    /**
     * Set tiempoSobre value
     * @param float $_tiempoSobre the tiempoSobre
     * @return float
     */
    public function setTiempoSobre($_tiempoSobre)
    {
        return ($this->tiempoSobre = $_tiempoSobre);
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
}
