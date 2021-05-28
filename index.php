<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>
</head>



<?php


$nomearqui;
$tipoP;
$valorA1;
$razao;
$numele;


?>



<body>


    <div class="geral">
        <div class="cont">


            <div class="fa">

                <h1> Gerador de PA / PG </h1>

                <div class="formulario">

                    <form action="result.php" method="POST">

                        <input type="text" name="a1" id="a1" style="width: 600px; margin-bottom:10px;" class="aio" value="Informe valor de A1">

                        <input type="text" name="razao" id="razao" style="width: 600px; margin-bottom: 10px;" value="Informe valor da razao" class="razao">

                        <input type="text" name="qtdele" id="qtdele" style="width: 600px; margin-bottom: 10px;" value="Informe a quantidade de elementos" class="qtdele">


                        <input type="text" name="qtdele" id="qtdele2" style="width: 600px; margin-bottom: 10px;" value="Informe nome do arquivo" class="qtdele2">

                        <div class="select">

                            <div class="elemen">

                                Tipo de progressão

                            </div>


                            <div class="elemen">

                                <select name="tipoP" id="tipoP" style width="600px; margin-bottom: 10px;">
                                    <option value="PA">PA</option>
                                    <option value="PG">PG</option>
                                </select>

                            </div>
                        </div>


                        <a href="result.php" target="_black">

                            <input type="submit" name="subimite" value="Salvar" style="width: 308px;" class="meubotao">

                        </a>

                    </form>

                </div>

            </div>


        </div>
    </div>


</body>

</html>