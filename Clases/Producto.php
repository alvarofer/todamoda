<?php

class Producto {
    private $id_producto;
    private $nombre_producto;
    private $precio_producto;
    private $stock_producto;
    private $id_categoriaProducto;
   
    function __construct($id_producto, $nombre_producto, $precio_producto, $stock_producto, $id_categoriaProducto) {
        $this->id_producto = $id_producto;
        $this->nombre_producto = $nombre_producto;
        $this->precio_producto = $precio_producto;
        $this->stock_producto = $stock_producto;
        $this->id_categoriaProducto = $id_categoriaProducto;
    }

    function getId_producto() {
        return $this->id_producto;
    }

    function getNombre_producto() {
        return $this->nombre_producto;
    }

    function getPrecio_producto() {
        return $this->precio_producto;
    }

    function getStock_producto() {
        return $this->stock_producto;
    }

    function getId_categoriaProducto() {
        return $this->id_categoriaProducto;
    }

    function setId_producto($id_producto) {
        $this->id_producto = $id_producto;
    }

    function setNombre_producto($nombre_producto) {
        $this->nombre_producto = $nombre_producto;
    }

    function setPrecio_producto($precio_producto) {
        $this->precio_producto = $precio_producto;
    }

    function setStock_producto($stock_producto) {
        $this->stock_producto = $stock_producto;
    }

    function setId_categoriaProducto($id_categoriaProducto) {
        $this->id_categoriaProducto = $id_categoriaProducto;
    }


    
    
    
}
