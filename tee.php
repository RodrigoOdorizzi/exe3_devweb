<!DOCTYPE html>

<?php

$validador;


$_FILES['arquivo'];

$nomearquivo = $_FILES['arquivo']['name'];




//$local = "C:\xampp\htdocs\exe3_devweb" . $_POST['nomearq'] . ".json";
$re = realpath($_SERVER["DOCUMENT_ROOT"]);
//echo $re;
$local3 = chr(92);
$local4 = "e";
$local2 = $local3 . $local4 . "xe3_devweb";
$localofi = $re . $local2 . $local3 . $nomearquivo;




$caminhoatual = $_FILES['arquivo']['tmp_name'];
$caminhonovo = $localofi;

move_uploaded_file($caminhoatual, $caminhonovo);




//print_r($_POST['envia']);
//print_r($d . '.json');

// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents($_FILES['arquivo']['name']);
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
$porcentPA = 1;
$porcentPG = 1;


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



function calcporcent($b, $c)
{


    //  $a= tipo
    //$b=  tamanho
    //$c= razao



    for ($x = 1; $x < $b; $x++) {


        if ((($GLOBALS['json'][$x] - $c) == ($GLOBALS['json'][$x - 1]))) {
            $GLOBALS['porcentPA']++;
        }
    }


    for ($x = 1; $x < $b; $x++) {

        if ((($GLOBALS['json'][$x] / $c) == ($GLOBALS['json'][$x - 1]))) {
            $GLOBALS['porcentPG']++;
        }
    }

    $GLOBALS['porcentPA'] = (($GLOBALS['porcentPA'] / $b)  * 100);

    $GLOBALS['porcentPG'] = (($GLOBALS['porcentPG'] /    $b)  * 100);




    echo " porcentagem de PA: " . $GLOBALS['porcentPA'] . " %"  . "<br>";
    echo " porcentagem de PG: " . $GLOBALS['porcentPG'] . " %"  . "<br>";
}
?>






<html lang="pt-BR">


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([




            ['ValorX', 'VALOR Progressão', {
                role: 'anotation'
            }],

            <?php

            for ($x = 0; $x < $tamanho; $x++) {

            ?>



                [<?php echo $x ?>, <?php echo ($json[$x]) ?>, <?php echo ($json[$x]) ?>],
                // [$x, 2],



            <?php   } ?>


        ]);

        var options = {
            title: 'Company Performance',
            curveType: 'function',
            legend: {
                position: 'bottom'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
</script>



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


                //$b=  tamanho
                //$c= razao
                calcporcent($tamanho, $razao);




                ?>
            </div>



            <div id="curve_chart" style="width: 900px; height: 500px"></div>




        </div>



    </div>


</body>

</html>