<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'wordpress');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'root');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         '(R/SJ{JB,i<-BA^<[W.4||zJ3K0Z-`ti?W1UZ>FY~?[VFQ2q&9O^8.V@&nk;#8|4');
define('SECURE_AUTH_KEY',  'S!iw4knJ2 !350`Xx)FXO+*e-R/Pz$[Bh1Wl5St?,w4ef+-L?f7!OrDGR#.6|`pW');
define('LOGGED_IN_KEY',    'UCnEohdB+7RxpzVKwVO=Yo4p>i[Mw~dgkryQ(+^wiMFY5/=%lwyFZfmH^/<!sF=j');
define('NONCE_KEY',        '/%`6iaF8.-i#V+KS28WO|IG0u0yo+G,_33izGPAMsg`ldLlCo[?]L}+-0W16h+Q2');
define('AUTH_SALT',        'm@jg<0$TH`mpi^|oH(YYj2lZH_wfY3l#;+[BU<[5mew(ATCO~4L$q?K+CM[MK`>7');
define('SECURE_AUTH_SALT', '?qf6>mEK/6cI3fzolxu^KI4^^OS,Pk(,ZA@$#U:OBs$4[bc-`IR=>Jw$^AsD-?S$');
define('LOGGED_IN_SALT',   'lX!_6||(()-Ay6wSyM|;~8oFu)a!xY:Y6VP`{8dT73#G|v53|_?5+,PmR,|$(pd-');
define('NONCE_SALT',       'D|<Im[#~Lnq`Rm~6XR.e*-3p7CRNK1`o$W1yUW_6eVj-qPgSyh/`S+ -<[HR-lVp');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
