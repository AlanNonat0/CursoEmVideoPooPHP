<?php

require_once 'Reptil.php';

class Cobra extends Reptil
{
    private $cor;

    public function setCor($c){
        $this->cor = $c;
    }

    public function getCor(){
        return  $this->cor;
    }
}
