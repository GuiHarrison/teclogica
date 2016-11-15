<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="w-section section-single">
			<div class="container">
				<div class="w-row">
					<div class="w-col w-col-8">
						<div class="conteudo-single">

							<?php

								$category = get_the_category();


								if ( category_has_parent($category[0]->term_id) ) {
									$catParID = $category[0]->category_parent;
								} else {
									$catParID = $category[0]->term_id;
								}

								$catParSlug = get_cat_slug($catParID);
								$catParent = get_cat_name($catParID);
								$catParLink = esc_url( get_category_link( $catParID ) );

								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
								$url = $thumb['0'];

							?>

							<div class="w-clearfix categoria-single-group"><img src="<?php echo get_template_directory_uri() . '/img/' . $catParSlug . '.svg'; ?>" class="categoria-imagem-listing categoria-imagem-single">
								<h3 class="categoria-pai-listing categoria-pai-single"><?php echo '<a href="'. $catParLink .'">'. $catParent . '</a>'; ?> &gt;&nbsp;<strong data-new-link="true" class="subcategoria-listing"><?php the_category(', '); ?></strong></h3>
								<h4 class="data-listing" datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?></h4>
							</div>
							<h2><?php the_title(); ?></h2>
							<?php if ( get_the_post_thumbnail($post_id) ) { ?>
								<div class="imagem-single" style="background-image:url(<?php echo $url; ?>)"></div>
							<?php } ?>
							<?php the_content(); ?>

							<?php if (in_category( 6 )) {
								$cta = '<a href="http://pages.rdstation.com.br/como-o-service-desk-pode-contribuir-nas-estrategias-da-sua-empresa" class="banner-bottom"><img src="http://www.teclogica.com.br/wp-content/uploads/2016/09/CTA_-_blog_-_641x180px-1.png"></a>';
							} elseif (in_category( 33 )) {
								$cta = '<a href="http://pages.rdstation.com.br/como-ter-um-call-center-mais-produtivo-e-rentavel" class="banner-bottom"><img src="http://www.teclogica.com.br/wp-content/uploads/2016/09/CTA_-_blog_-_641x180px.png"></a>';
							} else {
								$cta = '<a href="http://pages.rdstation.com.br/como-potencializar-a-comunicacao-interna-com-a-tv-corporativa" class="banner-bottom"><img src="http://www.teclogica.com.br/wp-content/uploads/2016/09/CTAs._ebook_tvai-04.png"></a>';
							} ?>

							<?php echo $cta; ?>
<!--
							<a href="http://www.teclogica.com.br/ti-guard/" class="cta-post">
								<img src="<?php echo get_template_directory_uri() . '/img/Teclogic-03.png'; ?>" alt="Converse gratuitamente com um consultor">
							</a> -->
						</div>

						<!-- <div class="w-embed fbcomm">
							<div class="fb-comments" data-href="<?php echo get_permalink( $post->ID ); ?>" data-width="700" data-numposts="5"></div>
						</div> -->

						<?php comments_template(); ?>

					</div>
					<div class="w-col w-col-4">

						<div class="w-form">
							<?php echo do_shortcode('[formidable id=6]'); ?>
						</div>

						<div class="tag-list tag-mesmo">
							<div class="sidebar-widget">
								<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
							</div>
						</div>


						<!--?php if ( function_exists( "get_yuzo_related_posts" ) ) {
							echo '<div class="tag-list">';
								get_yuzo_related_posts();
							echo '</div>';
						} ?-->
						<a href="http://www.teclogica.com.br/blog/tv-corporativa/" class="cta-lateral"><img src="<?php echo get_template_directory_uri() . '/img/Teclogic-01.png'; ?>" alt="TV Corporativa"></a>
						<div class="w-embed">
							<div class="fb-page" data-href="https://www.facebook.com/teclogica/" data-tabs="timeline" data-width="380" data-height="340" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
								<div class="fb-xfbml-parse-ignore">
									<blockquote cite="https://www.facebook.com/teclogica/"><a href="https://www.facebook.com/teclogica/">Teclógica</a>
									</blockquote>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	<?php endwhile; ?>

	<?php endif; ?>

<?php get_footer(); ?>
