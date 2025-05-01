<?php
class Moto {
    private $codigoMoto;
    private $costoMoto;
    private $anioFabricacionMoto;
    private $descripcionMoto;
    private $porcentajeIncrementoAnualMoto;
    private $disponibilidadVentaMoto;

    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncrementoAnual, $disponibilidadVenta) {
        $this->codigoMoto = $codigo;
        $this->costoMoto = $costo;
        $this->anioFabricacionMoto = $anioFabricacion;
        $this->descripcionMoro = $descripcion;
        $this->porcentajeIncrementoAnualMoto = $porcentajeIncrementoAnual;
        $this->disponibilidadVentaMoto = $disponibilidadVenta;
    }

    public function getCodigoMoto() {
        return $this->codigoMoto;
    }

    public function getCostoMoto() {
        return $this->costoMoto;
    }

    public function getAnioFabricacionMoto() {
        return $this->anioFabricacionMoto;
    }

    public function getDescripcionMoto() {
        return $this->descripcionMoto;
    }

    public function getPorcentajeIncrementoAnualMoto() {
        return $this->porcentajeIncrementoAnualMoto;
    }

    public function getDisponibilidadVentaMoto() {
        return $this->disponibilidadVentaMoto;
    }

    public function setCodigoMoto($codigo) {
        $this->codigoMoto = $codigo;
    }

    public function setCostoMoto($costo) {
        $this->costoMoto = $costo;
    }

    public function setAnioFabricacionMoto($anioFabricacion) {
        $this->anioFabricacionMoto = $anioFabricacion;
    }

    public function setDescripcionMoto($descripcion) {
        $this->descripcionMoto = $descripcion;
    }

    public function setPorcentajeIncrementoAnualMoto($porcentajeIncrementoAnual) {
        $this->porcentajeIncrementoAnualMoto = $porcentajeIncrementoAnual;
    }

    public function setDisponibilidadVentaMoto($disponibilidadVenta) {
        $this->disponibilidadVentaMoto = $disponibilidadVenta;
    }

    public function __toString() {
        $cadena = ( "   Informacion moto: " . 
                    "\nCodigo: " . $this->getCodigoMoto() .
                    "\nCosto: " . $this->getCostoMoto() . "$" .
                    "\nAño de fabricación: " . $this->getAnioFabricacionMoto() . 
                    "\nDescripcion: " . $this->getAnioFabricacionMoto() . 
                    "\nEl incremento anual es del " . $this->getPorcentajeIncrementoAnualMoto() . "%" .
                    "\nEstado: " . $this->getDisponibilidadVentaMoto());

        return $cadena;
    }

    public function darPrecioVenta() {
        $valor = $this->getDisponibilidadVentaMoto();
        $costo = $this->getCostoMoto();
        $anioActual = 2025;
        $porcentaje = $this->getPorcentajeIncrementoAnualMoto();
        $aniosFabricacion = $this->getAnioFabricacionMoto();

        $anioTranscurridos = $anio - $anioFabricacion;

        $venta = $costo + $costo * ($aniosTranscurridos* $porcentaje);

        if ($valor == $false) {
            $venta = -1;     
        }

        return $valor;
    }


}
?>