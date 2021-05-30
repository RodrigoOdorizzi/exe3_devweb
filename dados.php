<!DOCTYPE html>



<?php
$nomearqui;
$tipoP;
$valorA1;
$razao;
$numele;
$vetDados = [];
$soma;



?>



<?php

function calculaPA($a, $b, $c)
{

    $soma = $b;

    for ($x = 0; $x < $a; $x++) {

        $soma  = ($soma + $c);

        $GLOBALS['vetDados'][$x] =  $soma;
    }
}


function calculaPG($a, $b, $c)
{

    $soma = $b;

    for ($x = 0; $x < $a; $x++) {

        $soma  = ($soma * $c);

        $GLOBALS['vetDados'][$x] =  $soma;
    }
}



?>


<?php
$a = $_POST['qtdele'];
$b = $_POST['a1'];
$c = $_POST['razao'];
$d = $_POST["nomearq"];
$e = $_POST["tipoP"];



if ($e == "PA") {

    calculaPA($a, $b, $c);
} else
    calculaPG($a, $b, $c);
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


                        for ($x = 0; $x < $a - 0; $x++) {

                            echo  $vetDados[$x] . ", ";
                        }

                        ?>


                    <form action="tee.php" method="POST">


                        <input type="hidden" id="nomearq" name="namea" value=" <?php echo $d ?>">
                        <input type="submit" name="subimite" value="Salvar" style="width: 308px;" class="meubotao">



                    </form>

                    </p>


                </div>


                <?php



                // Array com dados
                $co1 = array($vetDados, $_POST['qtdele'],  $a = $_POST['tipoP'], $_POST['a1'], $_POST['razao'], $_POST['nomearq']);
                //$co1 = array('QTDEle' => $_POST['qtdele'], 'Tipo Pro' => $_POST['tipoP']);




                $dados = array($co1);


                $json = file_get_contents("valores.json");
                $data = json_decode($json);


                // Tranforma o array $dados em JSON
                $dados_json = json_encode($dados);


                /* Cria o arquivo valores.jsonagenda-bs/index.php
‘w’ : Cria o arquivo e escreve os dados,
se o arquivo já existir será substituído pelo novo;
‘a’ : Cria o arquivo e escreve os dados,
se o arquivo já existir 1,4,7,9,2,5,0);os dados novos serão
adicionados ao arquivo existente;
‘r’ : Abre o arquivo que já existe para leitura,
e somente leitura;
*/
                $fp = fopen("valores.json", "w");
                // Escreve o conteúdo JSON no arquivo
                fwrite($fp, $dados_json);
                // Fecha o arquivo
                fclose($fp);



                // Atribui o conteúdo do arquivo para variável $arquivo
                //      $arquivo = file_get_contents('valores.json');
                // Decodifica o formato JSON e retorna um Objeto
                //    $json = json_decode($arquivo);
                // Loop para percorrer o Objeto
                //  foreach ($json as $value) {
                //    echo $value . "<br>";
                //}




                ?>




            </div>
        </div>
    </div>




</body>

</html>