<div class="modal-titulo">
    <button class="btn-modal btn-cancel" onclick="fecharModal();">
        <i class="fas fa-times"></i> Fechar
    </button>
</div>
<div class="modal-conteudo">

    <form id="form-add-produto-carrinho">
        <?php foreach($lista_produto as $row): ?>

        <input type="text" value="20000002" name="cdusuario" class="cdusuario">
        <input type="text" value="<?= $row['IDPRD']; ?>" name="id_produto">
        <input type="text" value="<?= $row['DC_PRODUTO']; ?>" name="produto" class="produto">
        <input type="text" value="<?= $row['PRECO']; ?>" name="preco" class="preco"> 

        <a href="#" class="aumentar" onclick="aumentar(); return false;">+</a>
        <input type="number" min="1" value="1" name="qtd" class="qtd">
        <a href="#" class="diminuir" onclick="diminuir(); return false;">-</a>
        
        <input type="text" value="<?= $row['DESCONTO']; ?>" name="desconto" class="desconto">
        <input type="text" value="<?= $row['PRECO']; ?>" name="resultado" class="resultado">
        <?php endforeach; ?>

        <button class="app-btn app-btn-add" onclick="addProdutoCarrinho('#form-add-produto-carrinho','<?= base_url('painel/pagina/add_produto_carrinho'); ?>'); return false;">Adicionar</button>
    </form>
</div>