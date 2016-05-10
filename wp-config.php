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
define('DB_NAME', 'sistemas_multimedia');

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
define('AUTH_KEY', '#3|:<!x|q!+![s3rFa8My]xZ(Fb,4S!vpKSc{9op ~ekP/|[|aihQv)QiFeJ_+k1');
define('SECURE_AUTH_KEY', '$AL)Y?P>(17`}+~y>jSN,0i7g..Ke|07p2oA=ysr#u0d|(m6<DL0=<oqq0gBhdjv');
define('LOGGED_IN_KEY', '*Zd,i(T[=>>ali9qazC/Bl;$k{A@vW,;?<38t rO}IV3CvOf3i&%_b+shN2/PVy`');
define('NONCE_KEY', 'dOPKInM+Y^C^mU:E41m>s<;sZO|/$-=au3PC!2,`xbHCU9cmy39nTW=XsV3?+]e7');
define('AUTH_SALT', 'm2-92^y6M?$6Fk>>Nn@x7`o*,u@*|prLb2-,gcecjLSW5mJy?W:1ag,^R*W[7&k:');
define('SECURE_AUTH_SALT', '=[)AvRyk>)3~NMJ<VkG$ifh>7n)1n<i1b`Fog*jN0$!K/Y,B?<FR;F! <AVox2?k');
define('LOGGED_IN_SALT', 'z4=550ThHAU5++jKnT7RuF~GvNjT v1iUw2L_nOVm*?+xD2!O^n6zaC>pb%3Fn-`');
define('NONCE_SALT', '^2uVSB)~hb{G;D&jx74jrLE/$s6B8mww749d}qCK+E|~.>2f)=M^~ZWsy*OhcU;y');

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
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

