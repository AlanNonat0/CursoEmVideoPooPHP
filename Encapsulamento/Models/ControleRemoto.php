<?php
require_once "interface.php";

class ControleRemoto implements Controlador
{
    private int $volume;
    private bool $ligado;
    private bool $tocando;

    public function __construct()
    {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    //----------------get & sets-------------
    private function getVolume()
    {
        return $this->volume;
    }
    private function getLigado()
    {
        return $this->ligado;
    }
    private function getTocando()
    {
        return $this->tocando;
    }
    private function setVolume(int $v)
    {
        $this->volume = $v;
    }
    private function setLigado(bool $l)
    {
        $this->ligado = $l;
    }
    private function setTocando(bool $t)
    {
        $this->tocando = $t;
    }
    //----------------methods------------------

    //ligar
    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        $this->setLigado(false);
    }

    //menu
    public function abrirMenu()
    {

        echo "<p><---------------MENU-------------></p>";
        echo "<br> Esta ligado? (" . ($this->getLigado() ? 'sim' : 'não') . ")";
        echo "<br> Esta Tocando? (" . ($this->getTocando() ? 'sim' : 'não') . ")";
        echo "<br> Volume: " . $this->getVolume() . " ";

        for ($i = 0; $i < $this->getVolume(); $i += 10) {
            echo "|";
        }
    }
    public function fecharMenu()
    {
        echo "<br>Fechando menu";
    }


    //volume
    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }


    //mudo
    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    //video
    public function play()
    {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}
