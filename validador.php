<!DOCTYPE html>

<?php



$d = $_POST['namearr'];
$e = $_POST['envia'];
$f = $_POST['localofi'];




$_FILES['arquivo'];

print_r($_FILES['arquivo']);

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


$d = $_POST['namearr'];
$e = $_POST['envia'];




//print_r($_POST['envia']);
//print_r($d . '.json');

// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents($e);
// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo, true);
// Loop para percorrer o Objeto





//$firstElement = current($json);
//$tamanho = count($json);


print_r($json);


$validador = true;


/*
//Função para verificar se há alguma letra no vetor
function get_numeric()
{

    for ($x = 0; $x < $GLOBALS['tamanho']; $x++) {


        if (is_numeric($GLOBALS['json'][$x])) {
            $GLOBALS['validador'] = true;
        } else {
            $GLOBALS['validado'] = false;
        }
    }
}
*/
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

                <p> Validação do vetor:
                </p>



            </div>

            <div class="titulo">



                <?php

                /*
                if ($validador = true) {

                    echo " não há letras no array";
                } else {

                    echo " ha letras ";
                }
*/
                ?>
            </div>

        </div>





    </div>


</body>

</html>