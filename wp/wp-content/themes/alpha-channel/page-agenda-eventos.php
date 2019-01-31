<?php
	//Template Name: Page Agenda Evento
	get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="page-agenda-eventos">
	<div class="container">
		<div class="row">

			<div class="eventos-pad v2 d-flex flex-column align-items-center w-100">

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
					<a href="<?php the_permalink(); ?>" class="item d-flex flex-column align-items-center flex-lg-row align-items-lg-start">
						<div class="data d-flex flex-column align-items-center">
							<span class="dia"><?php the_field('dia_evento'); ?></span>
							<span class="mes"><?php the_field('mes_evento'); ?></span>
						</div>
						<div class="content">
							<h2><?php the_field('nome_evento'); ?></h2>
							<p><?php the_field('desc_evento'); ?></p>
							<footer class="d-flex justify-content-between align-items-center">
								<span class="tag"><?php the_field('tag_evento'); ?></span>
								<i class="icon icon-arrow-verm-1"></i>
							</footer>
						</div>
					</a>
				<?php endwhile; else: ?> 

				<div class="descritivo">
					<h1>Sem eventos agendados no momento</h1>
				</div>

				<?php endif; 
            		// wp_reset_query();
            		wp_reset_postdata();
				?>

			</div>

		</div>
	</div>		
</div>
<?php endwhile; else: endif; ?>	

<?php
	get_footer();
?>
