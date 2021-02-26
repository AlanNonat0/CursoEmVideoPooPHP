<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício-Relacionamento</title>
</head>

<body>
    <?php
    require_once "Models/Livro.php";
    require_once "Models/Pessoa.php";

    $p = new Pessoa("Oracio", 20, "Masculino");

    $l = new Livro($p, "IT a coisa", "stiphen mosntro", 500);

    $l->abrir();
    $l->avancarPag();
    $l->avancarPag();
    $l->voltarPag();
    $l->detalhes();
    $l->folhear(500);
    $l->avancarPag();
    $l->folhear(1);
    $l->voltarPag();
    ?>
</body>

</html>
