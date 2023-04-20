<?php

class Conversor {

  // Unidades de longitud disponibles
  private static $UNIDADES_LONGITUD = ['mm', 'cm', 'm', 'km', 'in', 'ft', 'yd', 'mi'];

  // Factores de conversión entre unidades de longitud
  private static $FACTORES_LONGITUD = [
    'mm' => 1,
    'cm' => 10,
    'm' => 1000,
    'km' => 1000000,
    'in' => 25.4,
    'ft' => 304.8,
    'yd' => 914.4,
    'mi' => 1609344
  ];

  // Método que realiza la conversión de longitud entre dos unidades dadas
  public static function convertirLongitud($cantidad, $unidadOrigen, $unidadDestino) {
    if (!in_array($unidadOrigen, self::$UNIDADES_LONGITUD) || !in_array($unidadDestino, self::$UNIDADES_LONGITUD)) {
      throw new Exception('Unidad de longitud no válida');
    }
    if (!is_numeric($cantidad)) {
      throw new Exception('Cantidad no numérica');
    }
    $factorOrigen = self::$FACTORES_LONGITUD[$unidadOrigen];
    $factorDestino = self::$FACTORES_LONGITUD[$unidadDestino];
    $cantidadMm = $cantidad * $factorOrigen;
    $cantidadDestino = $cantidadMm / $factorDestino;
    return $cantidadDestino;
  }

}

// Ejemplo de uso
$cantidad = 1000;
$unidadOrigen = 'm';
$unidadDestino = 'ft';
$resultado = Conversor::convertirLongitud($cantidad, $unidadOrigen, $unidadDestino);
echo $cantidad . ' ' . $unidadOrigen . ' son ' . $resultado . ' ' . $unidadDestino;

?>
