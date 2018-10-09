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
//define('DB_NAME', 'c0970285_wp2');
define('DB_NAME', 'c0970285_wp_4');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'c0970285_wp');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'wifo68foBO');

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
define('AUTH_KEY', 'S0Mhr-j3dA[/R4}:f};3A~+$zE=Rqn;-Ul$7,*3zD%ZN,&Jkn_z>1Gb`IqbG}{yf');
define('SECURE_AUTH_KEY', '/~9Y]H8m9p[zxhum*n*-Q `6w%`c7&Y/SMTe[eTH&ZTEv[Wvy/Um7T,g^w*T}i>8');
define('LOGGED_IN_KEY', ']]r![rqYa(BVcU^:aI]WSVDmfeVu(2)(D/sPZ7$vB[aDa)kW#NqUha-3i7k{4$Wq');
define('NONCE_KEY', '3AE}(m15!&<%TCRpA0Jc0o +F5<(K3YCvrMNOcW_2~a|m_,DB&,=9Wl4CQpB4sDx');
define('AUTH_SALT', 'V:)HAR:mOi<doFg|i<`q^a2u3idCMXuwJi?*$J8hEd[0Yy$6NO^H!}_nMUJwB<XY');
define('SECURE_AUTH_SALT', '6fnd#jU)fry5Q>1wc ,H7n6$Mh#wJbm.A!y`qeH;6@J)2L}d#XLa^wY_7XcQ`I<h');
define('LOGGED_IN_SALT', 'eUh0KJjdT.H&Z#TTV))9CPI;-^T0`W02%%0Hlml2W;Ld.@edc}qIUBx$X2)_Gp/:');
define('NONCE_SALT', 'trLY$}7S;P;|AA?wN8_Ne%m6O_Kr~Lh}(3o[+$%2-{,[cpDNI9ck#Rxw~5]uJrSl');

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'c0970285.ferozo.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* ¡Eso es todo, deja de editar! Feliz blogging */
/* Multisitio */
define ( 'WP_ALLOW_MULTISITE', true);

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * WordPress SMTP server
 */
 #define('WP_SMTP_HOST',       'mail.c0970285.ferozo.com');
 #define('WP_SMTP_PORT',       587);                                // obligatory - default: 25
 #define('WP_SMTP_ENCRYPTION', 'no encryption');                             // obligatory ('tls' or 'ssl') - default: no encryption
 #define('WP_SMTP_USER',       'contacto@c0970285.ferozo.com');                        // obligatory - default: no user
 #define('WP_SMTP_PASSWORD',   'TiendaCEES2018');                        // obligatory - default: no password
 #define('WP_SMTP_FROM',       'Tienda Cees Contacto <contacto@c0970285.ferozo.com>'); // obligatory - default: no custom from address

 #define('WP_SMTP_HOST',       'smtp.gmail.com');
 #define('WP_SMTP_PORT',       587);                                // obligatory - default: 25
 #define('WP_SMTP_ENCRYPTION', 'tls');                             // obligatory ('tls' or 'ssl') - default: no encryption
 #define('WP_SMTP_USER',       'celeweidmann');                        // obligatory - default: no user
 #define('WP_SMTP_PASSWORD',   '!');                        // obligatory - default: no password
 #define('WP_SMTP_FROM',       'Tienda Cees Contacto <celeweidmann@gmail.com>'); // obligatory - default: no custom from address

 #esto estaba 24/03
 #define('GLOBAL_SMTP_HOST','mail.c0970285.ferozo.com');
 #define('GLOBAL_SMTP_USER','contacto@c0970285.ferozo.com');
 #define('GLOBAL_SMTP_PASSWORD','TiendaCEES2018');
 #define('WP_SMTP_ENCRYPTION', 'no encryption');
 #define('WP_SMTP_FROM',       'Tienda Cees Contacto <contacto@c0970285.ferozo.com>');
 #define('GLOBAL_SMTP_PORT',587);
 #define('GLOBAL_SMTP_DISABLE',false);


 define('WPMS_ON', true);
 define('WPMS_MAIL_FROM', 'contacto@c0970285.ferozo.com');
 define('WPMS_MAIL_FROM_NAME', 'Tienda CEES');
 define('WPMS_MAILER', 'smtp'); // Possible values 'smtp', 'mail', or 'sendmail'
 define('WPMS_SET_RETURN_PATH', false); // Sets $phpmailer->Sender if true
 define('WPMS_SMTP_HOST', 'mail.c0970285.ferozo.com'); // The SMTP mail host
 define('WPMS_SMTP_PORT', 587); // The SMTP server port number
 #define('WPMS_SSL', ''); // Possible values '', 'ssl', 'tls' - note TLS is not STARTTLS
 define('WPMS_SMTP_AUTH', true); // True turns on SMTP authentication, false turns it off
 define('WPMS_SMTP_USER', 'contacto@c0970285.ferozo.com'); // SMTP authentication username, only used if WPMS_SMTP_AUTH is true
 define('WPMS_SMTP_PASS', 'TiendaCEES2018'); // SMTP authentication password, only used if WPMS_SMTP_AUTH is true
 //defino el tema por defecto
 define('WP_DEFAULT_THEME', 'emprendedor');


 #define('GLOBAL_SMTP_DEBUG',true);

 define('WP_DEBUG',true);
 define('WP_DEBUG_LOG',true);
 define('FS_METHOD', 'direct');
 
