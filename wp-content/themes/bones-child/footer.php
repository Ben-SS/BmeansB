
				<div class="footer-containing">
					<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
						<!-- <img id="footer-img" src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-dark.png" alt="footer"/> -->

						<div id="footer-left">
							<h3><?php _e('Navegación','bones-child') ?>:</h3>

							<p><a href="<?php $url = site_url( '/', '' ); echo $url; ?>" class="inicio-footer-link" rel="me"><?php _e('Inicio', 'bones-child') ?></a> |</p>

							<p>&nbsp;<a rel="bookmark" class="servicio-footer-link" href="<?php $url = site_url( '/', '' ); echo $url; ?>"><?php echo _e('Servicio', 'bones-child') ?></a>&nbsp;|</p>

							<p>&nbsp;<a rel="bookmark" class="ejemplos-footer-link" href="<?php $url = site_url( '/', '' ); echo $url; ?>"><?php _e('Ejemplos', 'bones-child') ?></a>&nbsp;|</p>

							<p>&nbsp;<a rel="bookmark" class="blog-footer-link" href="<?php $url = site_url( '/', '' ); echo $url; ?>"><?php _e('Blog', 'bones-child') ?></a>&nbsp;|</p>

							<p>&nbsp;<a href="<?php $url = site_url( '/', '' ); echo $url; echo _e('portafolio', 'bones-child') . '/'; ?>" target="_blank" rel="me"><?php _e('Portafolio', 'bones-child') ?></a></p>

						</div>

						<div id="footer-center">
							<div id="footer-explanation">
								<p><?php _e('"BmeansB: Informa, Ofrece y Entretiene."','bones-child') ?></p>
							</div>
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> BmeansB |</p>
							<p class="source-org copyright"><a href="<?php $url = site_url( '/', '' ); echo $url; echo _e('politica-privacidad', 'bones-child') . '/'; ?>" target="_blank" rel="me">&nbsp;<?php _e('aviso legal','bones-child') ?></a> |</p>
							<p class="source-org"><a href="mailto:admin@bmeansb.com?Subject=Wordpress%20Interest" target="_top">&nbsp;Ben Shewring</a></p>
						</div>

						<div id="footer-right">
							<div class="contact-icon">
								<a href="https://www.linkedin.com/in/ben-shewring/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/linkedin.png" alt="Linkedin link" title="LinkedIn"/></a>
							</div>					
							<div class="contact-icon">
								<a rel="me" href="https://www.facebook.com/ben.shewring.bmeansb/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/face.png" alt="facebook" title="Facebook"/></a>
							</div>
							<div class="contact-icon">
								<a rel="me" href="https://twitter.com/b_means_b" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/twitter.png" alt="twitter" title="Twitter"/></a>
							</div>
							<div class="contact-icon">
								<a href="mailto:admin@bmeansb.com"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/home/email.png" alt="email" title="Email"/></a>
							</div>
						</div>						

					</footer>
					<?php // all js scripts are loaded in library/bones.php ?>
					<?php wp_footer(); ?>

				</div>

		
		</div>
	</body>
</html> <!-- end of site. what a ride! -->
