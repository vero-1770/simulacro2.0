<?php

include_once 'Moto.php';

class Venta {
    private $nroVenta;
    private $fechaVenta;
    private $referenciaCliente;
    private $referenciaColeccionMotos;
    private $precioFinalVenta;

    public function __construct($numero, $fecha, $refCliente) {
        $this->nroVenta = $numero;
        $this->fechaVenta = $fecha;
        $this->referenciaCliente = $refCliente;
        $this->referenciaColeccionMotos = [];
        $this->precioFinalVenta = 0;
    }
    
    public function getNroVenta() {
        return $this->nroVenta;
    }

    public function getFechaVenta() {
        return $this->fechaVenta;
    }

    public function getReferenciaCliente() {
        return $this->referenciaCliente;
    }

    public function getReferenciaColeccionMotos() {
        return $this->referenciaColeccionMotos;
    }

    public function getPrecioFinalVenta() {
        return $this->precioFinalVenta;
    }

    public function setNroVenta($numero) {
        $this->nroVenta = $numero;
    }

    public function setFechaVenta($fecha) {
        $this->fechaVenta = $fecha;
    }

    public function setReferenciaCliente($refCliente) {
        $this->referenciaCliente = $refCliente;
    }

    public function setReferenciaColeccionMotos($nuevaRefColecMotos) {
        $this->referenciaColeccionMotos = $nuevaRefColecMotos;
    }

    public function setPrecioFinalVenta($precio_final) {
        $this->precioFinalVenta = $precio_final;
    }

    public function incorporarMoto($objMoto) {
        $realizado = false;
        $venta = $objMoto->getDisponibilidadVentaMoto();

        if ($venta == true) {
            $coleccionMotos = [];
            $coleccionMotos = $this->getReferenciaColeccionMotos();

            $coleccionMotos = $objMoto;

            $precio = $objMoto->darPrecioFinal();
            $precioFinal = $this->getPrecioFinalVenta();

            $this->setPrecioFinalVenta($precio + $precioFinal);

            $realizado = true;
        }
        return $realizado;
    }

    public function __toString() {
        $cadenaMotos = [];
        $coleccionMotos = $this->getReferenciaColeccionMotos();

        foreach ($coleccionMotos as $moto) {
            $cadenaMotos .= $moto . "\n";
        }

        $cadena = ("    Información VENTA: " . 
                "\nNúmero: " . $this->getNroVenta() . 
                "\nFecha: " . $this->getFechaVenta() . 
                "\nReferencia Cliente: " . $this->getReferenciaCliente() . 
                "\nColeccionn Motos: " . $cadenaMotos . 
                "\nPrecio Final: " . $this->getPrecioFinalVenta() );
        return $cadena;
    }
}
?>