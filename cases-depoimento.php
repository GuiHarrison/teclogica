	<?php
		if ( is_page('gerenciamento-de-aplicacoes') ) { $cat = 28; }
		elseif ( is_page('projetos-de-software') ) { $cat = 29; }
		elseif (is_page('ti-guard')) { $cat = 30; }
		elseif (is_page('projetos-de-infraestrutura')) { $cat = 31; }
		elseif (is_page('tv-corporativa')) { $cat = 32; }
		elseif (is_page('telefonia-digital')) { $cat = 33; }
		elseif (is_page('mobuss-construcao')) { $cat = 34; }
		elseif (is_page('mobuss-plataforma')) { $cat = 35; }
		else { $cat = array(14); }

		if (is_front_page()) {
			$the_query = new WP_Query(array(
				'meta_key' => 'c-h',
				'meta_value' => 'Sim',
				'category_name' => 'cases-teclogica',
				'cat' => $cat,
				'posts_per_page' => -1,
			));


		// The loop to display posts
				if ( $the_query->have_posts() ) { ?>
					<div class="w-section banner-clientes">

					  <h1 class="ttulo-se-o-azul" data-ix="vertical-rolagem">CASES DE SUCESSO</h1>

						<div class="w-slider slider-cases" data-animation="slide" data-duration="500" data-infinite="1">
							<div class="w-slider-mask">
				<?php while ( $the_query->have_posts() ) { ?>

								<div class="w-slide">
									<div class="w-container souza-cruz-conteiner">
										<?php $the_query->the_post();
										if (get_field('c-lb')) { $link = get_field('c-lb'); } else { $link = get_permalink(); }
										echo
										'<img class="aspas home" src="'. get_template_directory_uri() .'/images/aspas.svg" width="49">'.
										'<p class="texto-cases texto-depoimento case-no-azul" data-ix="vertical-rolagem-l">' .get_field('c-d-t'). '</p>'.
										'<div class="crdito-souza-cruz" data-ix="vertical-rolagem-l">'.
											'<h3 class="titulo-itens-tv titulo-materiais case-no-azul">' . get_the_title() . '</h3>'.
											'<strong>'. get_field('c-d-a') .'</strong><br />'.
											get_field('c-d-e').
										'</div>'.
										'<img class="marca-souza-cruz" data-ix="vertical-rolagem" src="' . get_field('c-l-b'). '">'.
										'<a class="w-button tags-solu-es branco" data-ix="vertical-rolagem-r" href="'. $link .'" style="transition: background-color 0.3s ease-out 0s, color 0.3s ease-out 0s, opacity 500ms ease-in, transform 500ms ease-in; opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px);">Ler case completo</a>';
										?>
									</div>
								</div>
			<?php } ?>
							</div>
							<div class="w-slider-arrow-left">
								<div class="w-icon-slider-left slider-icontiguard <?php if (is_front_page()) {echo 'seta-no-azul';} ?>"></div>
							</div>
							<div class="w-slider-arrow-right">
								<div class="w-icon-slider-right slider-icontiguard <?php if (is_front_page()) {echo 'seta-no-azul';} ?>"></div>
							</div>
						</div>
					</div>
			<?php }

			} else {

				$the_query = new WP_Query(array(
					'category_name' => 'cases-teclogica',
					'cat' => $cat,
					'posts_per_page' => 5
				));

				if ( $the_query->have_posts() ) { ?>
						<div class="w-section">

							<h1 class="ttulo-se-o-azul tigrard" data-ix="vertical-rolagem">CASES DE SUCESSO</h1>
							<div class="w-slider slider-cases" data-animation="slide" data-duration="500" data-infinite="1">
							  	<div class="w-slider-mask">

				<?php while ( $the_query->have_posts() ) { ?>
									<div class="w-slide">
										<div class="w-container souza-cruz-conteiner">
											<?php

											$the_query->the_post();
											if (get_field('c-lb')) { $link = get_field('c-lb'); } else { $link = get_permalink(); }

											echo
											'<img class="aspas" src="'. get_template_directory_uri() .'/images/aspas.svg" width="49">'.
											'<p class="texto-cases texto-depoimento" data-ix="vertical-rolagem-l">' .get_field('c-d-t'). '</p>'.
											'<div class="crdito-souza-cruz tiguard" data-ix="vertical-rolagem-l">'.
												'<h3 class="titulo-itens-tv titulo-materiais">' . get_the_title() . '</h3>'.
												'<strong>'. get_field('c-d-a') .'</strong><br />'.
												get_field('c-d-e').
											'</div>'.
											'<img class="marca-souza-cruz" data-ix="vertical-rolagem" src="' .get_field('c-l'). '">'.
											'<a class="w-button tags-solu-es" data-ix="vertical-rolagem-r" href="'. $link .'" style="transition: background-color 0.3s ease-out 0s, color 0.3s ease-out 0s, opacity 500ms ease-in, transform 500ms ease-in; opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px);">Ler case completo</a>';
											?>

										</div>




									</div>
				<?php } ?>
								</div>
								<div class="w-slider-arrow-left">
									<div class="w-icon-slider-left slider-icontiguard <?php if (is_front_page()) {echo 'seta-no-azul';} ?>"></div>
								</div>
								<div class="w-slider-arrow-right">
									<div class="w-icon-slider-right slider-icontiguard <?php if (is_front_page()) {echo 'seta-no-azul';} ?>"></div>
								</div>
							</div>
						</div>
				<?php }

			}
	?>
