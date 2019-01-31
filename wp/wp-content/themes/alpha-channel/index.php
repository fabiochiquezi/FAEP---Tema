<?php

/**


 * Template Name: Blog

 */


?>

<?php get_header(); ?>

	<main>

		<section class="blog">

			<div class="container">

				<div class="row">

					<div class="col-lg-9 blog-conteudo row">

						<?php								 

					        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

							$args = array(

							'paged' => $paged,

							'post_type' => 'post',

							'posts_per_page' => 4);



							$my_query = new WP_Query( $args );

							if( $my_query->have_posts() ) {

					    		while ($my_query->have_posts()) : $my_query->the_post(); 

						?>

						<!--post blog-->

						<div class="col-12 col-md-6 post-blog">

							<a href="<?php the_permalink(); ?>">

								<div class="col-md-12 post-img">

									<!--<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>-->

									<img src="<?php the_field('image_thumb'); ?>" alt="">

								</div>

								<div class="col-md-12 post-chamada">

									<div class="header-chamada">

										<h3><?php the_title(); ?></h3>

										<span><?php the_time('d/m/Y'); ?></span>

									</div>

									<p><?php the_field('desc_post') ?></p>

								</div>

							</a>

						</div>

						<!-- fim post -->

						<?php endwhile?>	

		                <div class="navegacao">

							<?php wordpress_pagination(); ?>

		                </div>								

						<?php 

							}

							wp_reset_postdata();

						?>					

					</div>

					<div class="col-lg-3 blog-widgets" style="display: none;">					

						<div class="col-md-12 widget">

							<h3>Últimas Postagens</h3>

							<?php

		                        global $post;

		                        $myposts = get_posts('numberposts=3&orderby=date&order=DESC');

		                        foreach($myposts as $post) :

	                        ?>

							<div class="col-md-12 ultima-postagem padding-0">

								<a href="<?php the_permalink(); ?>">

									<div class="col-md-4 padding-0"><?php the_post_thumbnail(array(45,45), array('class' => 'img-responsive')); ?></div>

									<div class="col-md-8"><p><b><?php the_title(); ?></b></p></div>

								</a>

							</div>	

							<?php endforeach; ?>					

						</div>					

					</div>

				</div>

			</div>

		</section>

	</main>

<?php get_footer();?>