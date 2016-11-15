<?php get_header(); ?>

	<div class="w-section section-listing">
		<div class="container">
			<div class="w-row">

				<div class="w-col w-col-8">
						<?php get_template_part('loop'); ?>
						<?php get_template_part('pagination'); ?>
				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
