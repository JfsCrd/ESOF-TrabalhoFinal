<?php

require_once ("ConectaBanco.php");

    if($_SERVER['REQUEST_METHOD']==='POST'){   

        

        if($action_form == "editar_produto"){
            //chama função de editar produto em Model/Produto.php
            $return_edicao = editaProduto($idProduto, $descricao, $preco_custo, $preco_venda, $quantidade);

            if ($return_edicao!=false)
                echo "<script language ='javascript' type='text/javascript'> alert('OK! Produto editado.');</script>";
            
            else 
                echo "<script language ='javascript' type='text/javascript'> alert('FALHA! Produto não pode ser editado.');</script>";
        }

        else if ($action_form == "excluir_produto"){
            //chama a função de deletar produto em Model/Produto.php
            $return_exclusao = deletaProduto($idProduto);

            if($return_exclusao)
                echo "<script language ='javascript' type='text/javascript'> alert('OK! Produto excluído.');</script>";
            
            else 
                echo "<script language ='javascript' type='text/javascript'> alert('FALHA! Produto não pode ser deletado.');</script>";
        } 
    }


?>