<?php

    include_once("../interfaces/crud.php");
    
class Categoria implements crud{
    protected $id;
    protected $nome;

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
}
?>