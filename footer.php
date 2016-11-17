		<footer class="w-section rodap">
		  <div class="w-container">
			<div class="w-row cont-rodap">
			  <div class="w-col w-col-3 coluna-rodape">
				<h4 class="ttulo-rodap">SOLUÇÕES</h4>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('95')); ?>">Gerenciamento de Aplicações</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('107')); ?>">Projetos de Software</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('111')); ?>">TI.Guard</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('106')); ?>">Projetos de Infraestrutura</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('113')); ?>">TV Corporativa</a>
				<a class="tem-rodap" href="https://voip.teclogica.com.br">Telefonia Digital</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('103')); ?>">Mobuss Construção</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('104')); ?>">Plataforma Mobuss</a>
			  </div>
			  <div class="w-col w-col-2 coluna-rodape">
				<h4 class="ttulo-rodap">CONTEÚDO&nbsp;</h4><a class="tem-rodap" href="<?php echo get_permalink( get_page('118')); ?>">Blog</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('102')); ?>">Materiais Educativos</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('101')); ?>">Agenda de Eventos</a>
			  </div>
			  <div class="w-col w-col-3 coluna-rodape">
				<h4 class="ttulo-rodap">CONTATO</h4><a class="tem-rodap" href="mailto:marketing@teclogica.com.br?subject=Teclógica na Mídia&body=Olá! Vi a página Teclógica na mídia e decidi entrar em contato.">contato@teclogica.com.br</a>
				<p>+55 (47) 3036-7700</p>
				<h4 class="ttulo-rodap sobre">SOBRE A TECLÓGICA</h4>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('108')); ?>">A Empresa</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('112')); ?>">Trabalhe Conosco</a>
				<a class="tem-rodap" href="<?php echo get_permalink( get_page('105')); ?>">Na Mídia</a>
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

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib/cidades-estados-1.4-utf8.js"></script>
		<?php
		if (is_front_page()) { ?>

			<script type="text/javascript">
				window.onload = function() {
			        new dgCidadesEstados({
			            estado: document.getElementById('field_p2cfce'),
			            cidade: document.getElementById('field_jenskf')
			        });
			    };
			</script>

		<?php } elseif (is_page('111')) { ?>

			<script type="text/javascript">
				window.onload = function() {
			        new dgCidadesEstados({
			            estado: document.getElementById('field_p2cfce3'),
			            cidade: document.getElementById('field_69o824')
			        });
			    };
			</script>

		<?php } elseif (is_page('113')) { ?>

			<script type="text/javascript">
				window.onload = function() {
			        new dgCidadesEstados({
			            estado: document.getElementById('field_p2cfce32'),
			            cidade: document.getElementById('field_odt8xn')
			        });
			    };
			</script>

		<?php } elseif (is_page('100')) { ?>

			<script type="text/javascript">
				window.onload = function() {
			        new dgCidadesEstados({
			            estado: document.getElementById('field_p2cfce4'),
			            cidade: document.getElementById('field_jenskf2')
			        });
			    };
			</script>

		<?php } elseif (is_page('110')) { ?>

			<script type="text/javascript">
				window.onload = function() {
			        new dgCidadesEstados({
			            estado: document.getElementById('field_p2cfce5'),
			            cidade: document.getElementById('field_b0a0')
			        });
			    };
			</script>

		<?php } else { ?>

			<script type="text/javascript">
				window.onload = function() {
			        new dgCidadesEstados({
			            estado: document.getElementById('field_p2cfce2'),
			            cidade: document.getElementById('field_b0a02')
			        });
			    };
			</script>

		<?php }; ?>

		<?php if (!is_front_page()) { ?>

		<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>
		<script type = "text/javascript">
			setTimeout(function () {
				<?php

				if (is_page('111')) {

					echo
					"var meus_campos = {".
						"'item_meta[97]': 'nome',".
						"'item_meta[98]': 'telefone',".
						"'item_meta[99]': 'email',".
						"'item_meta[100]': 'empresa',".
						"'item_meta[103]': 'tags'".
					"};";

				} elseif (is_page('113')) {

					echo
					"var meus_campos = {".
						"'item_meta[104]': 'nome',".
						"'item_meta[105]': 'telefone',".
						"'item_meta[106]': 'email',".
						"'item_meta[107]': 'empresa',".
						"'item_meta[110]': 'tags'".
					"};";

				} elseif (is_page('110')) {

					echo
					"var meus_campos = {".
						"'item_meta[123]': 'nome',".
						"'item_meta[124]': 'telefone',".
						"'item_meta[125]': 'email',".
						"'item_meta[126]': 'empresa',".
						"'item_meta[129]': 'tags'".
					"};";

				} elseif (is_page('contato')) {

					echo
					"var meus_campos = {".
						"'item_meta[115]': 'nome',".
						"'item_meta[116]': 'telefone',".
						"'item_meta[117]': 'email',".
						"'item_meta[118]': 'empresa',".
						"'item_meta[121]': 'tags'".
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
						"'item_meta[94]': 'empresa',".
						"'"; if(wp_title('', false)) { wp_title(''); } else { bloginfo('name'); }; echo "': 'tags'".
					"};";

				};
				?>
				options = { fieldMapping: meus_campos };
				RdIntegration.integrate('ba1802d57cf3628f7312c0671ffe56f3', <?php echo "'"; if(wp_title('', false)) { wp_title(''); } else { bloginfo('name'); }; echo "'"; ?>, options);
			}, 2000);
		</script>

		<?php } ?>

		<?php if (is_front_page()) { ?>

			<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>

			<script type="text/javascript">
			var item90,
				item91,
				meus_campos = {
				'item_meta[84]': 'nome',
				'item_meta[85]': 'telefone',
				'item_meta[86]': 'email',
				'item_meta[87]': 'empresa',
				'item_meta[90]': 'tags'
			};
			options = { fieldMapping: meus_campos };
			</script>

		<?php } ?>


		<?php
		if (is_front_page() || is_page('Contato')) {
			$veioDe = (is_front_page()) ? 'Home' : (is_page('Contato') ? 'Contato' : '');
			$interessadoEm = (is_front_page()) ? 'field_r3jna6' : (is_page('Contato') ? 'field_r3jna64' : '');
		?>

			<script type="text/javascript">
			var interessadoEm = '<?php echo $interessadoEm; ?>',
				veioDe = '<?php echo $veioDe; ?>';

			document.getElementById(interessadoEm).onchange=function () {
				item90 = document.getElementById(interessadoEm).value;
				console.log('Veio da página "' + veioDe + '" e está interessado em ' + item90);
				RdIntegration.integrate('ba1802d57cf3628f7312c0671ffe56f3', veioDe, options);
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

		<!--Integração RD Station-->
		<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/b93be117-68fd-44fb-9cf9-df539fdf143b-loader.js" ></script>
		<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/9800430a-6df9-4682-a40d-7d15e44cb4f6-loader.js" ></script>
		<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/b61fbf1a-1f59-49fa-8eaf-44896f45dc13-loader.js" ></script>

	</body>
</html>
