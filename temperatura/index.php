<?php 
require_once 'CalculosTemp.php';


if (isset($_POST['temperatura']) && isset($_POST['unidad'])) {
    $temperatura = $_POST['temperatura'];
    $unidad = $_POST['unidad'];
  
    if ($unidad == 'celsius') {
      $instancia = new TemperaturaCelsius();
      $resultado = $instancia->convertirAFahrenheit($temperatura);
      
    } else if ($unidad == 'fahrenheit') {
      $instancia = new TemperaturaFahrenheit();
      $resultado = $instancia->convertirACelsius($temperatura);
    }
  }
  
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Calculadora de Unidades</title>
    <link rel="icon" type="image/x-icon" href="img/K.jpg" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="sec">
    <header>
    <a href="../index.php"><img src="./img/Kodigo.png" class="logo" /></a>
      <ul>
      <li><a href="../index.php">Home</a></li>
        <li><a href="../tiempo/index.php">Tiempo</a></li>
        <li><a href="../volumen/index.php">Volumen</a></li>
        <li><a href="../longitud/index.php">Longitud</a></li>
        <li><a href="../masa/index.php">Masa</a></li>
        <li><a href="../moneda/index.php">Moneda</a></li>
        <li><a href="../temperatura/index.php">Temperatura</a></li>
      </ul>
    </header>


      
    <form action="index.php" method="POST">
      <img class="imgLogo" src="./img/Kodigo.png" alt="Kodigo" />
      <p class="comentario">
        Formulario para calcular la Temperatura
      </p>
      <input
        type="number"
        name="temperatura"
        id="temperatura"
        placeholder="Valor"
        required
      />



      <h2>Temperatura:</h2>
      <div class="select">
        <select name="unidad" id="unidad">
          <option selected disabled>Selecciona un valor:</option>
          <option value="celsius">Celsius a Fahrenheit</option>
          <option value="fahrenheit">Fahrenheit a Celsius</option>
        </select>
      </div>


      <div>
         <input type="text" name="resultado" placeholder="Resultado"
          value="<?php if (isset($resultado)) echo $resultado; ?>">  
      </div>

      <button name="Convertir" value="convertir" type="submit">Convertir</button>


      

 
    </form>





  </body>
</html>
