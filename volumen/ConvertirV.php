<?php


class UnidadesVolumen {
    private $unidades = array(
        "km3" => 1000000000,
        "hm3" => 1000000,
        "dam3" => 1000,
        "m3" => 1,
        "dm3" => 0.001,
        "cm3" => 0.000001,
        "mm3" => 0.000000001
    );

    public function listarUnidades() {
        echo "Unidades de Volumen:\n";
        foreach ($this->unidades as $unidad => $valor) {
            echo "- " . $unidad . "\n";
        }
    }

    public function convertirUnidad($valor, $unidad_origen, $unidad_destino) {
        if (!array_key_exists($unidad_origen, $this->unidades) || !array_key_exists($unidad_destino, $this->unidades)) {
            echo 'Unidad de volumen inválida';
        } else{
            $valor_en_metros_cubicos = $valor * $this->unidades[$unidad_origen];
            $valor_en_unidad_destino = $valor_en_metros_cubicos / $this->unidades[$unidad_destino];

            return $valor_en_unidad_destino;
        }

        
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $unidades_volumen = new UnidadesVolumen();
  $valor = $_POST['valor'];
  $unidad_origen = $_POST['unidad_origen'];
  $unidad_destino = $_POST['unidad_destino'];
  $resultado = $unidades_volumen->convertirUnidad($valor, $unidad_origen, $unidad_destino);
} else {
    $valor = '';
    $unidad_origen = '';
    $unidad_destino = '';
    $resultado = '';
}

?>