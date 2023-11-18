<?php

require_once __DIR__ . "/../Trait/ErrorLogginTrait.php";

class LoginModel extends ConexaoModel {
    use ErrorLoggingTrait;

    private $conexao;

    public function __construct() {
        $this->conexao = self::conexao();
    }

    public function validarAcesso($dados) {
        
        $usuario = isset($dados['user']) ? $dados['user'] : '';
        $senha = isset($dados['password']) ? $dados['password'] : '';

        if (empty($usuario) || empty($senha)) {
            return null; // Dados de login vazios, retorna null
        }

        $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result) {
            return $result; // Dados de login válidos, retorna os dados do usuário
        } else {
            return null; // Dados de login inválidos, retorna null
        }
    }
}

