<?php
	get_header();
?>

<div class="cabecalho-curso">
	<div class="container">
		<div class="row">
			<h2>BLOG</h2>
			<ul class="d-flex">
				<li><a href="http://localhost/faep/wp/">home</a></li>
				<li>></li>
				<li><a href="http://localhost/faep/wp/blog/">Blog</a></li>
				<li>></li>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="single-post">
	<div class="container">
		<div class="row d-flex flex-column algin-items-center">

			<div class="title-pad">
				<h1><?php the_title(); ?></h1>
				<div class="item-design">
					<i class="icon icon-chapeu2"></i>
				</div>
			</div>

			<div class="box-img">
		  		<img src="<?php the_field('imagem_interna') ?>" alt="">
			</div>

			<div class="conteudo">
				<ul class="d-flex flex-column flex-lg-row lista-dados-post">

					<?php 
						global $post;
						$idPost = get_the_ID();
						$postcat = get_the_category( $idPost );
						
						// print_r($postcat) ;  
						
						// if ( ! empty( $postcat ) ) {
						// 		echo esc_html( $postcat[0]->name );   
						// }
						$link = get_category_link( $postcat[0]->term_id );
					?>	
					<li><span>Categoria :</span><?php 
							if ( ! empty( $postcat ) ) {
								echo esc_html( $postcat[0]->name );   
						}						
					?></li>
					<li><span>Data :</span><?php 
						$post_date = get_the_date( 'j / F / Y' ); 
						echo $post_date; 
					?></li>
				</ul>
				<div class="titulo">
					<h2><?php the_title(); ?></h2>
				</div>	
				<?php the_field('content_post'); ?>		   
				
				<?php if(get_field('arq_download')){ ?>
					<a href="<?php the_field('arq_download'); ?>" class="button1 download-arq" download>Download</a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php
	get_footer();
?>