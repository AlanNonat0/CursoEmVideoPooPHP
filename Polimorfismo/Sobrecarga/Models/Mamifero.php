<?php

require_once 'Animal.php';

class Mamifero extends Animal{
    //atributos
    private $corPelo;

    //metodos
    public function locomover(){
        echo "<p>Correndo</p>";
    }
    public function alimentar(){
        echo "<p>Mamando</p>";
    }
    public function emitirSom(){
        echo "<p>Som de mamifero</p>";
    }

    //Modificadores
    public function getCorPelo(){
        return $this->corPelo;
    }
    public function setCorPelo($c){
        $this->corPelo = $c;
    }
}
