<?php

require_once 'Animal.php';

class Reptil extends Animal{
    //atributo
    private $corEscama;

    //metodos
    public function locomover(){
        echo "<p>Rastejando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo insetos</p>";
    }
    public function emitirSom(){
        echo "<p>Som de réptil</p>";
    }

    //Modificadores
    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($c){
        $this->corEscama = $c;
    }
}
