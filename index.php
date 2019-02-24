<?php
ini_set('xdebug.var_display_max_depth', 10);
ini_set('xdebug.var_display_max_children', 256);
ini_set('xdebug.var_display_max_data', 1024);

ini_set('intl.default_locale', 'ru_RU');

define('ROOT_DIR', realpath(dirname(__FILE__)) . '/');
define('CONTENT_DIR', ROOT_DIR . 'content-sample/');
define('CONTENT_EXT', '.md');
define('LIB_DIR', ROOT_DIR . 'lib/');
define('PLUGINS_DIR', ROOT_DIR . 'plugins/');
define('THEMES_DIR', ROOT_DIR . 'themes/');

define('CACHE_LEVEL', 1); // 0 - disable, 1 - data, 2 - full page
$CACHE_EXCLUDE = array("admin", "contact"); // 0 - disable, 1 - data, 2 - full page
define('CACHE_TYPE', 'xcache'); //xcache or file (Hoard)
define('CACHE_DIR', LIB_DIR . 'cache/');
define('CACHE_TIME', 60); //in minutes
define('CACHE_XCACHE_ADMIN', 'admin');
define('CACHE_XCACHE_PASSWD', '1234567890');

require_once(ROOT_DIR . 'vendor/autoload.php');
//require_once(LIB_DIR . 'pico.php');
$pico = new Pico();
