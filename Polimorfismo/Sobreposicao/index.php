<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo de Sobreposição</title>
</head>

<body>

    <?php
    //require_once "Models/Animal.php";
    require_once "Models/Ave.php";
    require_once "Models/Mamifero.php";
    require_once "Models/Peixe.php";
    require_once "Models/Reptil.php";
    require_once "Models/Canguru.php";
    require_once "Models/Cachorro.php";
    require_once "Models/Cobra.php";
    require_once "Models/Tartaruga.php";
    require_once "Models/Goldfish.php";
    require_once "Models/Arara.php";

    //$n = new Animal(); retorna um erro por ser uma classe abstrata (não instanciavel)
    $m = new Mamifero();
    $r = new Reptil();
    $p = new Peixe();
    $a = new Ave();

    //Polimorfismo de sobreposição
    //Acontece quando SUBSTITUÍMOS um metodo de uma superclasse na sua subclasse, usando a MESMA ASSINATURA

    echo "<h3>Mamifero</h3>";
    $m->setPeso(85.3);
    $m->setIdade(2);
    $m->setMembros(4);
    $m->locomover(); //Correndo
    $m->alimentar(); //Mamando
    $m->emitirSom(); //Som de Mamifero
    $m->setCorPelo("Cinza");


    echo "<br>";

    echo "<h3>Réptil</h3>";
    $r->setPeso(1.2);
    $r->setIdade(2);
    $r->setMembros(4);
    $r->locomover(); //Correndo
    $r->alimentar(); //Mamando
    $r->emitirSom(); //Som de Mamifero
    $r->setCorEscama("Verde");

    echo "<br>";

    echo "<h3>Peixe</h3>";
    $p->setPeso(0.35);
    $p->setIdade(1);
    $p->setMembros(0);
    $p->locomover(); //Nadando
    $p->alimentar(); //Comendo invertebrados
    $p->emitirSom(); //Nao emite som
    $p->setCorEscama("Dourado");

    echo "<br>";

    echo "<h3>Ave</h3>";
    $a->setPeso(0.89);
    $a->setIdade(2);
    $a->setMembros(2);
    $a->locomover(); //voando
    $a->alimentar(); //Comendo Frutas
    $a->emitirSom(); //Som de Ave
    $a->setCorPena("Azul");

    echo "<pre>";
    print_r($m);
    echo "<br>";
    print_r($r);
    echo "<br>";
    print_r($p);
    echo "<br>";
    print_r($a);
    echo "</pre>";

    //-------------------------------
    echo "<hr>";
    //-------------------------------

    $m = new Mamifero();
    $c = new Canguru();
    $k = new Cachorro();
    $co = new Cobra();
    $t = new Tartaruga();
    $g = new GoldFish();
    $a = new Arara();

    echo "<h3>Mamifero</h3>";

    $m->setPeso(5.70);
    $m->setIdade(8);
    $m->setMembros(4);
    $m->locomover(); //Correndo
    $m->alimentar(); //Mamando
    $m->emitirSom(); //Som de Mamifero
    $m->setCorPelo("Cinza");
    echo $m->getCorPelo();
    echo "<br>";

    echo "<h3>Canguru</h3>";

    $c->setPeso(55.30);
    $c->setIdade(3);
    $c->setMembros(4);
    $c->locomover(); //Slatando
    $c->alimentar(); //Mamando
    $c->emitirSom(); //Som de Mamifero
    $c->usarBolsa();
    $c->setCorPelo("Castor");
    echo $c->getCorPelo();
    echo "<br>";

    echo "<h3>Cachorro</h3>";

    $k->setPeso(3.94);
    $k->setIdade(5);
    $k->setMembros(4);
    $k->locomover(); //Slatando
    $k->alimentar(); //Mamando
    $k->emitirSom(); //Som de Mamifero
    $k->abanarRabo();
    $k->EnterrarOsso();
    $k->setCorPelo("Caramelo");
    echo $k->getCorPelo();
    echo "<br>";

    echo "<h3>Cobra</h3>";

    $co->setPeso(2);
    $co->setIdade(1);
    $co->setMembros(0);
    $co->locomover(); //Correndo
    $co->alimentar(); //Mamando
    $co->emitirSom(); //Som de Mamifero
    $co->setCor("verde");
    echo $co->getCor();
    echo "<br>";

    echo "<h3>Tartaruga</h3>";

    $t->setPeso(50);
    $t->setIdade(30);
    $t->setMembros(4);
    $t->locomover(); //Correndo
    $t->alimentar(); //Mamando
    $t->emitirSom(); //Som de Mamifero
    $t->setCorCasco("verde");
    echo $t->getCorCasco();
    echo "<br>";

    echo "<h3>Peixe dourado</h3>";

    $g->setPeso(0.5);
    $g->setIdade(1);
    $g->setMembros(0);
    $g->locomover(); //Correndo
    $g->alimentar(); //Mamando
    $g->emitirSom(); //Som de Mamifero
    $g->setCorEscama("Dourado");
    echo $g->getCorEscama();

    echo "<br>";

    echo "<h3>Arara</h3>";

    $a->setPeso(3);
    $a->setIdade(2);
    $a->setMembros(2);
    $a->locomover(); //Correndo
    $a->alimentar(); //Mamando
    $a->emitirSom(); //Som de Mamifero
    $a->setCorPena("Azul");
    echo $a->getCorPena();
    echo "<br>";

    echo "<pre>";
    print_r($m);
    echo "<br>";
    print_r($c);
    echo "<br>";
    print_r($k);
    echo "<br>";
    print_r($co);
    echo "<br>";
    print_r($t);
    echo "<br>";
    print_r($g);
    echo "<br>";
    print_r($a);
    echo "</pre>";

    ?>

</body>

</html>
