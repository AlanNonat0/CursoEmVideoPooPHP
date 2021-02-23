<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    


        public function escrever(){
        echo "escrevendo...";
    }
    public function rabiscar(){
        if($this->tampada == true){
            echo "<p>ERRO! Não posso rabiscar</p>";
            
        } else {
            
            echo "<p>Estopu rabiscando</p>";
        }
        
    }
    
    public function  tampar(){
        $this->tampada = true;
    }
    
    public function destampar(){
        $this->tampada = false;
    }
    
   
}
