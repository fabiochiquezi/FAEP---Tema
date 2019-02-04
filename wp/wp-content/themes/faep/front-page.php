<?php
	//Template Name: Page Home
	get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="page-home">	
		<div class="ma5slider anim-horizontal inside-navs autoplay carousel-ban" data-tempo="3500">

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
		
		<div class="categorias-trabalho d-flex flex-column align-items-center flex-lg-row">
				<div class="item item-graduacao">
					<h4>GRADUAÇÃO</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					<ul>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
					</ul>
					<a href="http://localhost/faep/wp/graduacao/" class="button1">VER MAIS</a>
				</div>
				<div class="item item-pos-graduacao">
					<h4>Pós graduação</h4>
					<p>Em parceria com a INEQ.</p>
					<ul>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
					</ul>
					<a href="http://localhost/faep/wp/pos-graduacao/" class="button1">VER MAIS</a>
				</div>
				<div class="item item-mba">
					<h4>MBA</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					<ul>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
						<li><i class="icon icon-acert"></i>Lorem Ipsum Dolor Sit Amet</li>
					</ul>
					<a href="http://localhost/faep/wp/mba/" class="button1">VER MAIS</a>
				</div>
		</div>

		<div class="header3">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<form class="form-pad search-form d-flex justify-content-center w-100 flex-wrap" action="<?php echo get_home_url(); ?>/" method="get" accept-charset="utf-8">
						<div class="container-input">
							<input type="text" name="s" class="valid" placeholder="Pesquisar">
							<img src="<?php echo get_template_directory_uri(); ?>/img/loader1.gif" alt="" class="load loader1">
							<i class="icon icon-search"></i>
						</div>
						<a href="" title="" class="btn-enviar">PESQUISAR CURSO</a>
						<input type="submit" name="enviar" value="enviar" class="enviar-hidden">

						<div class="erro-form">
							<p></p>
						</div>
					</form>						
				</div>
			</div>
		</div>

		<div class="principais-cursos-pad d-none d-lg-block">
			<div class="container">
				<div class="row">
					<div class="title-pad">
						<h1>Principais<span> Cursos</span></h1>
						<p>Lorem ipsum dolor sit amet</p>
						<div class="item-design">
							<i class="icon icon-chapeu2"></i>
						</div>
					</div>

					<ul class="colapse-menu d-flex">
						<li><a href="graduacao-item" class="active">GRADUAÇÃO</a></li>
						<li><a href="mba-item">MBA</a></li>
						<li><a href="pos-graduacao-item">PÓS-GRADUAÇÃO</a></li>
					</ul>

					<div class="content-colapse">
						<ul class="w-100 d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-between graduacao-item item active">
							<?php
								$args = array(
									'post_type' => 'cursos',
									'orderby' => 'rand',
									'posts_per_page' => 3,
									'category_name' => 'Graduação'
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
							<?php endwhile; else: endif; 
											// wp_reset_query();
											wp_reset_postdata();
							?>
						</ul>	

						<ul class="w-100 d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-between mba-item item">
							<?php
								$args = array(
									'post_type' => 'cursos',
									'orderby' => 'rand',
									'posts_per_page' => 3,
									'category_name' => 'Pós Graduação'
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
											<h4><?php the_title(); ?></h4>
											<p>Artes visuais é uma área que abrange qualquer forma de representação visual de cor e forma. As representações visuais dramáticas, como cinema, teatro e música, também se encaixam nessa área.</p>
											<ul>
												<li>• Duração: 4 anos</li>
												<li>• Carga horária: 3880 horas</li>
											</ul>
											<button class="button2">VER MAIS</button>
										</div>
									</a>
								</li>
							<?php endwhile; else: endif; 
											// wp_reset_query();
											wp_reset_postdata();
							?>
						</ul>	
						
						<ul class="w-100 d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-between pos-graduacao-item item">
							<?php
								$args = array(
									'post_type' => 'cursos',
									'orderby' => 'rand',
									'posts_per_page' => 3,
									'category_name' => 'mba'
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
											<p>Artes visuais é uma área que abrange qualquer forma de representação visual de cor e forma. As representações visuais dramáticas, como cinema, teatro e música, também se encaixam nessa área.</p>
											<ul>
												<li>• Duração: 4 anos</li>
												<li>• Carga horária: 3880 horas</li>
											</ul>
											<button class="button2">VER MAIS</button>
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
		</div>

		<div class="saiba-mais-pad principais-cursos-pad">
			<div class="container">
				<div class="row">

					<div class="title-pad">
						<h1>Próximos<span> Eventos</span></h1>
						<p>Lorem ipsum dolor sit amet</p>
						<div class="item-design">
							<i class="icon icon-chapeu2"></i>
						</div>
					</div>

					<a href="http://localhost/faep/wp/eventos/" class="button2 ver-mais">VER MAIS</a>
					
					<ul class="eventos-thumb content-colapse d-flex flex-column align-items-center flex-lg-row justify-content-between flex-wrap">
						<?php
							$args = array(
								'post_type' => 'eventos',
								'orderby' => 'DESC'
							);
							$the_query = new WP_Query($args)
						?>
						<?php
							$loop = 0;
							if( $the_query->have_posts() ) : while($the_query->have_posts()) : $the_query->the_post();
								$loop++; 
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
						<?php endwhile; else: endif; 
										// wp_reset_query();
										wp_reset_postdata();
						?>
					</ul>

				</div>
			</div>		
		</div>

		<div class="secretaria-part">
			<div class="container">
				<div class="row">
					<div class="title-pad">
						<h2>Secretaria</h2>
					</div>	

					<?php 
								$pageSecretaria = get_page_by_title('Secretaria');
							?>
					
					<div class="content d-flex flex-column align-items-center flex-lg-row flex-lg-wrap">
						<a href="<?php the_field('regimento_interno', $pageSecretaria); ?>" target="_blank" class="item d-flex">
							<div class="wrap">
								<i class="icon icon-reg-interno"></i>
							</div>
							<div class="dados">
								<h5>REGIMENTO INTERNO</h5>
								<p>Lorem ipsum dolor sit amet</p>
							</div>
						</a>
						<a href="<?php the_field('edital_do_vestibular', $pageSecretaria); ?>" target="_blank" class="item d-flex">
							<div class="wrap">
								<i class="icon icon-edit-vest"></i>
							</div>
							<div class="dados">
								<h5>EDITAL DO VESTIBULAR 2018/1</h5>
								<p>Lorem ipsum dolor sit amet</p>
							</div>
						</a>
						<a href="<?php the_field('manual_da_biblioteca', $pageSecretaria); ?>" target="_blank" class="item d-flex">
							<div class="wrap">
								<i class="icon icon-man-bibli"></i>
							</div>
							<div class="dados">
								<h5>MANUAL DA BIBLIOTECA</h5>
								<p>Lorem ipsum dolor sit amet</p>
							</div>
						</a>
						<a href="<?php the_field('manual_do_laboratorio', $pageSecretaria); ?>" target="_blank" class="item d-flex">
							<div class="wrap">
								<i class="icon icon-man-lab"></i>
							</div>
							<div class="dados">
								<h5>MANUAL DO LABORATÓRIO DE INFORMÁTICA E CPA</h5>
								<p>Lorem ipsum dolor sit amet</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="grupo-educac-part">
			<div class="container">
				<div class="row">

					<div class="title-pad">
						<h1>Grupo<span> Educacional</span></h1>
						<p>Lorem ipsum dolor sit amet</p>
						<div class="item-design">
							<i class="icon icon-chapeu2"></i>
						</div>
					</div>	

					<div class="content d-flex flex-column align-items-center flex-lg-row justify-content-center">
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/parc-01.png" alt="">
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/parc-02.png" alt="">
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/parc-03.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; else: endif; ?>
<?php
	get_footer();
?>
