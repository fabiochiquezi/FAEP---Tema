<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alpha Channel - <?php the_field('title_seo'); ?></title>
	<meta name="description" content="<?php the_field('description_seo'); ?>">
	<meta name="keywords" content="<?php the_field('keywords_seo'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body>
	<header class="cabecalho">
		<div class="header1">
			<div class="container">
				<div class="row justify-content-between">
					<ul class="left inf-base d-flex">
						<li class="d-flex align-items-center"><i class="icon icon-tel"></i>+55 11 5572-8377</li>
						<li class="d-flex align-items-center"><a href="https://api.whatsapp.com/send?phone=5511947943815" title="" class="d-flex align-items-center" target="_blank"><i class="icon icon-whats"></i>+55 11 94794-3815</a></li>
						<li class="d-flex align-items-center"><a href="https://api.whatsapp.com/send?phone=5511972773103" title="" class="d-flex align-items-center" target="_blank"><i class="icon icon-whats"></i>+55 11 97277-3103</a></li>
					</ul>

					<div class="right d-flex align-items-center">
						<ul class="social-media1 d-flex align-items-center">
							<?php 
								$page = get_page_by_title('contato');
							?>
							<li><a href="<?php the_field('facebook', $page); ?>" target="_blank" title=""><i class="icon icon-facebook"></i></a></li>
							<li><a href="<?php the_field('youtube', $page); ?>" target="_blank" title=""><i class="icon icon-youtube"></i></a></li>
							<li><a href="<?php the_field('linkedin', $page); ?>" target="_blank" title=""><i class="icon icon-linkedin"></i></a></li>
							<li><a href="<?php the_field('instagram', $page); ?>" target="_blank" title=""><i class="icon icon-instagram"></i></a></li>
						</ul>

						<a href="http://aluno.alphachannel.net.br:5050/sg_web/Acesso.aspx?ReturnUrl=%2fsg_web%2fdefault.aspx%3fescola%3d3107&escola=3107" target="_blank" title="" class="btn1">Área do Aluno</a>
						<a href="http://aluno.alphachannel.net.br:5050/sg_web/Acesso.aspx?ReturnUrl=%2fsg_web%2fdefault.aspx%3fescola%3d3107&escola=3107" target="_blank" title="">Inscrever-se</a>
					</div>					
				</div>
			</div>
		</div>	
		<div class="header2">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="logo">
						<a href="http://localhost/wp-alpha-channel/" title="">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
						</a>
					</div>

					<a href="" title="" class="btn-menu-mob">
						<i class="icon icon-menu"></i>
					</a>

					<div class="menu1">
						<div class="mob-dados-extra">
							<div class="container">
								<div class="row header-extra justify-content-between">
									<div class="logo">
										<a href="http://localhost/wp-alpha-channel/" title="">
											<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
										</a>
									</div>

									<a href="" title="" class="close-menu-mob">
										<i class="icon icon-menu"></i>
									</a>
								</div>
							</div>
						</div>

						<ul class="d-flex flex-column align-items-center flex-lg-row menu-principal">
							<li><a href="http://localhost/wp-alpha-channel/graduacao/" title="">Graduação</a></li>
							<li><a href="http://localhost/wp-alpha-channel/pos-graduacao/" title="">Pós Graduação</a></li>
							<li><a href="http://localhost/wp-alpha-channel/cursos-tecnicos/" title="">Cursos Técnicos</a></li>
							<li><a href="http://localhost/wp-alpha-channel/cursos-de-extensao/" title="">Cursos de Extensão</a></li>
							<li>
								<a  title="">Novidades</a>
								<ul>
									<li><a href="" title="">Blog</a></li>
									<li><a href="" title="">Eventos</a></li>
								</ul>
							</li>
							<li><a href="http://localhost/wp-alpha-channel/quem-somos/" title="">Sobre nós</a></li>
							<li><a href="http://localhost/wp-alpha-channel/contato/" title="">Contato</a></li>
						</ul>

						<div class="bottom-debug">
							<ul class="inf-base mob-dados-extra d-flex flex-column align-items-center">
								<li class="d-flex align-items-center"><i class="icon icon-tel"></i>+55 11 5572-8377</li>
								<li class="d-flex align-items-center"><a href="" title="" class="d-flex align-items-center"><i class="icon icon-whats"></i>+55 11 94794-3815</a></li>
								<li class="d-flex align-items-center"><a href="" title="" class="d-flex align-items-center"><i class="icon icon-whats"></i>+55 11 97277-3103</a></li>
							</ul>

							<div class="d-flex align-items-center justify-content-center mob-dados-extra">
								<ul class="social-media1 d-flex align-items-center">
									<li><a href="" title=""><i class="icon icon-facebook"></i></a></li>
									<li><a href="" title=""><i class="icon icon-youtube"></i></a></li>
									<li><a href="" title=""><i class="icon icon-linkedin"></i></a></li>
									<li><a href="" title=""><i class="icon icon-instagram"></i></a></li>
								</ul>
							</div>								
						</div>						
					</div>					
				</div>
			</div>
		</div>
		<div class="header3">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<form class="form-pad search-form d-flex justify-content-center w-100 flex-wrap" action="<?php echo get_home_url(); ?>/" method="get" accept-charset="utf-8">
						<div class="container-input">
							<input type="text" name="s" class="valid" placeholder="Qual curso está buscando?">
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
	</header>