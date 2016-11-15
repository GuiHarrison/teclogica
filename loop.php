<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div>

			<?php
				if ( get_the_post_thumbnail($post_id) ) {
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'Blog' );
					$url = $thumb['0'];
				} else {
					$url = catch_that_image();
				}

			?>

			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="w-inline-block post-item-listing">

				<div class="imagem-post-listing" style="background-image:url(<?php echo $url; ?>)"></div>

				<h3 class="post-title-listing"><?php the_title(); ?></h3>
				<p class="post-excerpt-listing">
					<?php
						$myExcerpt = get_the_excerpt();
						$tags = array("<p>", "</p>");
						$myExcerpt = str_replace($tags, "", $myExcerpt);
						echo $myExcerpt;
					?>
				</p>

				<h4 class="data-listing" datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?></h4>
			</a>

			<?php

				// $categories = get_the_category();
				// if ( ! empty( $categories ) ) {
				// 	echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
				// }

				$category = get_the_category();


				if ( category_has_parent($category[0]->term_id) ) {
					$catParID = $category[0]->category_parent;
				} else {
					$catParID = $category[0]->term_id;
				}

				$catParSlug = get_cat_slug($catParID);
				$catParent = get_cat_name($catParID);
				$catParLink = esc_url( get_category_link( $catParID ) );

			?>

			<div id="categoria-pai-group" class="w-clearfix categoria-pai-group"><img src="<?php echo get_template_directory_uri() . '/img/' . $catParSlug . '.svg'; ?>" class="categoria-imagem-listing">


				<h3 class="categoria-pai-listing">
					<span class="subcategoria-listing">
						<strong xmlns="http://www.w3.org/1999/xhtml" data-new-link="true">
							<?php
								echo '<a href="'. $catParLink .'">'. $catParent .'</a>' ;
							?>
						</strong>
					</span>
				</h3>

			</div>

		</div>

		<!-- <?php edit_post_link(); ?> -->

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
