<?php
	include('header.php');
?>

	<div class="page-contato page-interna">

				<div class="title-pad">
					<h1>Contato</h1>
					<p>Fale conosco</p>
				</div>

				<div class="d-lg-flex justify-content-lg-center">
					<div class="left">
						<div class="ajuste">
							<div class="box">
								<h3>Localização</h3>
								<p>Rua Vergueiro, 3032 - Vila Mariana <br>
								04102-001 - São Paulo/SP - Brasil <br>
								(próximo ao metrô vila mariana)</p>
							</div>
							<div class="box">
								<h3>Horário de atendimento</h3>
								<p>Segunda à sexta: 08h00 às 21h50  <br>
									Sábado: 08h30 às 12h30 </p>
							</div>
							<div class="box">
								<h3>Telefone</h3>
								<p>Telefone: 11 5572-8377 <br>
								WhatsApp: 11 94794-3815 <br>
								E-mail: atendimento@alphachannel.net.br</p>
							</div>
						</div>
					</div>
					<div class="right">
						<form action="" method="post" class="d-flex flex-column align-items-center form-pad form-contact" accept-charset="utf-8">
							<header>
								<h3>Fale conosco</h3>
							</header><!-- /header -->
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

		</div>		

	</div>

	<div class="g-maps-pad">
		<img src="img/g-maps.jpg" alt="">
	</div>
<?php
	include('footer.php');
?>
