<?php

include "conectar.php"


echo $DNI;
echo "Resgistro completo";
$query= "select nombre, apellido from prueba where 'DNI'=12245";
$result = mysqli_query($link,$query) or die(mysqli_error($link));

if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
    $nombre=$row['nombre'];
    $apellido=$row['apellido'];
  }
} else{
  $nombre="";
  $apellido="";
}

  mysqli_free_result($result);

 ?>
