<?php get_header(); ?>


	<div class="w-section banner" id="bannerSolucoes">
	  	<div class="w-container">
	    	<div class="title" data-ix="correr-vertical-load-l">TECNOLOGIA COM EXCELÊNCIA E<br />COMPROMISSO, DO SEU JEITO.</div>
	    	<div class="w-row div-vantagens">
		      	<div class="w-col w-col-3 w-clearfix" data-ix="correr-vertical-load-l">
		        	<div class="titulo-produtos">Serviços<br />Gerenciados</div>
		        	<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('spoc-gerenciamento-de-aplicacao')); ?>">
		          	<div class="boto-produto">Gerenciamento de Aplicações</div></a>
		        	<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('desenvolvimento-de-software')); ?>">
		          	<div class="boto-produto">Projetos de Software</div></a>
		      	</div>
		      	<div class="w-col w-col-3" data-ix="correr-vertical-load-l">
		        	<div class="titulo-produtos">Infraestrutura<br />de TI</div>
		        	<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('service-desk-e-suporte-ti-guard')); ?>">
		          	<div class="boto-produto">TI.Guard</div></a>
		        	<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('infraestrutura-de-ti')); ?>">
		          	<div class="boto-produto">Projetos de Infraestrutura</div></a>
		      	</div>
		      	<div class="w-col w-col-3 w-clearfix" data-ix="correr-vertical-load-l">
		        	<div class="titulo-produtos">Comunicação<br />Corporativa</div>
		        	<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('comunicacao-interna-tv-corporativa')); ?>">
		          	<div class="boto-produto">TV Corporativa</div></a>
		        	<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('voip-para-empresas')); ?>">
		          	<div class="boto-produto">Telefonia Digital</div></a>
		      	</div>
		      	<div class="w-col w-col-3 w-clearfix" data-ix="correr-vertical-load-l">
		        	<div class="titulo-produtos">Mobilidade<br />Corporativa</div>
		        	<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('mobuss-app-para-construcao')); ?>">
		          	<div class="boto-produto">Mobuss Construção</div></a>
		        	<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('plataforma-mobuss-mobile-business-solution')); ?>">
		          	<div class="boto-produto">Mobuss Plataforma</div></a>
		      	</div>
	    	</div>

	    	<a class="w-inline-block cta-1-boto" href="#Formulario">
	      		<div class="tecto-cta-1" data-ix="aparecer">TENHO INTERESSE</div>
      		</a>
	  	</div>
	</div>

	<div class="w-section seo-branca">	<div class="w-container">

		<div class="gesto-ti" data-ix="vertical-rolagem"><?php the_field('sg-t'); ?></div>
		<div class="w-row colunas-gesto-ti">
	      	<div class="w-col w-col-6 gesto-ti-coluna-1" data-ix="vertical-rolagem-l"><img class="icone-se-o-azul" src="<?php echo get_template_directory_uri(); ?>/images/gerenciamento.svg" width="144">
	        	<h3 class="titulo-gesto-ti"><?php the_field('sg-ga-t'); ?></h3>
	        	<p class="texto-gesto-ti"><?php the_field('sg-ga-d'); ?></p>
				<a class="w-button tags-solu-es" href="<?php echo get_permalink(get_page_by_path('gerenciamento-de-aplicacoes')); ?>">Quero saber mais!</a>
	      	</div>
	      	<div class="w-col w-col-6" data-ix="vertical-rolagem-r"><img class="icone-se-o-azul" src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-7-02.svg" width="144">
	        	<h3 class="titulo-gesto-ti"><?php the_field('sg-ps-t'); ?></h3>
	        	<p class="texto-gesto-ti"><?php the_field('sg-ps-d'); ?></p>
				<a class="w-button tags-solu-es" href="<?php echo get_permalink(get_page_by_path('projetos-de-software')); ?>">Quero saber mais!</a>
	      	</div>
    	</div>

		</div>
	</div>

  	<div class="w-section se-o-azul">
	  	<div class="w-container">
	    	<h2 class="ttulo-se-o-azul" data-ix="vertical-rolagem"><?php the_field('iti-t'); ?></h2>
		    	<div class="w-row colunas-solues">
		      	<div class="w-col w-col-6" data-ix="vertical-rolagem-l"><img class="icone-se-o-azul" src="<?php echo get_template_directory_uri(); ?>/images/ti-guard.svg" width="144">
		        	<div class="titulo-se-o-azul"><?php the_field('iti-tig-t'); ?></div>
		        	<p class="texto-se-o-azul"><?php the_field('iti-tig-d'); ?></p><a class="w-button tags-solu-es branco" href="<?php echo get_permalink(get_page_by_path('ti-guard')); ?>">Quero saber mais!</a>
		      	</div>
		      	<div class="w-col w-col-6" data-ix="vertical-rolagem-r"><img class="icone-se-o-azul" src="<?php echo get_template_directory_uri(); ?>/images/infraestrutura.svg" width="144">
		        	<div class="titulo-se-o-azul"><?php the_field('iti-pi-t'); ?></div>
		        	<p class="texto-se-o-azul"><?php the_field('iti-pi-d'); ?></p><a class="w-button tags-solu-es branco" href="<?php echo get_permalink(get_page_by_path('projetos-de-infraestrutura')); ?>">Quero saber mais!</a>
		      	</div>
	    	</div>
	  	</div>
	</div>

	<div class="w-section">
	  	<div class="w-container">
	    	<h2 class="gesto-ti"><?php the_field('cc-t'); ?></h2>
	    	<div class="w-row colunas-gesto-ti">
		      	<div class="w-col w-col-6 gesto-ti-coluna-1" data-ix="vertical-rolagem-l"><img class="icone-se-o-azul" src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-2-01.svg" width="144">
		        	<h1 class="titulo-gesto-ti"><?php the_field('cc-tc-t'); ?></h1>
		        	<p class="texto-gesto-ti"><?php the_field('cc-tc-d'); ?></p><a class="w-button tags-solu-es _2" href="<?php echo get_permalink(get_page_by_path('tv-corporativa')); ?>">Quero saber mais!</a>
		      	</div>
		      	<div class="w-col w-col-6" data-ix="vertical-rolagem-r"><img class="icone-se-o-azul" src="<?php echo get_template_directory_uri(); ?>/images/telefone.svg" width="144">
		        	<h1 class="titulo-gesto-ti"><?php the_field('cc-td-t'); ?></h1>
		        	<p class="texto-gesto-ti"><?php the_field('cc-td-d'); ?></p><a class="w-button tags-solu-es" href="<?php echo get_permalink(get_page_by_path('telefonia-digital')); ?>">Quero saber mais!</a>
		      	</div>
	    	</div>
	  	</div>
	</div>

	<div class="w-section se-o-azul">
	  	<div class="w-container">
	    	<h2 class="ttulo-se-o-azul" data-ix="vertical-rolagem"><?php the_field('mc-t'); ?></h2>
	    	<div class="w-row colunas-solues">
		      	<div class="w-col w-col-6" data-ix="vertical-rolagem-l"><img class="icone-se-o-azul" src="<?php echo get_template_directory_uri(); ?>/images/mobuss-construcao.svg" width="144">
		        	<div class="titulo-se-o-azul"><?php the_field('mc-mc-t'); ?></div>
		        	<p class="texto-se-o-azul"><?php the_field('mc-mc-d'); ?></p><a class="w-button tags-solu-es branco" href="<?php echo get_permalink(get_page_by_path('mobuss-construcao')); ?>">Quero saber mais!</a>
		      	</div>
		      	<div class="w-col w-col-6" data-ix="vertical-rolagem-r"><img class="icone-se-o-azul" src="<?php echo get_template_directory_uri(); ?>/images/mobuss-plataforma.svg" width="144">
		        	<div class="titulo-se-o-azul"><?php the_field('mc-pm-t'); ?></div>
		        	<p class="texto-se-o-azul"><?php the_field('mc-pm-d'); ?></p><a class="w-button tags-solu-es branco" href="<?php echo get_permalink(get_page_by_path('mobuss-plataforma')); ?>">Quero saber mais!</a>
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
	        	<div class="icone-numeros"><?php the_field('tn-ps'); ?></div>
	        	<h1 class="texto-numeros-2">/Horas Mês</h1>
	      	</div>
	      	<div class="w-col w-col-4 w-col-small-4 coluna-linha-numeros" data-ix="vertical-rolagem"><img class="cone-nmeros-coluna-1 _2" src="<?php echo get_template_directory_uri(); ?>/images/icones-02.svg" width="122">
	        	<h1 class="titulo-icones">ATENDIMENTO SERVICE DESK</h1>
	        	<div class="icone-numeros"><?php the_field('tn-asd'); ?></div>
	        	<h1 class="texto-numeros-2">/Horas Mês</h1>
	      	</div>
	      	<div class="w-col w-col-4 w-col-small-4" data-ix="vertical-rolagem-r"><img class="cone-nmeros-coluna-1" src="<?php echo get_template_directory_uri(); ?>/images/icones-03.svg" width="122">
	        	<h1 class="titulo-icones">INFRAEESTRUTURA <br>E SOFTWARE</h1>
	        	<div class="icone-numeros"><?php the_field('tn-is'); ?></div>
	        	<h1 class="texto-numeros-2">Projetos</h1>
	      	</div>
	    	</div>
	    	<div class="w-row coluna-2-numeros">
	      	<div class="w-col w-col-6 w-col-small-6 w-clearfix coluna-linha-numeros" data-ix="vertical-rolagem-l"><img class="cone-nmeros-coluna-1" src="<?php echo get_template_directory_uri(); ?>/images/icones-04.svg" width="116">
	        	<h1 class="titulo-icones usuarios">usuários</h1>
	        	<div class="icone-numeros"><?php the_field('tn-u'); ?></div>
	        	<h1 class="texto-numeros-2">Atendidos</h1>
	      	</div>
	      	<div class="w-col w-col-6 w-col-small-6 w-clearfix" data-ix="vertical-rolagem-r"><img class="cone-nmeros-coluna-1" src="<?php echo get_template_directory_uri(); ?>/images/icones-05.svg" width="115">
	        	<h1 class="titulo-icones">CAPITAL HUMANO</h1>
	        	<div class="icone-numeros"><?php the_field('tn-ch'); ?></div>
	        	<h1 class="texto-numeros-2">Colaboradores</h1>
	      	</div>
	    	</div>
	  	</div>
	</div>

		<?php echo get_template_part('cases', 'depoimento'); ?>

	<div class="w-section seo-logos">
	  	<div class="w-container cont-marcas">

	    	<div class="gesto-ti" data-ix="vertical-rolagem">QUEM CONFIA NA TECLÓGICA</div>
	    	<div class="marcas" data-ix="vertical-rolagem-r">
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-2-20.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/baliza.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente3.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente4.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente6.png"></a>
	    	</div>

	    	<div class="marcas" data-ix="vertical-rolagem-l">
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/hering.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente9.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente13.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente10.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente15.png"></a>
	    	</div>

	    	<div class="marcas" data-ix="vertical-rolagem-l">
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente14.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente11.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente12.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente17.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente16.png"></a>
	    	</div>

	    	<div class="marcas" data-ix="vertical-rolagem-r">
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente7.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente18.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente19.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente20.png"></a>
		      	<a class="w-inline-block link-marca" href="#"><img class="marca" src="<?php echo get_template_directory_uri(); ?>/images/cliente21.png"></a>
			</div>

			<a class="w-button tags-solu-es" data-ix="vertical-rolagem-r" href="<?php echo get_permalink(get_page_by_path('clientes')); ?>">Mais clientes</a>

	  	</div>
	</div>

	<div class="w-section banner-materiais-educativos na-home">
	  	<div class="w-container">
	    	<h1 class="ttulo-se-o-azul" data-ix="vertical-rolagem">MATERIAIS EDUCATIVOS</h1>
	    	<div class="texto-materiais-educativos" data-ix="vertical-rolagem-l">Baixe agora nossos materiais educativos e aprofunde seu conhecimento sobre as diversas soluções do mercado em tecnologia da informação.</div>
	    	<a class="w-inline-block cta-1-boto" href="<?php echo get_permalink(get_page_by_path('materiais-educativos')); ?>">
	      	<div class="tecto-cta-1" data-ix="aparecer">VEJA OS CONTEÚDOS</div></a>
	  	</div>
	</div>

	<div class="w-section seo-form" id="Formulario">
	  	<div class="w-container div-form pagina-contato">
	    	<p class="asterisco" data-ix="aparecer">*indica um campo de preenchimento obrigatório</p>

	    	<div class="w-form formulrio">
				<?php echo do_shortcode('[formidable id=7]'); ?>
	    	</div>

	  	</div>
	</div>

	<div class="w-section bloco-final-home">
	  	<div class="w-container"><img class="logo-bloco-final" data-ix="aparecer" src="<?php echo get_template_directory_uri(); ?>/images/teclogica-01.svg" width="279">
	    	<p class="texto-bloco-final" data-ix="vertical-rolagem-l">Atuamos há <?php echo date('Y') - 1994 ?> anos no Brasil e América Latina, entregando soluções de Outsourcing de Software e Infraestrutura, Comunicação e Mobilidade Corporativa.</p>
	  	</div>
	</div>

	<?php get_footer(); ?>
