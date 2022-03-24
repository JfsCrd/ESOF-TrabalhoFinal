<?php
require_once ("ConectaBanco.php");

   //insere uma nova compra na tabela associativa "produto_has_compra"
   function insereProdutoCompra($idProduto_has_Compra, $idCompra, $idProduto, $quantidade, $valor){

    include ("ConectaBanco.php");

    $query = "INSERT INTO produto_has_compra (idCompra, idProduto, idProduto_has_Compra, quantidade, valor) VALUES ('$idCompra', '$idProduto', '$idProduto_has_Compra', '$quantidade', '$valor');";

    $comando = mysqli_query($conecta, $query);

    return $comando;

   }

   //retorna a chave do ultimo registro
   function ultimoRegistro(){

      include ("ConectaBanco.php");

      $query = ("SELECT MAX(idProduto_has_Compra) as maxId FROM produto_has_compra"); 
      
      $comando = mysqli_query($conecta, $query);

      return $comando;
   }

?>
