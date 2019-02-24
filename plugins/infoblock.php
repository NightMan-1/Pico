<?php
/**
 * Pico Infoblock Plugin
 * based on "Pico Pagination Plugin" by Andrew Meyer http://rewdy.com
 *
 * @author Sergey Gurinovich
 * @link https://nightman.info
 * @license http://opensource.org/licenses/MIT
 * @version 1.1
 */

class Infoblock {

	public $offset = 0;
	public $page_number = 0;
	public $total_pages = 1;
	public $paged_pages = array();

	public function __construct()
	{
		$this->config = array(
			'limit' => 5,
		);
	}

	public function config_loaded(&$settings)
	{
		// Pull config options for site config
		if (isset($settings['pagination_limit']))
			$this->config['limit'] = $settings['pagination_limit'];
	}

	public function get_pages(&$pages, &$current_page, &$prev_page, &$next_page)
	{
		// Filter the pages returned based on the pagination options
		$this->offset = ($this->page_number-1) * $this->config['limit'];

		// filter blog pages.
		$show_pages = array(); $c = 0; $pageorderbyurl = array(); $pageorderdate = array();
		foreach($pages as $key=>$page) {
			if (isset($page['pagetype']) and ($page['pagetype'] == 'infoblock-page') and (strstr ($page['url'], $current_page['url'] ))) {
				$show_pages[$key] = $page;
				$pageorderbyurl[$key] = $page['url'];
				if (empty($page['date']) && file_exists($page['file'])) {
					$page['date'] = date("d.m.Y H:i:s.", filemtime($page['file']));
				}
				$pageorderdate[$key]  = strtotime($page['date']) ? strtotime($page['date']) : strtotime(str_replace(".", "-", $page['date']));
			}
		}
		array_multisort($pageorderdate,  SORT_DESC, $pageorderbyurl,  SORT_NATURAL | SORT_FLAG_CASE, $show_pages);

		// get total pages before show_pages is sliced
		$this->total_pages = ceil(count($show_pages) / $this->config['limit']);

		// slice show_pages to the limit
		$show_pages = array_slice($show_pages, $this->offset, $this->config['limit']);
		// set set filtered pages to paged_pages
		$this->paged_pages = $show_pages;

	}

	public function before_render(&$twig_vars, &$twig)
	{
		// Set a bunch of view vars

		// send the paged pages in separate var
		if ($this->paged_pages)
			$twig_vars['paged_pages'] = $this->paged_pages;

		// set var for page_number
		if ($this->page_number)
			$twig_vars['page_number'] = $this->page_number;

		//full pages list
		//for ($this->paged_pages as $key=>$value){}
		$c = 1;
		while ($c <= $this->total_pages){
			$twig_vars['pagination_num_links'][$c] = array('url'=>'?PAGE='.$c, 'number'=>$c);
			++$c;
		}

		// set var for total pages
		if ($this->total_pages)
			$twig_vars['total_pages'] = $this->total_pages;


		//archive by years
		foreach (array_reverse($twig_vars['pages'], true) as $page){
			if ($page['pagetype'] == 'infoblock-page'){
				$y = date_parse($page['date'])['year'];
				$twig_vars['archive_by_year'][$y][] = array('date'=>$page['date'], 'title'=>$page['title'], 'url'=>$page['url']);
			}
		}
		krsort($twig_vars['archive_by_year'], SORT_NATURAL);

	}

	public function request_url(&$url)
	{
		// checks for page # in URL
		if (isset($_GET['PAGE']) && !empty($_GET['PAGE'])){
			$this->page_number =  (int)$_GET['PAGE'];
		} else {
			$this->page_number = 1;
		}
	}
}