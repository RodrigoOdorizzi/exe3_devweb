<!DOCTYPE html>


<?php
$nomearqui;
$tipoP;
$valorA1;
$razao;
$numele;


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




if (isset($_POST['a1'])) {

    $GLOBALS['valorA1'] = $_POST['a1'];
}
if (isset($_POST['razao'])) {

    $GLOBALS['razao'] = $_POST['razao'];
}
if (isset($_POST['qtdele'])) {

    $GLOBALS['numele'] = $_POST['qtdele'];
}
if (isset($_POST['nomearq'])) {

    $GLOBALS['nomearqui'] = $_POST['nomearq'];
}
if (isset($_POST['tipoP'])) {

    $GLOBALS['tipoP']  = $_POST['tipoP'];
}

?>



<body>




    <div class="geral">
        <div class="cont">


            <div class="fa">

                <h1> Gerador de PA / PG </h1>
                <br>
                <h3> Insira os dados para geração da progressão. </h3>


                <div class="formulario">

                    <form action="dados.php" method="POST">

                        <h3> Informe valor de A1</h3>
                        <input type="text" name="a1" id="a1" style="width: 600px; margin-bottom:10px;" class="aio" value="...">

                        <h3> Informe valor da razao</h3>
                        <input type="text" name="razao" id="razao" style="width: 600px; margin-bottom: 10px;" value="..." class="razao">

                        <h3> Informe a quantidade de elementos</h3>
                        <input type="text" name="qtdele" id="qtdele" style="width: 600px; margin-bottom: 10px;" value="..." class="qtdele">

                        <h3> Informe nome do arquivo</h3>
                        <input type="text" name="nomearq" id="nomearq" style="width: 600px; margin-bottom: 10px;" value="..." class="nomearquivo">

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



                        <input type="submit" name="subimite" value="Gerar" style="width: 308px;" class="meubotao">



                    </form>



                </div>

            </div>


        </div>
    </div>


</body>

</html>