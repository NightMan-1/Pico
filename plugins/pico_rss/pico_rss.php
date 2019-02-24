<?php

/**
 * RSS Feed plugin for Pico
 *
 * @author Gilbert Pellegrom
 * @link http://pico.dev7studios.com
 * @license http://opensource.org/licenses/MIT
 * @version 1.1
 */
class Pico_Rss {

	private $is_feed;
	private $plugin_path;
	public $rss_pages = array();

	public function __construct()
	{
		$this->is_feed = false;
		$this->plugin_path = dirname(__FILE__);
	}

	public function request_url(&$url)
	{
		// Are we looking for /feed?
		if($url == 'feed') $this->is_feed = true;
	}

	public function get_pages(&$pages, &$current_page, &$prev_page, &$next_page)
	{
		$show_pages = array();
		$pagedate = array();
		$pageorderbyurl = array();
		foreach ($pages as $key => $page) {
			if (isset($page['pagetype']) and ($page['pagetype'] == 'infoblock-page')) {
				if (empty($page['date']) && file_exists($page['file'])) {
					$page['date'] = date("d.m.Y H:i:s.", filemtime($page['file']));
				}
				$page['date'] = date("Y-m-d\TH:i:s\Z", (strtotime($page['date']) ? strtotime($page['date']) : strtotime(str_replace(".", "-", $page['date']))));
				$page['excerpt'] = str_replace('&hellip;', '', strip_tags($page['excerpt']));
				$page['content'] = htmlentities($page['content']);
				$pagedate[$key] = strtotime($page['date']);
				$show_pages[$key] = $page;
				$pageorderbyurl[$key] = $page['url'];
			}
		}
		array_multisort($pagedate, SORT_DESC, $pageorderbyurl, SORT_NATURAL | SORT_FLAG_CASE, $show_pages);

		// Limit feed to latest 10 posts
		$show_pages = array_slice($show_pages, 0, 10);
		// set set filtered pages to paged_pages
		$this->rss_pages = $show_pages;
	}

	public function before_render(&$twig_vars, &$twig, &$template, &$loader)
	{
		if($this->is_feed){
			if ($this->rss_pages) {
				$twig_vars['rss_pages'] = $this->rss_pages;
			}
			$twig_vars['atomcreatetime'] = date ("Y-m-d\TH:i:s\Z", time());
			$twig_vars['uuid'] = sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
				// 32 bits for "time_low"
				mt_rand(0, 0xffff), mt_rand(0, 0xffff),
				// 16 bits for "time_mid"
				mt_rand(0, 0xffff),
				// 16 bits for "time_hi_and_version",
				// four most significant bits holds version number 4
				mt_rand(0, 0x0fff) | 0x4000,
				// 16 bits, 8 bits for "clk_seq_hi_res",
				// 8 bits for "clk_seq_low",
				// two most significant bits holds zero and one for variant DCE1.1
				mt_rand(0, 0x3fff) | 0x8000,
				// 48 bits for "node"
				mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
			);
			$loader->addPath($this->plugin_path, 'rss');
			$template = '@rss/rss';
			header("Content-Type: application/atom+xml; charset=UTF-8");
			return;
		}
	}

}

?>