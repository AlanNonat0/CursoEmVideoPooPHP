<?php


include_once 'Publicacao.php';



class Livro implements Publicacao
{
    //atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //construtor
    public function __construct($pessoa, $ti, $au, $tp){
        $this->setLeitor($pessoa);
        $this->setTitulo($ti);
        $this->setAutor($au);
        $this->setTotPaginas($tp);
        $this->setAberto(false);
        
    }

    //metodos publicos
    public function detalhes(){
        echo "<p>----------------------------</p>";
        echo "<h2>" . $this->getTitulo() . "</h2>";
        echo "<p>Autor: " . $this->getAutor() . "</p>";
        echo "<p>Possui: " . $this->getTotPaginas() . " Páginas</p>";
        echo "<h3>Leitor atual <h3>";
        echo "<p>Nome: " . $this->getLeitor()->getNome() . "</p>";
        echo "<p>Idade: " . $this->getLeitor()->getIdade() . "</p>";
        echo "<p>É do sexo: " . $this->getLeitor()->getSexo() . "</p>";
    }

    public function abrir(){
        if ($this->aberto == false) {
            $this->setAberto(true);
            $this->setPagAtual(1);
            echo "<p>Livro Aberto pagina " . $this->getPagAtual() . "</p>";
        }
    }
    public function fechar(){
        if ($this->getAberto() == true) {
            $this->setAberto(false);

            echo "<p>Livro Fechado</p>";
        }
    }

    public function folhear($p){
        if ($this->aberto) {
            if ($this->getTotPaginas() >= $p) {
                $this->setPagAtual($p);
                echo "<p>Pagina " . $this->getPagAtual() . "</p>";
            } else {
                echo "<p>A pagina selecionada não existe</p>";
            }
        } else {
            echo "<p>Livro fechado Abra o livro para folhear</p>";
        }
    }
    public function avancarPag(){
        if ($this->aberto) {

            if ($this->getPagAtual() < $this->getTotPaginas()) {

                $this->setPagAtual($this->getPagAtual() + 1);
                echo "<p>Pagina " . $this->getPagAtual() . "</p>";
            } else {
                echo "<p>Fim</p>";
            }
        } else {
            echo "<p>Livro fechado Abra o livro</p>";
        }
    }
    public function voltarPag(){
        if ($this->aberto) {

            if ($this->getPagAtual() > 1) {
                $this->setPagAtual($this->getPagAtual() - 1);
                echo "<p>Pagina " . $this->getPagAtual() . "</p>";
            } else {
                echo "<p>Não é Possivel voltar</p>";
                echo "<p>Pagina " . $this->getPagAtual() . "</p>";
            }
        } else {
            echo "<p>Livro fechado Abra o livro</p>";
        }
    }

    //get & sets
    private function getTitulo(){
        return $this->titulo;
    }
    private function getAutor(){
        return $this->autor;
    }
    private function getTotPaginas(){
        return $this->totPaginas;
    }
    private function getPagAtual(){
        return $this->pagAtual;
    }
    private function getAberto(){
        return $this->aberto;
    }
    
    private function getLeitor(){
        return $this->leitor;
    }


    private function setTitulo($at){
        $this->titulo = $at;
    }
    private function setAutor($at){
        $this->autor = $at;
    }
    private function setTotPaginas($at){
        $this->totPaginas = $at;
    }
    private function setPagAtual($at){
        $this->pagAtual = $at;
    }
    private function setAberto($at){
        $this->aberto = $at;
    }
    private function setLeitor($pessoa){
        $this->leitor = $pessoa;
    }
}
