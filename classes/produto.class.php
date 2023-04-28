<?php

    include_once("interfaces/crud.php");
    include_once("classes/DB.class.php");

class Produto implements crud{
    protected $id;
    protected $nome;
    protected $categoria_id;
    protected $preco;
    protected $quant;

    public function __construct($id=false){
        if($id){
            $sql = "SELECT * FROM produtos where id = ?";
            $conexao = DB::conexao();
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            foreach($stmt as $obj){
                $this->setId($obj['id']);
                $this->setNome($obj['nome']);
                $this->setCategoria($obj['categoria_id']);
                $this->setPreco($obj['preco']);
                $this->setQuantidade($obj['quantidade']);
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
    
    public function setCategoria($categoria_id){
        $this->categoria_id = $categoria_id;
    }
    public function getCategoria(){
        return $this->categoria_id;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function getPreco(){
        return $this->preco;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }



    public function adicionar(){}    //C
    public function listar(){}       //R
    public function atualizar(){}    //U
    public function excluir(){}      //D

}


?>