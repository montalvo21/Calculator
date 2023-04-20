
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
        Formulario para calcular la Masa
      </p>

      
      <input
        type="number"
        name="gramos"
        id="gramos"
        placeholder="Gramos"
        required
      />

      <input
      type="number"
      name="kilogramos"
      id="kilogramos"
      placeholder="Kilogramos"
    />


      <div>
        <label for="resultado" >RESULTADO:</label>

        
      </div>

    <?php



require_once "MasaPH.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$gramo = new Gramo($_POST['gramos']);
$kilogramo = new Kilogramo($_POST['kilogramos']) ;
echo $gramo->getValor() . " " . $gramo->getNombre() . " son ";
$kilogramoConvertido = $gramo->convertir($kilogramo);
echo $kilogramoConvertido->getValor() . " " . $kilogramoConvertido->getNombre() . "<br>";

echo $kilogramo->getValor() . " " . $kilogramo->getNombre() . " son ";
$gramoConvertido = $kilogramo->convertir($gramo);
echo $gramoConvertido->getValor() . " " . $gramoConvertido->getNombre() . "<br>";
}
?>



     
     
      </div>
      <button name="enviar" type="submit">Convertir</button>
    </form>





  </body>
</html>
