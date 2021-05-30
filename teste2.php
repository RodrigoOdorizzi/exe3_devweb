<!DOCTYPE html>

<?php





$arquivo = file_get_contents('cadastro.json');
$json = json_decode($arquivo);
foreach ($json as $key) {
    echo     $key->vetor . " | "   . $key->codigo . " | " . $key->nome . " | " . $key->telefone . "<br>";
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


    <div class="geral">
        <div class="cont">
        </div>
    </div>


</body>

</html>