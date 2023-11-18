<?php
setlocale(LC_ALL,'pt_BR.utf8');
date_default_timezone_set('America/Sao_Paulo');
define('SERVIDOR','mysql');
define('BANCO', 'sistema');
define('USUARIO', 'root');
define('SENHA','12345');

setlocale(LC_ALL, 'pt_BR.utf8');
date_default_timezone_set('America/Sao_Paulo');

class Conexao {
    // private $pdo;

    // public function MontarConexao() {
    //     if (!$this->pdo) {
    //         try {
    //             $options = [
    //                 PDO::ATTR_PERSISTENT => true, // Conexão persistente
    //                 PDO::ATTR_TIMEOUT => 60, // Tempo limite de 60 segundos
    //                 PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4", // Definir conjunto de caracteres
    //                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Modo de erro exceção
    //             ];

    //             $dsn = "mysql:host=".SERVIDOR.";dbname=".BANCO;
    //             $this->pdo = new PDO($dsn, USUARIO, SENHA, $options);

    //             // Verificar a estabilidade da conexão
    //             if (!$this->pdo || $this->pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS) === false) {
    //                 $this->pdo = null; // Limpar a conexão existente
    //                 // Reconectar
    //                 $this->pdo = new PDO($dsn, USUARIO, SENHA, $options);
    //             }
    //         } catch (PDOException $th) {
    //             // Log do erro
    //             error_log("Erro de conexão com o banco de dados: " . $th->getMessage());
    //             // Exibir mensagem amigável ao usuário
    //             die("Desculpe, ocorreu um erro ao conectar ao banco de dados. Por favor, tente novamente mais tarde.");
    //         }
    //     }

    //     return $this->pdo;
    // }
}

?>