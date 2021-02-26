<?php

require_once 'Gafanhoto.php';
require_once 'Video.php';

class Visualizacao{
    //atributo
    private $espectador;
    private $filme;

    //construct
    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
        $this->filme->setViews($this->filme->getViews()+1);
    }

    //metodos
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota){

        if ($nota >= 10){
            $this->filme->setAvaliacao(10);
        }else{
            $this->filme->setAvaliacao($nota);
        }

        $this->filme->setNumAvaliacao($this->filme->getNumAvaliacao()+1);
    }

    public function avaliarPorc($porc){
        $nota = $porc/10;
        if($nota >= 100){
            $this->filme->setAvaliacao(10);
        }else{
            $this->filme->setAvaliacao(round($nota));
        } 
    }

    //get & set
    public function getEspectador(){
        return $this->espectador;
    }
    public function setEspectador($e){
        $this->espectador = $e;
    }

    public function getFilme(){
        return $this->filme;
    }
    public function setFilme($f){
        $this->filme = $f;
    }
}
