<!DOCTYPE html>

<?php



$d = $_POST['namea'];



// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents($_POST['envia']);
// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo);
// Loop para percorrer o Objeto

//  echo $arquivo;

//echo $json;

//   print_r($json);



//foreach ($json as $valor) {}

print_r($arquivo['vetodados']);


?>

<?php



?>




<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>
</head>


<?php

/*


$vetordado = $json[0]->['vetordado'];


$tipoprogressao = $json[0]->{'tipoprogressao'};
$primeirovalor = $json[0]->{'primeirovalor'};
$razao = $json[0]->{'razao'};
$nomearquivo = $json[0]->{'nomearquivo'};
$result;

$total = count((array)$vetordado);


if ($tipoprogressao == "PA") {

    $result =  array_sum($vetordado);
}


*/

?>

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

                <?php print_r($vetordado); ?>

            </div>

        </div>


        <div class="caixa">

            <div class="titulo">
                <p> Valor de A1
                </p>
            </div>
            <div class="titulo">

                <?php print_r($primeirovalor); ?>

            </div>

        </div>



        <div class="caixa">

            <div class="titulo">Valor da Razão<p>
                </p>
            </div>
            <div class="titulo">

                <?php print_r($razao); ?>
            </div>

        </div>



        <div class="caixa">

            <div class="titulo">Tipo de progressão<p>
                </p>
            </div>
            <div class="titulo"> <?php print_r($tipoprogressao); ?></div>

        </div>



        <div class="caixa">

            <div class="titulo">
                <p> Quantidade de Números
                </p>
            </div>
            <div class="titulo"> <?php print_r($total); ?> </div>

        </div>


        <div class="caixa">

            <div class="titulo">
                <p> Somatória
                </p>
            </div>
            <div class="titulo"> <?php print_r($vetordado); ?></div>

        </div>




        <div class="caixa">

            <div class="titulo">
                <p> média
                </p>
            </div>
            <div class="titulo"> <?php print_r($vetordado); ?></div>

        </div>




        <div class="caixa">

            <div class="titulo">
                <p> Mediana
                </p>
            </div>
            <div class="titulo"> <?php print_r($vetordado); ?></div>

        </div>





    </div>


</body>

</html>