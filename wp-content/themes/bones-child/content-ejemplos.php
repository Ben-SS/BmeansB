<?php
/*
 Template Name: Ejemplos
 *
*/
?>
			<div id="ejemplos" style="min-height: 100vh;">

				<?php get_template_part( 'content', 'nav' ); ?>		

				<h2><?php _e('Mi trabajo:', 'bones-child') ?></h2>

				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<p class="ejemplos-text text-justify text-light"><?php _e('Para obtener información más detallada sobre mí, por favor diríjase al enlace <strong>Portafolio</strong> que se encuentra en la barra superior.</br></br>Los diseños que se ven expuestos en esta sección corresponden a proyectos publicados, proyectos terminados sin publicar y luego conceptos de diseño disponibles para nuevos clientes. Soy un desarrollador <strong>full-stack</strong> lo cuál significa que trabajo con multiples plataformas para entregar un servicio completo desde el servidor hasta la portada principal del sitio web.</br></br>Todos mis diseños están <strong>adaptados a móviles y tablets</strong>, listos para <strong>integrar con redes sociales</strong> y <strong>optimizados para motores de búsqueda (SEO)</strong>.</br></br>En el caso de interesarle algún diseño o concepto, por favor contacte conmigo al siguiente correo electrónico: <strong><a href="mailto:admin@bmeansb.com">admin@bmeansb.com</a></strong>', 'bones-child') ?></p>
						</div>
					</div>

					<hr>

					<div class="w-100">
						<p class="text-light ejemplos-title ejemplos-text"><?php _e('Prototipo dinámico a estrenar:', 'bones-child') ?></p>
						<p class="text-light ejemplos-text"><?php _e('El sitio web que muestro a continuación se trata de un prototipo para una página web profesional, moderna y dinámica, ideal para cualquier PYME buscando potenciar su presencia online.', 'bones-child') ?></p>
					</div>


					<div class="w-100 ejemplos-carousel">
						<div id="proto-carousel" class="carousel slide w-100 h-100" data-ride="carousel" interval="5000" wrap="true">							

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item text-center h-100 active">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Proto_preview/Proto_preview_1.png" alt="Proto_preview_1">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Proto_preview/Proto_preview_2.png" alt="Proto_preview_2">
								</div>

								<div class="item text-center h-100">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Proto_preview/Proto_preview_3.png" alt="Proto_preview_3">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Proto_preview/Proto_preview_4.png" alt="Proto_preview_4">
								</div>

								<div class="item text-center h-100">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Proto_preview/Proto_preview_5.png" alt="Proto_preview_5">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Proto_preview/Proto_preview_6.png" alt="Proto_preview_6">
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#proto-carousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#proto-carousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>

					</br><hr>

					<div class="w-100">
						<p class="text-light ejemplos-title ejemplos-text"><?php _e('Diseño moderno y limpio:', 'bones-child') ?></p>
						<p class="text-light ejemplos-text"><?php _e('El sitio web que muestro a continuación se trata de una plataforma web completa en la clientes pueden comprar una suscripción y realizar un curso online con su propia cuenta de usuario.</br>El proyecto incluye trabajos de diseño web, diseño gráfico, animación y video, programación backend y administración del servidor (MySQL/PHP), sistemas online de pagos, diseño de un foro adicional, blog, traducción multilingüe.</br>Acceder al sitio: <a href="https://fasttyping.com" target="_blank">Aquí</a>', 'bones-child') ?></p>
					</div>


					<div class="w-100 ejemplos-carousel">
						<div id="fasttyping-carousel" class="carousel slide w-100 h-100" data-ride="carousel" interval="5000" wrap="true">							

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item text-center h-100 active">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fasttyping_preview/Fasttyping_preview_1.png" alt="Fasttyping_preview_1">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fasttyping_preview/Fasttyping_preview_2.png" alt="Fasttyping_preview_2">
								</div>

								<div class="item text-center h-100">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fasttyping_preview/Fasttyping_preview_3.png" alt="Fasttyping_preview_3">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fasttyping_preview/Fasttyping_preview_4.png" alt="Fasttyping_preview_4">
								</div>

								<div class="item text-center h-100">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fasttyping_preview/Fasttyping_preview_5.png" alt="Fasttyping_preview_5">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Fasttyping_preview/Fasttyping_preview_6.png" alt="Fasttyping_preview_6">
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#fasttyping-carousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#fasttyping-carousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>

					</br><hr>

					<div class="w-100">
						<p class="text-light ejemplos-title ejemplos-text"><?php _e('Diseño con personalización:', 'bones-child') ?></p>
						<p class="text-light ejemplos-text"><?php _e('El sitio web que muestro a continuación se trata de una página web construida en Wordpress sobre un tema totalmente personalizado.</br>El proyecto incluye trabajos de diseño web, diseño gráfico, animación y video, creación de temas (child themes), administración de eventos, blog, traducción multilingüe.', 'bones-child') ?></p>
					</div>

					<div class="w-100 ejemplos-carousel">
						<div id="esad-carousel" class="carousel slide w-100 h-100" data-ride="carousel" interval="5000" wrap="true">							

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item text-center h-100 active">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/esad_preview/esad_preview_1.png" alt="esad_preview_1">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/esad_preview/esad_preview_2.png" alt="esad_preview_2">
								</div>

								<div class="item text-center h-100">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/esad_preview/esad_preview_3.png" alt="esad_preview_3">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/esad_preview/esad_preview_4.png" alt="esad_preview_4">
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#esad-carousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#esad-carousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>

					</br><hr>

					<div class="w-100">
						<p class="text-light ejemplos-title ejemplos-text"><?php _e('Diseño corporativo:', 'bones-child') ?></p>
						<p class="text-light ejemplos-text"><?php _e('El sitio web que muestro a continuación se trata de una página web corporativa para proporcionar información básica sobre la empresa.</br>El proyecto incluye trabajos de diseño web, diseño gráfico, animación y video, creación de temas (child themes), blog, traducción multilingüe.</br>Acceder al sitio: <a href="http://academia-mae.es" target="_blank">Aquí</a>', 'bones-child') ?></p>
					</div>

					<div class="w-100 ejemplos-carousel">
						<div id="mae-carousel" class="carousel slide w-100 h-100" data-ride="carousel" interval="5000" wrap="true">							

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item text-center h-100 active">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/MAE_preview/MAE_preview_1.png" alt="MAE_preview_1">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/MAE_preview/MAE_preview_2.png" alt="MAE_preview_2">
								</div>

								<div class="item text-center h-100">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/MAE_preview/MAE_preview_3.png" alt="MAE_preview_3">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/MAE_preview/MAE_preview_4.png" alt="MAE_preview_4">
								</div>

								<div class="item text-center h-100">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/MAE_preview/MAE_preview_5.png" alt="MAE_preview_5">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/MAE_preview/MAE_preview_6.png" alt="MAE_preview_6">
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#mae-carousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#mae-carousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>

					</br><hr>

					<div class="w-100">
						<p class="text-light ejemplos-title ejemplos-text"><?php _e('Diseño corporativo/Semi tienda online:', 'bones-child') ?></p>
						<p class="text-light ejemplos-text"><?php _e('El sitio web que muestro a continuación se trata de una página web corporativa muy personalizada, creada para dar a conocer sus productos sin llegar a ser tienda online completa.</br>El proyecto incluye trabajos de diseño web, diseño gráfico, animación y video, creación de temas (child themes), blog, traducción multilingüe.</br>Acceder al sitio: <a href="http://granscooter.es" target="_blank">Aquí</a>', 'bones-child') ?></p>
					</div>

					<div class="w-100 ejemplos-carousel">
						<div id="gs-carousel" class="carousel slide w-100 h-100" data-ride="carousel" interval="5000" wrap="true">							

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item text-center h-100 active">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/GS_preview/GS_preview_1.png" alt="GS_preview_1">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/GS_preview/GS_preview_2.png" alt="GS_preview_2">
								</div>

								<div class="item text-center h-100">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/GS_preview/GS_preview_3.png" alt="GS_preview_3">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/GS_preview/GS_preview_4.png" alt="GS_preview_4">
								</div>

								<div class="item text-center h-100">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/GS_preview/GS_preview_5.png" alt="GS_preview_5">
								  <img class="carousel-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/GS_preview/GS_preview_6.png" alt="GS_preview_6">
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#gs-carousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#gs-carousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				</br></br>

				
				<!-- Modal -->
				<div id="trabajos-modal" class="modal fade" role="dialog">
					<div class="modal-dialog w-100 h-100">

						<!-- Modal content-->
						<div class="modal-content w-100 h-100 d-flex flex-column justify-content-center align-items-center">
							<div class="modal-body">
								<div class="trabajos-modal-close w-100"><span data-dismiss="modal" class="text-light glyphicon glyphicon-remove"></span></div>
								<img class="trabajos-modal-img w-100 h-100" src="" />
							</div>
						</div>

					</div>
				</div>
			</div>