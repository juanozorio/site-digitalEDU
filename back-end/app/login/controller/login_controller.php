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
      return print_r("DEU CERTO CARALHO");
     //$array=json_decode($_POST['data']);

      //return $this->service->login($email, $senha);
  }
}
