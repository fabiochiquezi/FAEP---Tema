<?php
	//Template Name: Page Sobre Nós
	get_header();
?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="cabecalho-curso">
  <div class="container">
    <div class="row">
      <h2>Sobre Nós</h2>
      <ul class="d-flex">
        <li><a href="http://localhost/faep/wp/">home</a></li>
        <li>></li>
        <li><a href="<?php the_permalink(); ?>">Sobre Nós</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="page-sobre-nos">
  <div class="container">
    <div class="row d-flex flex-column align-items-center">

    <div class="title-pad">
      <h1>Sobre <span>Nós</span></h1>
      <p>Lorem ipsum dolor sit amet</p>
      <div class="item-design">
        <i class="icon icon-chapeu2"></i>
      </div>
    </div>

    <div class="wrap-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/ban-sobre-nos.jpg" alt="">
    </div>

    <div class="content">
      <h2>A Instituição</h2>
      <p>O Grupo SAESP – Sociedade Avançada de Educação de São Paulo adquiriu a HSM Escola Superior de Administração (HSM), em São Paulo. Com a aquisição passou a ser pioneiro no oferecimento de formação profissional em nível superior aos moradores de Parada de Taipas e Região. A SAESP foi idealizada por três professores com vasta experiência no segmento educacional, acadêmica e na gestão educacional: Prof. Ms. Edson Dorighello, Diretor do Colégio Prígule, um dos colégios pioneiros e mais bem conceituados da região, Prof. Ms. Clemente Ramos dos Santos, professor de matemática com experiência acadêmica no ensino superior tecnológico, doutorando em Educação Matemática na PUC-SP e sócio diretor do INEQ – Instituto Nacional de Educação e Qualificação Profissional e Prof. Dr. Claudinei Aparecido da Costa professor de Estatística com experiência de 14 anos no ensino superior tecnológico e Diretor financeiro do INEQ – Instituto Nacional de Educação e Qualificação Profissional. A fim de impor a identidade do grupo SAESP, os novos gestores já protocolaram no Ministério da Educação-MEC os processos de transferência de mantida, alteração de nome da IES e mudança de endereço da HSM. Assim, a HSM Escola Superior de Administração passará a se chamar Faculdade de Ciências e Tecnologia Paulistana – FACITEP, funcionando na Rua Cordeiro da Silva, nº 165 e 185, Parada de Taipas, CEP: 02883-090. Para isso, a FACITEP acaba de construir um prédio novo para acolher seus alunos e oferecer infraestrutura de qualidade a toda comunidade acadêmica, onde oferecerá o Curso de Bacharelado em Administração. Em breve, serão criados novos cursos nas diversas áreas do saber. A HSM – ESA possui Conceito Institucional-CI “4” (em um índice de 1 a 5), obtido através do processo de recredenciamento, já o curso de Administração possui Exame Nacional de Desempenho de Estudantes – ENADE “4”, Conceito Preliminar de Curso – CPC “4” e Conceito de Curso – CC “4”, todas as avaliações realizadas pelo Ministério da Educação. Deste modo, se constitui num marco para região, ao oferecer um curso consolidado e bem avaliado numa região em franco crescimento e desenvolvimento.</p>

      <ul class="d-flex flex-column align-items-center flex-lg-row justify-content-lg-between align-items-lg-start">
        <li>
          <h4>Missão</h4>
          <p>Formar e educar conjugando empreendedorismo e competência profissional a compromisso social.</p> 
        </li>
        <li>
          <h4>Visão</h4>
          <p>Ser referência regional nas áreas de negócios, finanças, empreendedorismo e tecnologia.</p> 
        </li>
        <li>
          <h4>Valores</h4>
          <p>Excelência, pluralidade, compromisso e responsabilidade social.</p> 
        </li>
      </ul>
    </div>


    </div>
  </div>
</div>
<?php endwhile; else: endif; ?>	
<?php
	get_footer();
?>