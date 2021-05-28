<!DOCTYPE html>



<?php
$nomearqui;
$tipoP;
$valorA1;
$razao;
$numele;
$vetDados = array();
$soma;

?>

<?php

function ma($a, $b, $c)
{

    $soma = $b;

    $vt = array();
    for ($x = 0; $x < $a; $x++) {

        $soma  = ($soma + $c);

        $vetDados[$x] =  $soma;
    }

    for ($x = 0; $x < $a - 0; $x++) {

        echo  $vetDados[$x] . ", ";
    }
}



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


                    <p>

                        <?php
                        $a = $_POST['qtdele'];
                        $b = $_POST['a1'];
                        $c = $_POST['razao'];

                        ma($a, $b, $c);

                        ?>




                    </p>


                </div>






            </div>
        </div>
    </div>
</body>

</html>