<?php

require_once 'Pessoa.php';

class Professor extends Pessoa{
    private string $especialidade;
    private float $salario;

    //metodos
    public function receberAum($aum){
        $this->salario += $aum;
    }

    //get & set
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function getSalario(){
        return $this->salario;
    }

    public function setEspecialidade(string $e){
        $this->especialidade = $e;
    }
    public function setSalario(float $s){
        $this->salario = $s;
    }
}
