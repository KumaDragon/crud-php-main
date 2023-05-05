<?php

    include_once("interfaces/crud.php");
    include_once("classes/DB.class.php");

class Produto implements crud{
    protected $id;
    protected $nome;
    protected $categoria_id;
    protected $preco;
    protected $quantidade;

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
        $this -> id = $id;
    }
    public function setCat($categoria_id){
        $this -> categoria_id = $categoria_id;
    }
    public function setNome($nome){
        $this -> nome = $nome;
    }
    public function setPreco($preco){
        $this -> preco = $preco;
    }
    public function setQuant($quantidade){
        $this -> quantidade = $quantidade;
    }
    #getters
    public function getId(){
        return $this -> id;
    }
    public function getCat(){
        return $this -> categoria_id;
    }
    public function getNome(){
        return $this -> nome;
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

    public function adicionar(){    //C
        $sql = "INSERT INTO produtos (categoria_id, nome, preco, quantidade)
                VALUES (?, ?, ?, ?)";       
                
            try{        //try-catch serve como if else, só que usado pra tratar erros e mostrar só uma mensagem
                $conexao = DB::conexao();
                $stmt = $conexao->prepare($sql); //$stmt =  STATEMANT
                $stmt->bindParam(1, $this->categoria_id);
                $stmt->bindParam(2, $this->nome);
                $stmt->bindParam(3, $this->preco);
                $stmt->bindParam(4, $this->quantidade); //os numeros representam a ordem dos "?"
                $stmt->execute();
            }catch(PDOException $e){
                echo "Erro na Função Adicionar Produto:" .$e->getMessage();
            }
            }  


    public static function listar(){   //R
        $sql = "SELECT * FROM produtos";
        $conexao = DB::conexao();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $registros = $stmt->fetchAll(PDO::FETCH_ASSOC); //os registros que vem do bd tá na $registros e o fetchall é o que traz os dados do bd
        if($registros){
                $objetos = array();   //foreach serve para tratar arrays, $objetos vai guardar e transformar para objetos
                foreach($registros as $registro){  //esse foreach vai se repetir pra cada objeto, pegando todos os dados
                    $temporario = new Produto();
                    $temporario->setId($registro['id']);
                    $temporario->setNome($registro['nome']);
                    $temporario->setCategoria($registro['categoria_id']);
                    $temporario->setPreco($registro['preco']);
                    $temporario->setQuantidade($registro['quantidade']);
                    $objetos[] = $temporario;
                }
            return $objetos;
        }
        return false;
    }
    public function atualizar(){}    //U
    public function excluir(){}      //D

}
