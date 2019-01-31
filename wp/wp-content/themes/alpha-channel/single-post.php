<?php
	get_header();
?>

<div class="single-post">
	<div class="container">
		<div class="row d-flex flex-column algin-items-center">

			<div class="box-img">
		  		<img src="<?php the_field('imagem_interna') ?>" alt="">
			</div>

		    <span class="data"><?php the_time('d/m/Y'); ?></span>

		    <div class="conteudo">
			    <div class="title-pad">
			    	<h1><?php the_title(); ?></h1>
			    </div>	
			    <?php the_field('content_post'); ?>		    	
		    </div>

			<a href="http://localhost/wp-alpha-channel/blog/" title="" class="btn1" style="display: inline-block; padding: 8px 12px; width: 84px;">< Voltar</a>
		</div>
	</div>
</div>

<?php
	get_footer();
?>