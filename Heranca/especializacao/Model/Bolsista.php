<?php
require_once 'Aluno.php';

//especilização de aluno
class Bolsista extends Aluno
{
    private $bolsa;

    public function renovarBolsa()
    {
        echo "<p>Bolsa renovada</p>";
    }

    //sobreposição
    public function pagarMensalidade(){
        echo "<p>{$this->nome} é Bolsista! Então paga com desconto de {$this->getBolsa()}%</p>";
    }


    public function getBolsa()
    {
        return $this->bolsa;
    }
    public function setBolsa($bo)
    {
        $this->bolsa = $bo;
    }
}
