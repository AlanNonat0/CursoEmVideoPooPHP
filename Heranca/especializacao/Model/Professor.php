<?php

require_once 'Pessoa.php';

class Professor extends Pessoa
{

    private string $especialidade;
    private float $salario;

    public function receberAumento(float $aumento)
    {
        $this->salario +=  $aumento;
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    public function setEspecialidade(string $es)
    {
        $this->especialidade = $es;
    }

    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario(float $sa)
    {
        $this->salario = $sa;
    }
}
