<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo{
    //atributo
    private $titulo;
    private $avaliacao;
    private $numAvaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    //construtor
    public function __construct($ti){
        $this->titulo = $ti;
        $this->avaliacao = 0;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    //Metodos
    public function play(){
        if (!$this->reproduzindo) {
            $this->reproduzindo = true;
        }
    }
    public function pause(){
        if ($this->reproduzindo) {
            $this->reproduzindo = false;
        }
    }
    public function like(){
        $this->curtidas++;
    }

    //get & set
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        $this->titulo = $t;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }
    public function setAvaliacao($av){
        $media = ($this->avaliacao + $av)/$this->numAvaliacao;
        $this->avaliacao = $media;
    }

    public function getNumAvaliacao(){
        return $this->numAvaliacao;
    }
    public function setNumAvaliacao($av){
        $this->numAvaliacao = $av;
    }

    public function getViews(){
        return $this->views;
    }
    public function setViews($v){
        $this->views = $v;
    }

    public function getCurtidas(){
        return $this->curtidas;
    }
    public function setCurtidas($c){
        $this->curtidas = $c;
    }

    public function getReproduzindo(){
        return $this->reproduzindo;
    }
    public function setReproduzindo($r){
        $this->reproduzindo = $r;
    }
}
