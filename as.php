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

        $probabilidadMuerte=999;


        $sql="UPDATE prueba SET probabilidadMuerte='$probabilidadMuerte' WHERE ID='$id' ";

        echo "$id";

        if (mysqli_query($link, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_close($link);


    ?>

  </body>
</html>
