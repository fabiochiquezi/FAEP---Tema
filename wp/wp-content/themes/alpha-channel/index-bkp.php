<?php
	get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="page-home">	
	    <div class="ma5slider anim-horizontal  inside-dots center-dots  inside-navs autoplay carousel-ban" data-tempo="3500">

	    	<style type="text/css" media="screen">
	    		<?php $loop = 0; ?>
	    		<?php if(have_rows('banner_home')) : while(have_rows('banner_home')) : the_row(); ?>
	    			<?php $loop++; ?>
	    			.carousel-ban .item-<?php echo $loop; ?>{
	    				background: url('<?php the_sub_field('ban_img_mob'); ?>') no-repeat center center;
	    				background-size: cover;
	    			}
	    			@media(min-width: 992px){
		    			.carousel-ban .item-<?php echo $loop; ?>{
		    				background: url('<?php the_sub_field('ban_img'); ?>') no-repeat center center;
		    			}
	    			}
	    		<?php endwhile; else: endif; ?>
	    	</style>
	        <div class="slides">
	        	<?php $loop = 0; ?>
	        	<?php if(have_rows('banner_home')) : while(have_rows('banner_home')) : the_row(); ?>
	        		<?php $loop++; ?>
		        	<div class="item item-<?php echo $loop; ?>">
		        		<?php if(get_sub_field('ban_img_link')){ ?>
		           			<a href="<?php the_sub_field('ban_img_link'); ?>" target=<?php the_sub_field('ban_img_blank'); ?> ></a>
		           		<?php } ?>
		        	</div>
	        	<?php endwhile; else: endif; ?>
	        </div>
	    </div>

		<div class="principais-cursos-pad">
			<div class="container">
				<div class="row">
					<div class="title-pad">
						<h1>Principais<span> cursos</span></h1>
						<p><?php the_field('princ_cursos_subtitulo'); ?></p>
					</div>

					<ul class="w-100 d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-between">
						<?php
							$args = array(
								'post_type' => 'cursos',
								'orderby' => 'rand',
								'posts_per_page' => 6,
								'category_name' => 'destaque'
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
									<img src="<?php the_field('imagem_thumb_home'); ?>" alt="">
									<div class="overlay"></div>
									<div class="content">
										<i class="icon icon-lap-reg"></i>
										<div class="nome-espec">
											<span><?php the_field('nome_thumb'); ?></span>
											<span><?php the_field('especialidade'); ?></span>
										</div>
									</div>
								</a>
							</li>
						<?php endwhile; else: endif; 
		            		// wp_reset_query();
		            		wp_reset_postdata();
						?>
					</ul>					
				</div>
			</div>
		</div>

		<div class="trabalhos-alunos-pad d-none d-lg-block">
			<div class="container">
				<div class="row">
					<div class="title-pad">
						<h1>Trabalhos de <span>alunos</span></h1>
						<p><?php the_field('trabalhos_alunos_subtitulo'); ?></p>
					</div>

				    <div class="ma5slider anim-horizontal inside-dots center-dots outside-navs autoplay carousel-ban2 w-100" data-tempo="3500">
				    	<style type="text/css" media="screen">
				    		<?php $loopTrabalhos = 0; ?>
				    		<?php if(have_rows('banner_trabalhos')) : while(have_rows('banner_trabalhos')) : the_row(); ?>
				    			<?php $loopTrabalhos++; ?>

				    			.carousel-ban2 .item-<?php echo $loopTrabalhos; ?>{
				    				background: url('<?php the_sub_field('ban_img'); ?>') no-repeat center center;
				    			}

				    		<?php endwhile; else: endif; ?>
				    	</style>
				        <div class="slides">
					    		<?php $loopTrabalhos = 0; ?>
					    		<?php if(have_rows('banner_trabalhos')) : while(have_rows('banner_trabalhos')) : the_row(); ?>
					    			<?php $loopTrabalhos++; ?>
						        	<div class="item item-<?php echo $loopTrabalhos; ?>">
						           		<a href="" ></a>
						           		<footer>
						           			<h4><?php the_sub_field('nome_slide'); ?></h4>
						           			<p><?php the_sub_field('description_slide'); ?></p>
						           		</footer>
						        	</div>
					        	<?php endwhile; else: endif; 
			            		// wp_reset_query();
			            		wp_reset_postdata();
					        	?>
				        </div>
				    </div>					
				</div>
			</div>		
		</div>

		<div class="saiba-mais-pad">
			<div class="container">
				<div class="row">
					<div class="title-pad">
						<h1>Saiba <span>Mais</span></h1>
						<p><?php the_field('saiba_mais_subtitulo'); ?></p>
					</div>

					<ul class="w-100 d-flex flex-column align-items-center flex-lg-row justify-content-lg-between">
						<li class="box1-pad">
							<a href="http://localhost/wp-alpha-channel/eventos/" title="">
								<h3>Eventos</h3>
								<span><?php the_field('desc_eventos'); ?></span>
							</a>
						</li>
						<li class="box1-pad">
							<a href="http://localhost/wp-alpha-channel/blog/" title="">
								<h3>Blog</h3>
								<span><?php the_field('desc_blog'); ?></span>
							</a>
						</li>
						<li class="box1-pad">
							<a href=http://localhost/wp-alpha-channel/revista-digital/"" title="">
								<h3>Revista digital</h3>
								<span><?php the_field('desc_revista'); ?></span>
							</a>
						</li>
					</ul>						
				</div>
			</div>		
		</div>

		<div class="g-maps-pad">
			<img src="<?php echo get_template_directory_uri(); ?>/img/g-maps.jpg" alt="">
		</div>
	</div>

<?php endwhile; else: endif; ?>
<?php
	get_footer();
?>
