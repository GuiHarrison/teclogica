<?php get_header(); ?>

  <div class="w-section banner-sobre">
    <div class="w-container"><img class="logo-sobre" src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-3-01.svg" width="531">
      <p class="texto-bloco-final sobre">Cada vez mais posicionada para atuar como extensão das estruturas de TI dos seus clientes, a Teclógica atua há mais de 20 anos no Brasil e América Latina, entregando soluções e projetos nas áreas de Outsourcing de Software e Infraestrutura, Comunicação e Mobilidade Corporativa.</p>
    </div>
  </div>

  <div class="w-section linha-cronologica">

    <h2 class="gesto-ti">HISTÓRIA</h2>
	<div class="timeline w-slider" data-animation="slide" data-duration="500" data-infinite="1">
      <div class="w-slider-mask">
        <div class="w-slide">
          <div class="cont-timeline w-container"><img src="<?php echo get_template_directory_uri(); ?>/images/info1.svg" width="647">
          </div>
        </div>
        <div class="w-slide">
          <div class="cont-timeline w-container"><img src="<?php echo get_template_directory_uri(); ?>/images/info2.svg" width="647">
          </div>
        </div>
        <div class="w-slide">
          <div class="cont-timeline w-container"><img src="<?php echo get_template_directory_uri(); ?>/images/info3.svg" width="647">
          </div>
        </div>
        <div class="w-slide">
          <div class="cont-timeline w-container"><img src="<?php echo get_template_directory_uri(); ?>/images/info4.svg" width="647">
          </div>
        </div>
      </div>
      <div class="w-slider-arrow-left">
        <div class="seta w-icon-slider-left"></div>
      </div>
      <div class="w-slider-arrow-right">
        <div class="seta w-icon-slider-right"></div>
      </div>
    </div>
  </div>

  <div class="banner-pilares w-section">
    <div class="coluna-pilares w-container">
      <div class="w-row">
        <div class="coluna-misso w-col w-col-4" data-ix="vertical-rolagem-l">
          <div class="icone-mvv">M</div>
          <div class="mvv titulo-se-o-azul">Missão</div>
          <p class="pilares-texto">Entender nossos clientes e garantir a melhor entrega e resultado para suas necessidades.</p>
        </div>
        <div class="coluna-misso w-col w-col-4" data-ix="vertical-rolagem">
          <div class="mvv titulo-se-o-azul">Visão</div>
          <p class="pilares-texto">Ser referência nos produtos e serviços de Tecnologia da Informação e Comunicações.</p>
          <div class="icone-mvv">V</div>
        </div>
        <div class="coluna-misso w-col w-col-4" data-ix="vertical-rolagem-r">
          <div class="mvv titulo-se-o-azul">Valores</div>
          <p class="pilares-texto">Compromisso, Orientação para resultados, Relacionamento e Excelência.</p>
          <div class="icone-mvv">V</div>
        </div>
      </div>
    </div>
  </div>

  <div class="w-section">
	  <div class="w-container">
		  <div class="gesto-ti" data-ix="vertical-rolagem">Teclógica em números</div>
		  <div class="w-row colina-1-numeros">
		  <div class="w-col w-col-4 w-col-small-4 coluna-linha-numeros" data-ix="vertical-rolagem-l"><img class="cone-nmeros-coluna-1" src="<?php echo get_template_directory_uri(); ?>/images/icones-01.svg" width="122">
			  <h1 class="titulo-icones">PROJETOS DE SOFTWARE</h1>
			  <div class="icone-numeros"><?php the_field('tn-ps', 130); ?></div>
			  <h1 class="texto-numeros-2">/Horas Mês</h1>
		  </div>
		  <div class="w-col w-col-4 w-col-small-4 coluna-linha-numeros" data-ix="vertical-rolagem"><img class="cone-nmeros-coluna-1 _2" src="<?php echo get_template_directory_uri(); ?>/images/icones-02.svg" width="122">
			  <h1 class="titulo-icones">ATENDIMENTO SERVICE DESK</h1>
			  <div class="icone-numeros"><?php the_field('tn-asd', 130); ?></div>
			  <h1 class="texto-numeros-2">/Horas Mês</h1>
		  </div>
		  <div class="w-col w-col-4 w-col-small-4" data-ix="vertical-rolagem-r"><img class="cone-nmeros-coluna-1" src="<?php echo get_template_directory_uri(); ?>/images/icones-03.svg" width="122">
			  <h1 class="titulo-icones">INFRAEESTRUTURA <br>E SOFTWARE</h1>
			  <div class="icone-numeros"><?php the_field('tn-is', 130); ?></div>
			  <h1 class="texto-numeros-2">Projetos</h1>
		  </div>
		  </div>
		  <div class="w-row coluna-2-numeros">
		  <div class="w-col w-col-6 w-col-small-6 w-clearfix coluna-linha-numeros" data-ix="vertical-rolagem-l"><img class="cone-nmeros-coluna-1" src="<?php echo get_template_directory_uri(); ?>/images/icones-04.svg" width="116">
			  <h1 class="titulo-icones usuarios">usuários</h1>
			  <div class="icone-numeros"><?php the_field('tn-u', 130); ?></div>
			  <h1 class="texto-numeros-2">Atendidos</h1>
		  </div>
		  <div class="w-col w-col-6 w-col-small-6 w-clearfix" data-ix="vertical-rolagem-r"><img class="cone-nmeros-coluna-1" src="<?php echo get_template_directory_uri(); ?>/images/icones-05.svg" width="115">
			  <h1 class="titulo-icones">CAPITAL HUMANO</h1>
			  <div class="icone-numeros"><?php the_field('tn-ch', 130); ?></div>
			  <h1 class="texto-numeros-2">Colaboradores</h1>
		  </div>
		  </div>
	  </div>
  </div>

	<div class="w-section trabalho-conosco">
	  <div class="w-container">
	    <h1 class="titulo-monitoramento tvc">TRABALHE CONOSCO</h1>
	    <p class="texto-monitoramento" data-ix="vertical-rolagem-l">A Teclógica constantemente busca talentos e proporciona aos seus colaboradores um ótimo ambiente de trabalho, incentivando a troca de conhecimento, o desenvolvimento profissional e pessoal, a educação e promovendo ações de qualidade de vida.</p><a class="w-button tags-solu-es eventos" href="<?php echo get_permalink(get_page_by_path('trabalhe-conosco'))?>">SABER MAIS</a>
	  </div>
	</div>

  <div class="w-section sobre-portfolio">
    <div class="w-container">
      <h1 class="subtitulo-tigrard" data-ix="vertical-rolagem">PORTFÓLIO</h1>
      <div class="w-row div-vantagens">
        <div class="w-col w-col-3 w-clearfix" data-ix="vertical-rolagem-l">
          <div class="titulo-produtos">Serviços
            <br>Gerenciados</div>
          <a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('gerenciamento-de-aplicacoes'))?>">
            <div class="boto-produto">Gerenciamento de Aplicações</div>
          </a>
          <a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('projetos-de-software'))?>">
            <div class="boto-produto">Projetos de Software</div>
          </a>
        </div>
        <div class="w-col w-col-3 w-clearfix" data-ix="vertical-rolagem-l">
          <div class="titulo-produtos">Infraestrutura
            <br>de TI</div>
          <a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('ti-guard'))?>">
            <div class="boto-produto">TI.Guard</div>
          </a>
          <a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('projetos-de-infraestrutura'))?>">
            <div class="boto-produto">Projetos de Infraestrutura</div>
          </a>
        </div>
        <div class="w-col w-col-3 w-clearfix" data-ix="vertical-rolagem-r">
          <div class="titulo-produtos">Comunicação
            <br>Corporativa</div>
          <a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('tv-corporativa'))?>">
            <div class="boto-produto">TV Corporativa</div>
          </a>
          <a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('telefonia-digital'))?>">
            <div class="boto-produto">Telefonia Digital</div>
          </a>
        </div>
        <div class="w-col w-col-3 w-clearfix" data-ix="vertical-rolagem-r">
          <div class="titulo-produtos">Mobilidade
            <br>Corporativa</div>
          <a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('mobuss-construcao'))?>">
            <div class="boto-produto">Mobuss Construção</div>
          </a>
          <a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('mobuss-plataforma'))?>">
            <div class="boto-produto">Mobuss Plataforma</div>
          </a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
