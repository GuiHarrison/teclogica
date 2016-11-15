<?php get_header(); ?>

  <div class="w-section banner-midia">
    <div class="w-container">
      <div class="title" data-ix="correr-vertical-load-l">NA MÍDIA</div><img class="eventos-icone" data-ix="correr-vertical-load-l" src="<?php echo get_template_directory_uri(); ?>/images/na-midia.svg" width="132">
      <div class="texto-materiais-educativos na-midia" data-ix="correr-vertical-load-l">Veja onde a Teclógica já se destacou na mídia!</div>
      <a class="texto-solues na-midia" data-ix="aparecer" href="mailto:marketing@teclogica.com.br?subject=Teclógica na Mídia&body=Olá! Vi a página Teclógica na mídia e decidi entrar em contato." target="_blank">marketing@teclogica.com.br</a>
    </div>
  </div>
  <div class="w-section section-noticias">
    <div class="w-container conteiner-slide">

		<?php

			if( have_rows('nm') ):

				echo '<div class="w-container">';

					$cont=0;
					while ( have_rows('nm') ) : the_row();
					$imagem = get_sub_field('nm-i');
					$imagemTam = 'Na Mídia';

						if ($cont % 3 == 0) echo '<div class="w-row contemNaMidia grupo'. $cont/3 .'">';

							echo
							'<div class="cada-midia">'.
								wp_get_attachment_image( $imagem, $imagemTam ).
								'<h3 class="titulo-monitoramento tvc">' . get_sub_field('nm-t') . '</h3>'.
								'<p class="texto-eventos na-midia">' . get_sub_field('nm-d') . '</p>'.
								'<a class="link-na-midia" target="_blank" href="'. get_sub_field('nm-l') .'">VER</a>'.
							'</div>';

						$cont++;

					if ($cont % 3 == 0) echo '</div>';
					endwhile;
					if ($cont % 3 != 0) echo '</div>';


					echo
				'</div>';

			else :

				echo '<h2>Nenhum material encontrado.</h2>';

			endif;
			wp_reset_postdata();

		?>


    </div>
  </div>

<?php get_footer(); ?>
