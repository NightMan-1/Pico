<?php

/**
 * @version 1.2
 * @author Sergey Gurinovich <sergey@fsky.info>
 * @link http://nightman.info
 * @license http://opensource.org/licenses/MIT
 *
 */
class Image_Gallery {

	private $image_path = 'images/gallery';
	private $thumbs_path = 'thumbs';
	private $image_ext = '.jpg';

	public function before_read_file_meta(&$headers)
	{
		$headers['gallery'] = 'Gallery';
	}


	private function get_files($directory, $ext = '')
	{
		$array_items = array();
		if($handle = opendir($directory)){
			while(false !== ($file = readdir($handle))){
				if($file != "." && $file != ".."){
					if(is_dir($directory. "/" . $file)){
						//$array_items = array_merge($array_items, $this->get_files($directory. "/" . $file, $ext));
					} else {
						$file = $directory . "/" . $file;
						if(!$ext || strstr($file, $ext)) $array_items[] = preg_replace("/\/\//si", "/", $file);
					}
				}
			}
			closedir($handle);
		}
		sort($array_items);
		return $array_items;
	}

	public function before_render(&$twig_vars, &$twig, &$template)
	{
		if (!empty($twig_vars["meta"]["gallery"])){
			if (file_exists ($this->image_path . "/" . $twig_vars["meta"]["gallery"])) {
				$twig_vars['images'] = $this->get_files($this->image_path . "/" . $twig_vars["meta"]["gallery"], $this->image_ext);
				foreach ($twig_vars['images'] as $key => &$image) {
					$temp_array = array();
					$thumb = dirname($image) . "/" . $this->thumbs_path . "/" . basename($image);
					$temp_array['url'] = $twig_vars['base_url'] . '/' . $image;
					$image_info = getimagesize($thumb);
					$temp_array['w'] = $image_info[0];
					$temp_array['h'] = $image_info[1];
					$temp_array['thumb'] = $twig_vars['base_url'] . '/' . $thumb;
					$temp_array['id'] = $key;
					$image = $temp_array;
				}
			}
		}
	}

}
