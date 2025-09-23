<?php
  // Configuración del correo electrónico
  $to = "info@todoencasasalamanca.es";
  $subject = "Formulario de contacto";

  // Recopilar los datos del formulario
  $nombre = $_GET["name"];
  $correo = $_GET["correo"];
  $telefono = $_GET["tel"];
  $mensaje = $_GET["mensaje"];

  // Crear el cuerpo del correo electrónico
  $body = "name: $nombre\n";
  $body .= "correo: $correo\n";
  $body .= "tel: $telefono\n";
  $body .= "mensaje: $mensaje\n";
  

  // Enviar el correo electrónico
  if (mail($to, $subject, $body)) {
    // Redirección a la página de agradecimiento
    header("Location:contacto.html");
    exit;
  } else {
    echo "Error al enviar el formulario";
  }
?>