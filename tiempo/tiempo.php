<?php

class Conversor {

  // Unidades de tiempo disponibles
  private static $UNIDADES_TIEMPO = ['segundos', 'minutos', 'horas', 'días', 'semanas', 'meses', 'años'];

  // Factores de conversión entre unidades de tiempo
  private static $FACTORES_TIEMPO = [
    'segundos' => 1,
    'minutos' => 60,
    'horas' => 3600,
    'días' => 86400,
    'semanas' => 604800,
    'meses' => 2592000,
    'años' => 31536000
  ];

  // Método que realiza la conversión de tiempo entre dos unidades dadas
  public static function convertirTiempo($cantidad, $unidadOrigen, $unidadDestino) {
    if (!in_array($unidadOrigen, self::$UNIDADES_TIEMPO) || !in_array($unidadDestino, self::$UNIDADES_TIEMPO)) {
      throw new Exception('Unidad de tiempo no válida');
    }
    if (!is_numeric($cantidad)) {
      throw new Exception('Cantidad no numérica');
    }
    $factorOrigen = self::$FACTORES_TIEMPO[$unidadOrigen];
    $factorDestino = self::$FACTORES_TIEMPO[$unidadDestino];
    $cantidadSegundos = $cantidad * $factorOrigen;
    $cantidadDestino = $cantidadSegundos / $factorDestino;
    return $cantidadDestino;
  }

}

// Ejemplo de uso
$cantidad = 3600;
$unidadOrigen = 'segundos';
$unidadDestino = 'horas';
$resultado = Conversor::convertirTiempo($cantidad, $unidadOrigen, $unidadDestino);
echo $cantidad . ' ' . $unidadOrigen . ' son ' . $resultado . ' ' . $unidadDestino;

?>
