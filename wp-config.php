<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'bmeansb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Dejarme1');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '83vYQO)b`c/D8:s`Jgkvzq]`$Ih=L3Vu9INGkMM7Ms=]p7(@h:S +*6=*W;?#MH]');
define('SECURE_AUTH_KEY', 'vCK=[&,eH`2_Wjd3h$V6eH:-HW#Arm*$IA&}H3O23J+FsJ=%Z^![e`!X9Duw4~,B');
define('LOGGED_IN_KEY', '3t,vUW>+83}|c5;7(<CYa,orix~1[5L!-FQB!Rp&fXtIr$Tczv{oTHV>b)A.8.^J');
define('NONCE_KEY', ' R(01=NK<S#r-1AOvWIqnf+-lb!Ej*G.&G~TXTFF-<lr^`TT~5b?TCbMZACB93K2');
define('AUTH_SALT', ' chCQD|bQxvJdPta{+u0~^j!o?0!_,lDxAPo)0[58iPUR=P1l9x[qlUl;8ccg31y');
define('SECURE_AUTH_SALT', '=aRZ b`sckpowp}#oTS`_qDEdqvN7spa8^^4=4Lo*#@ho1Xq,iW@H6juK4F[L%zl');
define('LOGGED_IN_SALT', 'w#@gep`?`WOb>#eHM:jcQr7p;u]T$8J4X{CfM8 rki<K._{&#ZW[*M>H{})M` kh');
define('NONCE_SALT', 'p~6hBTz%M%G1cw=l%^kVz/d[8EN#PS)8gGlDv:JNI!L8Em$#T:A2M|aXz)])TxC,');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('FS_METHOD', 'direct');
define('WP_DEBUG', false);
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '128M' );

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/BmeansB/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');