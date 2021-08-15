<?php 
namespace app\login\service;

use app\login\repository\LoginRepository;

class LoginService
{
    private $repository;

    public function __construct(LoginRepository $repository)
    {
        $this->repository = $repository;
    }

    public function login($email, $senha)
    {   
        $usuario = $this->repository->login($email, $senha);

        $autenticado = false;

        if($usuario) {
            $autenticado = true;
            return $autenticado;
        }
        
        return $autenticado;
    }
}