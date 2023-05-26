<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
    </tr>
<?php
    include_once("classes/categoria.class.php");
    $categorias = Categoria::Listar();
    if($categorias){
        foreach($categorias as $categoria){
?>
    <tr>
        <td><?=$categoria->getNome(); ?></td>
    </tr>
<?php
        }

    }
?>
</table>