<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero
{
    //metodos
    public function EnterrarOsso(){
        echo "<p>Enterrou Osso</p>";
    }

    public function abanarRabo(){
        echo "<p>Abanou Rabo</p>";
    }

    public function emitirSom(){
        echo "<p>Latindo</p>";
    }
}
