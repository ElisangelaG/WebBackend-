<?php
class ProfessorFixo extends Professor
{
    private $horas = 40;
    private $valorhora;


    public function __construct($valorhora)
    {
        $this->valorhora = $valorhora;
    }

    public function getValorhora()
    {
        return $this->valorhora;
    }
    public function setValorhora($valorhora)
    {
        $this->valorhora = $valorhora;
    }
    public function nomeClasse()
    {
        return get_class($this);
    }
}