<?php
/*
 Template Name: Service
 *
*/
?>
			<div id="service">

				<?php get_template_part( 'content', 'nav' ); ?>		

				<h2><?php _e('Cómo le puedo ayudar:', 'bones-child') ?></h2>

				<div id="selector-sketch">
					<div id="diagrams-group-1" class="diagrams">
						<div id="diagram-1">
							<div class="diagram">
								<img class="sketch-left" src="./wp-content/themes/bones-child/images/home/sketch-left2.png"/>
								<img class="sketch-centre" src="./wp-content/themes/bones-child/images/home/sketch-centre.png"/>
								<img class="sketch-right" src="./wp-content/themes/bones-child/images/home/sketch-right2.png"/>
							</div>
							<div class="explanation">
								<h3><?php _e('La transición digital', 'bones-child') ?></h3>
								<p><?php printf( esc_html__('Aunque la publicidad física, la atención directa al cliente y la comunicación boca a boca aún forman pilares fundamentales para cualquier campaña de marketing en la actualidad, invertir exclusivamente en dichas canales conlleva grandes inconvenientes. Hoy en día es esencial reconocer, entender y contar con la realidad tecnológica en la que vivimos. Si todavía le parece un terreno incierto, es hora de buscar ayuda; le puedo proporcionar %1$s buena presencia en redes sociales, una imagen corporativa digital, servicios web profesionales, además de abrirles nuevas canales de marketing online %2$s para lograr que su crecimiento sea lo más efectivo posible.', 'bones-child'), '<strong>', '</strong>'); ?></p>
								<div>
									<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-1"><p><?php _e('Pedir info', 'bones-child') ?></p></button>
								</div>

							</div>

						</div>
						<div id="diagram-2" class="diagrams">
							<div class="diagram">
								<img src="./wp-content/themes/bones-child/images/home/diagram-2.png"/>
							</div>
							<div class="explanation">
								<h3><?php _e('Imagen corporativa', 'bones-child') ?></h3>
								<p><?php _e('Una buena imagen profesional parte de tanto la seriedad como la homogeneidad. Para muchos profesionales, su imagen corporativa se ve perjudicada debido a que no se actualiza junto con el crecimiento del negocio. En el caso de empresas con más de diez años de antigüedad, la “revolución digital” podría haber supuesto un golpe importante para su imagen, pues la conversión de medios tangibles (tarjetas e impresiones) en medios digitales (logotipos, cabeceras, banners, páginas web, o perfiles en redes sociales), puede parecer una tarea muy imponente e incierta. Sea cual sea su situación, me ofrezco para encargarme de la creación o actualización de su imagen digital de acuerdo con sus necesidades.', 'bones-child') ?></p>
								<div>
									<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-2"><p><?php _e('Pedir info', 'bones-child') ?></p></button>
								</div>
							</div>
							
						</div>
					</div>
					<div id="diagrams-group-2">
						<div id="diagram-4">
							<div class="diagram">
								<img src="./wp-content/themes/bones-child/images/home/diagram-4.png"/>
							</div>
							<div class="explanation">
								<h3><?php _e('Centralización de información', 'bones-child') ?></h3>
								<p><?php _e('Estar al mando de su contenido online es esencial hoy en día, primero porque nos permite alcanzar al máximo número de personas posibles cuando queremos difundir información o darnos de conocer. Por otro lado, nos permite captar opiniones, identificar carencias y conocer mejor nuestros clientes tantos existentes como potenciales. El problema llega cuando intentamos abarcar la gestión de nuestras cuentas (email, social etc) y aplicaciones de forma independiente.  Al crear un perfil centralizado, podemos vincular nuestras cuentas online y servicios web, pudiendo acceder, publicar y recuperar la información que queramos fácilmente y en tiempo real. Si requiere asistencia para agilizar la centralización de estos procesos no dude en contactar conmigo.', 'bones-child') ?></p>
								<div>
									<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-3"><p><?php _e('Pedir info', 'bones-child') ?></p></button>
								</div>
							</div>							

						</div>
						<div id="diagram-3">
							<div class="diagram">
								<img src="./wp-content/themes/bones-child/images/home/diagram-3.png"/>
							</div>
							<div class="explanation">
								<h3><?php _e('Herramientas Google', 'bones-child') ?></h3>
								<p><?php _e('Todo negocio sobreentiende la necesidad de realizar actividades publicitarias. Tradicionalmente campañas de publicidad se han realizado a través de la publicación de medios físicos y la interacción por vías tradicionales de comunicación como pueden ser teléfono, cara a cara y posiblemente correo electrónico. Aunque estas canales siguen siendo relevantes para muchos, cualquier negocio que tenga presencia online debe considerar la incorporación de las herramientas de marketing y análisis proporcionado por Google. Si le interesa la posibilidad de poder realizar campañas de publicidad online a medida y/o analizar cuáles son las secuencias de eventos que constituyen las acciones más exitosas de parte de sus clientes, les puedo ayudar tanto en su configuración como mantenimiento.', 'bones-child') ?></p>
								<div>
									<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-4"><p><?php _e('Pedir info', 'bones-child') ?></p></button>
								</div>
							</div>						

						</div>						
					</div>
				</div>
				<!-- Modal -->
				<div id="modal-1" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<p><?php _e('Si tiene configurado el correo electrónico en su equipo, pulse en el boton abajo para contactar conmigo:', 'bones-child') ?></p>
								<button onclick="location.href='mailto:admin@bmeansb.com?subject=<?php _e('Transición Digital', 'bones-child') ?>';" type="button" class="btn btn-md btn-primary"><p><?php _e('Enviar correo', 'bones-child') ?></p></button>
								<p><?php printf( esc_html__('En el caso contrario, por favor envíeme un email utilizando la siguiente información e indicando como le puedo ayudar: %1$s %2$s %3$s Dirección: %4$s %5$s admin@bmeansb.com %6$s %7$s %8$s Asunto: %9$s %10$s Transición digital %11$s %12$s', 'bones-child'), '</p>', '<p class="mail-text">', '<strong>', '</strong>', '<span class="blue-text">', '</span>', '<br/>', '<strong>', '</strong>', '<span class="blue-text">', '</span>', '</p>'); ?>
							</div>
						</div>

					</div>
				</div>

				<!-- Modal -->
				<div id="modal-2" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<p><?php _e('Si tiene configurado el correo electrónico en su equipo, pulse en el boton abajo para contactar conmigo:', 'bones-child') ?></p>
								<button onclick="location.href='mailto:admin@bmeansb.com?subject=<?php _e('Imagen corporativa', 'bones-child') ?>';" type="button" class="btn btn-md btn-primary"><p><?php _e('Enviar correo', 'bones-child') ?></p></button>
								<p><?php printf( esc_html__('En el caso contrario, por favor envíeme un email utilizando la siguiente información e indicando como le puedo ayudar: %1$s %2$s %3$s Dirección: %4$s %5$s admin@bmeansb.com %6$s %7$s %8$s Asunto: %9$s %10$s Imagen corporativa %11$s %12$s', 'bones-child'), '</p>', '<p class="mail-text">', '<strong>', '</strong>', '<span class="blue-text">', '</span>', '<br/>', '<strong>', '</strong>', '<span class="blue-text">', '</span>', '</p>'); ?>
							</div>
						</div>

					</div>
				</div>

				<!-- Modal -->
				<div id="modal-3" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<p><?php _e('Si tiene configurado el correo electrónico en su equipo, pulse en el boton abajo para contactar conmigo:', 'bones-child') ?></p>
								<button onclick="location.href='mailto:admin@bmeansb.com?subject=<?php _e('Centralización de información', 'bones-child') ?>';" type="button" class="btn btn-md btn-primary"><p><?php _e('Enviar correo', 'bones-child') ?></p></button>
								<p><?php printf( esc_html__('En el caso contrario, por favor envíeme un email utilizando la siguiente información e indicando como le puedo ayudar: %1$s %2$s %3$s Dirección: %4$s %5$s admin@bmeansb.com %6$s %7$s %8$s Asunto: %9$s %10$s Centralización de información %11$s %12$s', 'bones-child'), '</p>', '<p class="mail-text">', '<strong>', '</strong>', '<span class="blue-text">', '</span>', '<br/>', '<strong>', '</strong>', '<span class="blue-text">', '</span>', '</p>'); ?>
							</div>
						</div>

					</div>
				</div>

				<!-- Modal -->
				<div id="modal-4" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<p><?php _e('Si tiene configurado el correo electrónico en su equipo, pulse en el boton abajo para contactar conmigo:', 'bones-child') ?></p>
								<button onclick="location.href='mailto:admin@bmeansb.com?subject=<?php _e('Herramientas Google', 'bones-child') ?>';" type="button" class="btn btn-md btn-primary"><p><?php _e('Enviar correo', 'bones-child') ?></p></button>
								<p><?php printf( esc_html__('En el caso contrario, por favor envíeme un email utilizando la siguiente información e indicando como le puedo ayudar: %1$s %2$s %3$s Dirección: %4$s %5$s admin@bmeansb.com %6$s %7$s %8$s Asunto: %9$s %10$s Herramientas Google %11$s %12$s', 'bones-child'), '</p>', '<p class="mail-text">', '<strong>', '</strong>', '<span class="blue-text">', '</span>', '<br/>', '<strong>', '</strong>', '<span class="blue-text">', '</span>', '</p>'); ?>
							</div>
						</div>

					</div>
				</div>
			</div>