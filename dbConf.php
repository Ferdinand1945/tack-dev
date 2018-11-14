<?php

/** MySQL Server / hostname .... optionally localhost*/
defined("DB_SERVER") ? null : define("DB_SERVER", "localhost");

/** MySQL Database to be Connect to*/
defined("DB_NAME") ? null: define("DB_NAME", "tack");

/** MySQL database username */
defined("DB_USER") ? null : define ("DB_USER", "dev");

/** MySQL database password */
defined("DB_PASSWORD") ? null : define ("DB_PASSWORD", "dev");

/** Database Charset to use in creating database tables. */
defined('DB_CHARSET') ? null : define('DB_CHARSET', 'utf8');

?>
