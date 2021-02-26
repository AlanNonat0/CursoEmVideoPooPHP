<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero
{
    //metodos
    public function locomover(){
        echo "<p>Saltando</p>";
    }

    public function usarBolsa(){
        echo "<p>Usou a Bolsa</p>";
    }
}
