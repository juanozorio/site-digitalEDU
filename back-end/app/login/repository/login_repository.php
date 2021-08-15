<?php 
namespace app\login\repository;

use app\conexao\ConexaoDB;

class LoginRepository
{
    private $conexao;

    public function __construct(ConexaoDB $conexao)
    {
        $this->conexao = $conexao;
    }

    public function login($email, $senha)
    {
        $abrirConexao = $this->conexao->abrirConexao();
        
        $query = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha';";

	    $result = mysqli_query($abrirConexao, $query);

        $this->conexao->fecharConexao();
        
	    return mysqli_num_rows($result);
    }
}
