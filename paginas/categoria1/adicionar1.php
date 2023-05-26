<?php
if(isset($_POST["botao"])&& $_POST["botao"] == "Salvar"){
    include_once("classes/categoria.class.php");
    $produto = new Categoria();
    $produto->setNome($_POST['nome']);
    $produto->adicionar();
}  
?>

<form method="POST" action="" autocomplete="on">
    Nome: <input type="text" name="nome" /><br />
<input type="submit" name="botao" value="Salvar" />
</form>