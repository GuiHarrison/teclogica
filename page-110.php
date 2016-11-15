<?php get_header(); ?>

  <div class="w-section banner-telefonia">
    <div class="w-container">
      <div class="title telefonia" data-ix="correr-vertical-load-l">Telefonia Digital</div>
      <p class="texto-solues" data-ix="correr-lateral-left-load">Equipada com várias funcionalidades antes existentes apenas em centrais de grande porte, a solução de Telefonia Digital da Teclógica é aderente aos mais diversos modelos de negócio, independente do ramo ou porte da sua empresa.
        <br>
        <br>As tecnologias utilizadas no IPBX tem ganhado cada vez mais espaço dentro das organizações que procuram expandir sua comunicação, visando um diferencial de mercado a custos reduzidos.
      </p>
      <a class="w-inline-block cta-1-boto" href="#Formulario">
        <div class="tecto-cta-1" data-ix="aparecer">TENHO INTERESSE</div>
      </a>
    </div>
  </div>
  <div class="w-section telefonia-secao-2">
    <div class="w-container">
      <h1 class="titulo-monitoramento tvc" data-ix="vertical-rolagem">ESTRATÉGIAS DIFERENCIADAS PARA empresas</h1>
      <div class="w-row tiens-tv">
        <div class="w-col w-col-4" data-ix="vertical-rolagem-l"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-01_1.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Redução de Custos</h1>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-02.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Integrar funcionários <br>e Filiais</h1>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem-r"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-03.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Integração VOIP</h1>
        </div>
      </div>
      <div class="w-row itens-tv">
        <div class="w-col w-col-4" data-ix="vertical-rolagem-l"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-04_2.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Gravação das Ligações</h1>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-05.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Gerenciamento <br>em tempo real</h1>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem-r"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-06.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Integração com <br>ERP e CRM</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section estrategias telefonia">
    <div class="w-container">
      <h1 class="titulo-monitoramento tvc" data-ix="vertical-rolagem">Estratégias diferenciadas para Call Centers</h1>
      <div class="w-row coluna-telefonia">
        <div class="w-col w-col-6"><img data-ix="vertical-rolagem-l" src="<?php echo get_template_directory_uri(); ?>/images/painel-de-acompanhamento.jpg" width="403">
        </div>
        <div class="w-col w-col-6" data-ix="vertical-rolagem-r">
          <h1 class="titulo-monitoramento" data-ix="vertical-rolagem-l">PAINEL DE ACOMPANHAMENTO</h1>
          <p class="texto-monitoramento" data-ix="vertical-rolagem-l">O Painel de Acompanhamento da Telefonia Digital apresenta, em tempo real, os principais indicadores do seu Call Center, se tornando um forte aliado para as tomadas de decisão do dia-a-dia.</p>
        </div>
      </div>
      <div class="w-row coluna-telefonia">
        <div class="w-col w-col-6" data-ix="vertical-rolagem-l">
          <h1 class="titulo-monitoramento" data-ix="vertical-rolagem-l">PAINEL DE AGENTES</h1>
          <p class="texto-monitoramento" data-ix="vertical-rolagem-l">Através do Painel de Agentes você gerencia os postos de atendimento das campanhas, organiza filas de espera, acompanha as ligações em andamento e muito mais.</p>
        </div>
        <div class="w-col w-col-6"><img data-ix="vertical-rolagem-r" src="<?php echo get_template_directory_uri(); ?>/images/painel-de-agentes.jpg" width="429">
        </div>
      </div>
    </div>
  </div>

  	  <?php echo get_template_part('cases', 'depoimento'); ?>

  <div class="w-section banner-materiais-educativos">
	<div class="w-container">
	  <h1 class="ttulo-se-o-azul" data-ix="vertical-rolagem">MATERIAIS EDUCATIVOS</h1>
	  <div class="texto-materiais-educativos" data-ix="vertical-rolagem-l">Baixe agora nossos materiais educativos e aprofunde seu conhecimento sobre as diversas soluções do mercado em tecnologia da informação.</div>
	  <a class="w-inline-block cta-1-boto" href="<?php echo get_permalink(get_page_by_path('materiais-educativos'))?>">
		<div class="tecto-cta-1" data-ix="aparecer">VEJA OS CONTEÚDOS</div>
	  </a>
	</div>
  </div>

  <div class="w-section" id="Formulario">
    <div class="w-container div-form">
      <h2 class="gesto-ti titulo-form">Quer saber como expandir sua comunicação a custos bem reduzidos?</h2>
      <p class="asterisco" data-ix="aparecer">*indica um campo de preenchimento obrigatório</p>
      <div class="w-form formulrio">
		  <?php echo do_shortcode('[formidable id=8]'); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
