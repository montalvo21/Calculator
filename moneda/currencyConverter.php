<?php

class CurrencyConverter {
  private $exchangeRates = array(
    "Dolar" => array(
      "Euro" => 0.93,
      "Quetzal" => 7.79,
      "Lempira" => 24.66,
      "Cordoba" => 36.57,
      "Colon" => 541.69,
      "Peso" => 18.82
    ),
    "Euro" => array(
      "Dolar" => 1.07,
      "Quetzal" => 8.36,
      "Cordoba" => 39.22,
      "Lempira" => 26.45,
      "Colon" => 580.84,
      "Peso" => 20.18
    ),
    "Quetzal" => array(
      "Dolar" => 0.13 ,
      "Euro" => 0.12,
      "Lempira" => 3.16,
      "Cordoba" => 4.71,
      "Colon" => 69.50,
      "Peso" => 2.41
    ),
    "Lempira" => array(
      "Dolar" => 0.041,
      "Euro" => 0.038,
      "Quetzal" => 0.32,
      "Colon" => 21.97,
      "Cordoba" => 1.48,
      "Peso" => 0.76
    ),
    "Cordoba" => array(
      "Dolar" => 0.027,
      "Euro" => 0.026,
      "Quetzal" => 0.21,
      "Colon" => 14.81,
      "Lempira" => 0.67,
      "Peso" => 0.51
    ),
    "Colon" => array(
      "Dolar" => 0.0018,
      "Euro" => 0.0017,
      "Quetzal" => 0.014,
      "Lempira" => 0.046,
      "Cordoba" => 0.068,
      "Peso" => 0.035
    ),
    "Peso" => array(
      "Dolar" => 0.053,
      "Euro" => 0.050,
      "Quetzal" => 0.41,
      "Colon" => 28.78,
      "Cordoba" => 1.94,
      "Lempira" => 1.31
    )
  );


  public function convert($cant, $De, $A) {
    if ($De == $A) {
      return $cant;
    }
    if (!array_key_exists($De, $this->exchangeRates) || !array_key_exists($A, $this->exchangeRates[$De])) {
      throw new Exception("Moneda no soportada.");
    }
    $exchangeRate = $this->exchangeRates[$De][$A];
    return $cant * $exchangeRate;
  } 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $converter = new CurrencyConverter();
  $cant = $_POST['cant'];
  $De = $_POST['De'];
  $A = $_POST['A'];
  $result = $converter->convert($cant, $De, $A);
} else {
    $cant = '';
    $De = '';
    $A = '';
    $result = '';
}
?>