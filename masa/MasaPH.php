<?php 

abstract class UnidadDeMasa {
    protected $valor;
    protected $nombre;
  
    public function __construct($valor) {
      $this->valor = $valor;
    }
  
    public function getValor() {
      return $this->valor;
    }
  
    public function getNombre() {
      return $this->nombre;
    }
  
    abstract public function convertir(UnidadDeMasa $unidad);
  }



  class Gramo extends UnidadDeMasa {
    protected $nombre = "gramos";
  
    public function __construct($valor) {
      parent::__construct($valor);
    }
  
    public function convertir(UnidadDeMasa $unidad) {
      if ($unidad instanceof Kilogramo) {
        return new Kilogramo($this->valor / 1000);
      } else {
        return $this;
      }
    }
  }
  
  class Kilogramo extends UnidadDeMasa {
    protected $nombre = "kilogramos";
  
    public function __construct($valor) {
      parent::__construct($valor); 
    }
  
    public function convertir(UnidadDeMasa $unidad) {
      if ($unidad instanceof Gramo) {   
        return new Gramo($this->valor * 1000);
      } else {
        return $this;
      }
    }
  }
?>