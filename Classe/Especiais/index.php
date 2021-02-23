<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos Especiais</title>
</head>

<body>

    <?php
        require_once 'Models/Caneta.php';

        $c1 = new Caneta("crown", "preta", 0.2); // setando em uma linha com construtor
        
        //setando sem construtor 
        // $c1->setModelo("BIC");
        // $c1->setCor("preta");
        // $c1->setPonta(0.5);

        print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()} <br>";
        echo "<pre>";
        print_r($c1);
        echo "</pre>";
    ?>

</body>

</html>
