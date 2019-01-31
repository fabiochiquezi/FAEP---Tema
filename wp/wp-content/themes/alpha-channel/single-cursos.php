<?php
	get_header();
?>

	<div class="page-interna page-single-curso">
		<div class="container">
			<div class="row d-lg-flex flex-lg-nowrap">
				<main class="content-curso col-lg-8 col-xl-9">

					<div class="banner-curso">
						<img src="<?php the_field('banner_interno_curso'); ?>" alt="">
						<div class="content">
							<h1><?php the_field('nome_completo_do_curso'); ?></h1>
							<!-- <p><?php the_field('subtitulo_do_curso'); ?></p>	 -->
						</div>
					</div>

					<div class="resumo-curso">
						<h5>Resumo</h5>
						<p><?php the_field('resumo_do_curso'); ?></p>
					</div>
					<div class="colapse-formacao colapse-func">
						<div class="formas colapse-select-func">
							<h5>Formas de aplicação</h5>

							<div class="boxes-formacao select-colapse d-none d-lg-flex">
								<a href="box-1" class="box2-pad box-1 d-flex flex-column align-items-center justify-content-center align-content-center <?php the_field('display_box1'); ?>">
									<i class="icon icon-preferencial"></i>
									<p>Presencial</p>
								</a>
								<a href="box-2" class="box2-pad box-2 d-flex flex-column align-items-center justify-content-center align-content-center <?php the_field('display_box2'); ?>">
									<i class="icon icon-distancia"></i>
									<p>A Distância</p>
								</a>
								<a href="box-3" class="box2-pad box-3 d-flex flex-column align-items-center justify-content-center align-content-center <?php the_field('display_box3'); ?>">
									<i class="icon icon-individual"></i>
									<p>Individual</p>
								</a>
								<a href="box-4" class="box2-pad box-4 d-flex flex-column align-items-center justify-content-center align-content-center <?php the_field('display_box4'); ?>">
									<i class="icon icon-company"></i>
									<p>In Company</p>
								</a>								
							</div>

							<select name="" class="select-colapse-mob d-lg-none">
								<option class="<?php the_field('display_box1'); ?>" value="box-1">Presencial</option>
								<option class="<?php the_field('display_box2'); ?>" value="box-2">A distância</option>
								<option class="<?php the_field('display_box3'); ?>" value="box-3">Individual</option>
								<option class="<?php the_field('display_box4'); ?>" value="box-4">In Company</option>
							</select>
						</div>
						<div class="turmas colapse-content-func">
<!-- 							<header>
								<h5 class="d-none d-lg-block">Turmas Disponíveis</h5>
								<a href="" class="btn2 btn-comprar d-none" title="">Comprar</a>
							</header>-->

							<div class="colapse-boxes">
								<div class="box box-1 <?php the_field('display_box1'); ?>">
									<header>
										<h5 class="d-none d-lg-block">Turmas Disponíveis</h5>
										<a href="" class="btn2 btn-comprar d-none" title="">Comprar</a>
									</header><!-- /header -->
									<?php if(get_field('whatsapp_tab_presencial')){ ?>
										<p>Entre em contato conosco via<a href="https://api.whatsapp.com/send?phone=<?php the_field('whatsapp_tab_presencial'); ?>" title=""> WhatsApp</a> para mais informações ou e-mail: atendimento@alphachannel.net.br</p>	
									<?php }else{ ?>

										<table>
											<thead>
												<tr>
													<th>Período</th>
													<th>Datas</th>
													<th>Investimentos</th>
												</tr>
											</thead>
											<tbody>
												<?php if(have_rows('tabela_01_curso')) : while(have_rows('tabela_01_curso')) : the_row();  ?>
												<tr>
													<td><i class="d-none icon icon-docs d-lg-block"></i><p><b><?php the_sub_field('periodo_tab'); ?></b><br> <?php the_sub_field('horario_tab'); ?></p></td>
													<td><i class="d-none icon icon-docs d-lg-block"></i><p><b>Início: </b><?php the_sub_field('data_tab'); ?><br><?php the_sub_field('dias_tab'); ?></p></td>
													<td><p><?php the_sub_field('preco_tab'); ?></p></td>
												</tr>
												<?php endwhile; else: endif; ?>
											</tbody>
										</table>

										<?php } ?>
								</div>
								<div class="box box-2 <?php the_field('display_box2'); ?>">
									<header>
										<h5 class="d-none d-lg-block">Investimento</h5>
										<a href="" class="btn2 btn-comprar d-none" title="">Comprar</a>
									</header><!-- /header -->
									<?php if(get_field('whatsapp_tab_distancia')){ ?>
										<p>Entre em contato conosco via<a href="https://api.whatsapp.com/send?phone=<?php the_field('whatsapp_tab_presencial'); ?>" title=""> WhatsApp</a> para mais informações ou e-mail: atendimento@alphachannel.net.br</p>	
									<?php }else{ ?>

										<table>
											<thead>
												<tr>
													<th>Período</th>
													<th>Datas</th>
													<th>Investimentos</th>
												</tr>
											</thead>
											<tbody>
												<?php if(have_rows('tabela_02_curso')) : while(have_rows('tabela_02_curso')) : the_row();  ?>
												<tr>
													<td><i class="d-none icon icon-docs d-lg-block"></i><p><b><?php the_sub_field('periodo_tab'); ?></b><br> <?php the_sub_field('horario_tab'); ?></p></td>
													<td><i class="d-none icon icon-docs d-lg-block"></i><p><b>Início: </b><?php the_sub_field('data_tab'); ?><br><?php the_sub_field('dias_tab'); ?></p></td>
													<td><p><?php the_sub_field('preco_tab'); ?></p></td>
												</tr>
												<?php endwhile; else: endif; ?>
											</tbody>
										</table>

										<?php } ?>
								</div>
								<div class="box box-3 <?php the_field('display_box3'); ?>">
									<header>
										<h5 class="d-none d-lg-block">Solicite um Orçamento</h5>
										<a href="" class="btn2 btn-comprar d-none" title="">Comprar</a>
									</header><!-- /header -->
									<?php if(get_field('whatsapp_tab_individual')){ ?>
										<p>Entre em contato conosco via<a href="https://api.whatsapp.com/send?phone=<?php the_field('whatsapp_tab_presencial'); ?>" title=""> WhatsApp</a> para mais informações ou e-mail: atendimento@alphachannel.net.br</p>	
									<?php }else{ ?>

										<table>
											<thead>
												<tr>
													<th>Período</th>
													<th>Datas</th>
													<th>Investimentos</th>
												</tr>
											</thead>
											<tbody>
												<?php if(have_rows('tabela_03_curso')) : while(have_rows('tabela_03_curso')) : the_row();  ?>
												<tr>
													<td><i class="d-none icon icon-docs d-lg-block"></i><p><b><?php the_sub_field('periodo_tab'); ?></b><br> <?php the_sub_field('horario_tab'); ?></p></td>
													<td><i class="d-none icon icon-docs d-lg-block"></i><p><b>Início: </b><?php the_sub_field('data_tab'); ?><br><?php the_sub_field('dias_tab'); ?></p></td>
													<td><p><?php the_sub_field('preco_tab'); ?></p></td>
												</tr>
												<?php endwhile; else: endif; ?>
											</tbody>
										</table>

										<?php } ?>							
								</div>
								<div class="box box-4 <?php the_field('display_box4'); ?>">
									<header>
										<h5 class="d-none d-lg-block">Solicite um Orçamento</h5>
										<a href="" class="btn2 btn-comprar d-none" title="">Comprar</a>
									</header><!-- /header -->
									<?php if(get_field('whatsapp_tab_company')){ ?>
										<p>Entre em contato conosco via<a href="https://api.whatsapp.com/send?phone=<?php the_field('whatsapp_tab_presencial'); ?>" title=""> WhatsApp</a> para mais informações ou e-mail: atendimento@alphachannel.net.br</p>	
									<?php }else{ ?>

										<table>
											<thead>
												<tr>
													<th>Período</th>
													<th>Datas</th>
													<th>Investimentos</th>
												</tr>
											</thead>
											<tbody>
												<?php if(have_rows('tabela_04_curso')) : while(have_rows('tabela_04_curso')) : the_row();  ?>
												<tr>
													<td><i class="d-none icon icon-docs d-lg-block"></i><p><b><?php the_sub_field('periodo_tab'); ?></b><br> <?php the_sub_field('horario_tab'); ?></p></td>
													<td><i class="d-none icon icon-docs d-lg-block"></i><p><b>Início: </b><?php the_sub_field('data_tab'); ?><br><?php the_sub_field('dias_tab'); ?></p></td>
													<td><p><?php the_sub_field('preco_tab'); ?></p></td>
												</tr>
												<?php endwhile; else: endif; ?>
											</tbody>
										</table>

										<?php } ?>
								</div>
							</div>
						</div>
					</div>
							<div class="colapse-inf-adicionais">
								<h5>Informações adicionais</h5>

								<div class="colapse-select-func">
									<div class="colapse-select select-colapse d-none d-lg-flex">
										<?php $loopInfAdicional = 0 ?>
										<?php if(have_rows('inf_adicional_curso')) : while(have_rows('inf_adicional_curso')) : the_row(); ?>
											<?php 
												$loopInfAdicional++; 
												$active = '';
												if($loopInfAdicional == 1){
													$active = 'active';
												}
											?>
											<a href="box-<?php echo $loopInfAdicional; ?>" title="" class="<?php echo $active ?> box-<?php echo $loopInfAdicional; ?>"><?php the_sub_field('title_inf_adicional'); ?></a>
										<?php endwhile; else: endif; ?>
									</div>

									<select name="" class="select-colapse-mob d-lg-none">
										<?php $loopInfAdicional = 0 ?>
										<?php if(have_rows('inf_adicional_curso')) : while(have_rows('inf_adicional_curso')) : the_row(); ?>
											<?php 
												$loopInfAdicional++; 
											?>
											<option value="box-<?php echo $loopInfAdicional; ?>">O CURSO</option>
										<?php endwhile; else: endif; ?>
									</select>									
								</div>

								<div class="colapse-content-func colapse-boxes">

										<?php $loopInfAdicional = 0 ?>
										<?php if(have_rows('inf_adicional_curso')) : while(have_rows('inf_adicional_curso')) : the_row(); ?>
											<?php 
												$loopInfAdicional++; 
												$active = '';
												if($loopInfAdicional == 1){
													$active = 'active';
												}
											?>
											<div class="box <?php echo $active ?> box-<?php echo $loopInfAdicional; ?>">
												<p><?php the_sub_field('content_inf_adicional'); ?></p>				
											</div>	
										<?php endwhile; else: endif; ?>		

								</div>
							</div>

							<div class="depoimentos-pad d-none d-lg-block">
								<h5>Depoimentos</h5>
								<ul class="d-lg-flex flex-column">
									<?php if(have_rows('depoimentos_curso')) : while(have_rows('depoimentos_curso')) : the_row(); ?>
									<li>
										<div class="content">
											<h4><?php the_sub_field('nome_dep'); ?></h4>
											<p class="data"><?php the_sub_field('data_dep'); ?></p>
											<p class="content"><?php the_sub_field('content_dep'); ?></p>
										</div>
									</li>
									<?php endwhile; else: endif; ?>		
								</ul>		
							</div>
				</main>
				<aside class="aside-curso d-flex flex-column align-items-center w-100 col-lg-4 col-xl-3">
					<form action="" method="post" class="form-email" accept-charset="utf-8">
						<header class="">
							<h3>Formulário de interesse</h3>
							<p>Cadastre-se agora</p>
						</header><!-- /header -->
						<div class="content d-flex flex-column align-items-center">
							<input type="text" name="" placeholder="Nome" class="valid">	
							<input type="email" name="" placeholder="E-mail" class="valid">	
							<input type="text" name="" placeholder="Telefone" class="valid">	
							<input type="text" name="" placeholder="Cidade" class="valid">
							<a href="" class="btn btn-enviar" title="">ENVIAR</a>	
							<input type="submit" name="enviar" value="enviar" class="env-form enviar-hidden">
							<img src="img/loader1.gif" alt="" class="load">
							<div class="erro-form">
								<p></p>
							</div>
						</div>
					</form>	

					<div class="boxes-mais-cursos d-none d-lg-flex flex-column w-100">
						<?php
							$args = array(
								'post_type' => 'cursos',
								'orderby' => 'rand',
								'posts_per_page' => 3
								// 'category_name' => get_the_category( )
							);
							$the_query = new WP_Query($args)
						?>
						<?php
							if( $the_query->have_posts() ) : while($the_query->have_posts()) : $the_query->the_post();
								$loop++; 
						?>	
							<a href="" class="box2-pad">
								<h3><?php the_field('nome_thumb'); ?></h3>
								<p><?php the_field('desc_thumb'); ?>...</p>
							</a>	
						<?php endwhile; else: endif; 
		            		// wp_reset_query();
		            		wp_reset_postdata();
						?>		
					</div>	

					<div class="proximos-eventos-pad d-none d-lg-flex flex-column w-100">
						<header>
							<p>Próximos eventos</p>
						</header><!-- /header -->

						<div class="eventos-extra d-flex flex-column">
							<?php
								$args = array(
									'post_type' => 'eventos',
									'orderby' => 'DESC',
									'posts_per_page' => 3
									// 'category_name' => get_the_category( )
								);
								$the_query = new WP_Query($args)
							?>
							<?php
								if( $the_query->have_posts() ) : while($the_query->have_posts()) : $the_query->the_post();
									$loop++; 
							?>	
								<a href="" class="box-extra" title="">
									<h3><?php the_field('nome_evento'); ?></h3>
									<!--<p><?php the_field('desc_evento'); ?></p>-->
								</a>
							<?php endwhile; else: endif; 
			            		// wp_reset_query();
			            		wp_reset_postdata();
							?>		
						</div>
					</div>

					<a href="http://localhost/wp-alpha-channel/revista-digital/" class="revista-extra-box d-none d-lg-block">
						<h3>Revista digital</h3>
						<p>Lorem ipsum dolor sit</p>
					</a>

				</aside>				
			</div>
		</div>	


	</div>

	<div class="g-maps-pad">
		<img src="img/g-maps.jpg" alt="">
	</div>	
	
<?php
	get_footer();
?>

<script>
	$(document).ready(function(){

		//Debug do colapse-inf-adicionais para ajustar o height do elemento com absolute
		setTimeout(function(){
			$('.colapse-inf-adicionais .colapse-boxes').css('height', $('.colapse-inf-adicionais .colapse-boxes .box.active').height());
			$('.colapse-formacao .colapse-boxes').css('height', $('.colapse-formacao .colapse-boxes .box.active').height());
		}, 100);
		$(window).resize(function(){
			$('.colapse-inf-adicionais .colapse-boxes').css('height', $('.colapse-inf-adicionais .colapse-boxes .box.active').height());
			$('.colapse-formacao .colapse-boxes').css('height', $('.colapse-formacao .colapse-boxes .box.active').height());

		})


	});
</script>		