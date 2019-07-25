<?php get_header(); ?>

	<div id="single" class="fadein">

		<div id="single-container">

			<div class="back-to-blog">
				<a href="<?php echo get_home_url() ;?>">&laquo; <?php _e('vuelve al blog', 'bones-child'); ?></a>
			</div>

			<div id="single-content" class="wrap cf">				

				<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">						

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php
							/*
							 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
							 *
							 * So this function will bring in the needed template file depending on what the post
							 * format is. The different post formats are located in the post-formats folder.
							 *
							 *
							 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
							 * A SPECIFIC POST FORMAT.
							 *
							 * If you want to remove post formats, just delete the post-formats folder and
							 * replace the function below with the contents of the "format.php" file.
							*/
							get_template_part( 'post-formats/format', get_post_format() );
						?>

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

				<div id="recent-entries">
					<h2><?php _e('Entradas Recientes', 'bones-child') ?></h2>
					<p><?php _e('Aproveche para ver qué más está pasando:', 'bones-child') ?></p>

					<?php $translation = __('Blog', 'academia-mai-child');
					$include = get_cat_ID($translation); ?>
					<?php $myquery = new WP_Query( array( 'posts_per_page' => '5', 'cat' => $include ) ); ?>
					<?php if ( $myquery->have_posts() ) : while ( $myquery->have_posts() ) : $myquery->the_post(); ?>

					<ul>
						<li>
							<a href='<?php the_permalink() ?>' rel="bookmark"><?php echo get_the_title(); ?></a>			
						</li>
					</ul>

					<?php endwhile; endif; ?>
					
				</div>

					
				
			</div>

		</div>

		<div class="comments-row">
			<div class="comments-div">
				<?php if (have_posts()) : while (have_posts()) : the_post();
					if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;
				endwhile; endif; ?>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
