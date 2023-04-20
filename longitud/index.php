<?php
 include 'longitudCalculos.php';

 if(isset($_POST['convertir'])){
    //obtener valores
    $valor = $_POST['valor'];
    $desde = $_POST['desde']; 
    $hasta = $_POST['hasta'];
   
  
    //instancia a partir de la clase hija
   $objeto = new Longitud();
   $calculoDesde= $objeto->convertir_a_metros($valor, $desde);
   $resultado = $objeto->convertir_desde_metros($calculoDesde,$hasta);
   $objeto->imprimirResultado($resultado);

  
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
      


      
    <form method="POST">
      <img class="imgLogo" src="./img/Kodigo.png" alt="Kodigo" />
      <p class="comentario">
        Formulario para calcular la longitud
      </p>
      <input
        type="number"
        name="valor"
        id="nombre"
        placeholder="Valor"
        required
      />

      <input
      type="number"
      name="resultado"
      id="nombre"
      placeholder="Resultado"
      value="<?php if (isset($resultado)) echo $resultado; ?>"
    />

      <h2>--Desde--</h2>
      <div class="select">
        <select name="desde">
          <option selected disabled>--Desde--</option>
          <option value="Milimetro">Milímetro</option>
          <option value="Centimetro">Centímetro</option>
          <option value="Decimetro">Decímetro</option>
          <option value="Metro">Metro</option>
          <option value="Decametro">Decámetro</option>
          <option value="Hectometro">Hectómetro</option>
          <option value="Kilometro">Kilómetro</option>
        </select>
      </div>

      <h2>--Hasta--</h2>
      <div class="select">
        <select name="hasta">
          <option selected disabled>--Hasta--</option> 
          <option value="Milimetro">Milímetro</option>
          <option value="Centimetro">Centímetro</option>
          <option value="Decimetro">Decímetro</option>
          <option value="Metro">Metro</option>
          <option value="Decametro">Decámetro</option>
          <option value="Hectometro">Hectómetro</option>
          <option value="Kilometro">Kilómetro</option>
        </select>


     
     
      </div>
      <button name="convertir" type="submit">Convertir</button>
    </form>





  </body>
</html>
