<?php
include_once 'currencyConverter.php';

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
        Formulario para calcular la Moneda
      </p>



      <input
        type="number"
        name="cant"
        value="<?= $cant ?>"
        id="nombre"
        placeholder="Valor"
        required
      />


      <input <?php if (isset($result)) ?> value="<?php echo $result ?>" />

      <h2>De:</h2>
      <div class="select">
        <select name="De">
        <option value=" ">--Selecciona un tipo de moneda-</option>
                        <option value="Quetzal" id="Quetzal" name="Quetzal" <?= $De === 'Quetzal' ? 'selected' : '' ?>>Quetzal</option>
                        <option value="Cordoba" id="Cordoba" name= "Cordoba" <?= $De === 'Cordoba' ? 'selected' : '' ?>>Cordoba</option>
                        <option value="Colon" id="Colon" name="Colon" <?= $De === 'Colon' ? 'selected' : '' ?>>Colon Costarricense</option>
                        <option value="Euro" id="Euro" name="Euro"<?= $De === 'Euro' ? 'selected' : '' ?>>Euro</option>
                        <option value="Dolar" id="Dolar" name="Dolar" <?= $De === 'Dolar' ? 'selected' : '' ?>>Dolar</option>
                        <option value="Lempira" id="Lempira" name="Lempira" <?= $De === 'Lempira' ? 'selected' : '' ?>>Lempira</option>
                        <option value="Peso" id="Peso" name="Peso" <?= $De === 'Peso' ? 'selected' : '' ?>>Peso Mexicano</option>
        </select>
      </div>

      <h2>A:</h2>
      <div class="select">
        <select name="A">
          <option value="" selected>--Selecciona un tipo de moneda--</option>
                        <option value="Quetzal"id="Quetzal" name="Quetzal" <?= $A === 'Quetzal' ? 'selected' : '' ?>>Quetzal</option>
                        <option value="Cordoba" id="Cordoba" name="Cordoba" <?= $A === 'Cordoba' ? 'selected' : '' ?>>Cordoba</option>
                        <option value="Colon" id="Colon" name="Colon" <?= $A === 'Colon' ? 'selected' : '' ?>>Colon</option>
                        <option value="Euro" id="Euro" name="Euro" <?= $A === 'Euro' ? 'selected' : '' ?>>Euro</option>
                        <option value="Dolar" id="Dolar" name="Dolar" <?= $A === 'Dolar' ? 'selected' : '' ?>>Dolar</option>
                        <option value="Lempira" id="Lempira" name="Lempira"  <?= $A === 'Lempira' ? 'selected' : '' ?>>Lempira</option>
                        <option value="Peso" id="Peso" name="Peso" <?= $A === 'Peso' ? 'selected' : '' ?>>Peso</option>
        </select>


        

     
     
      </div>
      <button type="submit">Convertir</button>

     
    </form>





  </body>
</html>
