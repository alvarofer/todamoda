<?php

class Detalle {
    protected $id_detalle;
    private $id_factura;
    private $id_producto;
    private $cantidad;
    private $precio;
    
    function __construct($id_detalle, $id_factura, $id_producto, $cantidad, $precio) {
        $this->id_detalle = $id_detalle;
        $this->id_factura = $id_factura;
        $this->id_producto = $id_producto;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
    }

    function getId_detalle() {
        return $this->id_detalle;
    }

    function getId_factura() {
        return $this->id_factura;
    }

    function getId_producto() {
        return $this->id_producto;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setId_detalle($id_detalle) {
        $this->id_detalle = $id_detalle;
    }

    function setId_factura($id_factura) {
        $this->id_factura = $id_factura;
    }

    function setId_producto($id_producto) {
        $this->id_producto = $id_producto;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

}
