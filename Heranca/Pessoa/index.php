<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <pre>
    <?php
        require_once "Models/Pessoa.php";
        require_once "Models/Aluno.php";
        require_once "Models/Funcionario.php";
        require_once "Models/Professor.php";

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();


        $p1->setNome("pedro");
        $p2->setNome("Maria");
        $p3->setNome("Cláudio");
        $p4->setNome("Fabiana");

        $p2->setCurso("Informatica");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");


        $p1->setIdade(20);
        $p1->setSexo("M");
        $p4->setSexo("F");

        //$p1->receberAum(550.20); erro classe pessoa nao tem salario
        //$p2->mudarTrabalho(); erro pq classe aluno nao possui esse metodo
        //$p4->cancelarMatr(); nao pode cancelar matricula

        $p3->receberAum(550.20); 
        $p4->mudarTrabalho(); 
        $p2->cancelarMatr();    

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
    ?>
    </pre>
</body>
</html>
