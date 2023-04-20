<?php

if (isset($_POST['enviar'])) {
  if (!empty($_POST['nombre'])
  && !empty($_POST['dui'])
  && !empty($_POST['carnet'])
  && !empty($_POST['email']) 
  && !empty($_POST['date']) 
  && !empty($_POST['hora'])
  && !empty($_POST['rememberMe'])) {
  
    $nombre = $_POST['nombre'];
    $dui = $_POST['dui'];
    $carnet = $_POST['carnet'];
    $email = $_POST['email'];
    $fecha = $_POST['date'];
    $hora= $_POST['hora'];
    $reservacion = "Reserva el día " . $date . " a la hora: " . $hora;
    $datos = " El nombre del estudiante es: " . $nombre . ", su dui es: " . $dui . ", y su carnet es: " . $carnet . ", y mi correo es: " . $email;

$to = "carlosdavidmancia@gmail.com";

$headers = "From: " . $email  . "\r\n" .
"CC: charlycodejsx@gmail.com";



    if ($mail!=NULL) {
      mail($to, $datos, $reservacion, $headers);
    }
    header('Location:gracias.html');
}
}

?>