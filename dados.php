<!DOCTYPE html>



<?php
$nomearqui;
$tipoP;
$valorA1;
$razao;
$numele;
$vetDados = array();
$soma;
$a = $_POST['qtdele'];
$b = $_POST['a1'];
$c = $_POST['razao'];
$d = $_POST["nomearq"];
$e = $_POST["tipoP"];


//$local = "C:\xampp\htdocs\exe3_devweb" . $_POST['nomearq'] . ".json";
$re = realpath($_SERVER["DOCUMENT_ROOT"]);
//echo $re;
$local3 = chr(92);
$local4 = "e";
$local2 = $local3 . $local4 . "xe3_devweb";
$localofi = $re . $local2 . $local3 . $_POST['nomearq'] . ".json";



function calculaPA($a, $b, $c)
{


    $soma = $b;

    $GLOBALS['vetDados'][0] =  intval($b);

    for ($x = 1; $x < $a; $x++) {

        $soma  = ($soma + $c);
        $GLOBALS['vetDados'][$x] = $soma;
    }
}


function calculaPG($a, $b, $c)
{

    $soma = $b;


    $GLOBALS['vetDados'][0] =  intval($b);

    for ($x = 1; $x <  $a; $x++) {

        $soma  = ($soma * $c);

        $GLOBALS['vetDados'][$x] =  $soma;
    }
}



?>



<?php



if ($e == "PA") {
    calculaPA($a, $b, $c);
} else
    calculaPG($a, $b, $c);
?>




<?php



$co1 = $vetDados;




$dados = array($co1);

// Tranforma o array $dados em JSON
$dados_json = json_encode($co1);


/* Cria o arquivo valores.jsonagenda-bs/index.php
‘w’ : Cria o arquivo e escreve os dados,
se o arquivo já existir será substituído pelo novo;
‘a’ : Cria o arquivo e escreve os dados,
se o arquivo já existir 1,4,7,9,2,5,0);os dados novos serão
adicionados ao arquivo existente;
‘r’ : Abre o arquivo que já existe para leitura,
e somente leitura;
*/
$fp = fopen($d . ".json", "w");
// Escreve o conteúdo JSON no arquivo
fwrite($fp, $dados_json);
// Fecha o arquivo
fclose($fp);




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

                <h1>

                    Gerado Arquivo JSON com sucesso!!!</h1>

                <div class="elemen">

                    <a href="<?php echo ($d . ".json") ?> " download style="text-decoration: none;">
                        <h2> baixar Aqui!!!</h2>

                    </a>

                </div>





                <div class="elemen" style="margin-bottom: 10px;">


                    <p> Enviar arquivo JSON</p>
                    <form action="tee.php" method="POST" enctype="multipart/form-data">

                        arquivo: <input type="file" name="arquivo">

                        <input type="submit" name="subimite" value="Enviar arquivo" style="width: 308px; margin-top: 20px;" class="meubotao">



                    </form>


                </div>



            </div>
        </div>
    </div>




</body>

</html>