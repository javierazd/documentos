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

        //segunda parte

        $trans=mysqli_real_escape_string($link,$_POST["trans"]);
        $codigo1s=mysqli_real_escape_string($link,$_POST["codigo1s"]);
        $dx1s=mysqli_real_escape_string($link,$_POST["dx1s"]);
        $codigo2s=mysqli_real_escape_string($link,$_POST["codigo2s"]);
        $dx2s=mysqli_real_escape_string($link,$_POST["dx2s"]);
        $codigo3s=mysqli_real_escape_string($link,$_POST["codigo3s"]);
        $dx3s=mysqli_real_escape_string($link,$_POST["dx3s"]);
        $obs=mysqli_real_escape_string($link,$_POST["obs"]);
        $fechaAltamUCI=mysqli_real_escape_string($link,$_POST["fechaAltamUCI"]);
        $horaFechaAltamUCI=mysqli_real_escape_string($link,$_POST["horaFechaAltamUCI"]);
        $fechaAltaeUCI=mysqli_real_escape_string($link,$_POST["fechaAltaeUCI"]);
        $horaFechaAltaeUCI=mysqli_real_escape_string($link,$_POST["horaFechaAltaeUCI"]);
        $fallecio=mysqli_real_escape_string($link,$_POST["fallecio"]);





        $sql="UPDATE prueba SET trans='$trans', codigo1s='$codigo1s', dx1s='$dx1s', codigo2s='$codigo2s', dx2s='$dx2s', codigo3s='$codigo3s', dx3s='$dx3s',
        obs='$obs', fechaAltamUCI='$fechaAltamUCI', horaFechaAltamUCI='$horaFechaAltamUCI', fechaAltaeUCI='$fechaAltaeUCI', horaFechaAltaeUCI='$horaFechaAltaeUCI', fallecio='$fallecio'
        WHERE ID='$id' ";



        if (mysqli_query($link, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($link);
        }

        mysqli_close($link);


    ?>

  </body>
</html>
