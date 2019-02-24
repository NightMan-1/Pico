<?php

/**
 * Pico
 *
 * @author Gilbert Pellegrom
 * @link http://picocms.org
 * @license http://opensource.org/licenses/MIT
 * @version 0.8
 */
class Pico
{

    private $config;
    private $plugins;
    private $page_navigation = array();
    private $cache;
    private $cache_type;
    private $cache_key;



    /**
     * The constructor carries out all the processing in Pico.
     * Does URL routing, Markdown processing and Twig processing.
     */
    public function __construct()
    {
        //cache load
        //$scheme://$host$request_uri
        $this->cache_key = strtok($this->get_protocol() . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],'?');
        //var_dump($this->cache_key);
        if ($this->test_cache() && CACHE_LEVEL > 1 && $this->check_cache($this->cache_key)) {
            #TODO
            //header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
            //header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            //header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
            //header("Pragma: no-cache");
            header("Cache-Control: max-age=86400, private, must-revalidate"); //86400 = one day
            echo($this->cache_get($this->cache_key));
            //echo '<!--TEST-->';
            exit;
        }

        // Load plugins
        $this->load_plugins();
        $this->run_hooks('plugins_loaded');

        // Load the settings
        $settings = $this->get_config();
        $this->run_hooks('config_loaded', array(&$settings));

        // Get request url and script url
        $url = '';
        $request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
        $script_url = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';


        // Get our url path and trim the / of the left and the right
        if ($request_url != $script_url) {
            $url = trim(preg_replace('/' . str_replace('/', '\/', str_replace('index.php', '', $script_url)) . '/', '',
                $request_url, 1), '/');
        }
        $url = preg_replace('/\?.*/', '', urldecode($url)); // Strip query string
        $this->run_hooks('request_url', array(&$url));

        // Get the file path
        if ($url) {
            $file = $settings['content_dir'] . $url;
        } else {
            $file = $settings['content_dir'] . 'index';
        }

        $this->run_hooks('before_load_content', array(&$file));
        // Load the file
        if (is_dir($file)) {
            $file = $settings['content_dir'] . $url . '/index';
            if (is_file($file.".html")){$file.=".html"; $content_type = 'html';}
            else{$file.=CONTENT_EXT; $content_type = CONTENT_EXT;}
        } else {
            if (is_file($file.".html")){$file.=".html"; $content_type = 'html';}
            else{$file.=CONTENT_EXT; $content_type = CONTENT_EXT;}
        }
        if (file_exists($file)) {
            $content = file_get_contents($file);
        } else {
            $this->run_hooks('before_404_load_content', array(&$file));
            $content = file_get_contents($settings['content_dir'] . '404.html');
            $content_type = 'html';
            header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
            $this->run_hooks('after_404_load_content', array(&$file, &$content));
        }

        $this->run_hooks('after_load_content', array(&$file, &$content));

        $meta = $this->read_file_meta($content, $content_type);
        $this->run_hooks('file_meta', array(&$meta));

        $this->run_hooks('before_parse_content', array(&$content));
        $content = $this->parse_content($content, $content_type);
        $this->run_hooks('after_parse_content', array(&$content));
        $this->run_hooks('content_parsed', array(&$content)); // Depreciated @ v0.8

        // Get all the pages
        $pages = $this->get_pages($settings['base_url'], $settings['pages_order_by'], $settings['pages_order'],
            $settings['excerpt_length']);
        $prev_page = array();
        $current_page = array();
        $next_page = array();
        while ($current_page = current($pages)) {
            if (($settings['base_url'].$_SERVER['REQUEST_URI'] == $current_page['url']) ||
                ((isset($meta['title'])) && ($meta['title'] == $current_page['title']))){ // error when duplicate pages titl
                break;
            }
            next($pages);
        }
        $prev_page = next($pages);
        prev($pages);
        $next_page = prev($pages);
        $this->run_hooks('get_pages', array(&$pages, &$current_page, &$prev_page, &$next_page));

        // Load the theme
        $this->run_hooks('before_twig_register');
        $loader = new Twig_Loader_Filesystem(THEMES_DIR . $settings['theme']);
        $twig = new Twig_Environment($loader, $settings['twig_config']);
        //if (strstr($_SERVER['REQUEST_URI'], 'flushcache=true')){$twig->clearCacheFiles(); $twig->clearTemplateCache();}
        $twig->addExtension(new Twig_Extension_Debug());
	    $twig->addExtension(new Twig_Extensions_Extension_Intl());
        $twig->addExtension(new Twig_Extensions_Extension_Text());
        $twig->addExtension(new Twig_Extensions_Extension_I18n());
        $twig->addExtension(new Twig_Extensions_Extension_Array());

        $twig_vars = array(
            'config' => $settings,
            'base_dir' => rtrim(ROOT_DIR, '/'),
            'base_url' => $settings['base_url'],
            'theme_dir' => THEMES_DIR . $settings['theme'],
            'theme_url' => $settings['base_url'] . '/' . basename(THEMES_DIR) . '/' . $settings['theme'],
            'site_title' => $settings['site_title'],
            'site_author' => $settings['site_author'],
            'meta' => $meta,
            'content' => $content,
            'pages' => $pages,
            'prev_page' => $prev_page,
            'current_page' => $current_page,
            'next_page' => $next_page,
            'is_front_page' => $url ? false : true,
            'page_navigation' => $this->page_navigation,
        );

        //filter by tags for page pagination
        if (isset($_REQUEST['tag']) && !empty($_REQUEST['tag'])){
            $tag = htmlspecialchars(trim($_REQUEST['tag']));
            $twig_vars['filter'] = array('url' => "&tag=".$tag, "name" => $tag);
        }


        $template = (isset($meta['template']) && $meta['template']) ? $meta['template'] : 'index';
        $this->run_hooks('before_render', array(&$twig_vars, &$twig, &$template, &$loader));
        $output = $twig->render($template . '.html', $twig_vars);
        $this->run_hooks('after_render', array(&$output));

        //minifier
        if ($settings['minifier']){
            //$parser = \WyriHaximus\HtmlCompress\Factory::construct();
            //$output = $parser->compress($output);
            #TODO
            $output = $this->minify_html($output);

        }


        //cache save
        if (CACHE_LEVEL > 1) { $this->cache_put($this->cache_key, $output);}

        echo $output;
        #TODO
        //global $start_time;
        //echo '<!--This page was generated in ' .(number_format(microtime(true) - $start_time, 2)) .' seconds.<br>-->';
    }

    /**
     * Load any plugins
     */
    protected function load_plugins()
    {
        $this->plugins = array();
        $plugins = $this->get_files(PLUGINS_DIR, '.php');
        if (!empty($plugins)) {
            foreach ($plugins as $plugin) {
                include_once($plugin);
                $plugin_name = preg_replace("/\\.[^.\\s]{3}$/", '', basename($plugin));
                if (class_exists($plugin_name)) {
                    $obj = new $plugin_name;
                    $this->plugins[] = $obj;
                }
            }
        }
    }

    /**
     * Parses the content using Parsedown-extra
     *
     * @param string $content the raw txt content
     * @return string $content the Markdown formatted content
     */
    protected function parse_content($content, $content_type=CONTENT_EXT)
    {
        $content_type=ltrim ($content_type, '.');
        if ($content_type == 'html'){
            #$dom = new PHPHtmlParser\Dom;
            #$dom->load($content);
            #$a = $dom->getElementsByTag('body')[0];
            #$content = $a->outerHtml;
            $content = preg_replace('/(.*?)<body(.*?)>/s', '', $content);
            $content = preg_replace('/<\/body>(.*?)$/s', '', $content);
            $content = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $content);
        }else {
            $content = preg_replace('#/\*.+?\*/#s', '', $content, 1); // Remove first comment (with meta)
            $content = str_replace('%base_url%', $this->base_url(), $content);
            $Parsedown = new ParsedownExtra();
            $content = $Parsedown->text($content);
        }
        return $content;
    }

    /**
     * Parses the file meta from the txt file header
     *
     * @param string $content the raw txt content
     * @return array $headers an array of meta values
     */
    protected function read_file_meta($content, $content_type=CONTENT_EXT)
    {
        $content_type=ltrim ($content_type, '.');
        $config = $this->config;

        #TODO добавить категории для блока + теги  ...
        $headers = array(
            'title' => 'Title',
            'description' => 'Description',
            'author' => 'Author',
            'date' => 'Date',
            'robots' => 'Robots',
            'template' => 'Template',
            'navtitle' => 'NavTitle',
            'navhidden' => 'NavHidden',
            'navorder' => 'NavOrder',
            'thumbsmall' => 'ThumbSmall',
            'thumbbig' => 'ThumbBig',
            'pagetype' => 'PageType',
            'tags' => 'Tags',

        );

        // Add support for custom headers by hooking into the headers array
        $this->run_hooks('before_read_file_meta', array(&$headers));

        if ($content_type == 'html'){
            foreach ($headers as $field => $regex) {
                //if (preg_match('/^[ \t\/*#@]*<meta name="' . preg_quote($field, '/') . '"[ \t\/*#@]*content=["|\'](.*?)["|\']$/mi', $content, $match) && $match[1]) {
                if (preg_match('/<meta name=["\']' . preg_quote($field, '/') . '["\'][ \t\/*#@]*content=["|\'](.*?)["|\']/mi', $content, $match) && $match[1]) {
                    $headers[$field] = trim(preg_replace("/\s*(?:\*\/|\?>).*/", '', $match[1]));
                } else {
                    $headers[$field] = '';
                }
            }
            if (preg_match('/<title>(.*?)<\/title>/mi', $content, $match) && $match[1]) {
                $headers['title'] = trim(preg_replace("/\s*(?:\*\/|\?>).*/", '', $match[1]));
            } else {
                $headers['title'] = '';
            }
        }else {
            foreach ($headers as $field => $regex) {
                if (preg_match('/^[ \t\/*#@]*' . preg_quote($regex, '/') . ':(.*)$/mi', $content, $match) && $match[1]) {
                    $headers[$field] = trim(preg_replace("/\s*(?:\*\/|\?>).*/", '', $match[1]));
                } else {
                    $headers[$field] = '';
                }
            }
        }

        if (isset($headers['date'])) {
            $headers['date_formatted'] = utf8_encode(strftime($config['date_format'], strtotime($headers['date'])));
        }

        return $headers;
    }

    /**
     * Loads the config
     *
     * @return array $config an array of config values
     */
    protected function get_config()
    {

        $this->config = @include_once(ROOT_DIR . 'config.php');

        $defaults = array(
            'site_title' => 'Pico',
            'site_author' => 'Pico',
            'base_url' => $this->base_url(),
            'theme' => 'default',
            'date_format' => '%D %T',
            'twig_config' => array('cache' => false, 'autoescape' => false, 'debug' => false, 'auto_reload' => true),
            'pages_order_by' => 'alpha',
            'pages_order' => 'asc',
            'excerpt_length' => 50,
            'content_dir' => 'content-sample/',
        );

        if (is_array($this->config)) {
            $this->config = array_merge($defaults, $this->config);
        } else {
            $this->config = $defaults;
        }

        return $this->config;
    }

    /**
     * Get a list of pages
     *
     * @param string $base_url the base URL of the site
     * @param string $order_by order by "alpha" or "date"
     * @param string $order order "asc" or "desc"
     * @return array $sorted_pages an array of pages
     */
    protected function get_pages($base_url, $order_by = 'alpha', $order = 'asc', $excerpt_length = 50)
    {
        $config = $this->config;

        global $file_info;
        $pages = $this->get_files($config['content_dir'], '('.CONTENT_EXT.'|.html)');


        if (CACHE_LEVEL > 0) {
            global $file_info;
            if (isset($_SERVER['QUERY_STRING'])){ $cache_key = md5(serialize($file_info).serialize($_SERVER['QUERY_STRING']));
            }else{$cache_key = md5(serialize($file_info));}
            if ($this->check_cache($cache_key . "_data") && $this->check_cache($cache_key . "_nav")) {
                $this->page_navigation = unserialize($this->cache_get($cache_key . "_nav"));
                return unserialize($this->cache_get($cache_key . "_data"));
            }
        }

        $sorted_pages = array();
        $date_id = 0;
        foreach ($pages as $key => $page) {
            // Skip 404
            if (basename($page) == '404.html') {
                unset($pages[$key]);
                continue;
            }

            // Ignore Emacs (and Nano) temp files
            if (in_array(substr($page, -1), array('~', '#'))) {
                unset($pages[$key]);
                continue;
            }

            // Get title and format $page
            if (preg_match('/\.html/mi', $page, $match)) {$content_type = '.html';}
            else {$content_type = CONTENT_EXT;}
            $page_content = file_get_contents($page);
            $page_meta = $this->read_file_meta($page_content, $content_type);
            $page_content = $this->parse_content($page_content, $content_type);
            $url = str_replace($config['content_dir'], $base_url . '/', $page);
            $url = str_replace('index' . CONTENT_EXT, '', $url);
            $url = str_replace('index.html', '', $url);
            $url = str_replace($content_type, '', $url);
            $file = substr($page, strlen($config['content_dir']));
            $data = array(
                'title' => isset($page_meta['title']) ? $page_meta['title'] : '',
                'url' => $url,
                'file' => $file,
                'author' => isset($page_meta['author']) ? $page_meta['author'] : '',
                'date' => isset($page_meta['date']) ? $page_meta['date'] : '',
                'date_formatted' => isset($page_meta['date']) ? utf8_encode(strftime($config['date_format'],
                    strtotime($page_meta['date']))) : '',
                'content' => $page_content,
                'excerpt' => $this->limit_words(strip_tags($page_content), $excerpt_length),
                //this addition allows the 'description' meta to be picked up in content areas... specifically to replace 'excerpt'
                'description' => isset($page_meta['description']) ? $page_meta['description'] : '',
                'template' => !empty($page_meta['template']) ? $page_meta['template'] : 'index',
                'pagetype' => !empty($page_meta['pagetype']) ? $page_meta['pagetype'] : '',
                'thumbsmall' => !empty($page_meta['thumbsmall']) ? $page_meta['thumbsmall'] : '',
                'thumbbig' => !empty($page_meta['thumbbig']) ? $page_meta['thumbbig'] : '',
                'content_type' => preg_match('/\.html/mi', $file) ? '.html' : CONTENT_EXT,
                'tags' => array_map('trim', array_filter(explode(",", $page_meta['tags']))),
                'meta' => $page_meta,
            );
            if ($page_meta['pagetype'] == 'infoblock-page'){
                $c = explode ('/', $file);
                if (count($c)>1){$data['category'] = $c[0];}
            }

            // Extend the data provided with each page by hooking into the data array
            $this->run_hooks('get_page_data', array(&$data, $page_meta));

            //filter by tag
            if (isset($_REQUEST['tag']) && !empty($_REQUEST['tag']) && $data['pagetype'] == 'infoblock-page' && !in_array($_REQUEST['tag'], $data['tags'])){
                continue;
            }

            if ($order_by == 'date' && isset($page_meta['date'])) {
                $sorted_pages[$page_meta['date'] . $date_id] = $data;
                $date_id++;
            } else {
                $sorted_pages[$page] = $data;
            }

            /* extended navigation */
            $turl = explode('/', substr($page, strlen($config['content_dir'])));
            $ttitle = $page_meta['navtitle'] ? $page_meta['navtitle'] : $data['title'];
            $tnavorder = $page_meta['navorder'] ? (int)$page_meta['navorder'] : 0;
            if (!preg_match('/(true|1|on|yes)/mi', $page_meta['navhidden']) && $page_meta['pagetype'] != 'infoblock-page') {
                if (count($turl) > 1) {
                    if (preg_replace('/' . $content_type . '$/mi', '', $turl[1]) == 'index') {
                        $navigation[$config['content_dir'] . $turl[0]] = array('title' => $ttitle, 'url' => $url, 'order'=>$tnavorder);
                    } else {
                        $navigation[$config['content_dir'] . $turl[0]]['sub'][$turl[1]] = array('title' => $ttitle, 'url' => $url, 'order'=>$tnavorder);
                    }
                } else {
                    $navigation[$page] = array('title' => $ttitle, 'url' => $url, 'order'=>$tnavorder);

                }
            }
        }

        /* extended navigation sorting */
        foreach ($navigation as $key => $row) {
            $navorder[$key]  = isset($row['order']) ? $row['order'] : 0;
            if (isset($row['sub'])) {
                $subnavorder = array();
                foreach ($navigation[$key]['sub'] as $subkey => $subrow) {
                    $subnavorder[$subkey]  = $subrow['order'];
                }
                array_multisort($subnavorder, SORT_ASC, $navigation[$key]['sub']);
            }
        }
        array_multisort($navorder, SORT_ASC, $navigation);
        $this->page_navigation = $navigation;

        if ($order == 'desc') {
            krsort($sorted_pages);
        } else {
            ksort($sorted_pages);
        }

        //save pages cache
        if (CACHE_LEVEL > 0) {
            $this->cache_put($cache_key."_nav", serialize($navigation));
            $this->cache_put($cache_key."_data", serialize($sorted_pages));
        }

        //var_dump($sorted_pages);
        return $sorted_pages;
    }

    /**
     * Processes any hooks and runs them
     *
     * @param string $hook_id the ID of the hook
     * @param array $args optional arguments
     */
    protected function run_hooks($hook_id, $args = array())
    {
        if (!empty($this->plugins)) {
            foreach ($this->plugins as $plugin) {
                if (is_callable(array($plugin, $hook_id))) {
                    call_user_func_array(array($plugin, $hook_id), $args);
                }
            }
        }
    }

    /**
     * Helper function to work out the base URL
     *
     * @return string the base url
     */
    protected function base_url()
    {
        $config = $this->config;

        if (isset($config['base_url']) && $config['base_url']) {
            return $config['base_url'];
        }

        $url = '';
        $request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
        $script_url = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';
        if ($request_url != $script_url) {
            $url = trim(preg_replace('/' . str_replace('/', '\/', str_replace('index.php', '', $script_url)) . '/', '',
                $request_url, 1), '/');
        }

        $protocol = $this->get_protocol();

        return rtrim(str_replace($url, '', $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']), '/');
    }

    /**
     * Tries to guess the server protocol. Used in base_url()
     *
     * @return string the current protocol
     */
    protected function get_protocol()
    {
        $protocol = 'http';
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' && $_SERVER['HTTPS'] != '') {
            $protocol = 'https';
        }

        return $protocol;
    }

    /**
     * Helper function to recusively get all files in a directory
     *
     * @param string $directory start directory
     * @param string $ext optional limit to file extensions
     * @return array the matched files
     */
    protected function get_files($directory, $ext = '')
    {
        global $file_info;
        $array_items = array();
        if ($handle = opendir($directory)) {
            while (false !== ($file = readdir($handle))) {
                if (in_array(substr($file, -1), array('~', '#'))) {
                    continue;
                }
                if (preg_match("/^(^\.)/", $file) === 0) {
                    if (is_dir($directory . "/" . $file)) {
                        $array_items = array_merge($array_items, $this->get_files($directory . "/" . $file, $ext));
                    } else {
                        $file = $directory . "/" . $file;
                        //if (!$ext || strstr($file, $ext)) {
                        if (!$ext || preg_match('/'.$ext.'$/', $file )) {
                            $fname = preg_replace("/\/\//si", "/", $file);
                            $array_items[] =$fname;
                            $current_file_info = new SplFileInfo($file);
                            $file_info[$fname] = array('time' => $current_file_info->getMTime(), 'size' => $current_file_info->getSize());
                        }
                    }
                }
            }
            closedir($handle);
        }

        return $array_items;
    }

    /**
     * Helper function to limit the words in a string
     *
     * @param string $string the given string
     * @param int $word_limit the number of words to limit to
     * @return string the limited string
     */
    protected function limit_words($string, $word_limit)
    {
        $words = explode(' ', $string);
        $excerpt = trim(implode(' ', array_splice($words, 0, $word_limit)));
        if (count($words) > $word_limit) {
            $excerpt .= '&hellip;';
        }

        return $excerpt;
    }

    //check cache excluded URL
    protected function test_cache(){
        if (CACHE_LEVEL == 0){return false;}
        global $CACHE_EXCLUDE;
        foreach ($CACHE_EXCLUDE as $F){
            if (strstr($_SERVER['REQUEST_URI'], $F)){
                return false;
            }
        }
        if (CACHE_TYPE == 'file'){
            $this->cache  = new Hoard\Hoard($drawer = 'file', $options = ['cache_dir' => CACHE_DIR], $args = []);
            $this->cache_type = 'file';
            if (strstr($_SERVER['REQUEST_URI'], 'flushcache=true') || (isset($_COOKIE["CACHE_ENABLE"]) && $_COOKIE["CACHE_ENABLE"] != 'True')){
                $this->cache->flush();
                return false;
            }
        }elseif (CACHE_TYPE == 'memcached' && in_array('memcached', get_loaded_extensions())){
            $memcahce_server = explode(":", CACHE_MEMCACHE_SERVER);
            if (!$this->cache){
                $this->cache = new Memcached();
                $this->cache->addServer($memcahce_server[0], $memcahce_server[1]);
            }
            if ($this->cache == False){
                return false;
            }
            //$this->cache->setCompressThreshold(9999999999999999, 0.2);
            $this->cache_type = 'memcached';
            //var_dump($this->cache->getExtendedStats());
            if (strstr($_SERVER['REQUEST_URI'], 'flushcache=true') || (isset($_COOKIE["CACHE_ENABLE"]) && $_COOKIE["CACHE_ENABLE"] != 'True')){
                $this->cache->flush();
                return false;
            }


        }
        return true;
    }

    //get data from cache .... data already checked before this request
    protected function cache_get($key){
        if ($this->cache_type == 'file'){
            return $this->cache->get(md5($key), $default = null);
        }elseif($this->cache_type == 'memcached'){
            //return $this->cache->get(md5($key));
            return $this->cache->get($key);
        }
        return false;
    }

    //check data in cache
    protected function check_cache($key){
        if ($this->cache_type == 'file' && $this->cache->has(md5($key))){
            return true;
        }elseif($this->cache_type == 'memcached' && $this->cache->get($key)){
            return true;
        }
        return false;
    }

    //store data to cache
    protected function cache_put($key, $data)
    {
        if ($this->cache_type == 'file'){
            $this->cache->put(md5($key), $data, CACHE_TIME);
        }elseif($this->cache_type == 'memcached'){
            $this->cache->set($key, $data, CACHE_TIME*60);
            //var_dump($this->cache->getResultCode());
        }else{
            return false;
        }

        if (!isset($_COOKIE["CACHE_ENABLE"])) {
            setcookie("CACHE_ENABLE", "True", time() + 3600, "/", $_SERVER['HTTP_HOST'], isset($_SERVER["HTTPS"]), true);
        }
        return true;
    }

    //minifier
    protected function minify_html($d) {
        $d = str_replace(array(chr(9), chr(10), chr(11), chr(13)), ' ', $d);
        $d = preg_replace('`<\!\-\-.*\-\->`U', ' ', $d);
        $d = preg_replace('/[ ]+/', ' ', $d);
        $d = str_replace('/i> <span', 'msdfkjwye09i34oieqw', $d);
        $d = str_replace('> <', '><', $d);
        $d = str_replace('msdfkjwye09i34oieqw','/i> <span', $d);
        return $d;
    }

}
