<?php get_header(); ?>

  <div class="w-section banner-eventos">
    <div class="w-container">
      <div class="title telefonia" data-ix="correr-vertical-load-l">Agenda de Eventos</div>
      <div class="texto-materiais-educativos" data-ix="correr-vertical-load-l">Veja e participe da agenda de eventos da Teclógica.</div>
	  <img class="eventos-icone" data-ix="correr-lateral-left-load" src="<?php echo get_template_directory_uri(); ?>/images/eventos-icone.svg" width="132">
    </div>
  </div>
  <div class="w-section">
    <div class="w-container">
      <div class="w-row colunas-eventos">

        <div class="w-col w-col-6" data-ix="vertical-rolagem-l">

          <h2 class="titulo-monitoramento tvc">EVENTOS ONLINE</h2>
		  <?php
			// The query to fetch future posts
			$the_query = new WP_Query(array(
				'category_name' => 'eventos-online',
				'posts_per_page' => 1,
			));

			// The loop to display posts
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo
					'<a href="' . get_field("e-l") . '">'.
					get_the_post_thumbnail( $_post->ID, 'Eventos' ).
					'<h3 class="titulo-itens-tv titulo-materiais">' . get_the_title() .' - '.  get_the_time('d/m') . '</h3>'.
					'<p class="texto-eventos">' . get_the_content() . '</p>'.
					'</a>';
				}
			} else { echo '<p>Nenhum evento encontrado</p>'; }
		   ?>

		  <h4 class="titulo-monitoramento tvc">Eventos futuros</h4>
		  <?php echo do_shortcode('[eventos_online_futuros]'); ?>
        </div>

        <div class="w-col w-col-6" data-ix="vertical-rolagem-r">

          <h2 class="titulo-monitoramento tvc">EVENTOS PRESENCIAIS</h2>

		  <?php
			// The query to fetch future posts
			$the_query = new WP_Query(array(
				'category_name' => 'eventos-presenciais',
				'posts_per_page' => 1,
			));

			// The loop to display posts
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo
					'<a href="' . get_field("e-l") . '">'.
					get_the_post_thumbnail( $_post->ID, 'Eventos' ).
					'<h3 class="titulo-itens-tv titulo-materiais">' . get_the_title() .' - '.  get_the_time('d/m') . '</h3>'.
					'<p class="texto-eventos">' . get_the_content() . '</p>'.
					'</a>';
				}
			} else { echo '<p>Nenhum evento encontrado</p>'; }
		   ?>

		  <h4 class="titulo-monitoramento tvc">Eventos futuros</h4>
          <?php echo do_shortcode('[eventos_presenciais_futuros]'); ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
