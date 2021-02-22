<?php

class Lutador
{

    //----------Atribute--------
    private  $nome;
    private  $nacionalidade;
    private  $idade;
    private  $altura;
    private  $peso;
    private  $categoria;
    private  $vitorias;
    private  $derrotas;
    private  $empates;

    //----------------Methods----------------
    public function apresentar()
    {
        // echo "<p>---------------------------------</p>";
        // echo "<p>CHEGOU A HORA! O Lutador: ".$this->getNome();
        // echo "<br/>Diretamente de ".$this->getNacionalidade();
        // echo "<br/>".$this->getIdade()." Anos";
        // echo "<br/>".$this->getAltura()."m de altura";
        // echo "<br/>Pesando ".$this->getPeso()." Kg";
        // echo "<br/>Categoria: ".$this->getCategoria();
        // echo "<br/>Ganhou: ".$this->getVitorias();
        // echo "<br/>Perdeu: ".$this->getDerrotas();
        // echo "<br/>Empatou: ".$this->getEmpates();

        echo "<p>---------------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo " diretamente de " . $this->getNacionalidade();
        echo ", Tem " . $this->getIdade() . " Anos, pesa " . $this->getPeso() . " Kg e tem ";
        echo $this->getAltura() . "m de altura";
        echo "<br/>Ele tem " . $this->getVitorias() . " Vitórias " . $this->getDerrotas() . " Derrotas e " . $this->getEmpates() . " Empates </p>";
    }

    public function status()
    {
        // echo "<br/>".$this->getNome();
        // echo "<br/>".$this->getPeso()." Kg";
        // echo "<br/>".$this->getVitorias()." Vitórias";
        // echo "<br/>".$this->getDerrotas()." Derrotas";
        // echo "<br/>".$this->getEmpates()." Empates";

        echo "<p>---------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e ja ganhou " . $this->getVitorias() . " vezes";
        echo " perdeu " . $this->getDerrotas() . " vezes e";
        echo " empatou " . $this->getEmpates() . " vezes </p>";
    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }


    //----------------Contructor------------- 
    public function __construct($no, $na, $ida, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $ida;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }


    //----------------get & sets------------- 
    public function getNome()
    {
        return $this->nome;
    }
    private function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    private function getIdade()
    {
        return $this->idade;
    }
    private function getAltura()
    {
        return $this->altura;
    }
    private function getPeso()
    {
        return $this->peso;
    }
    function getCategoria()
    {
        return $this->categoria;
    }
    private function getVitorias()
    {
        return $this->vitorias;
    }
    private function getDerrotas()
    {
        return $this->derrotas;
    }
    private function getEmpates()
    {
        return $this->empates;
    }

    private function setNome($nome)
    {
        $this->nome = $nome;
    }
    private function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
    private function setIdade($idade)
    {
        $this->idade = $idade;
    }
    private function setAltura($altura)
    {
        $this->altura = $altura;
    }
    private function setPeso($pe)
    {
        $this->peso = $pe;
        $this->setCategoria();
    }

    function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    private function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }
    private function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }
    private function setEmpates($empates)
    {
        $this->empates = $empates;
    }
}
