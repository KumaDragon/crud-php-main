<?php
    include_once('classes/produto.class.php');
    include_once('classes/categoria.class.php');

    $categoria = new Categoria();
    echo $produto->getId(). "<br>";
    echo $produto->getNome(). "<br>";

    $produto = new Produto(2);
    echo $produto->getId(). "<br>";
    echo $produto->getNome(). "<br>";
    echo $produto->getPreco(). "<br>";


?>