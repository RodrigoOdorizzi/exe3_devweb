<!DOCTYPE html>

<?php



$d = $_POST['namea'];



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

    <div class="con" style=" width: 600px;margin:auto; border:1px solid #000;">


        mostrando dados


        <?php







        // Atribui o conteúdo do arquivo para variável $arquivo
        $arquivo = file_get_contents($_POST['envia']);
        // Decodifica o formato JSON e retorna um Objeto
        $json = json_decode($arquivo);
        // Loop para percorrer o Objeto

        //  echo $arquivo;


        foreach ($json as $value) {
            print_r($value);
        }





        ?>



    </div>


</body>

</html>