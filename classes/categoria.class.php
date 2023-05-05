<?php

    include_once("interfaces/crud.php");
    include_once("classes/DB.class.php");

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
                $this->setId($obj['id']);
                $this->setNome($obj['nome']);
            }
        }
    }

    public function setId($id){
        $this -> id = $id;
    }
    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function getId(){
        return $this -> id;
    }
    public function getNome(){
        return $this -> nome;
    }

    public function adicionar(){}    //C
    public static function listar(){}       //R
    public function atualizar(){}    //U
    public function excluir(){}      //D
}
