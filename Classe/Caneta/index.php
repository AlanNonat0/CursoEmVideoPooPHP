<?php
require_once 'Models/Caneta.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe</title>
</head>

<body>
    <pre>
    <?php
    $c1 = new Caneta();
    $c1->modelo = "BIC cristal";
    $c1->cor = "azul";

    // $c1->ponta = "07"; //gera um erro por ser um atributo privado
    // $c1->carga = "99"; //gera um erro por ser um atributo protegido
    // $c1->tampada = "true"; //gera um erro por ser um atributo protegido
    $c1->rabiscar();
    print_r($c1)


    ?>    
    </pre>
</body>

</html>
