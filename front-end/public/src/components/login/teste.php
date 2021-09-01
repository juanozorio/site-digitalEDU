<?php

  $router->namespace('app\login\controller')
    ->prefix('login')
    ->group(function ($router) {    
      $router->post('/', 'AuthenticationController@login');
  });

  $array=json_decode($_POST['data']);

  return var_dump($array);