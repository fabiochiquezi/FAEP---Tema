<?php
	//Template Name: Page Agenda Evento
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

<div class="page-agenda-eventos">
	<div class="container">
		<div class="row saiba-mais-pad principais-cursos-pad">

		<ul class="eventos-thumb content-colapse d-flex flex-column align-items-center flex-lg-row justify-content-between flex-wrap">

				<?php
					$args = array(
						'post_type' => 'eventos',
						'orderby' => 'DESC',
						'posts_per_page' => -1,
					);
					$the_query = new WP_Query($args)
				?>
				<?php
					if( $the_query->have_posts() ) : while($the_query->have_posts()) : $the_query->the_post();
				?>
					<li class="p-thumb-curso">
						<a href="<?php the_permalink(); ?>" class="d-lg-flex jusfity-content-between align-items-center" title="">

							<div class="content">
								<h4><?php the_title(); ?></h4>
								<p><?php the_field('desc_evento'); ?></p>
								<ul>
									<li>• Data: <?php the_field('data_evento'); ?></li>
									<li>• Horário: <?php the_field('horario_evento'); ?></li>
								</ul>
								<button class="button2">VER MAIS</button>
							</div>
							<div class="wrap-img d-none d-lg-block">
								<img src="<?php the_field('imagem_thumb_home'); ?>" alt="">
							</div>
						</a>
					</li>
				<?php endwhile; else: ?> 
					<div class="descritivo">
						<h1>Sem eventos agendados no momento</h1>
					</div>
				<?php endif; 
					// wp_reset_query();
					wp_reset_postdata();
				?>

			</ul>

		</div>
	</div>		
</div>
<?php endwhile; else: endif; ?>	

<?php
	get_footer();
?>
