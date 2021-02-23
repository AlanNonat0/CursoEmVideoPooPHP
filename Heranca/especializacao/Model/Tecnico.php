<?php
require_once 'Aluno.php';

//especialização de aluno
class Tecnico extends Aluno
{
    private $registroProfissional;

    public function praticar()
    {
        echo "<p>Praticando...</p>";
    }

    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($re)
    {
        $this->registroProfissional = $re;
    }
}
