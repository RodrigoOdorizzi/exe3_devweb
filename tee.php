<!DOCTYPE html>

<?php


$d = $_POST['namearr'];
$e = $_POST['envia'];

//print_r($_POST['envia']);
//print_r($d . '.json');

// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents($e);
// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo, true);
// Loop para percorrer o Objeto


$se0 = $json[0];
$se1 = $json[1];
$se2 = $json[2];

$ca = $se1 - $se0;
$ca2 = $se2 - $se1;

$firstElement = current($json);
$tamanho = count($json);
$somatoria = 0;


?>


<?php
$tipoP;
$razao;
$somatoria;
$media = 0;
$mediana;
$par = true;
$ultimo = $GLOBALS['json'][$GLOBALS['tamanho'] - 1];
$df;


function tipoP($a, $b, $c)
{


    if (($c - $b) == ($b  - $a))
        $GLOBALS['tipoP']  = "PA";
    else {
        $GLOBALS['tipoP'] = "PG";
    }

    echo $GLOBALS['tipoP'];
}



function calcularazao($b, $a)
{


    $pa = "PA";

    if ($GLOBALS['tipoP'] ==  $pa) {
        $razao = ($b - $a);
    } else {
        $razao = ($b / $a);
    }

    echo  $razao;
}


function somatoria()
{



    for ($x = 0; $x < $GLOBALS['tamanho']; $x++) {


        $GLOBALS['somatoria'] = $GLOBALS['somatoria'] +  $GLOBALS['json'][$x];
    }


    echo $GLOBALS['somatoria'];
}



function media()
{

    $media = $GLOBALS['somatoria'] / $GLOBALS['tamanho'];

    echo $media;
}



function mediana()
{
    if ($GLOBALS['tamanho']  % 2 == 0) {

        $mediana =  $GLOBALS['tamanho'] / 2;

        $df = ($GLOBALS['json'][$mediana] + $GLOBALS['json'][$mediana + 1]) / 2;
    } else {

        $mediana =  $GLOBALS['tamanho'] / 2;
        $df = floor(($GLOBALS['json'][$mediana]));
    }

    echo $df;
}

?>






<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>
</head>



<body>

    <div class="con" style=" width: 705px;margin:auto; border:1px solid #000;">


        <p> mostrando dados
        </p>


        <div class="caixa">

            <div class="titulo">

                <p> Valores da progressão:
                </p>



            </div>
            <div class="titulo">

                <?php print_r($json);
                ?>

            </div>

        </div>


        <div class="caixa">

            <div class="titulo">
                <p> Valor de A1
                </p>
            </div>
            <div class="titulo">

                <?php print_r($firstElement);
                ?>

            </div>

        </div>




        <div class="caixa">

            <div class="titulo">Tipo de progressão<p>
                </p>
            </div>
            <div class="titulo">


                <?php

                tipoP($se0, $se1, $se2);



                ?>

            </div>

        </div>




        <div class="caixa">

            <div class="titulo">Valor da Razão<p>
                </p>
            </div>
            <div class="titulo">



                <?php

                calcularazao($se1, $se0);

                ?>


            </div>

        </div>



        <div class="caixa">

            <div class="titulo">
                <p> Quantidade de Números
                </p>
            </div>
            <div class="titulo"> <?php echo $tamanho;
                                    ?> </div>

        </div>


        <div class="caixa">

            <div class="titulo">
                <p> Somatória
                </p>
            </div>
            <div class="titulo"> <?php somatoria();
                                    ?></div>

        </div>




        <div class="caixa">

            <div class="titulo">
                <p> média
                </p>
            </div>
            <div class="titulo"> <?php media();
                                    ?></div>

        </div>




        <div class="caixa">

            <div class="titulo">
                <p> Mediana
                </p>
            </div>
            <div class="titulo"> <?php mediana();
                                    ?></div>

        </div>





    </div>


</body>

</html>