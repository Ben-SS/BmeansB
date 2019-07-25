<?php get_header(); ?>


				<div id="fourofour-content" class="wrap cf">

					<div class="back-to-blog">
						<a href="<?php echo get_home_url() ;?>">&laquo; <?php _e('vuelve al blog', 'bones-child'); ?></a>
					</div>

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="error-not-found" class="hentry cf">

							<header class="article-header">
								<h2><?php _e( '404 - Contenido no encontrado', 'bones-child' ); ?></h2>

							</header>

							<section class="entry-content">

								<p><?php _e( 'No se encuentra el contenido solicitado, puede hacer una nueva búsqueda aquí:', 'bones-child' ); ?></p>

							</section>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section>

							<footer class="article-footer">
							</footer>

						</article>

					</main>

			</div>

<?php get_footer(); ?>
