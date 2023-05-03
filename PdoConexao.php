<?php

class PdoConexao {
    private static $instancia;
   
    // Impedir instanciação
    private function __construct() { }
    // Impedir clonagem
    private function __clone() { }
   
    //Impedir utilização do método Unserialize
    public function __wakeup() { }
   
    /**
     * Retorna uma instância única de conexão PDO
     *
     * @return object PDO connection
     */
    public static function getInstancia() {
        if(!isset(self::$instancia)) {
            try {
                $dsn = "mysql:host=localhost;dbname=exemplocrud";
                $usuario = "root";
                $senha = ""; // Preencha aqui com a senha do seu servidor de banco de dados.
                 
                // Instanciando um novo objeto PDO informando o DSN e parâmetros de Array
                self::$instancia = new PDO($dsn, $usuario, $senha);
                 
                // Configurando o PDO para lançar exceções em caso de erros
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             
            } catch (PDOException $excecao) {
                // Em caso de erro, exibir mensagem de erro e encerrar a aplicação
                echo "Erro ao conectar ao banco de dados: " . $excecao->getMessage();
                exit();
            }
        }
        return self::$instancia;
    }
}