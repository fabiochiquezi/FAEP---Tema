<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FAEP - <?php the_field('title_seo'); ?></title>
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

						<li class="d-flex align-items-center"><i class="icon icon-cell"></i>011 2771-5080 / 011 4750-2355 /</li>
						<li class="d-flex align-items-center"><a href="https://api.whatsapp.com/send?phone=5519983127035" title="" class="d-flex align-items-center" target="_blank"><i class="icon icon-whats"></i> 011 95031-7539 </a></li>
						<li class="d-flex align-items-center"><a href="https://api.whatsapp.com/send?phone=5511972773103" title="" class="d-flex align-items-center" target="_blank"><i class="icon icon-mail"></i>comercial@faculdadespaulistanas.edu.br</a></li>

					</ul>

					<div class="right d-flex align-items-center">
						<div class="outros-links d-flex">
							<a href="" class="button1">CPA</a>
							<ul class="d-flex">
								<li>
									<a href="" class="d-flex"><i class="icon icon-porta"></i> Área do Aluno</a>
								</li>
								<li>
									<a href="">FAEP EAD</a>
								</li>
								<li>
									<a href="">Seja um polo EAD</a>
								</li>
							</ul>
						</div>
						<ul class="social-media1 d-flex align-items-center">
							<?php 
								$page = get_page_by_title('contato');
							?>
							<li><a href="<?php the_field('facebook', $page); ?>" target="_blank" title=""><i class="icon icon-face"></i></a></li>
							<li><a href="<?php the_field('youtube', $page); ?>" target="_blank" title=""><i class="icon icon-youtube"></i></a></li>
							<li><a href="<?php the_field('instagram', $page); ?>" target="_blank" title=""><i class="icon icon-instagram"></i></a></li>
						</ul>
					</div>					
				</div>
			</div>
		</div>	

		<div class="header2">
			<div class="container">
				<div class="row justify-content-between align-items-center flex-lg-nowrap">
					<div class="logo">
						<a href="http://localhost/faep/wp/" title="">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
						</a>
					</div>

					<a href="" title="" class="btn-menu-mob">
						<i class="icon icon-menu"></i>
					</a>

					<div class="menu1">
						<div class="mob-dados-extra">
							<div class="container">
								<div class="row header-extra justify-content-between align-items-center">
									<div class="logo">
										<a href="http://localhost/wp-alpha-channel/" title="">
											<img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="">
										</a>
									</div>

									<a href="" title="" class="close-menu-mob">
										<i class="icon icon-menu2"></i>
									</a>
								</div>
							</div>
						</div>

						<ul class="d-flex flex-column align-items-center flex-lg-row menu-principal">
							<li><a href="" title="">HOME</a></li>
							<li style="border-bottom: 0px;">
								<a href="" title="">Graduação</a>
								<ul>
									<li><a href="" title=""><span class="d-lg-none">Graduação - </span>	Presencial</a></li>
									<li><a href="" title=""><span class="d-lg-none">Graduação - </span>	EAD</a></li>
								</ul>
							</li>
							<li style="border-bottom: 0px;">
								<a href="" title="">PÓs Graduação</a>
								<ul>
									<li><a href="" title=""><span class="d-lg-none">PÓs Graduação - </span>	Presencial</a></li>
									<li><a href="" title=""><span class="d-lg-none">PÓs Graduação - </span>	EAD</a></li>
									<li><a href="" title=""><span class="d-lg-none">PÓs Graduação - </span>	MBA</a></li>
								</ul>							
							</li>
							<li style="border-bottom: 0px;">
								<a href="" title="">vestibular</a>
								<ul>
									<li><a href="" title=""><span class="d-lg-none">Vestibular - </span>	Presencial</a></li>
									<li><a href="" title=""><span class="d-lg-none">Vestibular - </span>	EAD</a></li>
								</ul>
							</li>
							<li>
								<a  title="">secretaria</a>
							</li>
							<li class="ajuste-licenc"><a href="" title="">licenciatura para graduados</a></li>
							<li><a href="" title="">técnico</a></li>
							<li><a href="">SOBRE NÓS</a></li>
						</ul>

						<div class="bottom-debug">
							<ul class="inf-base mob-dados-extra d-flex flex-column align-items-center">
							<li class="d-flex align-items-center"><i class="icon icon-cell"></i>011 2771-5080 / 011 4750-2355</li>
							<li class="d-flex align-items-center"><a href="https://api.whatsapp.com/send?phone=5519983127035" title="" class="d-flex align-items-center" target="_blank"><i class="icon icon-whats"></i> 011 95031-7539 </a></li>
							<li class="d-flex align-items-center email-ajuste"><a href="https://api.whatsapp.com/send?phone=5511972773103" title="" class="d-flex align-items-center" target="_blank"><i class="icon icon-mail"></i>comercial@faculdadespaulistanas.edu.br</a></li>
							</ul>

							<div class="d-flex align-items-center justify-content-center mob-dados-extra">
								<ul class="social-media1 d-flex align-items-center">
									<li><a href="<?php the_field('facebook', $page); ?>" target="_blank" title=""><i class="icon icon-face"></i></a></li>
									<li><a href="<?php the_field('youtube', $page); ?>" target="_blank" title=""><i class="icon icon-youtube"></i></a></li>
									<li><a href="<?php the_field('instagram', $page); ?>" target="_blank" title=""><i class="icon icon-instagram"></i></a></li>
								</ul>
							</div>								
						</div>						
					</div>					
				</div>
			</div>
		</div>
		<!-- <div class="header3">
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
		</div> -->
	</header>