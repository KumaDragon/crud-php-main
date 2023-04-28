<?php

    include_once("interfaces/crud.php");
    
class Categoria implements crud{
    protected $id;
    protected $nome;

    public function __construct($id=false){
        if($id){
            $sql = "SELECT * FROM categorias where id = ?";
            $conexao = DB::conexao();
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            foreach($stmt as $obj){
                print_r($obj);
            }
        }
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function adicionar(){}    //C
    public function listar(){}       //R
    public function atualizar(){}    //U
    public function excluir(){}      //D
}
?>