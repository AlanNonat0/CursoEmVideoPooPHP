<?php

require_once 'Reptil.php';

class Tartaruga extends Reptil{
    private $corCasco;


    //metodos
    public function locomover(){
        echo "<p>Andando Beeeeeeem devagar</p>";
    }

    public function setCorCasco($c){
        $this->corCasco = $c;
    }

    public function getCorCasco(){
        return  $this->corCasco;
    }
}
