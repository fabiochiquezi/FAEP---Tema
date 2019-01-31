<?php
	//Template Name: Page Revista
	get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="page-revista">
	<div class="container">
		<div class="row">
			
			<header class="pt-01 d-flex flex-column align-items-center w-100">
				<div class="title-pad">
					<h1>Conheça a nossa revista Acadêmica!</h1>
				</div>

				<div class="imagem-revista w-100">
					<img src="<?php echo get_template_directory_uri(); ?>/img/revista.jpg" alt="">
				</div>			
			</header><!-- /header -->

			<div class="content w-100">
				<div class="title-pad">
					<h1>Carta ao leitor</h1>
				</div>

				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed neque eu lectus ornare blandit. Maecenas fermentum ex non viverra suscipit. Maecenas iaculis vitae nulla ac venenatis. Curabitur at urna tortor. Nam eget mauris eget nulla pellentesque lacinia. Vestibulum tempus quam ligula, at porta tortor mattis eget.
				</p>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed neque eu lectus ornare blandit. Maecenas fermentum ex non viverra suscipit. Maecenas iaculis vitae nulla ac venenatis. 
				</p>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed neque eu lectus ornare blandit. Maecenas fermentum ex non viverra suscipit. Maecenas iaculis vitae nulla ac venenatis. Curabitur at urna tortor. Nam eget mauris eget nulla pellentesque lacinia. Vestibulum tempus quam ligula, at porta tortor mattis eget. Nulla finibus sit amet massa vitae fringilla. Ut tellus mauris, dictum pulvinar elit quis, mollis sollicitudin nunc.
				</p>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed neque eu lectus ornare blandit. Maecenas fermentum ex non viverra suscipit. Maecenas iaculis vitae nulla ac venenatis. Curabitur at urna tortor. Nam eget mauris eget nulla pellentesque lacinia. Vestibulum tempus quam ligula, at porta tortor mattis eget. Nulla finibus sit amet massa vitae fringilla.
				</p>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed neque eu lectus ornare blandit. Maecenas fermentum ex non viverra suscipit. Maecenas iaculis vitae nulla ac venenatis. Curabitur at urna tortor. Nam eget mauris eget nulla pellentesque lacinia. 
				</p>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed neque eu lectus ornare blandit. Maecenas fermentum ex non viverra suscipit. Maecenas iaculis vitae nulla ac venenatis. Curabitur at urna tortor. Nam eget mauris eget nulla pellentesque lacinia. Vestibulum tempus quam ligula, at porta tortor mattis eget. Nulla finibus sit amet massa vitae fringilla. 
				</p>				
			</div>

		</div>
	</div>

	<div class="edicoes w-100">
		<div class="container">
			<div class="row">
				<ul class="d-flex flex-column align-items-center flex-lg-row w-100 justify-content-start flex-wrap">
					<?php if(have_rows('edicao_revista')) : while(have_rows('edicao_revista')) : the_row(); ?>
						<li><a href="<?php the_sub_field('arq_revista') ?>" target="_blank" title="" class="btn-pad-02"><?php the_sub_field('nome_revista'); ?></a></li>
					<?php endwhile; else: endif; ?>
				</ul>						
			</div>
		</div>
	</div>
</div>
<?php endwhile; else: endif; ?>	

<?php
	get_footer();
?>