<?php

class Conversor {

  // Tasa de conversión entre las diferentes monedas
  private static $TASA_CONVERSION = [
    'USD' => 1.0,
    'EUR' => 1.2,
    'GBP' => 1.4,
    'JPY' => 0.0098,
    'CNY' => 0.16,
    'MXN' => 0.05
  ];

  // Método que realiza la conversión de moneda entre dos tipos de moneda dados
  public static function convertirMoneda($cantidad, $monedaOrigen, $monedaDestino) {
    if (!isset(self::$TASA_CONVERSION[$monedaOrigen]) || !isset(self::$TASA_CONVERSION[$monedaDestino])) {
      throw new Exception('Tipo de moneda no válido');
    }
    if (!is_numeric($cantidad)) {
      throw new Exception('Cantidad no numérica');
    }
    $tasaOrigen = self::$TASA_CONVERSION[$monedaOrigen];
    $tasaDestino = self::$TASA_CONVERSION[$monedaDestino];
    $cantidadDestino = $cantidad * ($tasaDestino / $tasaOrigen);
    return $cantidadDestino;
  }

}

// Ejemplo de uso
$cantidad = 100;
$monedaOrigen = 'USD';
$monedaDestino = 'EUR';
$resultado = Conversor::convertirMoneda($cantidad, $monedaOrigen, $monedaDestino);
echo $cantidad . ' ' . $monedaOrigen . ' son ' . $resultado . ' ' . $monedaDestino;

?>
