<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'onepage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2l)$-YOGjoEY;?wL(qk%&oeoR=_,:Ua.m]#W$>ano}@+J WuiIg_%lU?wYRGTm4>' );
define( 'SECURE_AUTH_KEY',  'CX]L:*EtR^eud{uI27`]n0Yv5}iPd!qc<aaozp(|}M|W?Q}$7TqfjUYGv7@H(Jh8' );
define( 'LOGGED_IN_KEY',    '^2*,kTa0da|c{r|-&Xo#e ?;kqaG-1-ZMBETFVsd`@r}=K~XUWlwPc+bw^{i[1{I' );
define( 'NONCE_KEY',        'g,h~4G0pasz1?PV;9)H6-CX9.=yq j9st$ylcp.vdvR:rbwVIF<+6E{r.(h#eNe_' );
define( 'AUTH_SALT',        'nsuN.{hz1Ym/6PZ]^|Og4W~XDxeFD-.G?N=s qT*CD],tn!%%EbW:TV?2|]b>%X>' );
define( 'SECURE_AUTH_SALT', ' H[Vhrm`wAsX%h(,BN<FxhbHL=TJAWX.&vDY}mv@fABA n*xOw6QZoEyy`F;=]n+' );
define( 'LOGGED_IN_SALT',   'QzO//qtr3M(Z~[L| zPEXQQ!}qH:f%g=S&U<(yE{b}m+8gR184tS^>rc<5 uXMpP' );
define( 'NONCE_SALT',       'EOH<(MqQLn4Z,5uA9~8[n#a[.N0d4}%F(?6A~mjJm)b5jL5%eumWS>7)] {5U7C.' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
