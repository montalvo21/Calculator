<?php

class Conversor {

  // Método que realiza la conversión de temperatura entre dos tipos de unidad de temperatura dados
  public static function convertirTemperatura($cantidad, $unidadOrigen, $unidadDestino) {
    if ($unidadOrigen == $unidadDestino) {
      return $cantidad;
    }
    if (!is_numeric($cantidad)) {
      throw new Exception('Cantidad no numérica');
    }
    $resultado = 0;
    switch ($unidadOrigen) {
      case 'c':
        $resultado = $unidadDestino == 'f' ? ($cantidad * 9 / 5) + 32 : $cantidad + 273.15;
        break;
      case 'f':
        $resultado = $unidadDestino == 'c' ? ($cantidad - 32) * 5 / 9 : ($cantidad - 32) * 5 / 9 + 273.15;
        break;
      case 'k':
        $resultado = $unidadDestino == 'c' ? $cantidad - 273.15 : ($cantidad - 273.15) * 9 / 5 + 32;
        break;
      default:
        throw new Exception('Tipo de unidad no válido');
    }
    return $resultado;
  }

}

// Ejemplo de uso
$cantidad = 100;
$unidadOrigen = 'c';
$unidadDestino = 'f';
$resultado = Conversor::convertirTemperatura($cantidad, $unidadOrigen, $unidadDestino);
echo $cantidad . ' ' . $unidadOrigen . ' son ' . $resultado . ' ' . $unidadDestino;

?>
