<?php
  // Recibo texto
  $texto= $_POST['texto'];
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
  echo "Cifrado en César: ";
  foreach ($hola as $llave => $letra)
  {
    foreach ($ABC as $key => $value)
    {
      if ($value == $letra)
      {
        echo $ABCesar[$key];
      }
    }
  }

?>
