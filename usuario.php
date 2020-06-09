<?php
class Usuario
{
    private $login;
    private $senha;

    public function __construct($login, $senha)
    {
        $this->login = $login;
        $this->senha = $senha;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function verificarSenha($senha)
    {
        if ($senha == $this->senha) {
            return  true;
        } else {
            return false;
        }
    }
}