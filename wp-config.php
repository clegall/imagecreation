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
define( 'DB_NAME', 'wp_site1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'site1' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'H6#{6Mk+sS7t' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'u<G;B]X+!}O</@Qyo|rc(?gi@z4Gi)`6y|4dy$Ym[4c}]MQ{nvD=8=}^!,/I@Qv5');
define('SECURE_AUTH_KEY',  'M)w/_|x43e{J~>5%=~KJ>+JYC{b>~LS6H_3>DJZTjo)Jz=bs x@!w32G-}:-aOi(');
define('LOGGED_IN_KEY',    ',2:d]vf}(:%gFmPVl`dgWzKPk#*mDFAfD=;`R,-=skTSCDI42h=w%ni +U{ghzGN');
define('NONCE_KEY',        'hn[71ty,HDK]-KW1eU[w=A.XdyD?@Jb--Py-J_g+.3b{o9Da#,=KM.}G.G7#RH6>');
define('AUTH_SALT',        '+t=D5EQns!t}|pMsmuy:!nOUY&o9>VpPj)FXpb15/2MRi|]q(M0n71Y@y{&0@x$s');
define('SECURE_AUTH_SALT', ')wzN_u=7{5A5n<ux[r)U7^DodyKbs3RD)[ReHLXIrfQ(CuNB$=p~`Jo|P=ZJH|b7');
define('LOGGED_IN_SALT',   '7V0.4tPowS?+~+(SMnJ&&!3$KFD)vE7BjYKCk2Fg4W[eBGM{S`e^<PBbR0.2*J{W');
define('NONCE_SALT',       '6PrDd A[IqW%K;G^;m{@~Y+EsK]zl`|GR9|M?-ed+T/*g]]um)PzU!C-fzL#+0L=');
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
