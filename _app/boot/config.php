<?php


/**
 * DATABASE
 */

define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "foregon");


/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "p3plzcpnl487237.prod.phx3.secureserver.net");
define("CONF_MAIL_PORT", "465");
define("CONF_MAIL_USER", "noreply@aplicativo2.store");
define("CONF_MAIL_PASS", "UNd9+(V(NSKJ");
define("CONF_MAIL_SENDER", ["name" => "Equipe Foregon", "address" => "noreply@aplicativo2.store"]);
define("CONF_MAIL_SUPPORT", "noreply@aplicativo2.store");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "ssl");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");
