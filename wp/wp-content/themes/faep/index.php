<?php get_header(); ?>

<div class="cabecalho-curso">
	<div class="container">
		<div class="row">
			<h2>BLOG</h2>
			<ul class="d-flex">
				<li><a href="http://localhost/faep/wp/">home</a></li>
				<li>></li>
				<li><a href="<?php the_permalink(); ?>">Blog</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="page-blog">

	<div class="container">
		<div class="row">

			<div class="title-pad">
				<h1>Blog</h1>
				<p>Lorem ipsum dolor sit amet</p>
				<div class="item-design">
					<i class="icon icon-chapeu2"></i>
				</div>
			</div>

			<div class="content-blog d-lg-flex justify-content-between">
				<main class="col-lg-9">
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
							<a href="<?php the_permalink(); ?>" class="item-blog">
								<div class="wrap-ban">
									<img src="<?php the_field('image_thumb'); ?>" alt="">
								</div>
								<div class="content">
									<ul class="d-flex flex-column flex-lg-row">
										<li><span>Por :</span><?php the_author(); ?></li>
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
									<h3><?php the_title(); ?></h3>
									<p><?php the_field('desc_post'); ?></p>
									<span class="button3">Ver mais</span>
								</div>
							</a>
						<?php endwhile?>	
							<div class="navegacao">
								<?php wordpress_pagination(); ?>
							</div>								
							<?php 
								}
								wp_reset_postdata();
							?>		
				</main>
				<aside class="col-lg-3">
					<div class="box box-search">
						<form class="form-pad search-form d-flex justify-content-center w-100 flex-wrap" action="<?php echo get_home_url(); ?>/" method="get" accept-charset="utf-8">
							<div class="container-input">
								<input type="text" name="s" required class="valid" placeholder="Pesquisar">
								<img src="<?php echo get_template_directory_uri(); ?>/img/loader1.gif" alt="" class="load loader1">
								<!-- <i class="icon icon-search"></i> -->
							</div>
							<!-- <a href="" title="" class="btn-enviar">PESQUISAR CURSO</a> -->
							<input type="submit" name="enviar" value="enviar" class="enviar-hidden">

							<div class="erro-form">
								<p></p>
							</div>
						</form>	
					</div>
					<div class="box box-categorias">
						<h4>Categorias</h4>
						<ul>
						<?php
								$categories = get_categories( array(
										'orderby' => 'name',
										'order'   => 'ASC'
								) );
								
								$loop = 0;
								foreach( $categories as $category ) {
									$loop++;
										$category_link = sprintf( 
												'<a href="%1$s" alt="%2$s">%3$s</a>',
												esc_url( get_category_link( $category->term_id ) ),
												esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
												esc_html( $category->name )
										);
										
										echo '<li class="item item-'.$loop.'">' . sprintf( $category_link ) . '</li> ';
								} 
							?>
							<!-- <li><a href="">Lorem ipsum dolor</a></li> -->
						</ul>
					</div>
					<div class="box box-noticias">
						<h4>Últimas notícias</h4>
						<ul>
							<?php								 
								$args = array(
									'post_type' => 'post',
									'posts_per_page' => -1
								);
								$my_query = new WP_Query( $args );
								if( $my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post(); 
							?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<span class="text">
										<?php the_title(); ?>
									<span>
									<span class="data">
									<?php 
										$post_date = get_the_date( 'j / F / Y' ); 
										echo $post_date; 
									?>
									</span>
								</a>
							</li>
							<?php endwhile; else: endif; ?>	
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>