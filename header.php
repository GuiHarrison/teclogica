<!doctype html>
<html <?php language_attributes(); ?> class="no-js" data-wf-site="573b6460b03d8ea144cdb96f" data-wf-page="573b6460b03d8ea144cdb970">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
		<script>
		  WebFont.load({
			google: {
			  families: ["Droid Sans:400,700","Exo 2:regular,italic,500,600,700"]
			}
		  });
		</script>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

		<style>
		  .coluna-materiais:nth-child(4n) {
			  border:none;
		   }
		  .icone-mvv:before, .icone-mvv:after {
			  content: "";
			  width: 2px;
			  height: 45px;
			  display: block;
			  position: absolute;
			  left: 22px;
			  border-radius: 2px;
			  background-color: #FFF;
		  }
		  .icone-mvv:before {
			  top: -45px;
		  }
		  .icone-mvv:after {
			  top: 46px;
		  }
		</style>

	</head>
	<body <?php is_page(array('gerenciamento-de-aplicacoes', 'projetos-de-software', 'ti-guard', 'projetos-de-infraestrutura', 'tv-corporativa', 'telefonia-digital', 'mobuss-construcao', 'mobuss-plataforma')) ? body_class('body-solucoes') : body_class('body'); ?>>

		<div class="w-embed w-script fbch">
			<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=1477809805828829";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
		</div>

			<header class="w-section cabealho">
			  <div class="w-nav cabealho" data-animation="default" data-collapse="medium" data-contain="1" data-duration="400">

				<div class="w-container cabecalho">
					<!-- logo -->
					<a class="w-nav-brand logo" href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/teclogica-01.svg" width="152">
					</a>
					<!-- /logo -->

					<!-- busca -->
					<img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-7-01.svg" width="32">
					<div class="w-preserve-3d bloco-busca">

						<div class="w-form"><?php get_template_part('searchform'); ?></div>

						<ul class="w-list-unstyled busca-faq">
						<li class="w-clearfix busca-faq-item first"><img class="faq-icone" src="<?php echo get_template_directory_uri(); ?>/images/573cbe03663360c6485b52ff_sem-titulo-7-02.svg" width="70">
							<a href="<?php echo get_permalink(get_page_by_path( 'service-desk-e-suporte-ti-guard' )); ?>">Estou com problemas de banco de dados</a>
						</li>
						<li class="busca-faq-item"><img class="faq-icone" src="<?php echo get_template_directory_uri(); ?>/images/573cb7ce23185ae148499aa8_sem-titulo-7-02.svg" width="70">
							<a href="<?php echo get_permalink(get_page_by_path( 'desenvolvimento-de-software' )); ?>">Quero software sob-medida</a>
						</li>
						<li class="busca-faq-item"><img class="faq-icone" src="<?php echo get_template_directory_uri(); ?>/images/574b17e73a47481b27b56e2e_icones-ti-grad-05.svg" width="70">
							<a href="<?php echo get_permalink(get_page_by_path( 'comunicacao-interna-tv-corporativa' )); ?>">Quero melhorar minha comunicação interna</a>
						</li>
						<li class="busca-faq-item"><img class="faq-icone" src="<?php echo get_template_directory_uri(); ?>/images/573ccddd23185ae14849e096_sem-titulo-7-01.svg" width="70">
							<a href="<?php echo get_permalink(get_page_by_path( 'voip-para-empresas' )); ?>">Quero gastar menos com a Telefonia da minha empresa</a>
						</li>
						</ul>
					</div>
					<!-- /busca -->

					<!-- nav -->
					<nav class="nav w-nav-menu sanduba-open" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

					<!-- menu
					<nav class="w-nav-menu sanduba-open" role="navigation">
						<a class="w-nav-link menu-item tem-filho" href="<?php echo get_permalink(get_page_by_path('gerenciamento-de-aplicacoes')); ?>">Soluções</a>
						<a class="w-nav-link menu-item" href="<?php echo get_permalink(get_page_by_path('cases')); ?>">Cases</a>
						<a class="w-nav-link menu-item" href="<?php echo get_permalink(get_page_by_path('blog')) ?>">Blog</a>
						<a class="w-nav-link menu-item" href="<?php echo get_permalink(get_page_by_path('materiais-educativos')); ?>">Materiais Educativos</a>
						<a class="w-nav-link menu-item" href="<?php echo get_permalink(get_page_by_path('eventos')); ?>">Agenda de eventos</a>
						<a class="w-nav-link menu-item" href="<?php echo get_permalink(get_page_by_path('na-midia')); ?>">Na mídia</a>
						<a class="w-nav-link menu-item" href="<?php echo get_permalink(get_page_by_path('sobre')); ?>">Sobre</a>
						<a class="w-nav-link menu-item menu-contato" href="<?php echo get_permalink(get_page_by_path('contato')); ?>">Contato</a>
					</nav>
					/menu -->

					<div class="w-nav-button sanduba-button">
						<div class="w-icon-nav-menu"></div>
					</div>
					<!-- /menu -->
				</div>

				<!-- submenu soluções -->
				<?php if (!is_front_page()) { ?>
					<div class="w-container submenu-solucoes esconde-menu">
						<div class="w-row div-vantagens submenu">

							<div class="w-col w-col-3 cada-submenu-solucoes">
								<div class="titulo-produtos titulo-submenu">Serviços <br>Gerenciados</div>
								<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('spoc-gerenciamento-de-aplicacao')); ?>">
									<div class="boto-produto botao-submenu">Gerenciamento de Aplicações</div>
								</a>
								<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('desenvolvimento-de-software')); ?>">
									<div class="boto-produto botao-submenu">Projetos de Software</div>
								</a>
							</div>
							<div class="w-col w-col-3 cada-submenu-solucoes">
								<div class="titulo-produtos titulo-submenu">Infraestrutura <br>de TI</div>
								<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('service-desk-e-suporte-ti-guard')); ?>">
									<div class="boto-produto botao-submenu">TI.Guard</div>
								</a>
								<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('infraestrutura-de-ti')); ?>">
									<div class="boto-produto botao-submenu">Projetos de Infraestrutura</div>
								</a>
							</div>
							<div class="w-col w-col-3 cada-submenu-solucoes">
								<div class="titulo-produtos titulo-submenu">Comunicação <br>Corporativa</div>
								<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('comunicacao-interna-tv-corporativa')); ?>">
									<div class="boto-produto botao-submenu">TV Corporativa</div>
								</a>
								<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('voip-para-empresas')); ?>">
									<div class="boto-produto botao-submenu">Telefonia Digital</div>
								</a>
							</div>
							<div class="w-col w-col-3">
								<div class="titulo-produtos titulo-submenu">Mobilidade<br>Corporativa</div>
								<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('mobuss-app-para-construcao')); ?>">
									<div class="boto-produto botao-submenu">Mobuss Construção</div>
								</a>
								<a class="w-inline-block link-produto" href="<?php echo get_permalink(get_page_by_path('plataforma-mobuss-mobile-business-solution')); ?>">
									<div class="boto-produto botao-submenu">Mobuss Plataforma</div>
								</a>
							</div>

						</div>
					</div>
				<?php } ?>
				<!-- /submenu soluções -->

			  </div>
		  </header>
