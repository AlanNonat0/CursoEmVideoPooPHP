<?php



class Pessoa{
    //atributo
    private $nome;
    private $idade;
    private $sexo;

    //metodos
    public function fazerAniversario(){
        $this->idade++;
    }

    //metodos especiais
    public function __construct($no, $ida, $sex){
        $this->setNome($no);
        $this->setIdade($ida);
        $this->setSexo($sex);
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        $this->idade = $i;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($s){
        $this->sexo = $s;
    }
}
