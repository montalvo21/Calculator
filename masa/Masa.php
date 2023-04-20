<?php

class Conversor {

  // Factor de conversión entre las diferentes unidades de masa
  private static $FACTOR_CONVERSION = [
    'g' => 1.0,
    'kg' => 1000,
    'lb' => 453.592,
    'oz' => 28.3495
  ];

  // Método que realiza la conversión de masa entre dos tipos de unidad de masa dados
  public static function convertirMasa($cantidad, $unidadOrigen, $unidadDestino) {
    if (!isset(self::$FACTOR_CONVERSION[$unidadOrigen]) || !isset(self::$FACTOR_CONVERSION[$unidadDestino])) {
      throw new Exception('Tipo de unidad no válido');
    }
    if (!is_numeric($cantidad)) {
      throw new Exception('Cantidad no numérica');
    }
    $factorOrigen = self::$FACTOR_CONVERSION[$unidadOrigen];
    $factorDestino = self::$FACTOR_CONVERSION[$unidadDestino];
    $cantidadDestino = $cantidad * ($factorDestino / $factorOrigen);
    return $cantidadDestino;
  }

}

// Ejemplo de uso
$cantidad = 100;
$unidadOrigen = 'kg';
$unidadDestino = 'lb';
$resultado = Conversor::convertirMasa($cantidad, $unidadOrigen, $unidadDestino);
echo $cantidad . ' ' . $unidadOrigen . ' son ' . $resultado . ' ' . $unidadDestino;

?>
