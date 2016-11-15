<?php get_header(); ?>

  <div class="w-section banner-mobuss-plat">
    <div class="w-container"><img class="logo-mobuss-const" src="<?php echo get_template_directory_uri(); ?>/images/mobussplataforma.svg" width="653">
      <h1 class="subtitulo-tigrard mobus-plat" data-ix="correr-vertical-load-l">Mobile Business Solution</h1>
      <h1 class="subtitulo-tigrard" data-ix="correr-vertical-load-l">De qualquer lugar e para todos os Negócios</h1>
      <p class="texto-solues mobuss-plat" data-ix="correr-lateral-left-load">A Plataforma Mobuss foi projetada para a criação de aplicativos móveis, que permitam a ampliação ou extensão de necessidades das mais diversas áreas de negócio. Através destes pode-se efetuar a leitura, coleta e transmissão de dados em tempo real e de qualquer lugar.
        <br><br>
		Com a Mobuss é possível criar novos aplicativos a partir do acoplamento de funcionalidades criadas em sistemas de integração, permitindo criar produtos específicos ou transferir partes de EISs (Enterprise Information System) legados para dispositivos móveis.</p>
    </div>
  </div>
  <div class="w-section telefonia-secao-2">
    <div class="w-container">
      <h1 class="titulo-monitoramento tvc" data-ix="vertical-rolagem">Conheça os benefícios da plataforma Mobuss</h1>
      <div class="w-row tiens-tv">
        <div class="w-col w-col-3" data-ix="vertical-rolagem-l"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-01.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Seu negócio sem fronteiras</h1>
          <p class="texto-gesto-ti">Análise de informações, tomada de decisão e mobilidade para operações estratégicas, tudo em tempo real.</p>
        </div>
        <div class="w-col w-col-3" data-ix="vertical-rolagem"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-02_4.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Redução <br>de falhas</h1>
          <p class="texto-gesto-ti">Torna o processo de comunicação rápido e eficiente, padronizando a entrada de informações nos sistemas da empresa.</p>
        </div>
        <div class="w-col w-col-3" data-ix="vertical-rolagem"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-03_3.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Menos <br>Burocracia</h1>
          <p class="texto-gesto-ti">Diminui a necessidade de documentação escrita.</p>
        </div>
        <div class="w-col w-col-3" data-ix="vertical-rolagem-r"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-04_1.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Maior disponibilidade</h1>
          <p class="texto-gesto-ti">Flexível para atender a todas as regiões do país, pois permite o trabalho online ou offline com a mesma segurança e agilidade.</p>
        </div>
      </div>
      <div class="w-row itens-tv">
        <div class="w-col w-col-3" data-ix="vertical-rolagem-l"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-05_2.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Sustentabilidade</h1>
          <p class="texto-gesto-ti">Eliminar a necessidade de consumo de papéis e o arquivamento físico das informações.</p>
        </div>
        <div class="w-col w-col-3" data-ix="vertical-rolagem"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-06_1.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Confiabilidade</h1>
          <p class="texto-gesto-ti">Entrega das informações garantida.</p>
        </div>
        <div class="w-col w-col-3" data-ix="vertical-rolagem"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-07.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Redução do tempo</h1>
          <p class="texto-gesto-ti">Operação otimizada, preservando os processos da empresa.</p>
        </div>
        <div class="w-col w-col-3" data-ix="vertical-rolagem-r"><img src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-6-08.svg" width="144">
          <h1 class="titulo-itens-tv telefonia-digital">Mais Segurança</h1>
          <p class="texto-gesto-ti">Menor necessidade de deslocamentos e menor risco acidentes ou perda de informações.</p>
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

<?php get_footer(); ?>
