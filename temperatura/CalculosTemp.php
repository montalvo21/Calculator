<?php
abstract class Temperatura {
    abstract public function convertirACelsius($temp);
    abstract public function convertirAFahrenheit($temp);
  }
  class TemperaturaCelsius extends Temperatura {
    public function convertirACelsius($temp) {
      return  floatval ($temp);
    }
  
    public function convertirAFahrenheit($temp) {
      return  floatval($temp * 9/5) + 32;
    }
  }
  class TemperaturaFahrenheit extends Temperatura {
    public function convertirACelsius($temp) {
      return floatval($temp - 32) * 5/9;
    }
  
    public function convertirAFahrenheit($temp) {
      return  floatval ($temp);
    }
  }
      
 ?>