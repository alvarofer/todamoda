<?php

class Categoria {
  private $id_categoria;
  private $nombre_categoria;
  private $descripcion_categoria;
  
  function __construct($id_categoria, $nombre_categoria, $descripcion_categoria) {
      $this->id_categoria = $id_categoria;
      $this->nombre_categoria = $nombre_categoria;
      $this->descripcion_categoria = $descripcion_categoria;
  }

  function getId_categoria() {
      return $this->id_categoria;
  }

  function getNombre_categoria() {
      return $this->nombre_categoria;
  }

  function getDescripcion_categoria() {
      return $this->descripcion_categoria;
  }

  function setId_categoria($id_categoria) {
      $this->id_categoria = $id_categoria;
  }

  function setNombre_categoria($nombre_categoria) {
      $this->nombre_categoria = $nombre_categoria;
  }

  function setDescripcion_categoria($descripcion_categoria) {
      $this->descripcion_categoria = $descripcion_categoria;
  }


    
}
