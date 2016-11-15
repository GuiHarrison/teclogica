<?php get_header(); ?>

	<div class="w-section section-listing">
		<div class="container">
			<div class="w-row">

				<h1 style="margin-bottom: 70px;"><?php echo sprintf( __( '%s resultados ao pesquisar ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
				<div class="w-col w-col-8">
						<?php get_template_part('loop'); ?>
						<?php get_template_part('pagination'); ?>
				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
