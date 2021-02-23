<?php

abstract class  Pessoa
{
    //atributos
    protected string $nome;
    protected int $idade;
    protected string $sexo;

    //metodos
    public function fazerAniv()
    {
        $this->idade++;
    }


    //get & sets
    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getSexo()
    {
        return $this->sexo;
    }

    public function setNome(string $n)
    {
        $this->nome = $n;
    }
    public function setIdade(int $i)
    {
        $this->idade = $i;
    }
    public function setSexo(string $s)
    {
        $this->sexo = $s;
    }
}
