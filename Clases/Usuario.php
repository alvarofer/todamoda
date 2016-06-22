<?php


class Usuario {
    protected $id_usuario;
    private $idIngreso;
    private $contrasena;
    private $id_persona;
    
    function __construct($id_usuario, $idIngreso, $contrasena, $id_persona) {
        $this->id_usuario = $id_usuario;
        $this->idIngreso = $idIngreso;
        $this->contrasena = $contrasena;
        $this->id_persona = $id_persona;
    }

    
    function getId_usuario() {
        return $this->id_usuario;
    }

    function getIdIngreso() {
        return $this->idIngreso;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function getId_persona() {
        return $this->id_persona;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setIdIngreso($idIngreso) {
        $this->idIngreso = $idIngreso;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    function setId_persona($id_persona) {
        $this->id_persona = $id_persona;
    }


}
