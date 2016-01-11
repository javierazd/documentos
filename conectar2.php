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


        $codigo=mysqli_real_escape_string($link,$_POST["codigo"]);

        $probabilidadMuerte=mysqli_real_escape_string($link,$_POST["probabilidadMuerte"]);
        $prism=mysqli_real_escape_string($link,$_POST["prism"]);
        $NPT=mysqli_real_escape_string($link,$_POST["NPT"]);
        $traqueotomia=mysqli_real_escape_string($link,$_POST["traqueotomia"]);
        $glicemia=mysqli_real_escape_string($link,$_POST["glicemia"]);


        //falta poner el tiempo total de VM1, VM1+VM2

        $VM=mysqli_real_escape_string($link,$_POST["VM"]);
        $tipoVM=mysqli_real_escape_string($link,$_POST["tipoVM"]);
        $fechaIniVM1=mysqli_real_escape_string($link,$_POST["fechaIniVM1"]);
        $fechaTerVM1=mysqli_real_escape_string($link,$_POST["fechaTerVM1"]);
        $extubafall=mysqli_real_escape_string($link,$_POST["extubafall"]);
        $estubaFalln=mysqli_real_escape_string($link,$_POST["estubaFalln"]);
        $reintuba=mysqli_real_escape_string($link,$_POST["reintuba"]);
        $reintuban=mysqli_real_escape_string($link,$_POST["reintuban"]);
        $fechaIniVM2=mysqli_real_escape_string($link,$_POST["fechaIniVM2"]);
        $fechaTerVM2=mysqli_real_escape_string($link,$_POST["fechaTerVM2"]);
        $extubanp=mysqli_real_escape_string($link,$_POST["extubanp"]);


//tercera parte, falta DOn
        $po=mysqli_real_escape_string($link,$_POST["po"]);
        $mg=mysqli_real_escape_string($link,$_POST["mg"]);
        $en=mysqli_real_escape_string($link,$_POST["en"]);
        $ENA=mysqli_real_escape_string($link,$_POST["ENA"]);
        $peso=mysqli_real_escape_string($link,$_POST["peso"]);
        $talla=mysqli_real_escape_string($link,$_POST["talla"]);
        $dot=mysqli_real_escape_string($link,$_POST["dot"]);
        $dor=mysqli_real_escape_string($link,$_POST["dor"]);
        $don=mysqli_real_escape_string($link,$_POST["don"]);
        $doc=mysqli_real_escape_string($link,$_POST["doc"]);
        $dohep=mysqli_real_escape_string($link,$_POST["dohep"]);
        $dohem=mysqli_real_escape_string($link,$_POST["dohem"]);
        $SIRS=mysqli_real_escape_string($link,$_POST["SIRS"]);
        $cvc=mysqli_real_escape_string($link,$_POST["cvc"]);
        $cvcd=mysqli_real_escape_string($link,$_POST["cvcd"]);
        $CVCl=mysqli_real_escape_string($link,$_POST["CVCl"]);

//cuarta parte

        $cb=mysqli_real_escape_string($link,$_POST["cb"]);
        $cea=mysqli_real_escape_string($link,$_POST["cea"]);
        $cotet=mysqli_real_escape_string($link,$_POST["cotet"]);
        $cibd=mysqli_real_escape_string($link,$_POST["cibd"]);
        $ca=mysqli_real_escape_string($link,$_POST["ca"]);
        $cfe=mysqli_real_escape_string($link,$_POST["cfe"]);
        $cotro=mysqli_real_escape_string($link,$_POST["cotro"]);
        $vcmo=mysqli_real_escape_string($link,$_POST["vcmo"]);
        $cneumo=mysqli_real_escape_string($link,$_POST["cneumo"]);
        $chemo=mysqli_real_escape_string($link,$_POST["chemo"]);
        $cvcotros=mysqli_real_escape_string($link,$_POST["cvcotros"]);
        $cvcotro=mysqli_real_escape_string($link,$_POST["cvcotro"]);

        $cudp=mysqli_real_escape_string($link,$_POST["cudp"]);
        $ulcera=mysqli_real_escape_string($link,$_POST["ulcera"]);
        $itsacvc=mysqli_real_escape_string($link,$_POST["itsacvc"]);
        $ITSaCVCd=mysqli_real_escape_string($link,$_POST["ITSaCVCd"]);
        $tITSaCVC=mysqli_real_escape_string($link,$_POST["tITSaCVC"]);
        $itsna=mysqli_real_escape_string($link,$_POST["itsna"]);
        $navc=mysqli_real_escape_string($link,$_POST["navc"]);
        $NAVdate=mysqli_real_escape_string($link,$_POST["NAVdate"]);
        $NAVtiempo=mysqli_real_escape_string($link,$_POST["NAVtiempo"]);

        $ITU=mysqli_real_escape_string($link,$_POST["ITU"]);
        $ITUdate=mysqli_real_escape_string($link,$_POST["ITUdate"]);
        $CateterVesDate=mysqli_real_escape_string($link,$_POST["CateterVesDate"]);
        $iihotros=mysqli_real_escape_string($link,$_POST["iihotros"]);
        $OtroIIHl=mysqli_real_escape_string($link,$_POST["OtroIIHl"]);



        $sql="UPDATE prueba SET probabilidadMuerte='$probabilidadMuerte', prism='$prism', NPT='$NPT', traqueotomia='$traqueotomia', glicemia='$glicemia',
        VM='$VM', tipoVM='$tipoVM', fechaIniVM1='$fechaIniVM1', fechaTerVM1='$fechaTerVM1', extubafall='$extubafall', estubaFalln='$estubaFalln', reintuba='$reintuba',reintuban='$reintuban',fechaIniVM2='$fechaIniVM2',fechaTerVM2='$fechaTerVM2',extubanp='$extubanp',
        po='$po', mg='$mg', en='$en', ENA='$ENA',peso='$peso',talla='$talla',dot='$dot',dor='$dor',don='$don',doc='$doc',dohep='$dohep',dohem='$dohem',SIRS='$SIRS',cvc='$cvc',cvcd='$cvcd',CVCl='$CVCl',
        cb='$cb', cea='$cea', cotet='$cotet', cibd='$cibd', ca='$ca', cfe='$cfe', cotro='$cotro', vcmo='$vcmo', cneumo='$cneumo', chemo='$chemo', cvcotros='$cvcotros', cvcotro='$cvcotro',
        cudp='$cudp', ulcera='ulcera', itsacvc='$itsacvc', ITSaCVCd='$ITSaCVCd', tITSaCVC='$tITSaCVC', itsna='$itsna', navc='$navc', NAVdate='$NAVdate', NAVtiempo='$NAVtiempo',
        ITU='$ITU', ITUdate='$ITUdate', CateterVesDate='$CateterVesDate', iihotros='$iihotros', OtroIIHl='$OtroIIHl'
        WHERE ID='$id' ";


        $sql = "SELECT DNI FROM `prueba` WHERE ID=91";
        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row[$codigo]. " - DNI: " . $row["DNI"]. "<br>";
          }
        } else {
          echo "0 results";
        }



        if (mysqli_query($link, $sql)) {
            echo "Record updated successfully";
            echo $id;
        } else {
            echo "Error updating record: " . mysqli_error($link);
        }

        mysqli_close($link);


    ?>

  </body>
</html>
