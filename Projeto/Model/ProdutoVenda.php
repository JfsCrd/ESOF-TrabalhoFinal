<?php
require_once ("ConectaBanco.php");

   //insere uma nova venda na tabela associativa "produto_has_venda"
   function insereProdutoVenda($idProduto_has_Venda, $idCompra, $idProduto, $quantidade, $valor){

    include ("ConectaBanco.php");

    $query = "INSERT INTO produto_has_Venda (idCompra, idProduto, idProduto_has_Venda, quantidade, valor) VALUES ('$idCompra', '$idProduto', '$idProduto_has_Venda', '$quantidade', '$valor';";

    $comando = mysqli_query($conecta, $query);

    return $comando;

   }

?>
