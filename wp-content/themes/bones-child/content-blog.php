<?php
/*
 Template Name: Blog
 *
*/
?>
			<div id="blog" class="anchor">

				<?php get_template_part( 'content', 'nav' ); ?>

				<div id="blog-presentation">
					<h2>Blog</h2>
					<a href="<?php $url = site_url( '/', 'http' ); echo $url; echo 'category/' . 'blog/' . 'feed'; ?>" rel="alternate"><img id="rss-img" src="<?php echo get_stylesheet_directory_uri() ?>/images/rss.png" alt="rss feed"/></a>
					<p class="intro-text"><?php _e('¡Bienvenidos al blog! Aquí podrán mantenerse al día de mis publicaciones. El tema de mis posts puede variar pero por lo general serán temas de la actualidad, experiencias o incluso información sobre mis compañeros. No se olvide de compartir cualquier post que le guste.', 'bones-child'); ?></p>
					
					<?php if ( dynamic_sidebar('Search Sidebar') ) : else : endif; ?>
				</div>

				<div id="blog-content">
					<img id="torn" src="<?php echo get_stylesheet_directory_uri() ?>/images/torn.png" alt="Blog Header"/>

					<div id="blog-sheet">

						<div id="blog-container">
							<div id="inner-content" class="wrap cf">
								<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

								<?php 
								global $wp_query;

								$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; ?>
								<?php $translation = __('Blog', 'academia-mai-child');
								$include = get_cat_ID($translation); ?>
								<?php $args = array('order' => 'DESC', 'paged' => $paged, 'post_type' => 'post', 'cat' => $include);

								$original_query = $wp_query;  // store original query for later use

								$my_query = new WP_Query($args); ?>

								<?php if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
									<div class="each-post">
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'home-article' ); ?> role="article">
											<header class="home-article-header">
												<h2 class="home-article-title"><?php the_title(); ?></h2>
												<div class="blog-share">
													<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
													    ADDTOANY_SHARE_SAVE_KIT( array( 
													        'linkurl'  => get_permalink()
													    ) );
													} ?>
												</div>
												<p class="header-comment-count">
													<?php comments_number();?>
												</p>												
											</header>
											<section class="home-article-content">
												<div class="article-thumb">
													<?php the_post_thumbnail('full'); ?>
												</div>
												<?php the_content(); ?>
												<div class="article-date">
													<div class="date-box">
														<div class="date-day">
															<h4>
																<?php echo get_the_date('d'); ?>
															</h4>
														</div>
														<div class="date-month">
															<h4>
																<?php echo get_the_date('M'); ?>
															</h4>
														</div>
														<div class="date-year">
															<h4>
																<?php echo get_the_date('Y'); ?>
															</h4>
														</div>
													</div>
												</div>
											</section>
											<footer class="home-article-footer">											
											</footer>

										</article>

									</div>

								<?php endwhile; ?>

									<nav class="pagination">
										<?php										
										$wp_query = $my_query;
										pagination_bar('',$wp_query->max_num_pages);?>
									</nav>

									<?php $wp_query = $original_query; wp_reset_postdata(); ?>

								<?php else:  ?>

									<div class="no-post-container">

										<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'No hay posts', 'bones-child' ); ?></h1>
											</header>
											<section class="entry-content">
												<p><?php _e( 'Intente buscar un artículo arriba.', 'bones-child' ); ?></p>
											</section>
											<footer class="article-footer">
												<p><?php _e( 'Error posts', 'bones-child' ); ?></p>
											</footer>
										</article>
									</div>

								<?php endif; ?>

								</main>
							</div>
						</div>				
					</div>			
				</div>
			</div>