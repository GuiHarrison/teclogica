<?php get_header(); ?>

  <div class="w-section banner-solucoes">
    <div class="w-container conteiner-solucoes">
      <div class="title pagina-cases solucoes" data-ix="correr-vertical-load-l">Gerenciamento de Aplicação</div>
      <p class="texto-solues" data-ix="correr-lateral-left-load">A Teclógica oferece Gerenciamento de Aplicações voltado a qualidade total. Nossa estrutura conta com equipes organizadas por conhecimento de negócios e baseia-se no conceito SPOC (Single Point of Contact).
        <br>
        <br>O gerenciamento do ciclo de vida das aplicações acontece dentro de um ambiente controlado e certificado no nível 2 do CMMI for services. Esta formalização de processos permite o controle contínuo com maior eficiência e identificação de oportunidades de melhoria visando a redução de incidentes, controlando o impacto no ambiente de TI. Às mudanças de estratégia de negócio que refletem em alteração de aplicações, são realizadas visando a redução de riscos e atendendo em tempo adequado.</p>
        <a class="w-inline-block cta-1-boto" href="#Formulario">
          <div class="tecto-cta-1" data-ix="aparecer">TENHO INTERESSE</div>
        </a>
    </div>
  </div>
  <div class="w-section section-2-solucoes">
    <div class="w-container conteiner-solucoes">
      <h1 class="titulo-icone-solucoes" data-ix="vertical-rolagem-l">Benefícios</h1>
      <p class="texto-icones-solucoes" data-ix="vertical-rolagem-r">Confira os benefícios do Gerenciamento de Aplicação da Teclógica</p>
      <div class="w-row colunas-solucoes margem-topo">
        <div class="w-col w-col-4" data-ix="vertical-rolagem-l"><img src="<?php echo get_template_directory_uri(); ?>/images/icones-solucoes-01.svg" width="134">
          <h2 class="titulo-icone-solucoes">Redução <br>de Custos</h2>
          <p class="texto-icones-solucoes">Otimização dos ativos TI e
            <br>aumento do valor agregado.</p>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem"><img src="<?php echo get_template_directory_uri(); ?>/images/icones-solucoes-02.svg" width="134">
          <h2 class="titulo-icone-solucoes">Help Desk Especializado</h2>
          <p class="texto-icones-solucoes">Opções de 1º, 2º e 3º níveis de atendimento conforme a real necessidade de sua empresa.</p>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem-r"><img src="<?php echo get_template_directory_uri(); ?>/images/icones-solucoes-03.svg" width="134">
          <h2 class="titulo-icone-solucoes">Mobilidade</h2>
          <p class="texto-icones-solucoes mobilidade">Flexibilidade de transição e transformação de infraestrutura e aplicativos.</p>
        </div>
      </div>
      <div class="w-row colunas-solucoes">
        <div class="w-col w-col-4" data-ix="vertical-rolagem-l"><img src="<?php echo get_template_directory_uri(); ?>/images/icones-solucoes-04.svg" width="134">
          <h2 class="titulo-icone-solucoes">Ouvidoria <br>Ativa</h2>
          <p class="texto-icones-solucoes">Serviço de Ouvidoria, responsável por receber, encaminhar e acompanhar as solicitações dos clientes.</p>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem"><img src="<?php echo get_template_directory_uri(); ?>/images/icones-solucoes-05.svg" width="134">
          <h2 class="titulo-icone-solucoes">Foco no <br>Negócio</h2>
          <p class="texto-icones-solucoes">Permite a equipe de TI concentrar-se em suas competências principais.</p>
        </div>
        <div class="w-col w-col-4" data-ix="vertical-rolagem-r"><img src="<?php echo get_template_directory_uri(); ?>/images/icones-solucoes-06.svg" width="134">
          <h2 class="titulo-icone-solucoes">Níveis de <br>Serviço</h2>
          <p class="texto-icones-solucoes">Contratos regidos por Nível de Serviço (SLA). Você tem o atendimento conforme as suas reais necessidades.</p>
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
  <div class="w-section" id="Formulario">
    <div class="w-container div-form">
      <h2 class="gesto-ti titulo-form">QUER SABER COMO O GERENCIAMENTO DE APLICAÇÕES PODE AJUDAR A CONTROLAR O AMBIENTE DE TI DA SUA EMPRESA?</h2>
      <p class="asterisco" data-ix="aparecer">*indica um campo de preenchimento obrigatório</p>
      <div class="w-form formulrio">
		  <?php echo do_shortcode('[formidable id=8]'); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
