<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'phare');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2%Hvm:1Cj[mo`@d(4unYy+jvs>Nyt.9u*O;,4t ofoDZ -DyRw?G#,m!lrJ8M*li');
define('SECURE_AUTH_KEY',  'Bv@#3+)h] N8/&V9Y/jR:ayMlddh$At+CAb>zHbhIe52dL}bbtZIaA|37Z|WhaTi');
define('LOGGED_IN_KEY',    'G=X%tvysjJyX7XikJf09DOuaR~cg<Ipmh<L:;b;X%dBUB[{Ssatt9chnV~72VClC');
define('NONCE_KEY',        'x`0KtX6OFRxx~ED%2wxUg_(XFxa2oXF;.CF&C46vC`im!cua4gd@XuB@B{1|r)dd');
define('AUTH_SALT',        'm]2?ea 5:j7Nl+5O))}9*l-Xy~tm`$HJ :D5XwjT6k`|7:-,@hT vQf9<NuW{>Ew');
define('SECURE_AUTH_SALT', 'x9jsS_n9B~H[vtQ2JY0EX@Id)yWk>|{ f/q0W(McFD!F+feCoy&GV_+RVdW1}h,t');
define('LOGGED_IN_SALT',   'N;(f>+<)M%wZ?|!yF/JE4!oinq~{DeF_KVSCDY~E.W!z}$NPT-7g);Yy/{M{t#U^');
define('NONCE_SALT',       '|lZ,MXfb7DCbAiWXify4Vm&+5S?ZhdC;KpWTT;K@VB&Dq7dwaiff&#4whR`veS]<');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');