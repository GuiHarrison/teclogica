<?php get_header(); ?>

  <div class="w-section banner-projetos-de-software">
    <div class="w-container">
      <div class="title projetos-de-sogtware" data-ix="correr-vertical-load-l">Projetos de Software</div>
      <p class="texto-solues projetos-de-software" data-ix="correr-lateral-left-load">Analistas, desenvolvedores de sistemas e arquitetos estão a sua disposição para oferecer soluções personalizadas, garantindo melhorias tanto em resultados operacionais como de gestão. Oferecer soluções personalizadas, do seu jeito, é o nosso diferencial!</p>
      <a class="w-inline-block cta-1-boto" href="#Formulario">
        <div class="tecto-cta-1" data-ix="aparecer">TENHO INTERESSE</div>
      </a>
    </div>
  </div>
  <div class="w-section projetos-de-software-section-2">
    <div class="w-container conteiner-solucoes">
      <h1 class="titulo-icone-solucoes" data-ix="vertical-rolagem-l">Benefícios</h1>
      <p class="texto-icones-solucoes" data-ix="vertical-rolagem-r">Confira os benefícios da Fábrica de Software da Teclógica</p>
      <div class="w-row colunas-solucoes margem-topo">
        <div class="w-col w-col-4" data-ix="vertical-rolagem-l"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-01_3.svg" width="134">
          <h2 class="titulo-icone-solucoes">Certificação de Qualidade</h2>
          <p class="texto-icones-solucoes">Certificação CMMi nível 2 para desenvolvimento de software e serviços.</p>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-02_2.svg" width="134">
          <h2 class="titulo-icone-solucoes">Somos <br>Especialistas</h2>
          <p class="texto-icones-solucoes">Especialização em diversas plataformas como Powerbuilder, Java, Android, IOS, .NET, FlexNet e Oracle.</p>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem-r"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-03_2.svg" width="134">
          <h2 class="titulo-icone-solucoes">Ponto <br>de Função</h2>
          <p class="texto-icones-solucoes">Utilização da métrica de Ponto de Função (FPA) para dimensionamento dos softwares.</p>
        </div>
      </div>
      <div class="w-row colunas-solucoes">
        <div class="w-col w-col-4" data-ix="vertical-rolagem-l"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-04_3.svg" width="134">
          <h2 class="titulo-icone-solucoes">Enterprise <br>Unified Process</h2>
          <p class="texto-icones-solucoes">Projetos iterativos utilizando o processo padrão da Teclógica baseado no Enterprise Unified Process.</p>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-05_1.svg" width="134">
          <h1 class="titulo-icone-solucoes mobilidade">Mobilidade</h1>
          <p class="texto-icones-solucoes">Novas linhas de produção são criadas em diferentes tecnologias sob demanda.</p>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem-r"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-06_2.svg" width="134">
          <h2 class="titulo-icone-solucoes">Qualidade <br>Garantida</h2>
          <p class="texto-icones-solucoes">Garantia de dois anos nos serviços continuados, para honrar o compromisso de satisfação com os clientes.</p>
        </div>
      </div>
    </div>
  </div>

	  <?php echo get_template_part('cases', 'descricao'); ?>
    
  <div class="w-section banner-materiais-educativos">
	<div class="w-container">
	  <h1 class="ttulo-se-o-azul" data-ix="vertical-rolagem">MATERIAIS EDUCATIVOS</h1>
	  <div class="texto-materiais-educativos" data-ix="vertical-rolagem-l">Baixe agora nossos materiais educativos e aprofunde seu conhecimento sobre as diversas soluções do mercado em tecnologia da informação.</div>
	  <a class="w-inline-block cta-1-boto" href="<?php echo get_permalink(get_page_by_path('materiais-educativos'))?>">
		<div class="tecto-cta-1" data-ix="aparecer">VEJA OS CONTEÚDOS</div>
	  </a>
	</div>
  </div>
  <div class="w-section section-form-software" id="Formulario">
    <div class="w-container div-form">
      <h2 class="gesto-ti titulo-form">Quer saber como uma solução personalizada pode garantir as melhorias de gestão e operacionais?</h2>
      <p class="asterisco" data-ix="aparecer">*indica um campo de preenchimento obrigatório</p>
      <div class="w-form formulrio">
		  <?php echo do_shortcode('[formidable id=8]'); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
