<!DOCTYPE html>



<?php
$nomearqui;
$tipoP;
$valorA1;
$razao;
$numele;
$vetDados = [];
$soma;


$local = "C:\xampp\htdocs\exe3_devweb" . $_POST['nomear'] . ".json";
$re = realpath($_SERVER["DOCUMENT_ROOT"]);
//echo $re;
$local3 = chr(92);
$local4 = "e";
$local2 = $local3 . $local4 . "xe3_devweb";


$localofi = $re . $local2 . $local3 . $_POST['nomear'] . ".json";


?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href="css/style.css">


    <title>Document</title>
</head>

<body>


    <div class="geral">
        <div class="cont">


            <div class="fa">



                <div class="elemen">

                    <h1> Fazer Download do arquivo:
                    </h1>

                </div>

                <div class="elemen">

                    <a href="<?php echo ($_POST['nomear'] . ".json") ?> " download style="text-decoration: none;">
                        <h2> baixar

                            Aqui!!!

                    </a>

                </div>



                <div class="elemen" style="margin-bottom: 10px;">


                    <p> Enviar arquivo JSON</p>
                    <form action="tee.php" method="POST">


                        <input type="hidden" id="nomearq" name="namea" value=" <?php echo $d ?>">

                        arquivo: <input type="file" name="envia">

                        <input type="submit" name="subimite" value="Enviar arquivo" style="width: 308px;" class="meubotao">



                    </form>

                </div>








            </div>
        </div>
    </div>




</body>

</html>