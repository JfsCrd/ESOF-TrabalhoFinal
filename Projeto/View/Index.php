<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../View/Auxiliares/Cabecalho.php");?>
</head>
<body>

    <div>
        <h3>Efetuar Compra</h3>
        <form action="../Controller/ControlaCompra.php" method="POST" style="margin: 10px; margin-top: 20px;">
        <input type="hidden" name="action_form" value="efetuarCompra" style="display:none;"/>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Descrição</label>
                    <input type="text" class="form-control" name="var_descricao" placeholder="Placa de Vídeo" required>
                </div>

                <div class="form-group col-md-1">
                    <label>Código</label>
                    <input type="text" class="form-control" name="var_idProduto" placeholder="1" required>
                </div>

                <div class="form-group col-md-2">
                    <label>Preço de Custo</label>
                    <input type="text" class="form-control" name="var_preco_custo" placeholder="1251,99" required>
                </div>

                <div class="form-group col-md-2">
                    <label>Preço de Venda</label>
                    <input type="text" class="form-control" name="var_preco_venda" placeholder="1351,99" required>
                </div>

                <div class="form-group col-md-1">
                    <label>Quantidade</label>
                    <input type="text" class="form-control" name="var_quantidade" placeholder="10" required>
                </div>

                <div class="form-group col-md-2">
                    <label>Data de Compra</label>
                    <input type="date" class="form-control" name="var_data" placeholder="12/12/2012" required>
                </div>
                <div class="form-group col-md-1">
                    <button type="submit" class="btn btn-primary btn-sm">Comprar</button>    
                </div>
            </div>  


        </form>
    </div>

     <div>
        <h3>Efetuar Venda</h3>
        <form action="../Controller/ControlaVenda.php" method="POST" style="margin: 10px; margin-top: 20px;">
        <input type="hidden" name="action_form" value="efetualVenda" style="display:none;"/>
            <div class="form-row">
                <div class="form-group">
                    <select class="form-select col-xg-6">
                        <option>Selecione um produto</option>
                        <?php 
                        include("../Controller/ControlaVenda.php");
                        mostraProdutos();
                        ?>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <input type="text" name="var_quantidade" placeholder="10" required>
                </div>
            
                <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-primary btn-sm">Vender</button>  
                </div>
            
            </div>    
    </form>



</body>
</html>