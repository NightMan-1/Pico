<?php
/**
 * Pico Configuration
 *
 *  This is the configuration file for Pico. It comes loaded with the
 *  default values, which can be found in the get_config() method of
 *  the Pico class (lib/pico.php).
 *
 * @author Gilbert Pellegrom
 * @link http://picocms.org
 * @license http://opensource.org/licenses/MIT
 * @version 0.9
 *
 * To override any of the default settings below, uncomment the line,
 * make and save the changes, then rename this file to `config.php`
 */

/*
 * BASIC
 */
$config['site_title'] = 'Pico';              // Site title
$config['site_author'] = 'Site author';              // Site author
$config['site_admin_email'] = 'info@example.com';
// $config['base_url'] = '';                    // Override base URL (e.g. http://example.com)


/*
 * This should be a sha1 hash of your password.
 * Use a tool like http://www.sha1-online.com to generate.
 */
$config['admin_pass'] = '01b307acba4f54f55aafc33bb06bbbf6ca803e9a';              //1234567890


/*
 * THEME
 */
//$config['theme'] = 'default';                // Set the theme (defaults to "default")
//$config['theme'] = 'pico-bootstrap-master';
$config['theme'] = 'flat-theme';
$config['twig_config'] = array(              // Twig settings
    //'cache' => "lib/twig_cache",	                        // To enable Twig caching change this to CACHE_DIR
    'cache' => false,	                        // To enable Twig caching change this to CACHE_DIR
	'autoescape' => false,                      // Autoescape Twig vars
	'debug' => false                            // Enable Twig debug
);

/* reCAPTCHA for contact page */
/* API Key - https://www.google.com/recaptcha/admin */
$config['reCAPTCHA'] = array(
	'siteKey' => "123",
	'secret' => "123",
	'lang' => "ru"

);


/*
 * CONTENT
 */
$config['date_format'] = '%d %b %Y %X';             // Set the PHP date format as described here: http://php.net/manual/en/function.strftime.php
$config['pages_order_by'] = 'alpha';           // Order pages by "alpha" or "date"
$config['pages_order'] = 'asc';                // Order pages "asc" or "desc"
$config['excerpt_length'] = 50;                // The pages excerpt length (in words)
$config['content_dir'] = 'content/';    // Content directory

$config['download_url'] = 'dl'; // default: download
$config['download_folder'] = 'content/dl/'; // default: content/download/


//compress HTML
$config['minifier'] = true;


/*
 * TIMEZONE
 */
// date_default_timezone_set('UTC');              // Timezone may be reqired by your php install

/*
 * CUSTOM
 */
// $config['custom_setting'] = 'Hello';           // Can be accessed by {{ config.custom_setting }} in a theme

// Keep this line
return $config;