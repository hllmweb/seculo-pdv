<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app-default.css?v=').time(); ?>">


    <title><?= $titulo_page; ?></title>
</head>
<body>
    <div class="app-default">
        
    	<div class="app-grid app-grid-template-columns-2">
	    	<div class="app-grid-item">
		        <!--header-->
			    <div class="app-header">
		            <div class="app-header-title app-flex">
		                
		                <div class="app-width-auto text-left">
		                    <span class="text-name">{Nome do Usuário}</span>                        
		                </div>

		                <div class="app-width-auto text-right">
		                    <!-- <span class="app-menu-toggle">
		                       <i class="fas fa-bars"></i>
		                    </span> -->
		                   <span>Carrinho</span>
		                </div>

		            </div>
		        </div>   




		        <!--category-->
		        <div class="app-category">
		        	<ul class="app-category-list app-flex">
						<?php foreach($lista_categoria as $row): ?>
		        		<li class="app-category-item">
			        		<a href="javascript:void(0);" onclick="abrirProduto('<?= base_url('painel/pagina/filter_produto/'.$row['CD_NATUREZA']); ?>'); return false;">
			        			<img src="<?= base_url($row['IMAGEM']); ?>" class="app-category-item-img app-border">
			        			<span><?= $row['DESCRICAO'] ?></span>
			        		</a>
		        		</li>
						<?php endforeach; ?>

						

		        	</ul>
		        </div> 




		        <!--product-->
		        <div class="app-product scroll">
		        	<ul class="app-product-list app-flex" id="app-product-list">

		        		<!-- <li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-1.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Uva</span>
		        			</a>
		        		</li>

		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>
		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>

		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>
		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>
		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>
		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>        		

		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>  

		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>  

		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>  		        				        		


		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>  


		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>  

		        		<li class="app-product-item app-border">
		        			<a href="">
		        				<img src="<?= base_url('assets/images/produto-2.png'); ?>" class="app-product-item-img">
		        				<span>Suco de Laranja Laranja Laranja</span>
		        			</a>
		        		</li>   -->
		        	</ul>	
		        </div> 
	    	</div>


	    	<div class="app-grid-item">
	       		<div class="app-cart">	

	       			<div class="app-cart-box">
	       				<div class="app-grid app-grid-table-columns-1">
	       					<div class="app-grid-table-item padding text-center">
	       						<strong>Saldo Credito</strong>
	       						<span>R$ 00,00</span>
	       					</div>
	       				</div>
	       			</div>


	       			   <?php
					  		$this->load->view('painel/carrinho'); 
					   ?>
	       			
	        	


	       			<!--
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
	       								<span>R$ 000,00</span>
	       							</div>
	       						</div>
	       					</div>
	       				</div>
	       			</div>

	       			<div class="app-button-box">
	       				<button class="btn app-btn-send">Finalizar</button>
	       			</div>-->





	        	</div> 
	    	</div>


    	</div>


	</div>

	

	<!--modal ou popup-->
	<div id="modal" class="modal-geral">
		<div id="modal-tamanho">
			<div id="modal-conteudo">
				
			</div>
		</div>
	</div>
	
	
	<!-- <div class="mascara_branca hidden"><div class="loading_circle"><div class="loading fade"></div><div class="loading2 fade"></div></div></div> -->

    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.mask.js'); ?>"></script>
	<script src="<?= base_url('assets/js/main.js'); ?>"></script>
</body>
</html>