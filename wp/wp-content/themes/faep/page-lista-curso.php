<?php
	//Template Name: Page Lista Curso
	get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="cabecalho-curso">
		<div class="container">
			<div class="row">
				<h2>GRaduação</h2>
				<ul class="d-flex">
					<li><a href="">home</a></li>
					<li>></li>
					<li><a href="">cursos</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="page-lista-curso page-interna principais-cursos-pad">
		<div class="container">
			<div class="row">
				<div class="title-pad">
					<h1>Próximos<span> Eventos</span></h1>
					<p>Lorem ipsum dolor sit amet</p>
					<div class="item-design">
						<i class="icon icon-chapeu2"></i>
					</div>
				</div>
				
				<div class="content-colapse">
					<ul class="w-100 d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-start">

						<?php
							$categoryArgsName = get_the_title();
							$args = array(
								'post_type' => 'cursos',
								'orderby' => 'DESC',
								'posts_per_page' => -1,
								'category_name' => get_the_title()
							);
							$the_query = new WP_Query($args)
						?>		
						<?php
							if( $the_query->have_posts() ) : while($the_query->have_posts()) : $the_query->the_post();
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
							endwhile; else: endif; 
							// wp_reset_query();
							wp_reset_postdata();
						?>

					</ul>						
				</div>
<?php endwhile; else: endif; ?>
			</div>
		</div>
	</div>
<?php
	get_footer();
?>
