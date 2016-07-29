<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'contactimmo');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K=-.H>M,.1Q@_y^4OsN7mnqZVy`&{pfelQI;N&Scy^Q*|S6O&-R1f;U)1[nf@(p1');
define('SECURE_AUTH_KEY',  'gK!Q=d~#$B=Wbe0>.K5;(WS:0pbXW$OP$KdUQ3f]xa1flr@/TwB/E,y%WYyGL+n*');
define('LOGGED_IN_KEY',    '[rt;CH}7G~C~DPYim1HB$SH:0e`DWI)s$,hTON/O>>w5j<bnw>}:PdrK}^|].q|N');
define('NONCE_KEY',        'z7VE];W;YXS>I6:bmxF8?_-|$)oSj?WDq~h}KO,p%7/&#[96X2wbqw198(W~tCTY');
define('AUTH_SALT',        '6[nbCARAYIKjUBW[[,v[+>b|IN3LD:*vffeWIr]g &13`**rEa<e2T8l|^z+T;:^');
define('SECURE_AUTH_SALT', '.{k9Fp5bUQIV!gQEn1tJ-``/ip)7J58@yqB;KqMLBB ?1JpXTu@B^,c,7nDJ~M+J');
define('LOGGED_IN_SALT',   '4h nKd,g]|o;u;U#$[5KB4mC{TmH(];vA;wl{F2!1mF3|gO/nY-Y^:yb!]EC` w8');
define('NONCE_SALT',       'Y4f.PL+,JPHqX#B!r3VEMw@hCd2~U?K#~K),LN=>J^H`wp8vbIHF792AP?5zQ,|_');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'jo_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');