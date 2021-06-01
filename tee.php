<!DOCTYPE html>





<?php

$validador;
$d = $_POST['namearr'];
$e = $_POST['envia'];

//print_r($_POST['envia']);
//print_r($d . '.json');

// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents($e);
// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo, true);
// Loop para percorrer o Objeto




/*
//Função para verificar se há alguma letra no vetor


function get_numeric()
{

    for ($x = 0; $x < $GLOBALS['tamanho']; $x++) {


        if (is_numeric($GLOBALS['json'][$x])) {
            $GLOBALS['validador'] = true;
        } else {
            echo  $GLOBALS['json'][$x];
            $GLOBALS['validador'] = false;
        }
    }
    echo $GLOBALS['validador'];
}

*/


$se0 = $json[0];
$se1 = $json[1];
$se2 = $json[2];

$ca = $se1 - $se0;
$ca2 = $se2 - $se1;

$firstElement = current($json);
$tamanho = count($json);
$somatoria = 0;
$porcentPA = 0;
$porcentPG = 0;


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
        $GLOBALS['razao'] = ($b - $a);
    } else {
        $GLOBALS['razao'] = ($b / $a);
    }

    echo $GLOBALS['razao'];
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



function calcporcent($a, $b, $c)
{


    //  $a= tipo
    //$b=  tamanho
    //$c= razao

    $pa = "PA";




    for ($x = 1; $x < $b; $x++) {


        if ((($GLOBALS['json'][$x] -  $c) == ($GLOBALS['json'][$x - 1]))) {
            $GLOBALS['porcentPA']++;
        }





        if ((($GLOBALS['json'][$x] / $c) == ($GLOBALS['json'][$x - 1]))) {
            $GLOBALS['porcentPG']++;
        }
    }
    $GLOBALS['porcentPA'] = (($GLOBALS['porcentPA'] +  $b) / 2) * 10;


    $GLOBALS['porcentPG'] = (($GLOBALS['porcentPG'] +  $b) / 2) * 10;




    echo $GLOBALS['porcentPA'] . "<br>";
    echo $GLOBALS['porcentPG'] . "<br>";
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



        <div class="caixa">

            <div class="titulo">

                <p> Validação do vetor:
                </p>



            </div>
            <div class="titulo">
                <?php

                /*
    Chama função 
    get_numeric();

    if ($validador == true) {

        echo " não há letras no array";
    } else {
        echo " há letras";
    }

*/


                //  $a= tipo
                //$b=  tamanho
                //$c= razao
                calcporcent($tipoP, $tamanho, $razao);




                ?>
            </div>

        </div>



    </div>


</body>

</html>