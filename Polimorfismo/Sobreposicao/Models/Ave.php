<?php

require_once 'Animal.php';

class Ave extends Animal{
    //atributo
    private $corPena;

    //metodos
    public function fazerNinho(){
        echo "<p>Construiu ninho</p>";
    }

    public function locomover(){
        echo "<p>Voando</p>";
    }

    public function alimentar(){
        echo "<p>Comendo Frutas</p>";
    }

    public function emitirSom(){
        echo "<p>Som de Ave</p>";
    }

    //Modificadores
    public function getCorPena(){
        return $this->corPena;
    }
    public function setCorPena($c){
        $this->corPena = $c;
    }
}
