<?php
require_once ("ConectaBanco.php");

   //insere uma nova venda no banco de dados
   function insereVenda($idVenda, $data){

    include ("ConectaBanco.php");

    $query = "INSERT INTO venda (idVenda, data) VALUES ($idVenda, $data);";

    $comando = mysqli_query($conecta, $query);

    return $comando;

   }

?>
