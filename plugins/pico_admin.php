<?php

/**
 * Editor plugin for Pico
 *
 * @author Gilbert Pellegrom
 * @link http://pico.dev7studios.com
 * @license http://opensource.org/licenses/MIT
 * @version 1.1
 */
class Pico_Admin {

	private $is_admin;
	private $is_logout;
	private $plugin_path;
	private $template_path;
	private $password;
	private $config = array();
	private $files_tree = array();

	public function __construct()
	{
		$this->is_admin = false;
		$this->is_logout = false;
		$this->plugin_path = dirname(__FILE__);
		$this->template_path = ROOT_DIR."/lib/pico_admin/templates";
		$this->password = '';
		session_start();
	}

	public function config_loaded(&$settings)
	{
		$this->config = $settings;
		$this->password = $settings['admin_pass'];
	}

	public function request_url(&$url)
	{
		$this->config['url'] = $url;
		// Are we looking for /admin?
		if (preg_match('/^admin/', $url)){$this->is_admin = true;}
		if($url == 'admin/logout') $this->is_logout = true;
	}
	
	public function before_render(&$twig_vars, &$twig, &$template, &$loader)
	{
		if($this->is_logout){
			session_destroy();
			header('Location: '. $twig_vars['base_url'] .'/admin');
			exit;
		}
		
		if($this->is_admin){
			$loader->addPath($this->template_path, 'admin');
			$config = $this->config;

			header("HTTP/1.0 200 OK");

			if(!$this->password){
				$twig_vars['login_error'] = 'No password set for the Pico Editor.';
				$template = '@admin/login';
				return;
			}

			if(!isset($_SESSION['pico_logged_in']) || !$_SESSION['pico_logged_in']){
				if(isset($_POST['password'])){
					if(sha1($_POST['password']) == $this->password){
						$_SESSION['pico_logged_in'] = true;
					} else {
						$twig_vars['login_error'] = 'Invalid password.';
						$template = '@admin/login';
						return;
					}
				} else {
					$template = '@admin/login';
					return;
				}
			}

			$twig_vars['files_tree'] = $this->files_tree;

			if (isset($_SERVER['QUERY_STRING'])){
				$twig_vars['flush_cache_url'] = strtok($_SERVER["REQUEST_URI"],'?') ."?" . $_SERVER['QUERY_STRING'] . '&flushcache=true';
			}else{
				$twig_vars['flush_cache_url'] = strtok($_SERVER["REQUEST_URI"],'?') . '?flushcache=true';
			}


			if($this->config['url'] == 'admin') {
				$twig_vars['server'] = array(
					'phpversion' => phpversion(),
					'memory' => $this->convert(memory_get_usage(true)),
					'memory_max' => $this->convert(memory_get_peak_usage(true)),
					'memcached' => in_array('memcached', get_loaded_extensions()) ? '<span class="text-success">yes</span>' : '<span class="text-danger">no</span>',
					'cache_enable' => CACHE_LEVEL > 0 ? '<span class="text-success">yes</span> (' . CACHE_TYPE . ')' : '<span class="text-danger">no</span>',
					'cache_enable_menu' => CACHE_LEVEL > 0 ? true : false,
				);

				$twig_vars['menu'] = 'dashboard';
				$template = '@admin/index';
				return;
			}elseif ($this->config['url'] == 'admin/pages'){
				if (isset($_REQUEST['pagesdata'])){
					#TODO
					$pagesdata = json_decode($_REQUEST['pagesdata'], TRUE)[0];

					function parcePadesData($data, $root, $config){
						foreach ($data as $page){
							$dir = dirname($page['name']);
							if (isset($page['children']) && !empty($page['children'][0])){
								parcePadesData($page['children'][0], $dir, $config);
							}
							if ($dir == $root ){
								True;
							}else{
								$f = explode("/", $page['name']);
								if (count($f) > 1 && (preg_match('/^index\.(md|html)/i', basename($page['name'])))){
									True;
								}else { //move
									$newName = $config['content_dir']. $root."/". basename($page['name']);
									if (!file_exists($newName)){
										rename($config['content_dir']. $page['name'], $newName);
									}
								}
							}
						}

					}
					parcePadesData($pagesdata, '.', $config);

					//var_dump($pagesdata);
					//exit;
					header('Location: /admin/pages'); //flush data cache
					exit;
				}elseif (isset($_REQUEST['delete']) && file_exists($config['content_dir'].$_REQUEST['delete'])){
					unlink($config['content_dir'].$_REQUEST['delete']);
					header('Location: /admin/pages'); //flush data cache
					exit;
				}
				$twig_vars['menu'] = 'pages';
				$template = '@admin/pages';

				return;
			}elseif ($this->config['url'] == 'admin/new'){
				//создаем новый файл или директорию
				if (isset($_REQUEST['pageTitle']) && !empty($_REQUEST['pageTitle']) &&
						isset($_REQUEST['pageFileName']) && !empty($_REQUEST['pageFileName'])){
					$title = trim($_REQUEST['pageTitle']);
					$file = str_replace(" ", "_", trim($_REQUEST['pageFileName']));

					if (isset($_REQUEST['infoblockName']) && !empty($_REQUEST['infoblockName'])){
						$file = str_replace(" ", "_", dirname(trim($_REQUEST['infoblockName'])))."/".$file;
					}
					$ext = explode(".", basename($file));
					if (!isset($ext[1])){
						$file = $file.".html";
					}elseif ($ext[1] != 'html'){
						$file = str_replace(".".$ext, ".html", $file);
					}
					if (file_exists($config['content_dir'].$file)){
						$ext = explode(".", basename($file))[1];
						$file = str_replace(".".$ext, "", $file);
						$file = $file.$this->generateRandomString().".html";
					}
				}elseif (isset($_REQUEST['folderTitle']) && !empty($_REQUEST['folderTitle']) &&
						isset($_REQUEST['folderName']) && !empty($_REQUEST['folderName'])) {
					$title = trim($_REQUEST['folderTitle']);
					$file = str_replace(" ", "_", explode(".", basename(trim($_REQUEST['folderName'])))[0]);
					if (file_exists($config['content_dir'].$file)){
						$file = $file.$this->generateRandomString();
					}
					if (file_exists($config['content_dir'].$file.'/index.html')){
						$file = $file."/".$this->generateRandomString().".html";
					}else{
						$file = $file."/index.html";
					}
				}else{
					header('Location: /admin/pages');
				}
				$content = "<html>\n<head>\n\t<title>" . $title . "</title>\n";
				if (isset($_REQUEST['infoblockName']) && !empty($_REQUEST['infoblockName'])){
					$content .= "\t<meta name='pagetype' content='infoblock-page' />\n\t<meta name='template' content='blog-page' />\n\t<meta name='navhidden' content='True' />\n";
				}elseif (isset($_REQUEST['infoblock']) && $_REQUEST['infoblock'] == 'true'){
					$content .= "\t<meta name='pagetype' content='infoblock-index' />\n\t<meta name='template' content='blog-index' />\n";
				}
				$content .= "</head>\n<body>\n\nPage under construction.\n\n</body>\n</html>\n";

				@mkdir(dirname($config['content_dir'].$file));
				file_put_contents($config['content_dir'].$file, $content);

				//header('Location: /admin/pages');
				header('Location: /admin/edit?file='.$file);
				exit;


			}elseif ($this->config['url'] == 'admin/code'){
				$twig_vars['menu'] = 'pages';
				$template = '@admin/code';

				if (isset($_REQUEST['file']) and file_exists($config['content_dir'].$_REQUEST['file'])){ //exist file
					$url = $config['base_url']."/".$_REQUEST['file'];
					$url = str_replace('index' . CONTENT_EXT, '', $url);
					$url = str_replace('index.html', '', $url);
					$url = preg_replace('/\.\S{1,4}$/', '', $url);

					$content = file_get_contents($config['content_dir'].$_REQUEST['file']);
					if (strstr ($content, 'infoblock-page')){$twig_vars['menu'] = 'articles'; }

					$twig_vars['file_to_edit'] = array(
						'data' => $content,
						'file' => $_REQUEST['file'],
						'mode' => preg_match('/\.md$/', $_REQUEST['file']) ? 'markdown' : 'html',
						'url' => $url

					);
				}else{
					echo 'Ошибка: файл не найден...'; exit;
				}
				return;
			}elseif ($this->config['url'] == 'admin/edit'){
				if (isset($_REQUEST['delete']) && file_exists($config['content_dir'].$_REQUEST['delete'])){
					unlink($config['content_dir'].$_REQUEST['delete']);
					header('Location: /admin/articles'); //flush data cache
					exit;
				}
				$twig_vars['menu'] = 'pages';
				$twig_vars['themeConfig'] = $this->getThemeInfo($twig_vars);
				if ($twig_vars['current_page']['pagetype'] == 'infoblock-page'){$twig_vars['menu'] = 'articles'; }
				$twig_vars['current_page']['file_type'] = preg_match('/\.md$/', $_REQUEST['file']) ? 'markdown' : 'html';
				$template = '@admin/edit';
				if (isset($_REQUEST['file']) and file_exists($config['content_dir'].$_REQUEST['file'])){ //exist file
					$twig_vars['current_page']['file'] = str_replace($config['content_dir'], '', $twig_vars['current_page']['file']);

				}else{
					echo 'Ошибка: файл не найден...'; exit;
				}
				//var_dump($twig_vars['meta']); exit;
				return;
			}elseif ($this->config['url'] == 'admin/files'){
				$twig_vars['menu'] = 'files';
				$template = '@admin/files';
				return;
			//TODO
			}elseif ($this->config['url'] == 'admin/save'){
				if (isset($_REQUEST['editor']) && $_REQUEST['editor'] == 'code' && isset($_REQUEST['file']) && !empty($_REQUEST['file']) && file_exists($config['content_dir'].$_REQUEST['file'])) {
					file_put_contents($config['content_dir'] . $_REQUEST['file'], $_REQUEST['data']);
					header($_SERVER['SERVER_PROTOCOL'] . ' 200 OK');
					echo "Сохранено...";
				} elseif (isset($_REQUEST['editor']) && $_REQUEST['editor'] == 'visual' && isset($_REQUEST['file']) && !empty($_REQUEST['file']) && file_exists($config['content_dir'] . $_REQUEST['file'])) {
					$meta = $twig_vars['meta'];
					if (isset($_REQUEST['title']) && !empty($_REQUEST['title'])) {$meta['title'] = trim($_REQUEST['title']);} else {$meta['title'] = $_REQUEST['file'];}
					$meta['description'] = trim($_REQUEST['description']);
					$meta['date'] = trim($_REQUEST['date']);
					$meta['navtitle'] = trim($_REQUEST['navtitle']);
					$meta['navorder'] = trim($_REQUEST['navorder']);
					$meta['template'] = trim($_REQUEST['template']);
					if (isset($_REQUEST['navhidden']) && !empty($_REQUEST['navhidden'])) {$meta['navhidden'] = 'False';} else {$meta['navhidden'] = 'True';}
					unset($meta['date_formatted']);
					$content = "<html>\n<head>\n\t<title>" . $meta['title'] . "</title>\n";
					unset($meta['title']);
					foreach ($meta as $key => $value){
						$content .= "\t<meta name='$key' content='$value' />\n";
					}
					$content .= "</head>\n<body>\n" . trim($_REQUEST['content']) . "\n\n</body>\n</html>\n";

					file_put_contents($config['content_dir'] . $_REQUEST['file'], $content);
					header($_SERVER['SERVER_PROTOCOL'] . ' 200 OK');
					echo "Сохранено...";
				} elseif (!isset($_REQUEST['file']) || empty($_REQUEST['file'])) {
					echo "Ошибка: нет данных...";
				}else{
					echo "Ошибка: файл не найден...";
				}
				exit;

			}elseif ($this->config['url'] == 'admin/backup'){
				#TODO создавать в фоне
				$twig_vars['menu'] = 'backup';
				$template = '@admin/backup';
				if (isset($_REQUEST['createarchive'])) {
					echo "Создаем архив...";
					//$archive_name = 'backup_' . date("Y.m.d_H.i.s") . ".zip";
					$archive_name = 'backup_' . time() . "_" . substr( md5(rand()), 0, 7). ".zip";
					$root_folder = dirname(__DIR__);
					$files_for_archive = $this->get_files_for_archive($root_folder);
					$zip = new ZipArchive();
					$zip->open($root_folder . "/backup/" . $archive_name, ZipArchive::CREATE | ZipArchive::OVERWRITE);
					foreach ($files_for_archive as $file) {
						$relativePath = substr($file, strlen($root_folder) + 1);
						$zip->addFile($file, $relativePath);
					}
					$zip->close();
					header('Location: /admin/backup'); //flush data cache
					exit;
				}
				if (isset($_REQUEST['delete']) && file_exists("backup/".$_REQUEST['delete'])) {
					unlink("backup/".$_REQUEST['delete']);
				}

				//foreach (glob('backup/*.zip') as $file){
				$archives =glob('backup/*.zip');
				usort($archives, function($a,$b){return filemtime($b) - filemtime($a); });
				foreach ($archives as $file){
					$file_info = new SplFileInfo($file);
					$twig_vars['archive_list'][] = array(
						'name' => str_replace("backup/", "", $file),
						'time' => date("Y-m-d H:i:s", $file_info->getMTime()),
						'size' => $this->convert($file_info->getSize())
					);
				}
				return;
			}elseif ($this->config['url'] == 'admin/import'){
				$twig_vars['menu'] = 'import';
				$template = '@admin/import';
				return;
			}elseif ($this->config['url'] == 'admin/import-wp'){
				$tmp_folder = 'tmp/'; if (!file_exists($tmp_folder)){mkdir($tmp_folder, 0777, true);}
				if (move_uploaded_file($_FILES['xml_main']['tmp_name'], $tmp_folder."main.xml")) {

					@move_uploaded_file($_FILES['xml_wp_ngg_gallery']['tmp_name'], $tmp_folder."ngg_gallery.xml");
					@move_uploaded_file($_FILES['xml_wp_ngg_pictures']['tmp_name'], $tmp_folder."ngg_pictures.xml");
					$twig_vars['content'] = $this->do_wp_import($tmp_folder);
					@unlink($tmp_folder."main.xml");
					@unlink($tmp_folder."ngg_gallery.xml");
					@unlink($tmp_folder."ngg_pictures.xml");
					$twig_vars['menu'] = 'import';
					$template = '@admin/import-part2';

				} else {
					echo "Ошибка загрузки файлов\n";
					exit;
				}
			}elseif ($this->config['url'] == 'admin/import-wp-download'){
				//download files...
				$datafile = 'tmp/filesfordownloading.tmp';
				if (!file_exists($datafile)){
					echo "Файл данных не найден";
					exit;
				}
				$data = unserialize(file_get_contents($datafile));


				//echo "Загрузка файлов, найдено ".count($files_for_downloading_unique)." ссылок...<br>\n";
				require_once(dirname(__DIR__).'/lib/pico_admin/parallelcurl.php'); //https://github.com/petewarden/ParallelCurl
				$curl_options = array(
					CURLOPT_SSL_VERIFYPEER => FALSE,
					CURLOPT_SSL_VERIFYHOST => FALSE,
					CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12',
					CURLOPT_CONNECTTIMEOUT_MS => 5000
				);

				$time_start = microtime(true);
				$parallel_curl = new ParallelCurl(10, $curl_options);
				global $base_blog_url_true, $output_dir;
				$base_blog_url_true = $data['base_url'];
				$output_dir = $data['output_dir'];

				function on_request_done($content, $url, $ch, $search) {
					global $output_dir, $base_blog_url_true;
					//$output_file = $output_dir.str_replace($base_blog_url_true, "", $url);
					$output_file = str_replace($base_blog_url_true, "", $url);
					$output_file = str_replace("//", "/", $output_file);
					$output_file = preg_replace('/^\//', "", $output_file);
					if (!file_exists(dirname($output_file))){mkdir(dirname($output_file), 0777, true);}
					file_put_contents($output_file, $content);
				}
				$c = 0;
				if (!isset($_SESSION["progress"])){$_SESSION["progress"] = '';}
				header($_SERVER['SERVER_PROTOCOL'].' 200 OK');
				foreach ($data['files'] as $key => $request) {
					//if (!file_exists($output_dir.$request)){
					$request = preg_replace('/^\//', "", $request);
					if (!file_exists($request)){
						$parallel_curl->startRequest($base_blog_url_true.'/'.$request, 'on_request_done', '');
						++$c;

					}
					if ($c == 10){break;};
				}
				$parallel_curl->finishAllRequests();
				echo $key+1;
				if (($key+1) == count($data['files'])){
					@unlink($datafile);
				}

				exit;
			}elseif ($this->config['url'] == 'admin/settings'){
				#TODO
				$twig_vars['menu'] = 'settings';
				$template = '@admin/settings';
				return;
			}elseif ($this->config['url'] == 'admin/gallery'){
				#TODO
				$twig_vars['menu'] = 'gallery';
				$template = '@admin/gallery';
				return;
			}elseif ($this->config['url'] == 'admin/theme'){
				if (isset($_REQUEST['enable']) && !empty($_REQUEST['enable'])){
					$config_raw = file_get_contents('config.php');
					$config_raw = preg_replace('/(\$config\[\'theme\'\]\s+=\s+[\'|"])'.$config['theme'].'([\'|"])/', "$1" . trim($_REQUEST['enable']) . "$2", $config_raw);
					file_put_contents('config.php', $config_raw);
					header('Location: /admin/theme');
					exit;
				}
				$twig_vars['menu'] = 'theme';
				$template = '@admin/theme';
				$theme_list_raw = glob('themes/*/theme.ini');
				foreach ($theme_list_raw as $t){
					$dir = explode('/', $t);
					$theme_list[$dir[1]] = parse_ini_file($t, true);
					if (file_exists($dir[0]."/".$dir[1]."/thumbnail.png")){
						$theme_list[$dir[1]]['general']['thumbnail'] = $dir[0]."/".$dir[1]."/thumbnail.png";
						$theme_list[$dir[1]]['general']['folder'] = $dir[1];
					}

				}
				$twig_vars['theme_list'] = $theme_list;
				//var_dump($config);exit;
				return;
			}elseif ($this->config['url'] == 'admin/menu'){
				#TODO
				$twig_vars['menu'] = 'menu';
				$template = '@admin/menu';
				return;
			}elseif ($this->config['url'] == 'admin/md-to-html'){
				if (isset($_REQUEST['file']) && !empty($_REQUEST['file']) && file_exists($config['content_dir'] . $_REQUEST['file'])){
					$src = $config['content_dir'] . $_REQUEST['file'];
					$dst = str_replace(".md", ".html", $src);
				}
				$meta = $twig_vars['meta'];
				unset($meta['date_formatted']);
				$content = "<html>\n<head>\n\t<title>" . $meta['title'] . "</title>\n";
				unset($meta['title']);
				foreach ($meta as $key => $value){
					$content .= "\t<meta name='$key' content='$value' />\n";
				}
				$content .= "</head>\n<body>\n\n" . $twig_vars['current_page']['content'] . "\n\n</body>\n</html>\n";

				file_put_contents($dst, $content);
				unlink($src);
				if ($twig_vars['current_page']['pagetype'] == 'infoblock-page'){
					header('Location: /admin/articles');
				}else{
					header('Location: /admin/pages');
				}
				exit;
			}elseif ($this->config['url'] == 'admin/articles'){
				$twig_vars['menu'] = 'articles';
				$template = '@admin/articles';
				//список инфоблоков
				$twig_vars['infoblock_list'] = [];
				foreach ($twig_vars['pages'] as $key=>$value){
					if (isset($value['pagetype']) && $value['pagetype'] == 'infoblock-index'){
						$twig_vars['infoblock_list'][] = ['name'=>$value['title'], 'folder'=>$value['file']];
					}
				}

				return;
			}else{
				echo "admin error"; exit;
			}
		}
	}

	//true current page data
	public function before_load_content (&$file){
		if(
				($this->is_admin && $this->config['url'] == 'admin/edit' || $this->is_admin && $this->config['url'] == 'admin/save' || $this->is_admin && $this->config['url'] == 'admin/md-to-html')
				&& isset($_REQUEST['file']) and file_exists($this->config['content_dir'].$_REQUEST['file'])) {
			$file = preg_replace('/('.CONTENT_EXT.'|.html)/i', '', $this->config['content_dir'].$_REQUEST['file']);
		};
	}

	protected function get_files_for_archive($directory)
	{
		$array_items = array();
		if ($handle = opendir($directory)) {
			while (false !== ($file = readdir($handle))) {
				if (in_array(substr($file, -1), array('~', '#'))) {
					continue;
				}
				if (preg_match("/^(^\.)/", $file) === 0) {
					if (is_dir($directory . DIRECTORY_SEPARATOR . $file)) {
						$array_items = array_merge($array_items, $this->get_files_for_archive($directory . DIRECTORY_SEPARATOR . $file));
					} else {
						$file = $directory . DIRECTORY_SEPARATOR . $file;
						if (!strstr($file, "backup".DIRECTORY_SEPARATOR)) {
							$array_items[] =$file;// preg_replace("/\/\//si", "/", $file);
						}
					}
				}
			}
			closedir($handle);
		}

		return $array_items;
	}


	public function get_pages(&$pages, &$current_page, &$prev_page, &$next_page){
		if($this->is_admin){
			$config = $this->config;
			foreach( $pages as $page ){
				if ($page['pagetype'] != 'infoblock-page') {
					//$file = substr($page['file'], strlen($config['content_dir']));
					$file = $page['file'];
					$path = explode('/', $file);
					#TODO refactoring needed
					if (preg_match('/^index\./', $file)) {
						$files_tree['title'] = $page['title'];
						$files_tree['file'] = $file;
						$files_tree['url'] = $page['url'];
						$files_tree['type'] = 'folder';
						$files_tree['content_type'] = $page['content_type'];

					} elseif (count($path) == 1) {
						$files_tree['sub'][$path[0]] = array('title' => $page['title'], 'file' => $file, 'url' => $page['url'], 'type'=>'file', 'content_type' => $page['content_type']);
					} elseif (count($path) == 2) {
						if (preg_match('/^index\./', $path[1])) {
							$files_tree['sub'][$path[0]]['title'] = $page['title'];
							$files_tree['sub'][$path[0]]['file'] = $file;
							$files_tree['sub'][$path[0]]['url'] = str_replace('index', '', $page['url']);
							$files_tree['sub'][$path[0]]['type'] = 'folder';
							$files_tree['sub'][$path[0]]['content_type'] = $page['content_type'];
							//$files_tree['sub'][$path[0]] = array('title' => $page['title'], 'file' => $file, 'url' => str_replace('index', '', $page['url']), 'type'=>'folder', 'content_type' =>$page['content_type']);
						} else {
							$files_tree['sub'][$path[0]]['sub'][$path[1]]['title'] = $page['title'];
							$files_tree['sub'][$path[0]]['sub'][$path[1]]['file'] = $file;
							$files_tree['sub'][$path[0]]['sub'][$path[1]]['url'] = str_replace('index', '', $page['url']);
							$files_tree['sub'][$path[0]]['sub'][$path[1]]['type'] = 'file';
							$files_tree['sub'][$path[0]]['sub'][$path[1]]['content_type'] = $page['content_type'];
							//$files_tree['sub'][$path[0]]['sub'][$path[1]] = array('title' => $page['title'], 'file' => $file, 'url' => $page['url'], 'type'=>'file', 'content_type' => $page['content_type']);
						}
					} elseif (count($path) == 3) {
						if (preg_match('/^index\./', $path[2])) {
							$files_tree['sub'][$path[0]]['sub'][$path[1]] = array('title' => $page['title'], 'file' => $file, 'url' => str_replace('index', '', $page['url']), 'type'=>'folder', 'content_type' => $page['content_type']);
						} else {
							$files_tree['sub'][$path[0]]['sub'][$path[1]]['sub'][$path[2]] = array('title' => $page['title'], 'file' => $file, 'url' => $page['url'], 'type'=>'file', 'content_type' => $page['content_type']);
						}
					}
				}
			}
			$this->files_tree = $files_tree;
		}
	}

	//size in human format
	protected function convert($size)
	{
		$unit=array('b','kb','mb','gb','tb','pb');
		return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
	}

	protected function getThemeInfo(&$twig_vars)
	{
		return parse_ini_file('themes/'.$twig_vars['config']['theme']."/theme.ini", true);
	}

	//import from Wordpress
	protected function do_wp_import($tmpdir){
		global $globaloutput;

		//parse ngg_gallery
		$ngg_list = array();
		if (file_exists($tmpdir."ngg_gallery.xml")){
			$globaloutput .=  "Подготовка NextGEN Gallery...<br>\n";
			$xml_ngg_gallery = simplexml_load_file( $tmpdir."ngg_gallery.xml" );
			if ($xml_ngg_gallery){
				$rows = (array)$xml_ngg_gallery->table->rows;
				foreach ($rows['row'] as $gallery){
					$gallery = (array)$gallery;
					$ngg_list[$gallery['gid']] = $gallery;
				}
			}

		}

		//parse ngg_pictures
		if (file_exists($tmpdir."ngg_pictures.xml")) {
			$file_ngg_pictures_content = file_get_contents($tmpdir."ngg_pictures.xml");
			//fix XML
			$file_ngg_pictures_content = preg_replace('/<meta_data>(.+?)<\/meta_data>/', '', $file_ngg_pictures_content);
			$file_ngg_pictures_content = preg_replace('/<alttext>(.+?)<\/alttext>/', '', $file_ngg_pictures_content);
			$xml_ngg_pictures = simplexml_load_string($file_ngg_pictures_content);
			//parse ngg_pictures
			if ($xml_ngg_pictures) {
				$globaloutput .=  "Добавляем фотографии...<br>\n";
				$rows = (array)$xml_ngg_pictures->table->rows;
				foreach ($rows['row'] as $pic) {
					$pic = (array)$pic;
					$ngg_list[$pic['galleryid']]['picpures'][] = $pic;
				}
			}
		}

		//parse main file
		if (!file_exists($tmpdir."main.xml")) {
			return "Ошибка чтения основного файла.";
		}

		#TODO thumb для постов
		global $output_dir;
		//$output_dir = "import/";
		$output_dir = $this->config['content_dir'];
		$xml = simplexml_load_file( $tmpdir."main.xml" );
		if( $xml ) {
			$cat_index = array();
			$pages_index = array();

			//category title
			foreach ($xml->channel->children($xml->channel->getNameSpaces(true)['wp']) as $k=>$i){
				if ($k == 'category') {
					$cat_index[(string)$i->category_nicename]['title'] = (string)$i->cat_name;
				}
			}
			$base_dir = (string) $xml->channel->link;
			$base_blog_url = (string)$xml->channel->children($xml->channel->getNameSpaces(true)['wp'])->base_blog_url;
			$base_blog_url = str_replace("/", "\/", $base_blog_url);
			$count_posts = 0;
			$count_pages = 0;
			$files_for_downloading = array();


			$globaloutput .=  "Обрабатываем основной файл данных...<br>\n";
			foreach ($xml->channel->item as $content) {
				$namespaces = $content->getNameSpaces(true);
				$wp_children = $content->children($namespaces['wp']);
				$content_children = $content->children($namespaces['content']);
				$post_body = (string)$content_children->encoded;
				$name = (string)$wp_children->post_name;
				$out = '';
				#text -> html
				if (!empty($post_body)){
					$post_body = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "<mask>\n", $post_body);
					$post_body = preg_replace("/(.*)<mask>/", "<p>$1</p>", $post_body);
				}
				if ($wp_children->post_type == 'post' && !empty($post_body)) {

					foreach ($content->category as $i) {
						if (json_decode(json_encode((array)$i), TRUE)['@attributes']['domain'] == 'category') {
						}
						$folder = json_decode(json_encode((array)$i), TRUE)['@attributes']['nicename'];
					}

					$out = "<html>\n<head>\n\t<title>" . (string)$content->title . "</title>\n";
					$out .= "\t<meta name='description' content='" . (string)$content->description . "' />\n";
					$out .= "\t<meta name='date' content='" . (string)$wp_children->post_date . "' />\n";
					$out .= "\t<meta name='navhidden' content='True' />\n";
					$out .= "\t<meta name='pagetype' content='infoblock-page' />\n";
					$out .= "\t<meta name='template' content='blog-page' />\n";
					$out .= "</head>\n<body>\n" . $post_body . "\n\n</body>\n</html>";

					$cat_index[$folder]['posts'][] = array(
						'title' => (string)$content->title,
						'link' => $name
					);
					++$count_posts;

				}elseif ($wp_children->post_type == 'page' && !empty($post_body)) {
					$out = "<html>\n<head>\n\t<title>" . (string)$content->title . "</title>\n";
					$out .= "\t<meta name='description' content='" . (string)$content->description . "' />\n";
					$out .= "\t<meta name='date' content='" . (string)$wp_children->post_date . "' />\n";
					$out .= "\t<meta name='navhidden' content='True' />\n";
					$out .= "</head>\n<body>\n" . $post_body . "\n\n</body>\n</html>";
					if (!isset($folder) || empty($loader)){$folder = 'pages';}
					$pages_index[] = array(
						'title' => (string)$content->title,
						'link' => $name
					);
					++$count_pages;
				}

				//save content
				if (!empty($out) && !(empty($name) && !empty($folder))) {
					if (!empty($ngg_list) && preg_match_all('/\[nggallery id=(.{1,5})\]/', $out, $matches)) {
						foreach ($matches[1] as $gid) {
							$gid = (int)$gid;
							if (isset($ngg_list[$gid])) {
								$gallery_html = "<div class='nggallery' id='gallery_" . $gid . "'>\n";
								$url = $base_dir . "/" . $ngg_list[$gid]['path'];
								if (!empty($ngg_list[$gid]['picpures'])) {
									foreach ($ngg_list[$gid]['picpures'] as $pic) {
										$pic_url = $url . "/" . $pic['filename'];
										$gallery_html .= "<a href='" . $pic_url . "'><img src='" . $pic_url . "' width='256'></a>\n";
									}
								}

								$gallery_html .= "</div>\n";
								$out = preg_replace('/\[nggallery id='.$gid.'\]/', $gallery_html, $out);
							}
						}
					}


					//список файлов для скачивания
					if (preg_match_all('/(href|src)=[\'|"](.*?)[\'|"]/', $out, $matches)) {
						foreach ($matches[2] as $url) {
							if (preg_match('/^' . $base_blog_url . '\/(.+)/', $url, $matchesiurl)) {
								$files_for_downloading[] = $matchesiurl[1];
								$url = str_replace("/", "\/", $url);
								$out = preg_replace('/'.$url.'/',  '/'.$matchesiurl[1], $out);
							} elseif (preg_match('/^\/(wp-content.+)/', $url, $matchesiurl)) {
								$files_for_downloading[] = $matchesiurl[1];
								$url = str_replace("/", "\/", $url);
								$out = preg_replace('/'.$url.'/',  '/'.$matchesiurl[1], $out);
							}
						}
					}


					if (!file_exists($output_dir . $folder)) {
						mkdir($output_dir  . $folder, 0777, true);
					}
					file_put_contents($output_dir . $folder . "/" . $name . ".html", $out);

				}

			}
			$globaloutput .=  "Обработано $count_posts постов и $count_pages страниц.<br>\n";
			$globaloutput .=  "Создание интекса для категорий...<br>\n";
			//create index file for each category
			foreach ($cat_index as $cat_name => $cat){
				if (isset($cat['posts'])){
					$out = "<html>\n<head>\n\t<title>" . $cat['title'] . "</title>\n";
					$out .= "\t<meta name='date' content='" . date("Y-m-d H:i:s") . "' />\n";
					$out .= "\t<meta name='navhidden' content='False' />\n";
					$out .= "\t<meta name='pagetype' content='infoblock-index' />\n";
					$out .= "\t<meta name='template' content='blog-index' />\n";
					$out .= "</head>\n<body>\n";
					$out .= "{#<!--\n";
					foreach ($cat['posts'] as $post){
						$out .= '<a href="'.$post['link'].'">'.$post['title']."</a><br>\n";
					}
					$out .= "-->#}\n";
					$out .= "\n\n</body>\n</html>";
					file_put_contents($output_dir.$cat_name ."/index.html", $out);
				}

			}

			$globaloutput .=  "Создание списка страниц...<br>\n";
			//create index file for pages
			if (!empty($pages_index)) {
				$out = "<html>\n<head>\n\t<title>WP pages</title>\n";
				$out .= "\t<meta name='date' content='" . date("Y-m-d H:i:s") . "' />\n";
				$out .= "\t<meta name='navhidden' content='False' />\n";
				$out .= "</head>\n<body>\n";
				foreach ($pages_index as $page) {
					$out .= '<a href="' . $page['link'] . '">' . $page['title'] . "</a><br>\n";
				}
				$out .= "\n\n</body>\n</html>";

				file_put_contents($output_dir . "pages/index.html", $out);
			}

			$globaloutput .=  "Подготовка списка файлов для скачивания...<br>\n";
			$data = array(
				'base_url' => str_replace("\/", "/", $base_blog_url),
				'output_dir' => $output_dir,
				'files' => array_values(array_unique($files_for_downloading)),

			);
			file_put_contents($tmpdir."/filesfordownloading.tmp", serialize($data));
			$globaloutput .= '<script>var totalfilesfordownloading = '.count($data['files']).';</script>';
			$globaloutput .=  "Начинаем скачивание...<br>\n";
			return $globaloutput;
		}

	}

	protected function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

}

?>