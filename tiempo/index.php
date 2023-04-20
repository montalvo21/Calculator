<?php

class TiempoConverter {
    public function convertirTiempo($cantidad_tiempo, $unidad_actual, $unidad_deseada) {
    
        $segundos = $this->convertirASegundos($cantidad_tiempo, $unidad_actual);

       
        $resultado = $this->convertirDesdeSegundos($segundos, $unidad_deseada);

        return $resultado; 
    }

    private function convertirASegundos($cantidad_tiempo, $unidad_actual) {
        switch ($unidad_actual) {
            case 'segundos':
                return $cantidad_tiempo;
            case 'minutos':
                return $cantidad_tiempo * 60;
            case 'horas':
                return $cantidad_tiempo * 60 * 60;
            case 'dias':
                return $cantidad_tiempo * 60 * 60 * 24;
            case 'semana':
                return $cantidad_tiempo * 60 * 60 * 24 * 7;
            case 'mes':
                return $cantidad_tiempo * 60 * 60 * 24 * 7* 4.345243;
            case 'anio':
                return $cantidad_tiempo * 60 * 60 * 24 * 7* 4.345243 *12 ;
            case 'decada':
                return $cantidad_tiempo * 60 * 60 * 24 * 7* 4.345243 *12*10 ;
            case 'siglo':
                return $cantidad_tiempo * 60 * 60 * 24 * 7* 4.345243 *12*10*10 ;
        }
    }

    private function convertirDesdeSegundos($segundos, $unidad_deseada) {
        switch ($unidad_deseada) {
            case 'segundos':
                return $segundos;
            case 'minutos':
                return $segundos / 60;
            case 'horas':
                return $segundos / 60 / 60;
            case 'dias':
                return $segundos / 60 / 60 / 24;
            case 'semana':
                return $segundos / 60 / 60 / 24 / 7;
            case 'mes':
                return $segundos / 60 / 60 / 24 / 7 /4.345243;
            case 'anio':
                return $segundos / 60 / 60 / 24 / 7 /4.345243 /12 ;
            case 'decada':
                return $segundos / 60 / 60 / 24 / 7 /4.345243 /12/10;
            case 'siglo':
                return $segundos / 60 / 60 / 24 / 7 /4.345243 /12 /10/10;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $cantidad_tiempo = $_POST['cantidad_tiempo'];
    $unidad_actual = $_POST['unidad_actual'];
    $unidad_deseada = $_POST['unidad_deseada'];

    $tiempoConverter = new TiempoConverter();
    $resultado = $tiempoConverter->convertirTiempo($cantidad_tiempo, $unidad_actual, $unidad_deseada);
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
        Formulario para calcular el Tiempo
      </p>



 


      <input
        type="number"
        name="cantidad_tiempo"
        id="nombre"
        placeholder="Cantidad de Tiempo"
        required
      />


      <div>


   

    <?php if (isset($resultado)) { ?>
        <input type="text" name="resultado" value="<?php echo $cantidad_tiempo . ' ' . $unidad_actual . ' son ' .round( $resultado,2) . ' ' . $unidad_deseada; ?>" readonly>
    <?php } ?>

      <h2>Unidad actual:</h2>
      <div class="select">
        <select name="unidad_actual">
          <option selected disabled>Unidad actual:</option>
          <option value="segundos">Segundos</option>
            <option value="minutos">Minutos</option>
            <option value="horas">Horas</option>
            <option value="dias">Días</option>
            <option value="semana">Semana</option>
            <option value="mes">Mes</option>
            <option value="anio">Año</option>
            <option value="decada">Decada</option>
            <option value="siglo">Siglo</option>
        </select>
      </div>

      <h2>Unidad deseada:</h2>
      <div class="select">
        <select name="unidad_deseada">
          <option selected disabled>Unidad deseada:</option>
          <option value="segundos">Segundos</option>
                <option value="minutos">Minutos</option>
                <option value="horas">Horas</option>
                <option value="dias">Días</option>
                <option value="semana">Semana</option>
                <option value="mes">Mes</option>
                <option value="anio">Año</option>
                <option value="decada">Decada</option>
                <option value="siglo">Siglo</option>
        </select>


     
     
      </div>
      <button type="submit" value="Convertir">Convertir</button>
    </form>





  </body>
</html>
