<?php
	get_header();
?>


	<div class="cabecalho-curso">
		<div class="container">
			<div class="row">
				<h2><?php echo $_GET['s'] ?></h2>
				<ul class="d-flex">
					<li><a href="http://localhost/faep/wp/">home</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="page-lista-curso principais-cursos-pad">
		<div class="container">
			<div class="row">
				<div class="title-pad">
					<h1>Você pesquisou por: <span><?php echo $_GET['s'] ?></span></h1>
					<div class="item-design">
						<i class="icon icon-chapeu2"></i>
					</div>
				</div>
				
				<div class="content-colapse">
					<ul class="w-100 d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-start">
						
						<?php
							$args = array(
									'post_type' => 'cursos',
									's' => $_GET['s'],
									'posts_per_page' => -1
							);
							$the_query = new WP_Query($args)
						?>
						<?php
							$loop = 0;
							if( $the_query->have_posts() ) : while($the_query->have_posts()) : $the_query->the_post();
								$loop++; 
						?>				
							<li class="p-thumb-curso">
								<a href="<?php the_permalink(); ?>" title="">
									<div class="wrap-img">
										<img src="<?php the_field('imagem_thumb_home'); ?>" alt="">
									</div>
									<div class="content">
										<h4><?php the_field('nome_thumb'); ?></h4>
										<p><?php the_field('desc_thumb'); ?></p>
										<ul>
											<li>• Duração: <?php the_field('duracao_home'); ?></li>
											<li>• Carga horária: <?php the_field('carga_horaria_home'); ?></li>
										</ul>
										<button class="button2">VER MAIS</button>
									</div>
								</a>
							</li>

						<?php 
							endwhile; else: 
						?>
							<p>Infelizmente não foi encontrado nem um curso com este termo.</p>	
						<?php endif; 
							// wp_reset_query();
							wp_reset_postdata();
						?>

					</ul>						
				</div>
				
			</div>
		</div>
	</div>

<?php
	get_footer();
?>
