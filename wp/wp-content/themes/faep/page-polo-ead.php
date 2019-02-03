<?php
	//Template Name: Page Polo EAD
	get_header();
?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="cabecalho-curso">
  <div class="container">
    <div class="row">
      <h2>GRaduação</h2>
      <ul class="d-flex">
        <li><a href="">home</a></li>
        <li>></li>
        <li><a href="">cursos</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="page-polo-ead">
  <div class="container">
    <div class="row d-flex flex-column align-items-center">

      <div class="form">
        <div class="title-pad">
          <h1>Reserve sua <span> vaga!</span></h1>
          <div class="item-design">
            <i class="icon icon-chapeu2"></i>
          </div>
        </div>

        <form action="" class="d-flex flex-column align-items-center form-pad form-contact flex-lg-row flex-lg-wrap justify-content-center" accept-charset="utf-8">
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
</div>
<?php endwhile; else: endif; ?>	
<?php
	get_footer();
?>