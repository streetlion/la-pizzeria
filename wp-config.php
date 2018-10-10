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
define('DB_NAME', 'lapizzeria');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', '|FEkDqlC(XE8OmiAp_Y+P,x3 P iHRhU}B_Fou(.cH+Q32|TIom~C#tU<wS?&OWl');
define('SECURE_AUTH_KEY', 'v0[XW1~~ZX?2U[:a7<A[u)UJC ]L~jKr<`|bWJzOQ2Pz0-G->GJw<7iEYWrmz/e9');
define('LOGGED_IN_KEY', 'i=)J=fu)W-[E(C}4UPb5nI@}l@`j7<:NTs1{9U}jw,P}CJ-:Nl1Ad!>Nl#>VrsC5');
define('NONCE_KEY', 'PCB6_0(wG9TNvY~X!ugOh7+W3Caa/s0f/gZ`#3kg +6@e:38x$ g<_K&pTL1BR7_');
define('AUTH_SALT', 'z}.0?9z^]}EC*8;k{z:_*b-!3Yc5Mb^m[_8qBmlj0O!=<Q]Prp*]=}J!-WKU>1gG');
define('SECURE_AUTH_SALT', '0Uq_h{>Yfpdg&pb/giii3t^ j0;S(;eEnAN$a)mUy>=JS|H$+c$j] )oP(#]J,]!');
define('LOGGED_IN_SALT', 'eOL(ereX(98MAto2y$NwG2dPIr:Wbwq6gCQB,I4PgFh<6EB59{B?]jdfz_dX,z/)');
define('NONCE_SALT', 'JibUYW/.C<XSv]~Ilx9923a$pbQsRkG*_SA-hry)1}?@Zc#F3B^A-]x?3Em_LYe*');

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
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
