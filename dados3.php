<!DOCTYPE html>



<?php
$nomearqui;
$tipoP;
$valorA1;
$razao;
$numele;
$vetDados = [];
$soma;


$local = "C:\xampp\htdocs\exe3_devweb" . $_POST['nomearq'] . ".json";
$re = realpath($_SERVER["DOCUMENT_ROOT"]);
//echo $re;
$local3 = chr(92);
$local4 = "e";
$local2 = $local3 . $local4 . "xe3_devweb";


$localofi = $re . $local2 . $local3 . $_POST['nomearq'] . ".json";
echo $localofi;

?>


<?php

$dados = array('vetoda' => array($vetDados), 'qtdelem' => $_POST['qtdele'], 'tipoPro' => $_POST['tipoP'], 'valor1' => $_POST['a1'], 'raz' => $_POST['razao'], 'nomearquivo' => $_POST['nomearq']);


// Array com dados
//     $dados = array($vetDados, $_POST['qtdele'],  $a = $_POST['tipoP'], $_POST['a1'], $_POST['razao'], $_POST['nomearq']);
//$co1 = array('QTDEle' => $_POST['qtdele'], 'Tipo Pro' => $_POST['tipoP']);




//   $dados = array($co1);

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
$fp = fopen($_POST['nomearq'] . ".json", "w");
// Escreve o conteúdo JSON no arquivo
fwrite($fp, $dados_json);
// Fecha o arquivo
fclose($fp);



//   $json = file_get_contents($_POST['nomearq'] . ".json");
//  $data = json_decode($json);






// Atribui o conteúdo do arquivo para variável $arquivo
//      $arquivo = file_get_contents('valores.json');
// Decodifica o formato JSON e retorna um Objeto
//    $json = json_decode($arquivo);
// Loop para percorrer o Objeto
//  foreach ($json as $value) {
//    echo $value . "<br>";
//}




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

                        Fazer Download do arquivo:



                        <a href="<?php echo $localofi  ?> " download> baixar

                        </a>



                    <form action="tee.php" method="POST">


                        <input type="hidden" id="nomearq" name="namea" value=" <?php echo $d ?>">

                        Enviar arquivo: <input type="file" name="envia">

                        <input type="submit" name="subimite" value="Enviar arquivo" style="width: 308px;" class="meubotao">



                    </form>

                    </p>


                </div>





            </div>
        </div>
    </div>




</body>

</html>