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
define( 'DB_NAME', 'testwp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Sl_%Y;`F~TO3L3=6{^4EOD_KV:6YN<t1ss(R8ivu!cw6AViRl14=]k|}2D6!!Y&D' );
define( 'SECURE_AUTH_KEY',  'Q0M;#IGu2|G]kS;a#5#iGuFbd!A(oM;k[hnQ>)DMoB_?<P8ZY@>r_wdfq9hU!I3-' );
define( 'LOGGED_IN_KEY',    'F ~vsLg]eP2,k,IbGb:#GXpiXTx`srK^hwd+N7iz6`8|J7}(0?!A9`O2c, tqg=h' );
define( 'NONCE_KEY',        'Ss$6wsS_%^S:}XhMj#-P&Y7y3R1:-~$[T6m%%5ONm3(ldtYZE]5R(YJ__9*n]%.c' );
define( 'AUTH_SALT',        'Lqn/^ Qdpd:+^YSBU6.sUB~H4:6Uau.s5.E`rrT588jdO>*PGjFKh+C o`CS;3sp' );
define( 'SECURE_AUTH_SALT', '6cjG`EE0kO4`D&:+Y)Wp@kh@zO*5*BaNw>kD!rdF-OH41aSLGIfI1BecinckmRN&' );
define( 'LOGGED_IN_SALT',   '$&*EM$yR$8bB`!<5lgyWA^I*_{#&TCW3)?iWd}`r*LnLksn`0G~_YR&3PiB&b?sK' );
define( 'NONCE_SALT',       '+MIUCD6d|,v04Q!!~F:i0!UZGGMnf>s^>i0|.>B:sy23:W`?^<Ye&!Tf>+!`LlgM' );
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

