<?php
    class DB{
        public static $servidor = "localhost";
        public static $usuario = "root";
        public static $senha = "";
        public static $nome_banco = "crud";
    
        public static function conexao(){
            $conexao = null;
            try{
                $conexao = new PDO(
                    "mysql:host=self::$servidor; dbname=self::$nome_banco", self::$usuario, self::$senha
                );
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo "Erro de Conexão." . $e->getMessage();
            }
            
            return $conexao;
        }
    
    }
?>