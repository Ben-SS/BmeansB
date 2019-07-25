<?php
/*
 Template Name: Portafolio
 *
*/
?>

<?php get_header(); ?>

	<div id="myPage">


		<nav id="portfolio-navbar" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="#"><img id="nav-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/2016.png" alt="Ben Shewring"/></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="bar-tabs nav-tab-spanish"><a class="nav-tab" href="#sobremi"><?php _e('SOBRE MÍ','bones-child') ?></a></li>
						<li class="bar-tabs nav-tab-spanish"><a class="nav-tab" href="#lugares"><?php _e('LUGARES','bones-child') ?></a></li>
						<li class="bar-tabs nav-tab-spanish"><a class="nav-tab" href="#ejemplos"><?php _e('EJEMPLOS','bones-child') ?></a></li>
						<li class="bar-tabs nav-tab-spanish"><a class="nav-tab" href="#metas"><?php _e('METAS','bones-child') ?></a></li>
						<li class="bar-tabs nav-tab-spanish"><a class="nav-tab" href="#curriculo"><?php _e('CURRÍCULO','bones-child') ?></a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div role="main">



			<div class="parallax parallax-1">
				<div class="back-to-blog">
					<a href="<?php $url = site_url( '/', 'http' ); echo $url; ?>">&laquo; <?php _e('vuelve al blog', 'bones-child'); ?></a>
				</div>
				<div class="banner">
					<h1>Ben Shewring</h1>
					<div class="quote-div"> 
						<p class="jumbo-text"><?php _e('"Forjando mi camino en las nuevas tecnologías y el desarrollo web adaptativo"','bones-child') ?></p>
					</div>
				</div>
				<div class="container-2">
					<div class="container icon-container">
						<h2 class="icon-text"><?php _e('Mándame un correo:','bones-child') ?></h2>
						<a class="contact-item" href="mailto:b.shewring@gmail.com"><img class="envelope contact-icon" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/envelope.png" alt="email"/></a>
					</div>
				</div>
				<div class="container-3">
					<div class="container icon-container">
						<a class="contact-item" href="https://github.com/Ben-SS" target="_blank"><img class="git contact-icon" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/git.png" alt="Github"/><p class="icon-text">Github</p></a>
					</div>
					<div class="container icon-container">
						<a class="contact-item" href="https://uk.linkedin.com/in/ben-shewring" target="_blank"><img class="linkedin contact-icon" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/linkedin.png" alt="Linkedin"/><p class="icon-text">LinkedIn</p></a>
					</div>
					<div class="container icon-container">
						<a class="contact-item" href="https://twitter.com/BShewring" target="_blank"><img class="twitter contact-icon" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/twitter.png" alt="Twitter"/><p class="icon-text">Twitter</p></a>
					</div>
				</div>
			</div>

			<div class="headings-div">

				<p class="headings"><?php _e('SOBRE MÍ','bones-child') ?></p>

			</div>

			<div id="sobremi" class="section-div">

				<div class="row">
					<h3><?php _e('Permitame apenas presentarme:','bones-child') ?></h3>
				</div>

				<div class="row full-row presentation-row">
					<div class="presentation">

						<div class="google">
							<div id="googleMapEs">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

									<?php the_content(); ?>

									<?php endwhile; ?>

								<?php endif; ?>
							</div>
						</div>

						<h4><?php _e('¿De dónde soy?','bones-child') ?></h4>
						<p class="section-text"><?php _e('Me crie en una ciudad que se llama Bath en el Reino Unido, su ubicación se puede observar en el mapa a la derecha (arriba en el caso de estar utilizando un dispositivo móvil). Es una ciudad famosa por sus balnearios romanos, architectura espectacular y su belleza natural.','bones-child') ?></p>

						<h4><?php _e('¿Y ahora?','bones-child') ?></h4>

						<p class="section-text"><?php printf(esc_html__( 'Tras licenciarme en %1$s International Business y Marketing%2$s me trasladé a la isla de Tenerife, dónde paso a paso, voy abriendo camino dentro de los campos de %3$s E-commerce, Diseño Gráfico y Responsive Web Development%4$s', 'bones-child'), '<strong>', '</strong>,', '<strong>', '</strong>.'); ?></p>

						<h4><?php _e('Más datos sobre mí','bones-child') ?></h4>

						<p class="section-text"><?php printf(esc_html__( 'Soy %1$s bilingüe %2$s en inglés/español y me apasionan las nuevas tecnologías, particularmente la parte que la creatividad desempeña en su desarrollo. Aunque actualmente, como cofundador, me encuentro desarrollando un proyecto llamado %3$s FastTyping Online%4$s, en el que hemos revolucionado la mecanografía a través de tecnologías web, con el objetivo de acercarla a todos los públicos, me sigo promoviendo como %5$s Web Developer Full-Stack y Diseñador Gráfico%6$s, mientras me formo en la creación de %7$sMobile Apps%8$s. Algunos ejemplos de los proyectos en los que he trabajado se exponen más adelante en este portafolio. Por lo general, me encantan las sutilezas del %9$s diseño moderno %10$s además de la libertad que este proporciona para un diseñador %11$s sin miedo a la creatividad%12$s. Personalmente, procuro siempre dejar una pincelada de mi identidad en los trabajos que realizo, aplicando mis conocimientos de %13$s diseño gráfico o el desarrollo audiovisual %14$s donde haga falta. En mi opinión %15$s la innovación es la clave del éxito %16$s pues ya no es suficiente simplemente “agarrarse al saber hacer” y es algo por lo que me esfuerzo al diario.', 'bones-child'), '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>','<strong>', '</strong>','<strong>', '</strong>'); ?></p>
						
					</div>
				</div>

<!-- Google Maps -->

				<div id="friends-block">
					<h3><?php _e('Si me tuviera que describir en sólo tres palabras...', 'bones-child') ?></h3>
						
					<div id="friends" class="broken-container">
						<h4><?php _e('Para mis amigos:', 'bones-child') ?></h4>
						<img class="icon" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/friends.png" alt="friends"/>
						<p class="section-text traits"><?php printf(esc_html__( '%1$s Fiable, %2$s %3$s Divertido %4$s y a veces %5$s refrescantemente espontáneo. %6$s', 'bones-child'), '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>'); ?></p>
					</div>
						
					<div id="colleagues" class="broken-container">
						<h4><?php _e('Para mis compañeros:', 'bones-child') ?></h4>
						<img class="icon" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/colleagues.png" alt="colleagues"/>
						<p class="section-text traits"><?php printf(esc_html__( '%1$s Adaptable, %2$s %3$s Comprometido %4$s y dispuesto a probar cosas %5$s nuevas. %6$s', 'bones-child'), '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>'); ?></p>
					</div>
				</div>

				<div class="row">
					<h3><?php _e('El saber hacer técnico...', 'bones-child') ?></h3>
				</div>

				<div class="row full-row">

					<div class="full-container-2">
					
						<h4><?php _e('Mi caja de instrumentos Web:', 'bones-child') ?></h4>

	<!-- Animated bars  -->

						<div id="HTML-Es" class="Skillset container out-view">
							<p class="thisSkill thisSkillHTML">HTML5:</p>
							<div class="Skillbar">
								<div id="HTML-Bar-Es"> 
									<span class="PercentText out-view">4/5</span>
								</div>
							</div>
						</div>

						<div id="CSS-Es" class="Skillset container out-view">
							<p class="thisSkill thisSkillCSS">CSS3:</p>
							<div class="Skillbar">
								<div id="CSS-Bar-Es">
									<span class="PercentText out-view">4/5</span>
								</div>
							</div>
						</div>
							
						<div id="Jscript-Es" class="Skillset container out-view">
							<p class="thisSkill thisSkillJscript">JavaScript:</p>
							<div class="Skillbar">
								<div id="Jscript-Bar-Es">
									<span class="PercentText out-view">4/5</span>
								</div>
							</div>
						</div>

						<div id="Meteor-Es" class="Skillset container out-view">
							<p class="thisSkill thisSkillMeteor">Wordpress:</p>
							<div class="Skillbar">
								<div id="Meteor-Bar-Es">
									<span class="PercentText out-view">4/5</span>
								</div>
							</div>
						</div>

						<div id="Mongo-Es" class="Skillset container out-view">
							<p class="thisSkill thisSkillMongo">Ionic:</p>
							<div class="Skillbar">
								<div id="Mongo-Bar-Es">
									<span class="PercentText out-view">3/5</span>
								</div>
							</div>
						</div>

						<div id="PHP-Es" class="Skillset container out-view">
							<p class="thisSkill thisSkillPHP">PHP+SQL:</p>
							<div class="Skillbar">
								<div id="PHP-Bar-Es">
									<span class="PercentText out-view">4/5</span>
								</div>
							</div>
						</div>

					</div>


					<div id="draw" class="full-container-2">

						<h4><?php _e('Mi caja de instrumentos diseño gráfico:', 'bones-child') ?></h4>


						<div id="Photo-Es" class="Skillset container out-view">
							<p class="thisSkill thisSkillPhoto">Photoshop:</p>
							<div class="Skillbar">
								<div id="Photo-Bar-Es"> 
									<span class="PercentText out-view">4/5</span>
								</div>
							</div>
						</div>

						<div id="Illus-Es" class="Skillset container out-view">
							<p class="thisSkill thisSkillIllus">Illustrator:</p>
							<div class="Skillbar">
								<div id="Illus-Bar-Es">
									<span class="PercentText out-view">4/5</span>
								</div>
							</div>
						</div>
							
						<div id="Effects-Es" class="Skillset container out-view">
							<p class="thisSkill thisSkillEffects">A.Effects:</p>
							<div class="Skillbar">
								<div id="Effects-Bar-Es">
									<span class="PercentText out-view">3.5/5</span>
								</div>
							</div>
						</div>

						<div id="Vegas-Es" class="Skillset container out-view">
							<p class="thisSkill thisSkillVegas">Sony Vegas:</p>
							<div class="Skillbar">
								<div id="Vegas-Bar-Es">
									<span class="PercentText out-view">4/5</span>
								</div>
							</div>
						</div>
							
					</div>
				</div>

				<div id="other-skills-row-Es" class="row">
					<h3><?php _e('Otras habilidades...', 'bones-child') ?></h3>
				</div>

				<div class="other-skills-Es full-row">

					<div class="container-fluid">				
						<h4><?php _e('También sé hacer:', 'bones-child') ?></h4>
					</div>
					<div class="other-skills-each">
						<p id="other-skills-media-Es" class="out-view"><?php printf(esc_html__( '%1$s SEO %2$s Conocimiento de SEO y Google Analytics.', 'bones-child'), '<span class="glyphicon glyphicon-hand-up"></span><br><strong><br>', '<br></strong>'); ?></p>
					</div>
					<div class="other-skills-each">
						<p id="other-skills-teach-Es" class="out-view"><?php printf(esc_html__( '%1$s Enseñar %2$s 5+ años enseñando informática e inglés.', 'bones-child'), '<span class="glyphicon glyphicon-education"></span><br><strong><br>', '<br></strong>'); ?></p>
					</div>
					<div class="other-skills-each">
						<p id="other-skills-lang-Es" class="out-view"><?php printf(esc_html__( '%1$s Idiomas %2$s Bilingüe en inglés/español.', 'bones-child'), '<span class="glyphicon glyphicon-comment"></span><br><strong><br>', '<br></strong>'); ?></p>
					</div>
					<div class="other-skills-each">
						<p id="other-skills-inno-Es" class="out-view"><?php printf(esc_html__( '%1$s Innovar %2$s Dinamizador de la innovación.', 'bones-child'), '<span class="glyphicon glyphicon-cloud"></span><br><strong><br>', '<br></strong>'); ?></p>
					</div>
				
				</div>

			</div>

			<div class="parallax-fixed parallax-2">
				<div class="parallax-replacement-bg hidden">
					<div class=parallax-replacement-content>
						<img class="parallax-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/gps.png"/>
						<p class="parallax-replacement-text"><?php _e('LUGARES', 'bones-child') ?></p>
					</div>
				</div>
			</div>

			<div class="headings-div">

				<p class="headings"><?php _e('LUGARES', 'bones-child') ?></p>

			</div>

			<div id="lugares" class="section-div">

				<div class="row">
					<h3 class="main-headings"><?php _e('Las siguientes compañías e instituciones han sido claves en mi desarrollo profesional hasta la fecha:', 'bones-child') ?></h3>
				</div>

				<div id="employ-row-Es" class="row full-row">
					<h4><?php _e('Empleo...', 'bones-child') ?></h4>
					<h4><?php _e('Para quién he trabajado:', 'bones-child') ?></h4>

<!-- Images use a placeholder src value to be swapped on page load via javaScript -->
					
					<div id="employ-images">

						<div id="nivaria-Es" class="employ-img out-view">
							<img class="places-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/nivaria.png" alt="Nivaria Innova SL" title="Nivaria Innova SL"/>
							<p><?php _e('Online Marketing Junior', 'bones-child') ?></p>
						</div>


						<div id="mayco-Es" class="employ-img out-view">
							<img class="places-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/mayco.png" alt="Mayco School Of English" title="Mayco School Of English"/>
							<p><?php _e('Profesor bilingüe y desarrollador de contenidos mediáticos', 'bones-child') ?></p>
						</div>


						<div id="tre-Es" class="employ-img out-view">
							<img class="places-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/hitachi.png" alt="Hitachi Information Control Systems Europe" title="Hitachi Information Control Systems Europe"/>
							<p><?php _e('Ingeniero de datos para HICSE, Hitachi', 'bones-child') ?></p>
						</div>

						<div id="mai-Es" class="employ-img out-view">
							<img class="places-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/mai-logo.png" alt="Academia MAI" title="Academia MAI"/>
							<p><?php _e('Desarrollador y Webmaster, Academia MAI', 'bones-child') ?></p>
						</div>

					</div>
					
				</div><br>

				<div id="study-row-Es" class="row full-row">
					<h4><?php _e('Estudios...', 'bones-child') ?></h4>
					<h4 class="sub-headings study"><?php _e('Dónde he estudiado:', 'bones-child') ?></h4>

					<div id="study-images">

						<div id="plym-Es" class="study-img out-view">
							<img class="places-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/plym.png" alt="The University Of Plymouth" title="The University Of Plymouth"/>
							<p class="places-text"><?php _e('BA International Business', 'bones-child') ?></p>
						</div>
						<div id="esic-Es" class="study-img out-view">
							<img class="places-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/esic.png" alt="La Escuela Oficial de Marketing y Gestión Madrid" title="La Escuela Oficial de Marketing y Gestión Madrid"/>
							<p class="places-text"><?php _e('BA International Business', 'bones-child') ?></p>
						</div>
						<div id="laguna-Es" class="study-img out-view">
							<img class="places-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/laguna.png" alt="La Universidad De La Laguna" title="La Universidad De La Laguna"/>
							<p class="places-text"><?php _e('Dinamizadores De La Innovación', 'bones-child') ?></p>
						</div>
						<div id="london-Es" class="study-img out-view">
							<img class="places-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/gold.png" alt="Goldsmiths University Of London" title="Goldsmiths University Of London"/>
							<p class="places-text"><?php _e('Responsive Website Development', 'bones-child') ?></p>
						</div>

					</div>

				</div>

				<div id="current-row" class="row full-row">
					<h4><?php _e('Actualmente...', 'bones-child') ?></h4>
					<h4 class="sub-headings study"><?php _e('En lo que estoy trabajando ahora:', 'bones-child') ?></h4>

					<div id="current-content" class="out-view d-flex flex-wrap justify-content-between align-content-start align-items-start">

						<div id="fasttyping-left" class="d-flex flex-wrap align-content-stretch justify-content-center">

							<img id="fasttyping-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/fasttyping_text.png" alt="Fasttyping" title="Fasttyping"/>

							<p id="fasttyping-text"><?php _e('Un nuevo proyecto junto con <a class="link" href="http://academia-mai.com" target="_blank">Academia MAI</a> y <a class="link" href="http://academia-mae.es" target="_blank">Academia MAE</a>. La primera fase se basa en el desarrollo de una aplicación web para sus cursos de mecanografía presenciales, <a class="link" href="http://fasttyping.net" target="_blank">FastTyping.net</a>. La segunda, tiene como objetivo la automatización y adaptación de dicha plataforma para poder ofrecer el curso al público general, <a class="link" href="http://fasttyping.com" target="_blank">FastTyping.com</a>. El proyecto conlleva el desarrollo constante de las páginas web corporativas de las academias, la creación continuada de material promocional y publicitario y el mantenimiento diario de las aplicaciones.', 'bones-child') ?></p>

						</div>

						<div id="fasttyping-right" class="d-flex flex-wrap align-content-stretch justify-content-center">
							<div id="fasttyping-buttons" class="d-flex flex-nowrap align-items-center justify-content-between">
								<button id="fasttyping-btn-1" class="btn btn-primary">Backend</button>
								<button id="fasttyping-btn-2" class="btn btn-success">Frontend</button>
							</div>
							<div id="fasttyping-explanation" class="d-flex flex-nowrap justify-content-center">
								<div id="backend-text" class="d-flex flex-wrap align-items-start align-content-start" style="opacity:0;">
									<div id="backend-images" class="d-flex flex-nowrap justify-content-between align-content-stretch align-items-start">
										<img class="fasttyping-logos" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/PHP.png" alt="php" title="PHP"></img>
										<img class="fasttyping-logos" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/Mysql.png" alt="mysql" title="MySQL"></img>
									</div>
									<p id="backend-explanation"><?php _e('Al ser mi primer proyecto realizado en PHP/MySQL, aproveché la oportunidad para construir la plataforma en PHP 7 puro. Ahora me siento cómodo trabajando con este lenguaje y con ganas de utilizar un PHP Framework.', 'bones-child') ?></p>
								</div>
								<div id="frontend-text" class="d-flex flex-wrap align-items-start align-content-start" style="opacity:0;">
									<div id="frontend-images" class="d-flex flex-nowrap justify-content-between align-items-center align-content-center">				
										<img class="fasttyping-logos-frontend" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/html5.png" alt="html5" title="HTML 5"></img>
										<img class="fasttyping-logos-frontend" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/css.png" alt="css3" title="CSS 3"></img>
										<img class="fasttyping-logos-frontend" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/jquery.png" alt="jquery" title="JQuery"></img>
									</div>
									<p id="frontend-explanation"><?php _e('Este proyecto ha sido clave para seguir fortaleciendo mis conocimientos, de los cuales se destacan el uso avanzado de Flexbox (CSS), JQuery y APIs, además del diseño gráfico y la creación de multimedia.', 'bones-child') ?></p>
								</div>
							</div>
						</div>
					</div>

					<div id="fasttyping-contact" class="d-flex justify-content-center flex-nowrap">
						<div class="d-flex flex-nowrap justify-content-start align-items-center">
							<p class="fasttyping-contact">Curso/Web:</p>
							<a class="fasttyping-contact-detail" href="http://fasttyping.com" target="_blank">www.fasttyping.com</a>
						</div>
					</div>

					<div id="fasttyping-screens-row" class="out-view">
						<h4 class="sub-headings study"><?php _e('Pantallas:', 'bones-child') ?></h4>
						<div id="fasttyping-screens" class="d-flex flex-wrap justify-content-between">
							<img class="fasttyping-screen" screen="1" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/Fasttyping-1.png" alt="fasttyping" title="<?php _e('FastTyping Bienvenido', 'bones-child') ?>"></img>
							<img class="fasttyping-screen" screen="2" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/Fasttyping-2.png" alt="fasttyping" title="<?php _e('FastTyping Automatización', 'bones-child') ?>"></img>
							<img class="fasttyping-screen" screen="3" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/Fasttyping-3.png" alt="fasttyping" title="<?php _e('FastTyping Config Ejercicios', 'bones-child') ?>"></img>
							<img class="fasttyping-screen" screen="4" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/Fasttyping-4.png" alt="fasttyping" title="<?php _e('FastTyping Ejercicio', 'bones-child') ?>"></img>
							<img class="fasttyping-screen" screen="5" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/Fasttyping-5.png" alt="fasttyping" title="<?php _e('FastTyping Diploma', 'bones-child') ?>"></img>
						</div>
					</div>

					<div id="fasttyping-modal" class="modal fade" role="dialog">
						<div class="modal-dialog fasttyping-modal-dialog">

						<!-- Modal content-->
							<div class="modal-content fasttyping-modal-content">
								<div class="modal-header fasttyping-modal-header">
								<button type="button" class="close" data-dismiss="modal">
								&times;</button>
								<h2 class="modal-title fasttyping-modal-title">title</h2>
								</div>
								<div class="modal-body fasttyping-modal-body">
									<img class="fasttyping-modal-img" screen="" src="" alt="" title=""/>
								</div>
								<div class="modal-footer fasttyping-modal-footer d-flex justify-content-between align-items-center">
									<span class="fasttyping-modal-arrow fasttyping-modal-arrow-left glyphicon glyphicon-chevron-left arrow-enabled"></span>
									<span class="fasttyping-modal-arrow fasttyping-modal-arrow-right glyphicon glyphicon-chevron-right arrow-enabled"></span>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="parallax-fixed parallax-3">
				<div class="parallax-replacement-bg hidden">
					<div class=parallax-replacement-content>
						<img class="parallax-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/examples.png"/>
						<p class="parallax-replacement-text"><?php _e('EJEMPLOS', 'bones-child') ?></p>
					</div>
				</div>
			</div>

			<div class="headings-div">

				<p class="headings"><?php _e('EJEMPLOS', 'bones-child') ?></p>

			</div>

<!-- This section uses Handlebars templates to pull in the necessary info from gallery.js -->

			<div id="ejemplos" class="section-div">

				<div class="row">
					<h3 class="main-headings"><?php _e('Lo siguiente son ejemplos de mi trabajo. Los programas utilizados están indicados en cada sección:', 'bones-child') ?></h3>
				</div>

				<div id="examples-row-Es" class="row full-row out-view">

					

						<div class="row photos-row">
							<div class="container-fluid">
								<div class="progs">							
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/html5.png" alt="html5" title="HTML 5"><p>HTML5</p></img>
								</div>
								<div class="progs">	
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/javascript.png" alt="javascript" title="Javascript"><p>Javascript</p></img>
								</div>
								<div class="progs">	
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/css.png" alt="css3" title="CSS 3"><p>CSS 3</p></img>
								</div>
								<div class="progs">	
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/jquery.png" alt="jquery" title="JQuery"><p>JQuery</p></img>
								</div>
								<div class="progs">	
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/meteor.png" alt="meteor" title="Meteor"><p>Meteor</p></img>
								</div>
								<div class="progs">	
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/mongodb.png" alt="mongodb" title="MongoDB"><p>MongoDB</p></img>
								</div>
								<div class="progs">	
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/wordpress.png" alt="wordpress" title="Wordpress"><p>Wordpress</p></img>
								</div>
								<div class="progs">	
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/PHP.png" alt="php" title="PHP"><p>PHP</p></img>
								</div>
								<div class="progs">	
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/Mysql.png" alt="Mysql" title="MySQL"><p>MySQL</p></img>
								</div>
							</div>

							<?php $web = __('imagenes-web', 'bones-child'); ?>
							<?php query_posts(array('category_name' => $web)); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

								<?php the_content(); ?>



							<?php endwhile; endif; ?>

						</div>

						<div class="row photos-row">
							<div class="container-fluid">
								<div class="progs">							
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/photoshop.png" alt="photoshop" title="Adobe Photoshop"><p>Photoshop</p></img>
								</div>
								<div class="progs">	
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/illustrator.png" alt="illustrator" title="Adobe Illustrator"><p>Illustrator</p></img>
								</div>
							</div>

							<?php $design = __('imagenes-diseño', 'bones-child'); ?>
							<?php query_posts(array('category_name' => $design)); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

								<?php the_content(); ?>



							<?php endwhile; endif; ?>

						</div> <!-- / row -->

						<div class="row compositions-row">
							<div class="container-fluid">
								<div class="progs">
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/effects.png" alt="after effects" title="Adobe After Effects"><p>After Effects</p></img>
								</div>
								<div class="progs">
									<img class="programs" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/vegas.png" alt="sony vegas" title="Sony Vegas"><p>Sony Vegas</p></img>
								</div>
							</div>
							<div class="full-container-2 video-thumbnail-div">
								<div class="thumbnail">
									<a class="mini-image"data-toggle="modal" href="#vid-modal1" data-keyboard="true"><img class="video-image" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/Orla2012.png" alt="Composition 2012" title="Composition 2012"/></a>    
									<h5><?php _e('Composición 2012', 'bones-child') ?></h5>
								</div>  
							</div> <!-- / col -->
							<div class="full-container-2 video-thumbnail-div">
								<div class="thumbnail">
									<a class="mini-image" data-toggle="modal" href="#vid-modal2" data-keyboard="true"><img class="video-image" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/Orla2013.png" alt="Composition 2013" title="Composition 2013"/></a>    
									<h5><?php _e('Composición 2013', 'bones-child') ?></h5>
								</div>  
							</div> <!-- / col -->
						</div>

					


				</div>
			</div>

			<div class="parallax-fixed parallax-4">
				<div class="parallax-replacement-bg hidden">
					<div class=parallax-replacement-content>
						<img class="parallax-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/goals.png"/>
						<p class="parallax-replacement-text"><?php _e('METAS', 'bones-child') ?></p>
					</div>
				</div>
			</div>

			<div class="headings-div">

				<p class="headings"><?php _e('METAS', 'bones-child') ?></p>

			</div>

			<div id="metas" class="section-div">

				<div class="row">
					<h3><?php _e('Lo que muestro a continuación representa mis objetivos a medio plazo en tres niveles muy importantes: Profesional, Personal y Familia y amigos:', 'bones-child') ?></h3>
				</div>
				<div class="full-row">

<!-- Popover system used to create interaction on hover -->

					<div class="row">			
						<div class="professional-container container-fluid">
							<div class="prof-header">
								<p class="goals-title"><?php _e('Profesional...', 'bones-child') ?></p>										
							</div>
							<div class="goals-container container-fluid">
								<img class="goals-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/professional.png" alt="Professional"/>
								<p class="goals-text es-employment"><?php _e('Emp', 'bones-child') ?></p>							  
								<div hidden class="es-professional-content">
									<div>
										<h4 class="popover-header"><strong><?php _e('Por un lado:', 'bones-child') ?></strong></h4><img class="popover-image" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/hand2.png"/>
									</div>
									<div>
										<p class="popover-content"><?php _e('Mi primer objetivo es de formar una parte importante de un equipo profesional, dedicado al sector de servicios online y/o desarrollo de contenidos digitales.', 'bones-child') ?></p>
									</div>
									<div>
										<h4 class="popover-header2"><strong><?php _e('Por otro:', 'bones-child') ?></strong></h4><img class="popover-image" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/hand.png"/>
									</div>
									<div>
										<p class="popover-content"><?php _e('Alternativamente, me gustaría verme embarcar en un proyecto independiente dentro de la industria.', 'bones-child') ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="personal-container container-fluid">
							<div class="prof-header">
								<p class="goals-title"><?php _e('Personal...', 'bones-child') ?></p>										
							</div>
							<div class="goals-container container-fluid">
								<img class="goals-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/personal.png" alt="Personal"/>
								<p class="goals-text es-personal"><?php _e('Ocio', 'bones-child') ?></p>
								<div hidden class="es-personal-content">
									<div>
										<h4 class="popover-header"><strong><?php _e('La emoción de nuevas experiencias:', 'bones-child') ?></strong></h4>
									</div>
									<div>		
										<p class="popover-content"><?php printf(esc_html__( 'La estabilidad personal y profesional me permitirá comodidad a la hora de invertir en lo que más me motiva: deportes de aventura, vida sana y lo más importante; %1$s viajar %2$s y conocer lugares increíbles en excelente compañía.', 'bones-child'), '<strong>', '</strong>'); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">					
						<div class="home-container container-fluid">
							<div class="prof-header">
								<p class="goals-title"><?php _e('Familia y amigos...', 'bones-child') ?></p>										
							</div>
							<div class="goals-container container-fluid">
								<img class="goals-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/home.png" alt="Home"/>
								<p class="goals-text es-home"><?php _e('Familia', 'bones-child') ?></p>
								<div hidden class="es-home-content">
									<div>
										<h4 class="popover-header"><strong><?php _e('Buscar el equilibrio:', 'bones-child') ?></strong></h4>
									</div>
									<div>
										<p class="popover-content"><?php printf(esc_html__( 'En mi caso, mis seres queridos se encuentran repartidos por todo el mundo. En muchas ocasiones, estar presente para ellos se ha visto complicado al no disponer de las ventajas que te puede aportar una profesión estable. Con esto en mente, mi objetivo inmediato es de lograr dicha estabilidad profesional y asegurar un %1$s equilibrio %2$s necesario entre mis responsabilidades profesionales y personales.', 'bones-child'), '<strong>', '</strong>'); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="parallax-fixed parallax-5">
				<div class="parallax-replacement-bg hidden">
					<div class=parallax-replacement-content>
						<img class="parallax-img" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/cv.png"/>
						<p class="parallax-replacement-text"><?php _e('CURRÍCULO', 'bones-child') ?></p>
					</div>
				</div>
			</div>

			<div class="headings-div">

				<p class="headings"><?php _e('CURRÍCULO', 'bones-child') ?></p>

			</div>

			<div id="curriculo" class="section-div">

				<div class="row">
					<h3 class="main-headings"><?php _e('Pinche en las imágenes para descargar mi currículo en inglés o español:', 'bones-child') ?></h3>
				</div>

				<div class="row broken-row">
					<div class="cv-container">
						<div class="cv-es full-container-2">
			 				<p class="cv-title">ES</p>
			 				<a href="<?php echo get_stylesheet_directory_uri() ?>/portfolio/download/Ben Shewring ES.pdf" download="Ben Shewring CV ES"><img class="CV" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/CV_Ben_Shewring_ES.jpg" alt="Ben Shewring CV" title="Ben Shewring CV ES"/></a>
			 			</div>
				 		<div class="cv-en full-container-2">
			 				<p class="cv-title">EN</p>
			 				<a href="<?php echo get_stylesheet_directory_uri() ?>/portfolio/download/Ben Shewring EN.pdf" download="Ben Shewring CV EN"><img class="CV" src="<?php echo get_stylesheet_directory_uri() ?>/portfolio/images/CV_Ben_Shewring_EN.jpg" alt="Ben Shewring CV" title="Ben Shewring CV EN"/></a>
			 			</div>
		 			</div>
		 		</div>
			</div>

			<div class="headings-div">


				<div class="portfolio-footer">
					<div class="row">
						<div class="row">
							<a class="back-to-top-portafolio" href="javascript"><h5><?php _e('Vuelve arriba', 'bones-child') ?> &#8593;</h5></a>
						</div>
					</div>
				</div>

			</div>


		</div>

		<div class="web-es-modal-template-container">
			
				<!-- Modal -->
				<div id="web-es-modal" class="modal fade" role="dialog"">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
								&times;</button>
								<h2 class="modal-title">title</h2>
								</div>
								<div class="modal-body">
									<img class="modal-img" src="" alt="" title=""/>
								</div>
								<div class="modal-footer">
									<p class="modal-desc">description</p>
								</div>
						</div>
					</div>
			
		</div>



		

		<div class="vid-modal-template-container">
			<!-- Modal -->
			<div id="vid-modal1" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
						&times;</button>
						<h2 class="modal-title"><?php _e('Composición 2012', 'bones-child') ?></h2>
						</div>
						<div class="modal-body">
							<iframe width="100%" height="263px" src="https://www.youtube.com/embed/0JDlpgHyo00" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>	
							</iframe>
						</div>
						<div class="modal-footer">
							<p class="modal-desc"><?php _e('Composición Orla 2012', 'bones-child') ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="vid-modal-template-container">
			<div id="vid-modal2" class="modal fade" role="dialog"">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
						&times;</button>
						<h2 class="modal-title"><?php _e('Composición 2013', 'bones-child') ?></h2>
						</div>
						<div class="modal-body">
							<iframe src="https://player.vimeo.com/video/179953942" width="100%" height="310px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
						<div class="modal-footer">
							<p class="modal-desc"><?php _e('Composición Orla 2013', 'bones-child') ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</div>

<?php get_footer(); ?>