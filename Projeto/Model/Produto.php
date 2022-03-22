<?php
require_once ("ConectaBanco.php");

    //insere produtos com base nas entradas do formulário da interface gráfica
    function insereProduto($idProduto, $descricao, $preco_custo, $preco_venda, $quantidade){

        include("ConectaBanco.php");

        $query = "INSERT INTO produto (idProduto, descricao, quantidade, preco_venda, preco_custo) VALUES ($idProduto, '$descricao', $quantidade, $preco_venda, $preco_custo);";

        $comando = mysqli_query($conecta, $query);
    }

    //deleta produto baseado no id coletado na interface gráfica
    function deletaProduto($idProduto){

        include("ConectaBanco.php");

        $query = "DELETE FROM produto WHERE idproduto = '$idProduto';";

        $comando = mysqli_query($conecta, $query);

        return $comando;

    }

    //edita produtos baseado no id coletado na interface gráfica
    function editaProduto($idProduto, $descricao, $preco_custo, $preco_venda, $quantidade){

        include("ConectaBanco.php");
        $query = "UPDATE produto
                  SET descricao='$descricao', preco_custo = '$preco_custo', preco_venda = '$preco_venda'
                  WHERE idproduto = $idProduto;";

    }

?>
