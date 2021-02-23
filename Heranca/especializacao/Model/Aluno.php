<?php

require_once 'Pessoa.php';

//herança para diferença
class Aluno extends Pessoa
{
    private int $matricula;
    private string $curso;

    public function pagarMensalidade()
    {
        echo "<p> Pagando mensalidade de {$this->getNome()}</p>";
    }

    public function getMatricula()
    {
        return $this->matricula;
    }
    public function setMatricula(int $m)
    {
        $this->matricula = $m;
    }

    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso(string $c)
    {
        $this->curso = $c;
    }

}
