<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa{

    private string $setor;
    private bool $trabalhando = true;

    //metodos
    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }

    //get & set
    public function getSetor(){
        return $this->setor;
    }
    public function getTrabalhando(){
        return $this->trabalhando;
    }

    public function setSetor(string $s){
        $this->setor = $s;
    }
    public function setTrabalhando(bool $t){
        $this->trabalhando = $t;
    }

}
