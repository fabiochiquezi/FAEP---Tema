<?php
	get_header();
?>

	<div class="page-single-curso">
		<div class="cabecalho-curso">
			<div class="container">
				<div class="row">
					<?php 
						global $post;
						$idPost = get_the_ID();
						$postcat = get_the_category( $idPost );
						
						// print_r($postcat) ;  
						
						// if ( ! empty( $postcat ) ) {
						// 		echo esc_html( $postcat[0]->name );   
						// }
						$link = get_category_link( $postcat[0]->term_id );
					?>	
					<h2><?php 
								if ( ! empty( $postcat ) ) {
									echo esc_html( $postcat[0]->name );   
							}						
						?></h2>
					<ul class="d-flex">
						<li><a href="http://localhost/faep/wp/">home</a></li>
						<li>></li>
				
						<li><a href="<?php
							echo $link;
						?>"><?php 
								if ( ! empty( $postcat ) ) {
									echo esc_html( $postcat[0]->name );   
							}						
						?></a></li>
						<li>></li>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="title-pad">

			<h1>Próximos<span> Eventos</span></h1>
			<p>Lorem ipsum dolor sit amet</p>
			<div class="item-design">
				<i class="icon icon-chapeu2"></i>
			</div>
		</div>

		<div class="container">
			<div class="row d-lg-flex flex-lg-nowrap">
				<main class="content-curso col-lg-8 col-xl-9">

					<div class="banner-curso">
						<img src="<?php the_field('imagem_thumb_lista'); ?>" alt="">
					</div>
					
					<div class="objetivo item">
						<h3>Objetivo</h3>
						<?php the_field('objetivo_curso'); ?>
					</div>
					<div class="publico-alvo item">
						<h3>Público-Alvo</h3>
						<?php the_field('publico_curso'); ?>
					</div>
					<div class="matriz-curricular item">
						<h3>Matriz Curricular</h3>
						<div class="item d-none d-lg-flex flex-wrap justify-content-between">
							<?php if(have_rows('lista_curso')) : while(have_rows('lista_curso')) : the_row(); ?>
							<div class="lista">
								<b><?php the_sub_field('fase'); ?></b>
								<ul>
									<?php if(have_rows('lista_itens')) : while(have_rows('lista_itens')) : the_row(); ?>
										<li><?php the_sub_field('item_matriz'); ?></li>
									<?php endwhile; else: endif; ?>
								</ul>
							</div>
							<?php endwhile; else: endif; ?>
						</div>
						<!-- <div class="lista">
							<b>2ª Fase</b>
							<ul>
								<li>História da Arte na Modernidade </li>
								<li>Desenho de Paisagem </li>
								<li>Estética e Arte</li>
								<li>Forma, Cor e Composição </li>
								<li>Iniciação Científica</li>
								<li>Sociologia da Educação</li>
							</ul>
						</div>
						<div class="lista">
							<b>3ª Fase</b>
							<ul>
								<li>História da Arte Moderna e Pós Moderna </li>
								<li>Desenho da Figura Humana</li>
								<li>Percepção Tridimensional </li>
								<li>Pesquisa de Materiais Expressivos</li>
								<li>Fotografia</li>
							</ul>
						</div>
						<div class="lista">
							<b>4ª Fase</b>
							<ul>
								<li>História da Arte Contemporanea</li>
								<li>Escultura</li>
								<li>Iniciação a Pintura</li>
								<li>Componente Curricular Eletivo</li>
							</ul>
						</div>
						<div class="lista">
							<b>5ª Fase</b>
							<ul>
								<li>Pintura</li>
								<li>Gravuras</li>
								<li>Ensino das Artes Visuais - Conteúdo e Método I</li>
								<li>Projeto de Pesquisa I - Tcc</li>
								<li>Estágio em Artes Visuais I</li>
							</ul>
						</div>
						<div class="lista">
							<b>6ª Fase</b>
							<ul>
								<li>Arte e Novas Tecnologias</li>
								<li>Arte Urbana</li>
								<li>Ensino das Artes Visuais - Conteúdo e Método II</li>
								<li>Estágio em Artes Visuais II</li>
								<li>Libras</li>
								<li>Política e Gestão da Educação Básica</li>
							</ul>
						</div>
						<div class="lista">
							<b>Componentes Optativos</b>
							<ul>
								<li>Arte Têxtil (Eletivo)</li>
								<li>Arte Brasileira do Séc. Xx e Xxi (Eletivo)</li>
								<li>Desenho de Criação (Eletivo)</li>
								<li>Desenho de Criação (Eletivo)</li>
							</ul>
						</div> -->
					</div>

					<div class="diferenciais item">
						<h3>Diferenciais</h3>
						<?php the_field('diferenciais_curso'); ?>
					</div>
					<div class="mercado-trabalho item">
						<h3>Mercado de trabalho</h3>
						<?php the_field('mercado_curso'); ?>
					</div>
					<div class="area-atuacao item">
						<h3>Área de Atuação</h3>
						<?php the_field('area_curso'); ?>
					</div>
					<?php if(get_field('arq_pdf')){ ?>
						<a href="<?php the_field('arq_pdf'); ?>" class="pdf-download" download>Download PDF</a>
					<?php } ?>
				</main>

				<aside class="aside-curso d-flex flex-column align-items-center w-100 col-lg-4 col-xl-3">
					<ul class="inf-extra">
						<li class="d-flex align-items-center">
							<div class="wrap">
								<i class="icon icon-relogio"></i>
							</div>
							
							<div class="content">
								<span>Duração:</span>
								<?php the_field('duracao_home'); ?>
							</div>
						</li>
						<li class="d-flex align-items-center">
						<div class="wrap">
								<i class="icon icon-relogio"></i>
							</div>
							<div class="content">
								<span>Carga horária:</span>
								<?php the_field('carga_horaria_home'); ?>
							</div>
						</li>
						<li class="d-flex align-items-center">
							<div class="wrap">
								<i class="icon icon-pag"></i>
							</div>
							<div class="content">
								<span>Investimento:</span>
								<?php the_field('investimento_curso'); ?>
							</div>
						</li>
					</ul>
					<form action="" method="post" class="form-email" accept-charset="utf-8">
						<header class="">
							<h3>Formulário de interesse</h3>
							<p>Cadastre-se agora</p>
						</header><!-- /header -->
						<div class="content d-flex flex-column align-items-center">
							<input type="text" name="" placeholder="Nome" class="valid">	
							<input type="email" name="" placeholder="E-mail" class="valid">	
							<input type="text" name="" placeholder="Telefone" class="valid">	
							<a href="" class="btn btn-enviar" title="">ENVIAR</a>	
							<input type="submit" name="enviar" value="enviar" class="env-form enviar-hidden">
							<img src="<?php echo get_template_directory_uri(); ?>/img/loader1.gif" alt="" class="load">
							<div class="erro-form">
								<p></p>
							</div>
						</div>
					</form>	

				</aside>				
			</div>
		</div>	


	</div>

	
<?php
	get_footer();
?>