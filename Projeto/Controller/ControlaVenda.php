<?php
include ("../Model/Venda.php");
include ("../Model/Produto.php");
include ("../Model/ProdutoVenda.php");
require_once ("../Model/ConectaBanco.php");


    function mostraProdutos(){
        include ("../Model/ConectaBanco.php");
        $query = "SELECT descricao FROM produto;";
        $resultado = mysqli_query($conecta, $query);

        while($produtos = mysqli_fetch_assoc($resultado)) {
            echo "<option>". $produtos["descricao"] ."</option>";
        }

    }

?>