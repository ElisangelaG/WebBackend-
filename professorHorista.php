<?php
class ProfessorHorista extends Professor
{
    private $horas;
    private $valorhora;


    public function __construct($horas, $valorhora)
    {
        $this->horas = $horas;
        $this->valor = $valorhora;
    }
    public function getHoras()
    {
        return $this->horas;
    }
    public function setHoras($horas)
    {
        $this->horas = $horas;
    }
    public function getValorhora()
    {
        return $this->valorhora;
    }
    public function setValorhora($valorhora)
    {
        $this->valor = $valorhora;
    }
    public function calcularSalario()
    {
        return $this->horas * $this->getValorhora;
    }
    public function nomeClasse()
    {
        return get_class($this);
    }
}