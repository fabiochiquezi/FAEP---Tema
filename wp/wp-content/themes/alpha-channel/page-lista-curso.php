<?php
	//Template Name: Page Lista Curso
	get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="page-lista-curso page-interna">
		<div class="container">
			<div class="row">
				<div class="title-pad">
					<h1>Pós <span>Graduação</span></h1>
					<p>A Alpha Channel oferece cursos de pós graduação proporcionando a continuidade de sua formação e o seu sucesso profissional.</p>
				</div>

				<div class="lista-cursos-pad w-100">
					<header class="filtro-pesquisa-pad d-flex flex-column align-items-center flex-lg-row justify-content-lg-between">
						<div class="filtro-pad order-2 order-lg-1">
							<ul class="d-none colapse-select-js d-lg-flex">
								<li><a href="todos" title="">Todos <i class="icon icon-arrow1"></i></a></li>
								<li><a href="presencial" title="">Presencial<i class="icon icon-arrow1"></i></a></li>
								<li><a href="distancia" title="">Distância <i class="icon icon-arrow1"></i></a></li>
								<li><a href="individual" title="">Individual  <i class="icon icon-arrow1"></i></a></li>
								<li><a href="incompany" title="">In Company  <i class="icon icon-arrow1"></i></a></li>
							</ul>

							<select name="" class="colapse-select-js d-lg-none">
								<option value="todos">Todos</option>
								<option value="presencial">Presencial</option>
								<option value="distancia">Distância</option>
								<option value="individual">Individual</option>
								<option value="incompany">In Company</option>
							</select>
						</div>

						<form class="search search-form-lista order-1 order-lg-2" action="<?php echo get_home_url(); ?>/" method="get" accept-charset="utf-8">
							<input type="text" name="s" placeholder="Pesquisar">

							<div class="submit">
								<a href="" class="btn-enviar" title=""><i class="icon icon-arrow1"></i></a>	
								<input type="submit" name="" class="env-form enviar-hidden">
							</div>	
						</form>
					</header><!-- /header -->

					<div class="cursos-pad colapse-content">

						<img src="<?php echo get_template_directory_uri(); ?>/img/loader2.gif" alt="" class="load loader1">

						<div class="container-ajuste d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-around justify-content-lg-start justify-content-xl-start">

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
								$loop = 0;
								if( $the_query->have_posts() ) : while($the_query->have_posts()) : $the_query->the_post();
									$loop++; 
							?>							
							<div class="box <?php the_field('filtro_curso'); ?> todos">
								<a href="<?php the_permalink(); ?>" title="">
									<img src="<?php the_field('imagem_thumb_lista'); ?>" alt="">
									<div class="content">
										<p><?php the_field('nome_thumb'); ?></p>
									</div>								
								</a>
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

	</div>

	<div class="g-maps-pad">
		<img src="<?php echo get_template_directory_uri(); ?>/img/g-maps.jpg" alt="">
	</div>
<?php endwhile; else: endif; ?>

<?php
	get_footer();
?>
