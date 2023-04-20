<?php

class Conversor {

  // Unidades de volumen disponibles
  private static $UNIDADES_VOLUMEN = ['ml', 'cl', 'dl', 'l', 'm3', 'gal', 'qt', 'pt', 'fl-oz', 'tbsp', 'tsp'];

  // Factores de conversión entre unidades de volumen
  private static $FACTORES_VOLUMEN = [
    'ml' => 1,
    'cl' => 10,
    'dl' => 100,
    'l' => 1000,
    'm3' => 1000000,
    'gal' => 3785.41,
    'qt' => 946.353,
    'pt' => 473.176,
    'fl-oz' => 29.5735,
    'tbsp' => 14.7868,
    'tsp' => 4.92892
  ];

  // Método que realiza la conversión de volumen entre dos unidades dadas
  public static function convertirVolumen($cantidad, $unidadOrigen, $unidadDestino) {
    if (!in_array($unidadOrigen, self::$UNIDADES_VOLUMEN) || !in_array($unidadDestino, self::$UNIDADES_VOLUMEN)) {
      throw new Exception('Unidad de volumen no válida');
    }
    if (!is_numeric($cantidad)) {
      throw new Exception('Cantidad no numérica');
    }
    $factorOrigen = self::$FACTORES_VOLUMEN[$unidadOrigen];
    $factorDestino = self::$FACTORES_VOLUMEN[$unidadDestino];
    $cantidadMl = $cantidad * $factorOrigen;
    $cantidadDestino = $cantidadMl / $factorDestino;
    return $cantidadDestino;
  }

}

// Ejemplo de uso
$cantidad = 100;
$unidadOrigen = 'l';
$unidadDestino = 'gal';
$resultado = Conversor::convertirVolumen($cantidad, $unidadOrigen, $unidadDestino);
echo $cantidad . ' ' . $unidadOrigen . ' son ' . $resultado . ' ' . $unidadDestino;

?>
