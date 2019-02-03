<?php
	//Template Name: Page Secretaria
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

<div class="page-secretaria">
  <div class="container">
    <div class="row d-flex flex-column align-items-center">

    <div class="wrap-img-ban">
      <img src="<?php echo get_template_directory_uri(); ?>/img/banner-secretaria.jpg" alt="">
    </div>

      <div class="content1">
        <div class="title-pad">
          <h1><span>Contato</span></h1>
          <div class="item-design">
            <i class="icon icon-chapeu2"></i>
          </div>
        </div>      

        <div class="container-ajuste d-flex flex-column align-items-center flex-lg-row justify-content-between align-items-lg-start">
          <ul class="lista-contato col-lg-7">
            <li class="d-flex align-items-center">
              <div class="wrap">
                <i class="icon icon-contato-1"></i>
              </div>
              <div class="content">
                <h4>Telefone</h4>
                <p>(11) 2107-5484</p>
                <p class="d-flex align-items-center"><i class="icon icon-whats2"></i> (11) 95031-7539</p>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <div class="wrap">
                <i class="icon icon-contato-2"></i>
              </div>
              <div class="content">
                <h4>E-mail</h4>
                <p> comercial@faculdades<br>paulistanas.edu.br </p>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <div class="wrap">
                <i class="icon icon-contato-3"></i>
              </div>
              <div class="content">
                <h4>horário de atendimento</h4>
                <p>Seg a sex das 7:30h às 22h</p>
                <p>Aos sábados das 8h às 12h</p>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <div class="wrap">
                <i class="icon icon-contato-3"></i>
              </div>
              <div class="content">
                <h4>Endereço</h4>
                <a href="" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/maps-secretaria.jpg" alt="">
                </a>
              </div>
            </li>
          </ul>

          <div class="secretaria-part col-lg-4">
            <div class="content d-flex flex-column align-items-center">
              <a href="http://localhost/faep/wp/wp-content/uploads/2018/10/jp000001.pdf" target="_blank" class="item d-flex">
                <div class="wrap">
                  <i class="icon icon-reg-interno2"></i>
                </div>
                <div class="dados">
                  <h5>REGIMENTO INTERNO</h5>
                  <p>Lorem ipsum dolor sit amet</p>
                  <span href="" target="_blank" class="button2">BAIXAR</span>
                </div>
              </a>
              <a href="http://localhost/faep/wp/wp-content/uploads/2018/10/jp000001.pdf" target="_blank" class="item d-flex">
                <div class="wrap">
                  <i class="icon icon-edit-vest2"></i>
                </div>
                <div class="dados">
                  <h5>EDITAL DO VESTIBULAR 2018/1</h5>
                  <p>Lorem ipsum dolor sit amet</p>
                  <span href="" target="_blank" class="button2">BAIXAR</span>
                </div>
              </a>
              <a href="http://localhost/faep/wp/wp-content/uploads/2018/10/jp000001.pdf" target="_blank" class="item d-flex">
                <div class="wrap">
                  <i class="icon icon-man-bibli2"></i>
                </div>
                <div class="dados">
                  <h5>MANUAL DA BIBLIOTECA</h5>
                  <p>Lorem ipsum dolor sit amet</p>
                  <span href="" target="_blank" class="button2">BAIXAR</span>
                </div>
              </a>
              <a href="http://localhost/faep/wp/wp-content/uploads/2018/10/jp000001.pdf" target="_blank" class="item d-flex">
                <div class="wrap">
                  <i class="icon icon-man-lab2"></i>
                </div>
                <div class="dados">
                  <h5>MANUAL DO LABORATÓRIO DE INFORMÁTICA E CPA</h5>
                  <p>Lorem ipsum dolor sit amet</p>
                  <span href="" target="_blank" class="button2">BAIXAR</span>
                </div>
              </a>
              <a href="http://localhost/faep/wp/wp-content/uploads/2018/10/jp000001.pdf" target="_blank" class="item d-flex">
                <div class="wrap">
                  <i class="icon icon-guia-estudante"></i>
                </div>
                <div class="dados">
                  <h5>MANUAL DO LABORATÓRIO DE INFORMÁTICA E CPA</h5>
                  <p>Lorem ipsum dolor sit amet</p>
                  <span href="" target="_blank" class="button2">BAIXAR</span>
                </div>
              </a>
              <a href="http://localhost/faep/wp/wp-content/uploads/2018/10/jp000001.pdf" target="_blank" class="item d-flex">
                <div class="wrap">
                  <i class="icon icon-portal-empregabilidade"></i>
                </div>
                <div class="dados">
                  <h5>MANUAL DA BIBLIOTECA</h5>
                  <p>Lorem ipsum dolor sit amet</p>
                  <span href="" target="_blank" class="button2">BAIXAR</span>
                </div>
              </a>
            </div>
          </div>          
        </div>


      </div>

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
          <select name="curso" id="">
            <option value="curso01">Curso 01</option>
            <option value="curso02">Curso 02</option>
            <option value="curso03">Curso 03</option>
          </select>
          <input type="text" name="data" class="valid" placeholder="Data de Interesse">	
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