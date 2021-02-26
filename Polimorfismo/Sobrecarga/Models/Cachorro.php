<?php

require_once 'Lobo.php';

class Cachorro extends Lobo{
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

    public function reagirFrase(string $frase){
        if(strtoupper($frase) == "TOMA COMIDA" || strtoupper($frase) == "OLA"){
            echo "<p>Abanar e Latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }

    public function reagirHora(int $hora, $min){

        if($hora<12){
            echo "<p>Abanar</p>";
        }
        elseif ($hora>=18) {
        echo "<p>Ignorar</p>";
        }else {
        echo "<p>Abanar e Latir</p>";
        }
    }

    public function reagirDono(bool $dono){
        if($dono){
            echo "<p>Abanar</p>";
        }else {
            echo "<p>Rosnar e latir</p>";
        }
    }

    public function reagirIdadePeso(int $idade, float $peso){
        if ($idade < 5) {
            if ($peso<10) {
                echo "<p>Abanar</p>";
            }else {
                echo "<p>Latir</p>";
            }
        }elseif ($peso<10) {
            echo "<p>Rosnar</p>";
        }else {
            echo "<p>Ignorar</p>";
        }
    }
}
