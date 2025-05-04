<?php
include_once 'Moto.php';
include_once 'Venta.php';

/* En la clase Empresa:
 4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
 */

class Empresa {
    private $denominacionEmpresa;
    private $direccionEmpresa;
    private $coleccionClientes;
    private $coleccionMotos;
    private $coleccionVentasRealizadas;

    public function __construct($denominacion, $direccion, $clientes, $motos, $ventas) {
        $this->denominacionEmpresa = $denominacion;
        $this->direccionEmpresa = $direccion;
        $this->coleccionClientes = $clientes;
        $this->coleccionMotos = $motos;
        $this->coleccionVentasRealizadas = $ventas;
    }

    public function getDenominacionEmpresa() {
        return $this->denominacionEmpresa;
    }

    public function getDireccionEmpresa() {
        return $this->direccionEmpresa;
    }

    public function getColeccionClientes() {
        return $this->coleccionClientes;
    }

    public function getColeccionMotos() {
        return $this->coleccionMotos;
    }

    public function getColeccionVentasRealizadas() {
        return $this->coleccionVentasRealizadas;
    }

    public function setDenominacionEmpresa($denominacion) {
        $this->denominacionEmpresa = $denominacion;
    }

    public function setDireccionEmpresa($direccion) {
        $this->direccionEmpresa = $direccion;
    }

    public function setColeccionClientes($clientes) {
        $this->coleccionClientes = $clientes;
    }

    public function setColeccionMotos($motos) {
        $this->coleccionMotos = $motos;
    }

    public function setColeccionVentasRealizadas($ventas) {
        $this->coleccionVentasRealizadas = $ventas;
    }

    public function retornarMoto($codigoMoto) {
        $coleccionMotos = $this->getColeccionMotos();
        $encontrada = null;

        foreach ($coleccionMotos as $unaMoto) {
            $codigo = $unaMoto->getCodigoMoto();
            if ($codigo == $codigoMoto) {
                $encontrada = $unaMoto;
            }
        }
       return $unaMoto; 
    }

/*6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe por
 parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de la colección
 se busca el objeto moto correspondiente al código y se incorpora a la colección de motos de la instancia
 Venta que debe ser creada. Recordar que no todos los clientes ni todas las motos, están disponibles
 para registrar una venta en un momento determinado.
 El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la
 venta.*/ 
    public function registrarVenta($colCodigosMoto, $objCliente) {
        foreach($colCodigosMoto as $codigo) {
            
        }
        

    }

///7. Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y
 //número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente.

    public function retornarVentasxCliente($tipo, $numDoc) {

    }
}
?>