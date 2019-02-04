<?php


?>

<?php get_header(); ?>

<div class="page-blog">
	<div class="cabecalho-curso">
		<div class="container">
			<div class="row">
				<h2>GRaduação</h2>
				<ul class="d-flex">
					<li><a href="">home</a></li>
					<li>></li>
					<li><a href="">cursos</a></li>
					<li>></li>
					<li><a href="">NOME DO CURSO</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">

			<div class="title-pad">
				<h1>Próximos<span> Eventos</span></h1>
				<p>Lorem ipsum dolor sit amet</p>
				<div class="item-design">
					<i class="icon icon-chapeu2"></i>
				</div>
			</div>

			<div class="content-blog">
				<main>
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
							<a href="" class="item-blog">
								<div class="wrap-ban">
									<img src="<?php echo get_template_directory_uri(); ?>/img/banner-blog.jpg" alt="">
								</div>
								<div class="content">
									<ul class="d-flex flex-column">
										<li><span>Por :</span>Lorem Ipsum Dolor</li>
										<li><span>Categoria :</span>Lorem ipsum</li>
										<li><span>Date :</span>00 de outubro de 2018</li>
									</ul>
									<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
									<p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
				<aside>
					<div class="box box-categorias">
						<h4>Categorias</h4>
						<ul>
							<li><a href="">Lorem ipsum dolor</a></li>
							<li><a href="">Lorem ipsum dolor</a></li>
							<li><a href="">Lorem ipsum dolor</a></li>
							<li><a href="">Lorem ipsum dolor</a></li>
							<li><a href="">Lorem ipsum dolor</a></li>
						</ul>
					</div>
					<div class="box box-noticias">
						<h4>Últimas notícias</h4>
						<ul>
							<li>
								<a href="">
									<span class="text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									<span>
									<span class="data"></span>
								</a>
							</li>
							<li><a href="">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do</a></li>
							<li><a href="">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do</a></li>
							<li><a href="">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do</a></li>
							<li><a href="">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do</a></li>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>