<?php

include ("../Model/Compra.php");

include ("../Model/Produto.php");

include ("../Model/ProdutoCompra.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //verifica as entradas
    $idProduto = filter_input(INPUT_POST, "var_idProduto", FILTER_SANITIZE_NUMBER_INT);
    $descricao = filter_input(INPUT_POST, "var_descricao");
    $preco_custo = filter_input(INPUT_POST, "var_preco_custo", FILTER_SANITIZE_NUMBER_FLOAT);
    $preco_venda = filter_input(INPUT_POST, "var_preco_venda", FILTER_SANITIZE_NUMBER_FLOAT);
    $quantidade = filter_input(INPUT_POST, "var_quantidade", FILTER_SANITIZE_NUMBER_INT);
    $data = filter_input(INPUT_POST, "var_data");
    $action_form = filter_input(INPUT_POST, "action_form");

    $idCompra = $idProduto;
    
    $preco_custoTotal = $preco_custo * $quantidade;

    //converte data para o padrão MYSQL
    function convertData($dt){
        $day = substr($dt, 0, 2);
        $month = substr($dt, 3, 2);
        $year = substr($dt, 6, 4);
        $dt = $year . "-" . $day . "-" . $month;
        return $dt;
    }

    $data_convertida = convertData($data);

    if($action_form === 'efetuarCompra'){

        $return_insercaoProduto = insereProduto($idProduto, $descricao, $preco_custo, $preco_venda, $quantidade);

        $return_insercaoCompra = insereCompra($idCompra, $data_convertida);
        
        $idProduto_has_Compra = ultimoRegistro()+1;

        $return_insercaoProdutoCompra = insereProdutoCompra($idProduto_has_Compra, $idCompra, $idProduto, $quantidade, $preco_custoTotal);

        $idProduto_has_Compra = $idProduto_has_Compra+1;

        if($return_insercaoCompra === true && $return_insercaoProduto === true && $return_insercaoProdutoCompra === true )
            echo "<script language ='javascript' type='text/javascript'> alert('Produto Comprado!'); window.location.href='/View/Index.php' </script>";

        else
        echo "<script language ='javascript' type='text/javascript'> alert('Não foi possível efetuar compra!');location.href='/View/Index.php'</script>";

}
}

?>