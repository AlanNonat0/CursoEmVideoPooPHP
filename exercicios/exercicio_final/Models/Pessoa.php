<?php

abstract class Pessoa
{
    //atributo
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    //construtor
    public function __construct($no, $ida, $se){
        $this->nome = $no;
        $this->idade = $ida;
        $this->sexo = $se;
        $this->experiencia = 0;
    }

    //Metodos
    protected function ganharExp($xp){
        $this->experiencia = $xp;
    }

    //get & set
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    public function getIdade(){
        return $this->Idade;
    }
    public function setIdade($ida){
        $this->Idade = $ida;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($s){
        $this->sexo = $s;
    }

    public function getExperiencia(){
        return $this->experiencia;
    }
    public function setExperiencia($e){
        $this->experiencia = $e;
    }
}
