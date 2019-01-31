<?php
	get_header();
?>

<div class="single-post">
	<div class="container">
		<div class="row d-flex flex-column algin-items-center">

			<div class="box-img">
		  		<img src="<?php the_field('imagem'); ?>" alt="">
			</div>

		    <span class="data"><?php the_field('data_completa_event'); ?></span>

		    <div class="conteudo">
			    <div class="title-pad">
			    	<h1><?php the_field('nome_evento'); ?></h1>
			    </div>	
			    <?php the_field('conteudo_event'); ?>
			    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>

			    <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</strong>

			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>		     -->	

			    <a href="http://localhost/wp-alpha-channel/eventos/" title="" class="btn1" style="display: inline-block; padding: 8px 12px;">< Voltar</a>
		    </div>
		</div>
	</div>
</div>

<?php
	get_footer();
?>