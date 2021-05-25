<ul class="app-cart-list" id="app-cart-list">
<?php 
    if(count($lista_carrinho) == 0):
?>
<li class="app-cart-item">
    <div class="app-grid app-grid-table-columns-4">
        <h2>Carrinho vazio</h2>
    </div>
</li>
<?php 
    else: 
    $total = 0;
    foreach($lista_carrinho as $chave => $value):
?>  
<li class="app-cart-item">
<div class="app-grid app-grid-table-columns-4">
    <div class="app-grid-table-item">
	    <strong>Titulo</strong>
        <span><?= $value[0]['produto']; ?></span>
    </div>
    <div class="app-grid-table-item">
		<strong>Quant.</strong>
        <span><?= $value[0]['qtd']; ?></span>
    </div>
    <div class="app-grid-table-item">
        <strong>Preço</strong>
        <span>
            <?php 
                $total += $value[0]['preco'];
                echo $value[0]['preco']; 
            ?>
        </span>
    </div>
    <div class="app-grid-table-item">
        <button class="app-btn app-btn-del app-border" onclick="delProdutoCarrinho('#app-cart-list','<?= base_url('painel/pagina/del_produto_carrinho').'/'.$chave; ?>'); return false;"><i class="fas fa-times"></i></button>
    </div>
</div>
</li>
<?php 
    endforeach;
    endif;
?>
</ul>



<div class="app-cart-box">
    <div class="app-grid app-grid-table-row-2">
        <div class="app-grid-table-item">
            <div class="app-grid app-grid-table-columns-2 padding">
                <div class="app-grid-item text-left">
                    <strong>Subtotal*</strong>
                </div>
                <div class="app-grid-item text-right">
                    <span>R$ <?= $total; ?></span>
                </div>
            </div>
        </div>
        <div class="app-grid-table-item">
            <div class="app-grid app-grid-table-columns-2 padding color-red">
                <div class="app-grid-item text-left">
                    <strong>Total*</strong>
                </div>
                <div class="app-grid-item text-right">
                    <span>R$ <?= $total; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>


<!--<div class="app-button-box">
    <button class="btn app-btn-send">Finalizar</button>
</div>-->

