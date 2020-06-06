<?php

$rfc = $_POST['rfc'];
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];

if (isset($rfc) && isset($nombre) && isset($contraseña))

{

  if (preg_match('/( ?[A-ZÑÁ-Ú]{1}[a-zñá-ú]+ ?[a-zñá-ú]*)+/', $nombre))
  {
    echo "Registro Completado ".$nombre."<br><br>";
  }
  else
  {
    echo "Dato Nombre Inválido: Su(s) Nombre(s) ha sido ingresado Incorrectamente.<br><br>";
  }

  if (preg_match('/^[A-Z]{4}\d{2}(0[1-9]|1[012])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[0-9A-Z]{3}$/', $rfc))
  {
    echo "Tu RFC es: ".$rfc."<br><br>";
  }
  else
  {
    echo "Dato RFC Inválido: Su RFC ha sido ingresado Incorrectamente.<br><br>";
  }

  if (preg_match('/^((?=\S*[A-Z])(?=\S*[a-z])(?=\S*\d)(?=\S*[@&%#!¡?¿.,]))\S{10,30}$/', $contraseña))
  {
    echo "Contraseña Fuerte<br><br>";
  }
  else
  {
    echo "Dato Contraseña Inválido: Su Contraseña: ".$contraseña." ha sido débilmente ingresada y es insegura.<br><br>";
  }

}

else
{
  echo "¡Ingrese Datos!";
}


?>
