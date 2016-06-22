<?php

class Persona {
  protected $id_persona;
  private $nombre;
  private $rut;
  private $direccion;
  Private $sexo;
 
  function __construct($id_persona, $nombre, $rut, $direccion, $sexo) {
      $this->id_persona = $id_persona;
      $this->nombre = $nombre;
      $this->rut = $rut;
      $this->direccion = $direccion;
      $this->sexo = $sexo;
  }
  
  function getId_persona() {
      return $this->id_persona;
  }

  function getNombre() {
      return $this->nombre;
  }

  function getRut() {
      return $this->rut;
  }

  function getDireccion() {
      return $this->direccion;
  }

  function getSexo() {
      return $this->sexo;
  }

  function setId_persona($id_persona) {
      $this->id_persona = $id_persona;
  }

  function setNombre($nombre) {
      $this->nombre = $nombre;
  }

  function setRut($rut) {
      $this->rut = $rut;
  }

  function setDireccion($direccion) {
      $this->direccion = $direccion;
  }

  function setSexo($sexo) {
      $this->sexo = $sexo;
  }

  public function __toString() {
      
  }


  
}
