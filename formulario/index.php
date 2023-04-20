<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Kodigo - Instalaciones Padre Arrupe</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="K.jpg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Kodigo, Programación, Software " />
    <meta
      name="description"
      content="Página Web Kodigo - Instalaciones Padre Arrupe"
    />
    <meta name="author" content="Kodigo" />
    <meta name="copyright" content="Kodigo El Salvador" />
  </head>
  <body>
    <header>
      <a href="../index.php"><img src="./Kodigo.png" class="logo" /></a>
      <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="../tiempo/index.php">Tiempo</a></li>
        <li><a href="../volumen/index.php">Volumen</a></li>
        <li><a href="../longitud/index.php">Longitud</a></li>
        <li><a href="../masa/index.php">Masa</a></li>
        <li><a href="../moneda/index.php">Moneda</a></li>
        <li><a href="../temperatura/index.php">Temperatura</a></li>
      </ul>
    </header>

    <form action="correo.php" method="POST">
      <img class="imgLogo" src="./Kodigo.png" alt="Kodigo" />
      <p class="comentario">
        Formulario de Solicitud para el Ingreso a las Instalaciones de Kodigo
        dentro del colegio Padre Arrupe
      </p>
      <input
        type="text"
        name="nombre"
        id="nombre"
        placeholder="Nombre"
        required
      />
      <input type="number" name="dui" id="dui" placeholder="DUI" required />
      <input
        type="text"
        name="carnet"
        id="carnet"
        placeholder="Carnet"
        required
      />
      <input
        type="email"
        name="email"
        class="email"
        placeholder="Correo Eléctronico"
        required
      />

      <h2>Seleccione el día</h2>
      <div class="select">
        <select name="date">
          <option selected disabled>Elija el día</option>
          <option value="Lunes">Lunes</option>
          <option value="Martes">Martes</option>
          <option value="Miercoles">Miércoles</option>
          <option value="Jueves">Jueves</option>
          <option value="Viernes">Viernes</option>
        </select>
      </div>

      <h2>Seleccione la hora</h2>
      <div class="select">
        <select name="hora">
          <option selected disabled>Elija la hora</option>
          <option value="9">09:00 AM</option>
          <option value="10">10:00 AM</option>
          <option value="11">11:00 AM</option>
          <option value="12">12:00 PM</option>
          <option value="1">01:00 PM</option>
          <option value="2">02:00 PM</option>
          <option value="3">03:00 PM</option>
          <option value="4">04:00 PM</option>
        </select>
      </div>

      <label class="checkbox">
        <input
          type="checkbox"
          value="remember-me"
          id="rememberMe"
          name="rememberMe"
        />
        Acepto los términos y condiciones
      </label>

      <button name="enviar" type="submit">Reservar</button>
    </form>
  </body>
</html>
