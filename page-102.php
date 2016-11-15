<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div <?php post_class('w-section banner-materiais-educativos pagina-materiais'); ?>>
    <div class="w-container">
	      <h1 class="ttulo-se-o-azul pagina-materiais"><?php the_title(); ?></h1>
	      <div class="texto-materiais-educativos"><?php the_content(); ?></div>
		  <img class="icone-materiais" src="<?php echo get_template_directory_uri(); ?>/images/tvc-02.svg" width="132">
    </div>
  </div>
<?php endwhile; endif; ?>
  <div class="w-section materiais">

	<?php

		if( have_rows('me') ):

			echo '<div class="w-container">';

				$cont=0;
				while ( have_rows('me') ) : the_row();

					if ($cont % 4 == 0) echo '<div class="w-row grupo'. $cont/4 .'">';
						$term = get_sub_field('me-c');

						echo
						'<a class="w-col w-col-3 coluna-materiais" target="_blank" href="'. get_sub_field('me-l') .'">'.
							'<div class="englobaImagem"><img src="'. get_sub_field("me-i") .'" alt="'. get_sub_field("me-t") .'" /></div>'.
							'<h4>' . $term[0]->name . '</h4>'.
							'<h3 class="titulo-itens-tv titulo-materiais">' . get_sub_field('me-t') . '</h3>'.
						'</a>';

					$cont++;

				if ($cont % 4 == 0) echo '</div>';
				endwhile;
				if ($cont % 4 != 0) echo '</div>';


				echo
			'</div>';

		else :

			echo '<h2>Nenhum material encontrado.</h2>';

		endif;
		wp_reset_postdata();

	?>

  </div>

<?php get_footer(); ?>
