
		<footer class="w-section rodap">
		  <div class="w-container">
			<div class="w-row cont-rodap">
			  <div class="w-col w-col-3 coluna-rodape">
				<h4 class="ttulo-rodap">SOLUÇÕES</h4>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('gerenciamento-de-aplicacoes')); ?>">Gerenciamento de Aplicações</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('projetos-de-software')); ?>">Projetos de Software</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('ti-guard')); ?>">TI.Guard</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('projetos-de-infraestrutura')); ?>">Projetos de Infraestrutura</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('tv-corporativa')); ?>">TV Corporativa</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('telefonia-digital')); ?>">Telefonia Digital</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('mobuss-construcao')); ?>">Mobuss Construção</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('mobuss-plataforma')); ?>">Plataforma Mobuss</a>
			  </div>
			  <div class="w-col w-col-2 coluna-rodape">
				<h4 class="ttulo-rodap">CONTEÚDO&nbsp;</h4><a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('blog')); ?>">Blog</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('materiais-educativos')); ?>">Materiais Educativos</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('eventos')); ?>">Agenda de Eventos</a>
			  </div>
			  <div class="w-col w-col-3 coluna-rodape">
				<h4 class="ttulo-rodap">CONTATO</h4><a class="tem-rodap" href="mailto:marketing@teclogica.com.br?subject=Teclógica na Mídia&body=Olá! Vi a página Teclógica na mídia e decidi entrar em contato.">contato@teclogica.com.br</a>
				<p>+55 (47) 3036-7700</p>
				<h4 class="ttulo-rodap sobre">SOBRE A TECLÓGICA</h4>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('sobre')); ?>">A Empresa</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('trabalhe-conosco')); ?>">Trabalhe Conosco</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page_by_path('na-midia')); ?>">Na Mídia</a>
				<a class="tem-rodap" href="https://teclogica.com.br/portal_corporativo/" target="_blank">Portal Corporativo</a>
			  </div>
			  <div class="w-col w-col-4 rodape-teclogica"><img class="logo-rodap-responsvo" src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-3-01.svg" width="207">
				<p class="endereo-rodape">Rua XV de Novembro, nº 759, 12º andar Ed. Hering
				  <br>Centro – Blumenau/SC CEP: 89010-902</p>
				<h4 class="ttulo-rodap">Siga-nos nas redes sociais</h4>
				<a href="https://www.facebook.com/teclogica/" target="_blank"><img class="redes-sociais" src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-8-01.svg" width="41"></a>
				<a href="https://www.linkedin.com/company/teclogica" target="_blank"><img class="redes-sociais" src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-8-02.svg" width="41"></a>
				<a href="https://twitter.com/teclogica" target="_blank"><img class="redes-sociais" src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-8-03.svg" width="41"></a>
				<a href="https://www.youtube.com/user/teclogica" target="_blank"><img class="redes-sociais" src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-8-04.svg" width="41"></a>
				<a href="https://plus.google.com/108884393735207796113/about" target="_blank"><img class="redes-sociais" src="<?php echo get_template_directory_uri(); ?>/images/sem-titulo-8-05.svg" width="41"></a>
			  </div>
			</div>
		  </div>
	  	</footer>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib/webflow.js"></script>
		<!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

		<?php wp_footer(); ?>

		<script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>
		<?php
		if (is_front_page()) { ?>

			<script type="text/javascript">
				window.onload = function() {
			        new dgCidadesEstados(
			            document.getElementById('field_p2cfce'),
			            document.getElementById('field_jenskf'),
			            true
			        );
			    }
			</script>

		<?php } elseif (is_page('ti-guard')) { ?>

			<script type="text/javascript">
				window.onload = function() {
			        new dgCidadesEstados(
			            document.getElementById('field_p2cfce3'),
			            document.getElementById('ield_69o824'),
			            true
			        );
			    }
			</script>

		<?php } elseif (is_page('tv-corporativa')) { ?>

			<script type="text/javascript">
				window.onload = function() {
			        new dgCidadesEstados(
			            document.getElementById('field_p2cfce32'),
			            document.getElementById('eld_odt8xn'),
			            true
			        );
			    }
			</script>

		<?php } elseif (is_page('contato')) { ?>

			<script type="text/javascript">
				window.onload = function() {
			        new dgCidadesEstados(
			            document.getElementById('field_p2cfce4'),
			            document.getElementById('ield_jenskf2'),
			            true
			        );
			    }
			</script>

		<?php } else { ?>

			<script type="text/javascript">
				window.onload = function() {
			        new dgCidadesEstados(
			            document.getElementById('field_p2cfce2'),
			            document.getElementById('ield_b0a02'),
			            true
			        );
			    }
			</script>

		<?php }; ?>

		<?php if (!is_front_page()) { ?>

		<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>
		<script type = "text/javascript">
			setTimeout(function () {
				<?php

				if (is_page('ti-guard')) {

					echo
					"var meus_campos = {".
						"'item_meta[97]': 'nome',".
						"'item_meta[98]': 'telefone',".
						"'item_meta[99]': 'email',".
						"'item_meta[100]': 'empresa'".
					"};";

				} elseif (is_page('tv-corporativa')) {

					echo
					"var meus_campos = {".
						"'item_meta[104]': 'nome',".
						"'item_meta[105]': 'telefone',".
						"'item_meta[106]': 'email',".
						"'item_meta[107]': 'empresa'".
					"};";

				} elseif (is_page('contato')) {

					echo
					"var meus_campos = {".
						"'item_meta[115]': 'nome',".
						"'item_meta[116]': 'telefone',".
						"'item_meta[117]': 'email',".
						"'item_meta[118]': 'empresa'".
					"};";

				} elseif ( is_single() || is_home() ) {

					echo
					"var meus_campos = {".
						"'item_meta[83]': 'email',".
					"};";

				} else {

					echo
					"var meus_campos = {".
						"'item_meta[91]': 'nome',".
						"'item_meta[92]': 'telefone',".
						"'item_meta[93]': 'email',".
						"'item_meta[94]': 'empresa'".
					"};";

				};
				?>
				options = { fieldMapping: meus_campos };
				RdIntegration.integrate(
					<?php if ( is_page("TV Corporativa") ) { echo "'ba1802d57cf3628f7312c0671ffe56f3'"; } elseif (is_page("Telefonia Digital")) { echo "'3173b4609cbc55209c3b355376f049ea'"; } else { echo "'cd1fdf88fd983d9e628be2db06df7b54'"; } ?>,
					<?php echo "'"; if(wp_title('', false)) { wp_title(''); } else { bloginfo('name'); }; echo "'"; ?>,
					options
				);
			}, 2000);
		</script>

		<?php } ?>

		<?php if (is_front_page() || is_page('Contato')) { ?>

			<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>
			<script type="text/javascript">
			var item90;
			var meus_campos = {
				'item_meta[84]': 'nome',
				'item_meta[85]': 'telefone',
				'item_meta[86]': 'email',
				'item_meta[87]': 'empresa'
			};
			options = { fieldMapping: meus_campos };
			document.getElementById("field_r3jna6").onchange=function(){
				var item90 = document.getElementById("field_r3jna6").value;

				if (item90 == 'TV Corporativa') {
					RdIntegration.integrate('ba1802d57cf3628f7312c0671ffe56f3', 'Home - interessado em TV Corporativa', options);
				} else if (item90 == 'Telefonia Digital' ) {
					RdIntegration.integrate('3173b4609cbc55209c3b355376f049ea', 'Home - interessado em Telefonia Digital', options);
				} else {
					RdIntegration.integrate('cd1fdf88fd983d9e628be2db06df7b54', 'Home', options);
				}

			}

			// (function( root, $, undefined ) {
			// 	'use strict';

			// 	$(function () {
			// 		console.log('começou!');
			// 		$('#field_jenskf').onchange=function () {
			// 			console.log( $("#field_jenskf").children("option").filter(":selected").text() );
			// 		}
			// 	});

			// } ( this, jQuery ));

			function getSelectedText(elementId) {
			    var elt = document.getElementById(elementId);

			    if (elt.selectedIndex == -1)
			        return null;

			    return elt.options[elt.selectedIndex].text;
			}

			var nomeDaCidade;
			document.getElementById("field_r3jna6").onchange=function(){
				console.log( $("#field_jenskf").children("option").filter(":selected").text() );
			}

			</script>

		<?php } ?>


		<!-- analytics -->
		<script>

		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-6068304-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/0276997e-a282-4568-aecb-f5494b1c18ad-loader.js" ></script>

	</body>
</html>
