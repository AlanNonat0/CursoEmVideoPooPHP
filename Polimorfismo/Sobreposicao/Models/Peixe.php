<?php

require_once 'Animal.php';

class Peixe extends Animal{
    //atributo
    private $corEscama;

    //metodos
    public function soltarBolha(){
        echo "<p>Soltou uma Bolha</p>";
    }


    public function locomover(){
        echo "<p>Nadando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo invertebrados</p>";
    }
    public function emitirSom(){
        echo "<p>Não Emite Som</p>";
    }

    //Modificadores
    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($c){
        $this->corEscama = $c;
    }
}
