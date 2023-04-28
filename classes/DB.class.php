<?php
    class DB{
       
    
        public static function conexao(){
            $conexao = null;


            try{ 
                $conexao = new PDO(
                    "mysql:host=localhost; dbname=crud", "root", ""
                );
                
            }catch(PDOException $e){
                echo "Erro de Conexão:" . $e->getMessage();
            }
            
            return $conexao;
        }
    
    }
?>