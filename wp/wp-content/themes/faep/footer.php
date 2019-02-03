	<footer>
		<div class="footer1">
			<div class="container">
				<div class="row d-flex flex-column align-items-center flex-lg-row justify-content-lg-between align-items-lg-start flex-lg-nowrap">

					<div class="box-footer box-footer-1">
						<h5>Sobre Nós</h5>

						<div class="content d-lg-flex">
							<p>
							A FACITEP - Faculdade de Ciências e Tecnologia Paulistana e a FAEP - Faculdade de Educação Paulistana fazem parte da SAESP - Sociedade Avançada de Educação de São Paulo e representam uma importante conquista para Parada de Taipas e região.
							</p>
						</div>

						<div class="content2 newsletter">
							<h5>Inscreva-se em nossa Newsletter</h5>
							<form action="">
								<input type="text" name="email" class="e-mail" placeholder="Coloque seu e-mail">
								<input type="submit" value="submit" class="enviar">
							</form>
						</div>
					</div>

					<div class="box-footer box-footer-2 d-none d-lg-block">
						<h5>Links Últeis</h5>

						<div class="content">
							<ul class="d-lg-flex flex-wrap align-items-center">
								<li><a href="">Blog</a></li>
								<li><a href="">Sobre Nós</a></li>
								<li><a href="">Unidades</a></li>
								<li><a href="">Grupo Educacional</a></li>
								<li><a href="">Secretaria</a></li>
								<li><a href="">Área do aluno</a></li>
								<li><a href="">Eventos</a></li>
								<li><a href="">FEP EAD</a></li>
								<li><a href="">Vestibular</a></li>
								<li><a href="">Fale Conosco</a></li>
							</ul>
						</div>
					</div>

					<div class="box-footer d-none d-lg-block box-footer-4">
						<h5>Nossos Cursos</h5>

						<div class="content d-lg-flex">
							<ul>
								<li><a href="">Graduação</a></li>
								<li><a href="">Pós-Graduação</a></li>
								<li><a href="">Licenciatura para Graduados</a></li>
								<li><a href="">MBA</a></li>
								<li><a href="">2º Licenciatura</a></li>
							</ul>
						</div>
					</div>

					<div class="box-footer box-footer-3">
						<h5>Estude Aqui</h5>

						<div class="content">
							<ul class="d-flex flex-column">
								<li>
									<div class="wrap">
										<i class="icon icon-footer-1"></i>
									</div>
									<a href="">
										<img src="<?php echo get_template_directory_uri(); ?>/img/mini-map.jpg" alt="">
									</a>
								</li>
								<li>
									<div class="wrap">
										<i class="icon icon-footer-2"></i>
									</div>
									<div class="d-flex flex-column">
										<span>(011) 2771.5080</span>
										<span>(011) 4750.2355</span>
										<span>(011) 95031.7539</span>
									</div>
								</li>
								<li>
									<div class="wrap">
										<i class="icon icon-footer-3"></i>
									</div>		
									<span>comercial@faculdades<br>paulistanas.edu.br</span>
								</li>
							</ul>
						</div>

						<div class="content2">
							<h5>Redes Sociais</h5>
							<ul class="social-media1 d-flex align-items-center justify-content-center">
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
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row d-flex flex-column align-items-center flex-lg-row justify-content-lg-between">
					<a href="" title="" class="logo-yau">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-yau.png" alt="">
					</a>

					<p> © Copyright 2018, All rights reserved. </p>					
				</div>
			</div>		

		</div>	
	</footer>
	<?php wp_footer(); ?>
</body>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ma5slider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</html>