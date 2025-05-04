<?php
class Cliente {
    private $nombreCliente;
    private $apellidoCliente;
    private $estadoCliente;
    private $tipoDocumento;
    private $nroDocumento;

    public function __construct($nombre, $apellido, $estado, $tipoDocu, $numDocu) {
        $this->nombreCliente = $nombre;
        $this->apellidoCliente = $apellido;
        $this->estadoCliente = $estado;
        $this->tipoDocumento = $tipoDocu;
        $this->nroDocumento = $numDocu;
    }

    public function getNombreCliente() {
        return $this->nombreCliente;
    }

    public function getApellidoCliente() {
        return $this->apellidoCliente;
    }

    public function getEstadoCliente() {
        return $this->estadoCliente;
    }

    public function getTipoDocumento() {
        return $this->tipoDocumento;
    }

    public function getNroDocumento() {
        return $this->nroDocumento;
    }

    public function setNombreCliente($nombre) {
        $this->nombreCliente = $nombre;
    }

    public function setApellidoCliente($apellido) {
        $this->apellidoCliente = $apellido;
    }

    public function setEstadoCliente($estado) {
        $this->estadoCliente = $estado;
    }

    public function setTipoDocumento($tipoDocu) {
        $this->tipoDocumento = $tipoDocu;
    }

    public function setNroDocumento($nroDocu) {
        $this->nroDocumento = $nroDocu;
    }

    public function __toString() {
        $cadena = ("    Datos del cliente: " . 
                    "\nNombre: " . $this->getNombreCliente() . 
                    "\nApellido: " . $this->getApellidoCliente() . 
                    "\nTipo de Documento: " . $this->getTipoDocumento() . 
                    "\nNro. de Documento: " . $this->getNroDocumento() 
                    ) ;
        return $cadena;
    }
}
?>