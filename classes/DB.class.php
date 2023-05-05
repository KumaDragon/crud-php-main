<?php
    class DB{
       
    
        public static function conexao(){
            $conexao = null;


            try{ 
                $conexao = new PDO(
                    "mysql:host=localhost; dbname=crud", 'root', '' //só decora essa sintaxe, são 3 parâmetros
                    
                );
                
            }catch(PDOException $e){
                echo "Erro de Conexão:" . $e->getMessage();
            }
            
            return $conexao;
        }
    // bd, método listar, excluir, adicionar(create) e classe padrão (get e set)
    }
?>