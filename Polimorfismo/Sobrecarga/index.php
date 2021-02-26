<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo de Sobrecarga</title>
</head>

<body>

    <?php

    //Polimorfismo de sobrecarga
    //Acontece quando o metodo dentro da classe tem o mesmo nome com assinaturas
    //diferentes(numero e tipo de parametros diferentes)
    //infelizmente o PHP não suporta esse tipo de polimorfismo até o momento. 

    require_once "Models/Cachorro.php";
    require_once "Models/Mamifero.php";

    $m = new Mamifero();
    $l = new Lobo();

    $m->emitirSom();
    $l->emitirSom();
    //-------------------------------
    echo "<hr>";
    //-------------------------------

    $k = new Cachorro();


    echo "<h3>Cachorro</h3>";

    $k->setPeso(3.94);
    $k->setIdade(5);
    $k->setMembros(4);
    $k->locomover();            //Saltando
    $k->alimentar();            //Mamando
    $k->emitirSom();            //Som de Mamifero
    $k->abanarRabo();
    $k->EnterrarOsso();
    $k->setCorPelo("Caramelo");

    echo $k->getCorPelo();
    
    $k->emitirSom();

    echo "<br>";

    $k->reagirFrase("ola");          // Abanar e Latir
    $k->reagirFrase("vai apanhar");  // Rosnar
    $k->reagirHora(11, 45);         // Abanar
    $k->reagirHora(21, 00);         // Ignorar
    $k->reagirDono(true);           // Abanar
    $k->reagirDono(false);          // Rosnar e latir
    $k->reagirIdadePeso(2, 12.5);        // Latir
    $k->reagirIdadePeso(17, 4.5);        // Rosnar

   

    echo "<pre>";

    print_r($k);
    echo "<br>";
    echo "</pre>";

    ?>

</body>

</html>
