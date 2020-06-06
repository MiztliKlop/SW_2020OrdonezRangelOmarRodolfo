<?php

  // Recibo texto
  $texto= $_POST['texto'];
  $i=12;
  $e=18;
  // Insensibilidad de Mayúsculas/Minúsculas
  $insensible= strtolower($texto);
  // Lo que cifra el mensaje
  $ABC = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s",
  "t", "u", "v", "w", "x", "y", "z"," ",".",",","?"];
  // Mensaje Desplazado
  $ABCesar = ["X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P",
  "Q", "R", "S", "T", "U", "V", "W", " ",".",",","?"];
  /*
    Indica que por cada coincidencia por letra entre el texto y el arreglo 'ABC' Imprimirá la letra
    desplazada, formando así un mensaje cifrado.
  */
  $hola = str_split($insensible);
  echo "Cifrado: ";
  foreach ($hola as $llave => $letra)
  {
    $i++;
    foreach ($ABC as $key => $value)
    {
      $e++;
      if ($value == $letra)
      {
        // echo $ABCesar[$key];
        $cifrar= $ABCesar[$key];
        $encode= base64_encode($e.$cifrar.$i);
        $a = rand(10,100);
        $i = $i+2002;
        echo $i.$encode.$e.$a;
      }
    }
  }

?>
