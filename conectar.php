<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>conectar</title>
  </head>
  <body>

    <?php

        $link = mysqli_connect("localhost","root","","hospital");

        if(!$link){
          die('Could not connect: ' . mysql_error());
        }


        $rs = mysqli_query($link,"SELECT MAX(ID) AS id FROM prueba");
        if ($row = mysqli_fetch_row($rs)) {
          $id = trim($row[0]);
        }

//primera parte
        $nhistoria=mysqli_real_escape_string($link,$_POST["nhistoria"]);
        $fechaIngUCI=mysqli_real_escape_string($link,$_POST["fechaIngUCI"]);
        $horaIngUCI=mysqli_real_escape_string($link,$_POST["horaIngUCI"]);
        $DNI=mysqli_real_escape_string($link,$_POST["DNI"]);
        $nombre=mysqli_real_escape_string($link,$_POST["nombre"]);
        $apellido=mysqli_real_escape_string($link,$_POST["apellido"]);
        $sexo=mysqli_real_escape_string($link,$_POST["sexo"]);
        $fechaNac=mysqli_real_escape_string($link,$_POST["fechaNac"]);
        $departamento=mysqli_real_escape_string($link,$_POST["departamento"]);
        $servicio=mysqli_real_escape_string($link,$_POST["servicio"]);
        $dx1c=mysqli_real_escape_string($link,$_POST["dx1c"]);
        $dx1n=mysqli_real_escape_string($link,$_POST["dx1n"]);
        $dx2c=mysqli_real_escape_string($link,$_POST["dx2c"]);
        $dx2n=mysqli_real_escape_string($link,$_POST["dx2n"]);
        $dx3c=mysqli_real_escape_string($link,$_POST["dx3c"]);
        $dx3n=mysqli_real_escape_string($link,$_POST["dx3n"]);
        $dx4c=mysqli_real_escape_string($link,$_POST["dx4c"]);
        $dx4n=mysqli_real_escape_string($link,$_POST["dx4n"]);
        $dx5c=mysqli_real_escape_string($link,$_POST["dx5c"]);
        $dx5n=mysqli_real_escape_string($link,$_POST["dx5n"]);





        $sql="INSERT INTO  prueba (nhistoria,fechaIngUCI, horaIngUCI,DNI,nombre,
        apellido,sexo,fechaNac,departamento,servicio,dx1c,dx1n,dx2c,dx2n,dx3c,dx3n,dx4c,dx4n,dx5c,dx5n)
        VALUES('$nhistoria','$fechaIngUCI','$horaIngUCI','$DNI','$nombre','$apellido','$sexo','$fechaNac','$departamento',
        '$servicio','$dx1c','$dx1n','$dx2c','$dx2n','$dx3c','$dx3n','$dx4c','$dx4n','$dx5c','$dx5n')";

        if (!mysqli_query($link,$sql)){
          die('Error: ' + mysqli_error($link));
        }

        echo "registro completo.";
        $id=$id+1;

        echo "ID del paciente, es importante apuntar este número: " ;
        echo $id;



    ?>

  </body>
</html>
