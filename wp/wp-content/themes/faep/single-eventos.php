<?php
	get_header();
?>

<div class="single-post">
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
	<div class="title-pad">
		<h1>Nome do <span> Evento</span></h1>
		<p>Lorem ipsum dolor sit amet</p>
		<div class="item-design">
			<i class="icon icon-chapeu2"></i>
		</div>
	</div>

	<div class="container">
		<div class="row d-flex flex-column algin-items-center">
			<div class="content-evento d-flex flex-column align-items-center flex-lg-row align-items-lg-start">
				<aside class="col-lg-3">
					<div class="wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/img/evento-usuario.png" alt="">
					</div>
					<h1>Nome Palestrante</h1>
					<b class="cargo">Cargo e empresa do palestrante</b>
					<ul class="inf-extra">
							<li class="d-flex align-items-center">
								<div class="wrap-i">
									<i class="icon icon-inf-extra-1"></i>
								</div>
								
								<div class="content">
									<span>Data:</span>
									04 anos
								</div>
							</li>
							<li class="d-flex align-items-center">
							<div class="wrap-i">
									<i class="icon icon-inf-extra-2"></i>
								</div>
								<div class="content">
									<span>Carga horária:</span>
									3880 horas
								</div>
							</li>
							<li class="d-flex align-items-center">
							<div class="wrap-i">
									<i class="icon icon-inf-extra-3"></i>
								</div>
								<div class="content">
									<span>Vagas:</span>
									R$ 399,00 / mês
								</div>
							</li>
							<li class="d-flex align-items-center">
							<div class="wrap-i">
									<i class="icon icon-inf-extra-4"></i>
								</div>
								<div class="content">
									<span>Unidade:</span>
									R$ 399,00 / mês
								</div>
							</li>
						</ul>
				</aside>
				<main class="col-lg-9">
					<div class="banner">
						<img src="<?php echo get_template_directory_uri(); ?>/img/banner-evento.jpg" alt="">
					</div>
					<div class="content-evento">
						<h5>Sobre o evento</h5>
						<p>Lorem ipsum suscipit ad nibh curabitur rutrum facilisis nulla elementum dictum etiam, ante maecenas potenti lacus molestie faucibus potenti pretium purus donec, commodo enim lacinia etiam pulvinar venenatis duis ac lacinia id. viverra tempus ornare sociosqu etiam primis luctus donec adipiscing curabitur habitant, porttitor erat cursus nulla ipsum integer eleifend ante. felis posuere metus justo ac egestas nostra justo donec aliquam, senectus ac lorem turpis justo ad ante vivamus massa himenaeos, etiam ante tortor vitae mauris potenti aliquet purus. nisi hendrerit rutrum consectetur nibh litora nec eros rutrum venenatis, vivamus torquent rutrum class curabitur commodo quisque rhoncus. </p>
						<p>Ultrices magna consequat ultrices lacinia nisi curae primis conubia est sit, phasellus aptent nunc aliquam vestibulum ut massa dolor massa, aliquam ornare primis nisi rutrum sodales etiam cras risus. et sem aliquam praesent euismod interdum euismod aptent tortor, primis venenatis libero aliquet donec elit vel, sapien blandit sollicitudin facilisis elit vel massa. eleifend aptent posuere dapibus sit laoreet turpis leo, proin purus felis magna primis non curae felis, platea quisque aliquam odio netus torquent. mi dictumst euismod sit dolor curabitur leo sollicitudin potenti, primis ornare aenean augue facilisis vel vivamus, ornare netus sed mattis porta quisque platea.</p>
					</div>
					<div class="content-evento">
						<h5>Sobre o palestrante</h5>
						<p>	Lorem ipsum porttitor rhoncus fusce diam quisque aenean, a commodo ligula aenean dui adipiscing a, erat eget senectus bibendum nec fusce. feugiat auctor vitae lacinia donec convallis hac potenti donec dictumst, nunc dolor sapien nibh dictum morbi neque turpis, curabitur libero eget sed tortor tempus dictum at. lorem mollis quis varius elit habitasse magna taciti odio, augue vehicula tristique neque sagittis etiam magna, orci porta accumsan cubilia sociosqu blandit gravida. eleifend ullamcorper nulla porttitor eget lacus tempor ornare pretium bibendum faucibus purus, lectus tellus nunc lacinia nibh malesuada consectetur fringilla amet donec. </p>
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
							<img src="img/loader1.gif" alt="" class="load loader1">
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