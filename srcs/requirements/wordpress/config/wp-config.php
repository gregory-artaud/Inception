<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', getenv('DB_NAME') );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', getenv('DB_USER') );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', getenv('DB_HOST') );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7hFLD}o0s.2RlS/u;Sl/a#*un$4!G6xa/}rEwir{nZfKYl$0tpn-&zX,x$QwHHKX' );
define( 'SECURE_AUTH_KEY',  '!=Y/h>:iy~.Enj|.uG&RcH`+@JzcsNtrISQeW<{~Q,;D_]|w!0fm^L78iO4k<3U.' );
define( 'LOGGED_IN_KEY',    'nNbEZN3_RSo=im[fmi1(G=a;0;<88k*aoO7X4^ElVI~4MgJ%D;WO(u/vmP`bG<,(' );
define( 'NONCE_KEY',        '}~9.^_By:hH9yU>7Q8OERF$$^v%4U<i!C. B@3upnDNvIKpgCw.hPpOrrfI83}(K' );
define( 'AUTH_SALT',        '-F[&1 =R6-%}weho%Af:ztAv0`LA+(V(gh9!Tb^k?!D)K.&yCo_+6v,VWFJ4ntmo' );
define( 'SECURE_AUTH_SALT', 'E1>_>We([!IY.7q@F_GkJ*>dRu__%Vq<!SC;Vno]yl9w|uaLiM4m]o;NszdVFxYH' );
define( 'LOGGED_IN_SALT',   ':L8x008@Y&)){@Z~,N?j{ -v3)IOr(cCDKN+zWvKw7,;1GZB{vd_7U~EhuJ^}Fpj' );
define( 'NONCE_SALT',       'k_aTr6+if/}P[0w}lfaC]MWi*^VdrN+NqkNb>JFQgI~n&V |t%;#dC{5q OZW$I3' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
