<?php
require_once "Models/ControleRemoto.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Encapsulamento</title>
</head>

<body>

    <h1>Projeto Controle Remoto</h1>
    <pre>
        <?php
        $c = new ControleRemoto();
        $c->ligar();
        $c->maisVolume();
        $c->maisVolume();
        $c->abrirMenu();
        $c->maisVolume();
        ?>
    </pre>
</body>

</html>