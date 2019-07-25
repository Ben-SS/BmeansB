<?php
/*
 Template Name: Nav
 *
*/
?>

				<div class="my-nav">
					<div class="home">
						<a rel="bookmark" class="inicio-nav-link" href="/javascript"><h3><?php _e('Inicio', 'bones-child') ?></h3></a>
					</div>
					<div class="home">
						<a rel="bookmark" class="servicio-nav-link" href="/javascript"><h3><?php _e('Servicio', 'bones-child') ?></h3></a>
					</div>
					<div class="home">
						<a rel="bookmark" class="ejemplos-nav-link" href="/javascript"><h3><?php _e('Ejemplos', 'bones-child') ?></h3></a>
					</div>
					<div class="home">
						<a rel="bookmark" class="blog-nav-link" href="/javascript"><h3><?php _e('Blog', 'bones-child') ?></h3></a>
					</div>
					<div class="portfolio">
						<a href="<?php $url = site_url( '/', '' ); echo $url; echo _e('portafolio', 'bones-child') . '/'; ?>" target="_blank" rel="me"><h3><?php _e('Portafolio', 'bones-child') ?></h3></a>
					</div>
				</div>