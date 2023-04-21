<?php

    include_once("interfaces/crud.php");

class Produto implements crud{
    protected $id;
    protected $nome;
    protected $categoria_id;
    protected $preco;
    protected $quant;

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

    public function setQuant($quant){
        $this->quant = $quant;
    }
    public function getQuant(){
        return $this->quant;
    }

    public function __construct($id=false){
        if($id){
            echo "Testando o construtor";
        }
    }

    public function adicionar(){}    //C
    public function listar(){}       //R
    public function atualizar(){}    //U
    public function excluir(){}      //D

}


?>