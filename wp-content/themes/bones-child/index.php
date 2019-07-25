<?php get_header(); ?>

		<div class="containing">

			<?php get_template_part( 'content', 'intro' ); ?>
			
			<div class="separator"></div>

			<?php get_template_part( 'content', 'service' ); ?>

			<div class="separator"></div>

			<?php get_template_part( 'content', 'ejemplos' ); ?>

            <div class="separator"></div>

            <?php get_template_part( 'content', 'blog' ); ?>
			
		</div>


<?php get_footer(); ?>