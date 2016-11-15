
﻿<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php //get_template_part('searchform'); ?>

	<div class="w-col w-col-4 sidebar">

		<div class="w-form">
			<?php echo do_shortcode('[formidable id=6]'); ?>
		</div>
        
        <div class="tag-list tag-mesmo">
			<div class="sidebar-widget">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
			</div>
		</div>

		<h3 class="lista-categorias-titulo">Categorias</h3>
		<div class="lista-categorias-group">
			<ul class="w-list-unstyled lista-categorias-ul">
				<li class="lista-categorias lista-comunicacao"><a href="<?php echo home_url() . '/category/comunicacao/'; ?>">Comunicação</a></li>
				<li class="lista-subcategorias"><a href="<?php echo home_url() . '/category/comunicacao/comunicacao-interna/'; ?>">Comunicação interna</a></li>
				<li class="lista-subcategorias"><a href="<?php echo home_url() . '/category/comunicacao/endomarketing/'; ?>">Endomarketing</a></li>
				<li class="lista-subcategorias"><a href="<?php echo home_url() . '/category/comunicacao/midia-indoor/'; ?>">Mídia Indoor</a></li>
				<li class="lista-categorias lista-gestaodeti"><a href="<?php echo home_url() . '/category/gestao-de-ti/'; ?>">Gestão de TI</a></li>
				<li class="lista-subcategorias"><a href="<?php echo home_url() . '/category/gestao-de-ti/outsourcing/'; ?>">Outsourcing</a></li>
				<li class="lista-subcategorias"><a href="<?php echo home_url() . '/category/gestao-de-ti/mobilidade/'; ?>">Mobilidade</a></li>
				<li class="lista-subcategorias"><a href="<?php echo home_url() . '/category/gestao-de-ti/infraestrutura-de-ti/'; ?>">Infraestrutura de TI</a></li>
				<li class="lista-subcategorias"><a href="<?php echo home_url() . '/category/gestao-de-ti/aplicacoes/'; ?>">Aplicações</a></li>
				<li class="lista-categorias lista-telefonia"><a href="<?php echo home_url() . '/category/telefonia/'; ?>">Telefonia</a></li>
				<li class="lista-categorias lista-noticias"><a href="<?php echo home_url() . '/category/noticias/'; ?>">Notícias</a></li>
				<li class="lista-subcategorias"><a href="<?php echo home_url() . '/category/noticias/artigo/'; ?>">Artigo</a></li>
				<li class="lista-subcategorias"><a href="<?php echo home_url() . '/category/cases-teclogica/'; ?>">Cases Teclógica</a></li>
				<li class="lista-subcategorias list-subcategorias-last"><a href="<?php echo home_url() . '/category/noticias/eventos/'; ?>">Eventos</a></li>
			</ul>
		</div>

		<a href="http://www.teclogica.com.br/blog/tv-corporativa/" class="cta-lateral"><img src="<?php echo get_template_directory_uri() . '/img/Teclogic-01.png'; ?>" alt=""></a>
		<a href="http://www.teclogica.com.br/blog/telefonia-digital/" class="cta-lateral"><img src="<?php echo get_template_directory_uri() . '/img/Teclogic-02.png'; ?>" alt=""></a>
		
        <div class="side-social">
        				<p>SIGA-NOS!</p>
                        <div class="social-img">
                        	<center>
                        	<a rel="nofollow" target="_blank" href="https://www.linkedin.com/company/teclogica"><img src="<?php echo get_template_directory_uri(); ?>/img/social-b-05.svg" class="social-icon"></a>
							<a rel="nofollow" target="_blank" href="https://www.facebook.com/teclogica/"><img src="<?php echo get_template_directory_uri(); ?>/img/social-b-01.svg" class="social-icon"></a>
							<a rel="nofollow" target="_blank" href="https://twitter.com/teclogica"><img src="<?php echo get_template_directory_uri(); ?>/img/social-b-03.svg" class="social-icon"></a><br />
							<a rel="nofollow" target="_blank" href="https://www.youtube.com/user/teclogica"><img src="<?php echo get_template_directory_uri(); ?>/img/social-b-02.svg" class="social-icon"></a>
							<a rel="nofollow" target="_blank" href="https://plus.google.com/108884393735207796113/about"><img src="<?php echo get_template_directory_uri(); ?>/img/social-b-04.svg" class="social-icon"></a>
                        	</center>
                        </div>
				</div>
		</div>

	</div>

</aside>
<!-- /sidebar -->