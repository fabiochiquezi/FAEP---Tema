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

	<div class="page-lista-curso principais-cursos-pad search-page">
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
						<!-- Curso Search -->
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
							<!-- <p>Infelizmente não foi encontrado nem um curso com este termo.</p>	 -->
						<?php endif; 
							// wp_reset_query();
							wp_reset_postdata();
						?>
					</ul>		



					<!-- Post Blog -->
					<div class="content-blog d-flex flex-column align-items-center flex-lg-row justify-content-start flex-lg-wrap">
						
						<?php
							$args = array(
									'post_type' => 'post',
									's' => $_GET['s'],
									'posts_per_page' => -1
							);
							$the_query2 = new WP_Query($args)
						?>
						<?php
							$loop = 0;
							if( $the_query2->have_posts() ) : while($the_query2->have_posts()) : $the_query2->the_post();
								$loop++; 
						?>	
							<a href="" class="item-blog">
								<div class="wrap-ban">
									<img src="<?php the_field('image_thumb'); ?>" alt="">
								</div>
								<div class="content">
									<ul class="d-flex flex-column flex-lg-row">
										<li><span>Por: </span><?php the_author(); ?></li>
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
						<?php endwhile; else: endif; ?>								
						<?php 
							wp_reset_postdata();
						?>	
					</div>			
				</div>
				
			</div>
		</div>
	</div>

<?php
	get_footer();
?>
