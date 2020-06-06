<?php

$rfc = $_POST['rfc'];
$nombre = $_POST['nombre'];

if (isset($rfc) && isset($nombre))

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
    echo "Tu RFC es: ".$rfc;
  }
  else
  {
    echo "Dato RFC Inválido: Su RFC ha sido ingresado Incorrectamente.<br><br>";
  }
  
}

else
{
  echo "¡Ingrese Datos!";
}


?>
