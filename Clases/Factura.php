<?php

class Factura  {
    protected $id_factura;
    private $id_usuario;
    private $fecha;
    private $idDetalle;
    
    function __construct($id_factura, $id_usuario, $fecha, $idDetalle) {
        $this->id_factura = $id_factura;
        $this->id_usuario = $id_usuario;
        $this->fecha = $fecha;
        $this->idDetalle = $idDetalle;
    }

    function getId_factura() {
        return $this->id_factura;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getIdDetalle() {
        return $this->idDetalle;
    }

    function setId_factura($id_factura) {
        $this->id_factura = $id_factura;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setIdDetalle($idDetalle) {
        $this->idDetalle = $idDetalle;
    }

    
}
