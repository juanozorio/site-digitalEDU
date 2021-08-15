<?php
namespace app\conexao;

class ConexaoDB
{
    protected $host = "127.0.0.1";
    protected $usuario = "root";
    protected $senha = "";
    protected $db = "digital_edu";

    private function conexao() {
        return mysqli_connect($this->host, $this->usuario, $this->senha, $this->db) or die ("Não foi possível conectar");    
    }

    public function abrirConexao() {
        return $this->conexao;
    }

    public function fecharConexao() {
        return exit();
    }
}
