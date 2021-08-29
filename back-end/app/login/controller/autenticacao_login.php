<?php
namespace app\login\controller;

use app\login\service\LoginService;

class AuthenticationController
{
  
	private $service;

	public function __construct(LoginService $service)
    {
		$this->service = $service;
    }

    public function login($email, $senha)
    {
        return $this->service->login($email, $senha);
    }
}
