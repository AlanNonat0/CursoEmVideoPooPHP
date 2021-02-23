<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especialização</title>
</head>
<body>
<pre>
    <?php
    require_once "Model/Pessoa.php";
    require_once "Model/Aluno.php";
    require_once "Model/Bolsista.php";
    require_once "Model/Professor.php";
    require_once "Model/Tecnico.php";
    require_once "Model/Visitante.php";



    //$p1 = new Pessoa(); Classes abstratas nao podem ser instanciadas
    $v1 = new Visitante();
    $v1->setNome("Alan");
    $v1->setIdade(27);
    $v1->setSexo("M");

    print_r($v1);

    $a1 = new Aluno();
    $a1->setNome("pedro");
    $a1->setIdade(16);
    $a1->setSexo("M");
    $a1->setMatricula(1111);
    $a1->setCurso("Informatica");

    $a1->pagarMensalidade();

    print_r($a1);
    echo "<hr>";
    $b1 = new Bolsista();
    $b1->setMatricula(1112);
    $b1->setNome("Jubileu");
    $b1->setBolsa(12.5);
    $b1->setCurso("Administração");
    $b1->setIdade(20);
    $b1->pagarMensalidade();

    $b1->renovarBolsa();

    print_r($b1);



    ?>
</pre>
</body>
</html>
