<!DOCTYPE html>

<?php


// Array com dados
$cliente1 = array(

    'vetor' => array(5 => 1, 12 => 2),
    'codigo' => '001',
    'nome' => 'William',
    'telefone' => '012 9999-6352'
);




$dados = array($cliente1);
$dados_json = json_encode($dados);
$fp = fopen("cadastro.json", "w");
fwrite($fp, $dados_json);
fclose($fp);

?>


<a href="teste2.php">

    acesse aqui
</a>






<html lang="pt-BR">

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
        </div>
    </div>


</body>

</html>