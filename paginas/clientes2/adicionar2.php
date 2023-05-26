<?php
if(isset($_POST["botao"])&& $_POST["botao"] == "Salvar"){
    include_once("classes/clientes.class.php");
    $produto = new Clientes();
    $produto->setNome($_POST['nome']);
    $produto->setCpf($_POST['cpf']);
    $produto->setSexo($_POST['sexo']);
    $produto->setDNascimento($_POST['d_nascimento']);
    $produto->adicionar();
}  
?>

<form method="POST" action="" autocomplete="on">
    Nome: <input type="text" name="nome" /><br />
    Cpf: <input type="text" name="cpf" /><br />
    <!--<input type="radio" name="sexo" value="Masculino">
    <label for="masculino">Masculino</label><br>
    <input type="radio" name="sexo" value="Feminino">
    <label for="feminino">Feminino</label><br>
    <input type="radio" name="sexo" value="Outro">
    <label for="outro">Outro</label><br>-->
    Sexo: <input type="text" name="sexo" /><br />
    Data de Nascimento: <input type="date" name="d_nascimento" /><br />
<input type="submit" name="botao" value="Salvar" />
</form>