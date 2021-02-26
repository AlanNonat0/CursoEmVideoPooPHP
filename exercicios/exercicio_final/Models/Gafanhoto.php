<?php
require_once 'Pessoa.php';

class Gafanhoto extends Pessoa{
    //atributo
    private $login;
    private $totAssistido;
    
    //construtor
    public function __construct($no, $ida, $se, $log){
        parent::__construct($no, $ida, $se);//herda o construct
        $this->login = $log;
        $this->totAssistido = 0;
    }

    //Metodos
    public function viuMaisUm(){
        $this->totAssistido ++;
    }

    //get & set
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($l){
        $this->login = $l;
    }

    public function getTotAssistido(){
        return $this->totAssistido;
    }
    public function setTotAssistido($t){
        $this->totAssistido = $t;
    }

}
