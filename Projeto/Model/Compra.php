<?php
require_once ("ConectaBanco.php");

   //insere uma nova compra no banco de dados
   function insereCompra($idCompra, $data){

    include ("ConectaBanco.php");

    $query = "INSERT INTO compra (idCompra, data) VALUES ('$idCompra', '$data');";

    $comando = mysqli_query($conecta, $query);

    return $comando;

   }

?>
