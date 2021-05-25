<?php foreach($lista_produto as $row): ?>
<li class="app-product-item app-border">
    <a href="javascript:void(0);" onclick="abrirModal('modal-corpo-pequeno','<?= base_url('painel/pagina/filter_modal/'.$row['IDPRD']); ?>'); return false;">
        <img src="<?= base_url('assets/images/erro-img.png'); ?>" class="app-product-item-img">
        <span><?= $row['DC_PRODUTO']; ?></span>
    </a>
</li>
<?php endforeach; ?>