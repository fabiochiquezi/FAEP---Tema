<?php
	get_header();
?>

<div class="single-evento">
	<div class="cabecalho-curso">
		<div class="container">
			<div class="row">
				<h2>GRaduação</h2>
				<ul class="d-flex">
					<li><a href="http://localhost/faep/wp/">home</a></li>
					<li>></li>
					<li><a href="http://localhost/faep/wp/eventos/">Eventos</a></li>
					<li>></li>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="title-pad">
		<h1><?php the_title(); ?></h1>
		<div class="item-design">
			<i class="icon icon-chapeu2"></i>
		</div>
	</div>

	<div class="container">
		<div class="row d-flex flex-column algin-items-center">
			<div class="content-evento d-flex flex-column align-items-center flex-lg-row align-items-lg-start">

				<aside class="col-lg-3">
					<div class="wrap">
						<img src="<?php the_field('imagem_palestrante') ?>" alt="">
					</div>
					<h1><?php the_field('nome_palestrante') ?></h1>
					<b class="cargo"><?php the_field('cargo_palestrante') ?></b>
					<ul class="inf-extra">
							<li class="d-flex align-items-center">
								<div class="wrap-i">
									<i class="icon icon-inf-extra-1"></i>
								</div>
								
								<div class="content">
									<span>Data:</span>
									<?php the_field('data_evento') ?>
								</div>
							</li>
							<li class="d-flex align-items-center">
							<div class="wrap-i">
									<i class="icon icon-inf-extra-2"></i>
								</div>
								<div class="content">
									<span>Carga horária:</span>
									<?php the_field('horario_evento') ?>
								</div>
							</li>
							<li class="d-flex align-items-center">
							<div class="wrap-i">
									<i class="icon icon-inf-extra-3"></i>
								</div>
								<div class="content">
									<span>Vagas:</span>
									<?php the_field('vagas_palestrante') ?>
								</div>
							</li>
							<li class="d-flex align-items-center">
							<div class="wrap-i">
									<i class="icon icon-inf-extra-4"></i>
								</div>
								<div class="content">
									<span>Unidade:</span>
									<?php the_field('unidade_palestrante') ?>
								</div>
							</li>
						</ul>
				</aside>

				<main class="col-lg-9">
					<div class="banner">
						<img src="<?php the_field('banner_interno_evento'); ?>" alt="">
					</div>
					<div class="content-evento">
						<h5>Sobre o evento</h5>
						<?php the_field('sobre_evento'); ?>
					</div>
					<div class="content-evento">
						<h5>Sobre o palestrante</h5>
						<?php the_field('sobre_palestrante') ?>
					</div>
					<div class="form">
						<div class="title-pad">
							<h1>Reserve sua <span> vaga!</span></h1>
							<div class="item-design">
								<i class="icon icon-chapeu2"></i>
							</div>
						</div>

						<form action="" class="d-flex flex-column align-items-center form-pad form-contact" accept-charset="utf-8">
							<input type="text" name="nome" class="valid" placeholder="Nome Completo">	
							<input type="text" name="telefone" class="valid" placeholder="Telefone">	
							<input type="email" name="email" class="valid" placeholder="Email">	
							<input type="text" name="assunto" class="valid" placeholder="Assunto">	
							<textarea name="mensagem" placeholder="Mensagem"></textarea>
							<a href="" title="" class="btn-enviar">ENVIAR</a>
							<img src="<?php echo get_template_directory_uri(); ?>/img/loader1.gif" style="margin-top: 8px;" alt="" class="load loader1">
							<input type="submit" name="enviar" value="enviar" class="enviar-hidden">

							<div class="erro-form">
								<p></p>
							</div>
						</form>
					</div>
				</main>
			</div>

		</div>
	</div>
</div>

<?php
	get_footer();
?>