<?php get_header(); ?>

  <div class="w-section banner-cases">
    <div class="w-container conteiner-case">
      <div class="title pagina-cases">CASES DE SUCESSO</div>
      <p class="texto-pagina-cases">Conheça alguns cases de sucesso da Teclógica.</p><img class="icone-potfolio" data-ix="correr-vertical-load-l" src="<?php echo get_template_directory_uri(); ?>/images/showcase2.svg">
    </div>
  </div>
  <div class="w-section seo-logos">
    <div class="w-container cont-marcas">

      <div class="w-row div-vantagens pagina-cases contem-filtros">
        <div class="w-col w-col-3 filtro-servicos-gerenciados" data-filter=".gerenciamento-de-aplicacoes, .projetos-de-software">
          <a class="w-inline-block link-produto" href="#">
            <div class="boto-produto filtros clicouFiltro">SERVIÇOS
              <br>GERENCIADOS</div>
          </a>
        </div>
        <div class="w-col w-col-3 filtro-infraestrutura-de-ti" data-filter=".ti-guard, .projetos-de-infraestrutura">
          <a class="w-inline-block link-produto" href="#">
            <div class="boto-produto filtros">INFRAESTRUTURA
              <br>DE TI</div>
          </a>
        </div>
        <div class="w-col w-col-3 filtro-comunicacao-corporativa" data-filter=".tv-corporativa, .telefonia-digital">
          <a class="w-inline-block link-produto" href="#">
            <div class="boto-produto filtros">COMUNICAÇÃO
              <br>CORPORATIVA</div>
          </a>
        </div>
        <div class="w-col w-col-3 filtro-mobilidade-corporativa" data-filter=".mobuss-plataforma, .mobuss-construcao">
          <a class="w-inline-block link-produto" href="#">
            <div class="boto-produto filtros">MOBILIDADE
              <br>CORPORATIVA</div>
          </a>
        </div>
      </div>

	  <div class="contem-cases">

		  <?php

		  if ( is_page(array('gerenciamento-de-aplicacoes', 'projetos-de-software')) ) { $cat = 6; }
		  elseif ( is_page(array('ti-guard','projetos-de-infraestrutura')) ) { $cat = 9; }
		  elseif (is_page(array('tv-corporativa', 'telefonia-digital'))) { $cat = 2; }
		  else { $cat = 8; }

		  $the_query = new WP_Query(array(
			  'category_name' => 'cases-teclogica',
			  'posts_per_page' => -1
		  ));

		  // The loop to display posts
		  if ( $the_query->have_posts() ) {

			// $cont=0;
			while ( $the_query->have_posts() ) {
	    		$the_query->the_post();

          if (get_field('c-lb')) { $link = get_field('c-lb'); } else { $link = get_permalink(); }

		        // if ($cont % 3 == 0) echo '<div class="marcas grupo'. $cont/3 .'" data-ix="vertical-rolagem-l">';
				?>
					<a class="w-inline-block <?php foreach (get_the_category() as $category) {echo $category->slug . ' ';} ?>" href=" <?php echo $link ?>">
						<img class="marca-souza-cruz" data-ix="correr-vertical-load-l" src="<?php  the_field('c-l');  ?>" width="191">
            <div class="clear"></div>
            <p><?php the_field('c-d'); ?></p>
					</a>

				<?php
				// $cont++;
				// if ($cont % 3 == 0) echo '</div>';
				}
				// if ($cont % 3 != 0) echo '</div>';

			  } else { echo '<h4>Nenhum case cadastrado ainda</h4>'; }

		  ?>
	  </div>

    </div>
  </div>

  <?php get_footer(); ?>
