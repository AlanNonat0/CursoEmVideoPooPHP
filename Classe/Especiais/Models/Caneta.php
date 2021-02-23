<?php

class Caneta
{
    //atributos 
    public  $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    //construtor
    function __construct($modelo, $cor, $ponta)
    {  
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->setTampada(true);
    }

    //getters & setters metodos assessores
    function getCor()
    {
        return $this->cor;
    }

    function getModelo()
    {
        return $this->modelo;
    }

    function getPonta()
    {
        return $this->ponta;
    }

    function getTampada()
    {
        return $this->tampada;
    }

    function setCor($cor)
    {
        $this->cor = $cor;
    }

    function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }

    function setTampada($tampada)
    {
        $this->tampada = $tampada;
    }

    //outro modo de fazer um construtor é dar o nome da classe a ele
    //em outras linguagens de programação, como java por exemplo, esse é o padrão

    //    public function Caneta($m, $c, $p) {
    //        
    //        $this->setModelo($m);
    //        $this->setCor($c);
    //        $this->setPonta($p);
    //        $this->tampar();
    //       
    //    }

}
