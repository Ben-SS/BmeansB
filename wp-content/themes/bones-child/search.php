<?php get_header(); ?>

		<div id="search-container" class="fadein">

			<div class="back-to-blog">
				<a href="<?php echo get_home_url() ;?>">&laquo; <?php _e('vuelve al blog', 'bones-child'); ?></a>
			</div>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main">
						<h2><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h2>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<header class="entry-header article-header">

									<h2 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

              						<p class="search-p entry-meta vcard">
            							<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
               								/* the time the post was published */
               								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
               								/* the author of the post */
               								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
            							); ?>
              						</p>

								</header>

								<section class="entry-content">
										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>

								</section>

								<!--<footer class="search-footer article-footer">									

									<?php if(get_the_category_list(', ') != ''): ?>
                  					<?php printf( __( 'filed under', 'bonestheme' ) . ': %1$s', get_the_category_list(', ') ); ?>
                  					<?php endif; ?>

                 					<?php the_tags( '<p class="search-p tags"><span class="tags-title">' . __( 'Tags', 'bonestheme' ) . ': ','</span> ', ' ', '</p>' ); ?>

								</footer> <!-- end article footer -->

							</article>

							<hr>

						<?php endwhile; ?>

						<?php bones_page_navi(); ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h2><?php _e( 'No hay resultados', 'bones-child' ); ?></h2>
									<p><?php _e( 'Error de búsqueda', 'bones-child' ); ?></p>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Vuelve a intentar', 'bones-child' ); ?></p>
								</section>
								<footer class="article-footer">
									<?php get_search_form(); ?>										
								</footer>
							</article>

						<?php endif; ?>

						</main>

					</div>
				</div>
			</div>

<?php get_footer(); ?>
