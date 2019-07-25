<?php
/*
 Template Name: Policy
 *
*/
?>
<?php get_header(); ?>

	<div id="policy" class="fadein">

		<div id="policy-container">

			<div class="back-to-blog">
				<a href="<?php echo get_home_url() ;?>">&laquo; <?php _e('vuelve al blog', 'bones-child'); ?></a>
			</div>

			<div id="policy-content" class="wrap cf">				

				<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">						

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

			                <header class="policy-article-header">

			                  <h2 class="policy-article-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h2>


			                </header> <?php // end article header ?>

			                <section class="entry-content cf" itemprop="articleBody">
			                  <?php
			                    // the content (pretty self explanatory huh)
			                    the_content();

			                    /*
			                     * Link Pages is used in case you have posts that are set to break into
			                     * multiple pages. You can remove this if you don't plan on doing that.
			                     *
			                     * Also, breaking content up into multiple pages is a horrible experience,
			                     * so don't do it. While there are SOME edge cases where this is useful, it's
			                     * mostly used for people to get more ad views. It's up to you but if you want
			                     * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
			                     *
			                     * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
			                     *
			                    */
			                  ?>
			                </section> <?php // end article section ?>

			                <footer class="article-footer">

			                  <?php /*printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); */?>

			                </footer> <?php // end article footer ?>

			                <?php //comments_template(); ?>

			              </article> <?php // end article ?>

					<?php endwhile; ?>

					<?php else : ?>

						<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
								</footer>
						</article>

					<?php endif; ?>

				</main>					
				
			</div>

		</div>

	</div>

<?php get_footer(); ?>
