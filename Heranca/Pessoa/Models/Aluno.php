<?php


require_once 'Pessoa.php';

class Aluno extends Pessoa{
    //atributo
    private int $matr;
    private bool $sitMatr;
    private string $curso;


    //metodos
    public function cancelarMatr(){
        if ($this->sitMatr) {
            echo "<p>matricula cancelada</p>";
            $this->setSitMatr(false);
        }
    }

    public function __construct()
    {
        $this->setSitMatr(true);
    }

    //get & set
    public function getMatr(){
        return $this->matr;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function getSitMatr(){
        return $this->sitMatr;
    }

    public function setMatr(int $m){
        $this->matr = $m;
    }
    public function setCurso(string $c){
        $this->curso = $c;
    }
    public function setSitMatr(bool $sm){
        $this->sitMatr = $sm;
    }

}
