<?php
/*
 Template Name: Intro
 *
*/
?>

			<div id="intro-div">

				<div id="top-banner">
					<img id="logo" src="./wp-content/themes/bones-child/images/BmB.png" alt="BmB Logo"/>		
					<h1><span class="first-letter">B</span>en means <span class="first-letter">B</span>usiness</h1>
					<div id="sub-title">
						<h2><?php _e('Impulse su presencia online', 'bones-child') ?></h2>
					</div>
				</div>

				<div id="lang-div">
					<?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>
				</div>
				
				<div id="selector-div">
					<div id="me-div">
						<h2><?php _e('¿Quién Soy?', 'bones-child') ?><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></h2>
						<div id="me-div-intro">
							<p><?php _e('Me llamo Ben Shewring y soy:', 'bones-child') ?></p>
						</div>
						<div id="me-div-left">
							<div>
								<img alt="<?php _e('Diseñador Web', 'bones-child') ?>" src="./wp-content/themes/bones-child/images/home/web.png"/>
								<p><?php _e('Diseñador Web', 'bones-child') ?></p>
							</div>
							<div>
								<img alt="<?php _e('Diseñador Gráfico', 'bones-child') ?>" src="./wp-content/themes/bones-child/images/home/graphicd.png"/>
								<p><?php _e('Diseñador Gráfico', 'bones-child') ?></p>
							</div>
							<div>
								<img alt="<?php _e('Google', 'bones-child') ?>" src="./wp-content/themes/bones-child/images/home/google.png"/>
								<p><?php _e('Trabajo con herramientas Google', 'bones-child') ?></p>
							</div>
						</div>
						<div id="me-div-right">
							<p><?php _e('Si quiere saber más sobre mi, pinche aquí:', 'bones-child') ?></p>

							<a href="<?php $url = site_url( '/', '' ); echo $url; echo _e('portafolio', 'bones-child') . '/'; ?>" target="_blank" rel="me"><p><?php _e('PORTAFOLIO', 'bones-child') ?></p></a>
						</div>						
					</div>
					<div id="offer-div">
						<h2><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><?php _e('¿Qué Ofrezco?', 'bones-child') ?></h2>
						<div id="offer-div-content">
							<p><?php _e('Lo siguiente:', 'bones-child') ?></p>
							<table>
								<tr>
									<td><p><?php _e('Si busca mejorar o crear una imágen profesional online, le puedo ayudar. Pinche aquí para ver como:', 'bones-child') ?></p></td>
									<td>
										<a rel="bookmark" id="servicio-link" href="/javascript"><p><?php _e('SERVICIO', 'bones-child') ?></p></a>
									</td>						
								</tr>
								<tr>								
									<td>
										<a rel="bookmark" id="blog-link" href="/javascript"><p><?php _e('BLOG', 'bones-child') ?></p></a>
									</td>
									<td><p><?php _e('Para saber de mis últimas experiencias y opiniones', 'bones-child') ?></p></td>
								</tr>
							</table>
						</div>
					</div>
				
					<div id="links">						
						<div class="contact-icon" id="contact-email">
							<a href="mailto:admin@bmeansb.com"><img src="./wp-content/themes/bones-child/images/home/email.png" alt="email" title="Email"/></a>
						</div>
						<div class="contact-icon" id="contact-linkedin">
							<a href="https://www.linkedin.com/in/ben-shewring/" target="_blank"><img src="./wp-content/themes/bones-child/images/home/linkedin.png" alt="Linkedin link" title="LinkedIn"/></a>
						</div>					
						<div class="contact-icon" id="contact-face">
							<a rel="me" href="https://www.facebook.com/ben.shewring.bmeansb/" target="_blank"><img src="./wp-content/themes/bones-child/images/home/face.png" alt="facebook" title="Facebook"/></a>
						</div>
						<div class="contact-icon" id="contact-twitter">
							<a rel="me" href="https://twitter.com/b_means_b" target="_blank"><img src="./wp-content/themes/bones-child/images/home/twitter.png" alt="twitter" title="Twitter"/></a>
						</div>
					</div>	
				</div>
				
			</div>