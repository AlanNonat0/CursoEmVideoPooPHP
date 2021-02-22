<?php
require_once "Lutador.php";

class Luta
{
    //atributos
    private  $desafiado;
    private  $desafiante;
    private bool $aprovada;


    //metodos publicos
    public function marcarLuta($l1, $l2)
    {
        if (($l1->getCategoria() ===  $l2->getCategoria()) && ($l1 != $l2)) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
            //É possivel acessar com sets

        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
            //tambem é possivel acessar de forma direta por estar dentro da classe
        }
    }

    public function lutar()
    {
        if ($this->getAprovada()) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);

            switch ($vencedor) {
                case 0: //empate
                    echo "<p>Empatou!</p> ";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;

                case 1: //ganhou Desafiado
                    echo "<p>" . $this->desafiado->getNome() . " Venceu</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;

                case 2: //ganhou desafiante
                    echo "<p>" . $this->desafiante->getNome() . " Venceu</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }

    //especiais get sets
    public function setDesafiado($dd)
    {
        $this->desafiado = $dd;
    }
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiante($dt)
    {
        $this->desafiante = $dt;
    }
    public function getDesafiante()
    {
        return $this->desafiante;
    }

    private function setAprovada($ap)
    {
        $this->aprovada = $ap;
    }
    private function getAprovada()
    {
        return $this->aprovada;
    }
}

/**
 * REGRAS
 * 
 * Só pode ser marcada entre lutadores da mesma categoria.
 * 
 * desafiado e desafiante devem ser lutadores diferentes.
 * 
 * só pode acontecer se estiver aprovada.
 * 
 * só pode ter  como resultado a vitoria de um dos lutadores ou empate
 */
