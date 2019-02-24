<?php
/**
 * Contact form with reCAPTCHA
 *
 * @author Sergey Gurinovich <sergey@fsky.info> 2015.10.18
 * @link https://nightman.info
 * @license http://opensource.org/licenses/MIT
 */
class Pico_Contact {

	public $is_contact_page_api;
	public $is_contact_page;
	public $config = array();

	public function __construct(){
		$this->is_contact_page_api = false;
		$this->is_contact_page = false;
	}

	public function config_loaded(&$settings)
	{
		$this->config = $settings;
	}
	public function request_url(&$url)
	{
		//if($url == 'contact_page_api') $this->is_contact_page_api = true;
	}

	public function before_render(&$twig_vars, &$twig) {
		if ($twig_vars['meta']['pagetype'] == 'contactform'){$this->is_contact_page = true;}
	}

	public function after_render(&$output)
	{
		if($this->is_contact_page){
			$settings = $this->config;
			$recaptcha = new \ReCaptcha\ReCaptcha($settings['reCAPTCHA']['secret']);

			// Was there a reCAPTCHA response?
			if (isset($_POST["g-recaptcha-response"])) {
				$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);
				if ($resp->isSuccess()) {
					// verified!
					if (isset($_POST['name']) && !empty($_POST['name']) &&
						isset($_POST['email']) && !empty($_POST['email']) &&
						isset($_POST['message']) && !empty($_POST['message'])
					) {

						$char = "Контактное лицо - " . $_POST['name'] . "\n";
						$char .= "Email - " . $_POST['email'] . "\n";
						$char .= "Сообщение:\n" . $_POST['message'] . "\n\n";

						$char = iconv("UTF-8", "CP1251", $char);

						mail($settings['site_admin_email'], iconv("UTF-8", "CP1251", "Форма обратной связи с сайта " . $settings['site_title']), $char, "From: " . $settings['site_admin_email'] . "\r\n");

						$output = str_replace('{{ reCAPTCHA.success }}', '', $output);
						$output = str_replace('{{ reCAPTCHA.form }}', 'hidden', $output);

					} else {
						$output = str_replace('{{ reCAPTCHA.info }}', 'hidden', $output);
						$output = str_replace('{{ reCAPTCHA.error }}', '', $output);
						$output = str_replace('{{ reCAPTCHA.error.message }}', "Отсутвует имя, email или сообщение", $output);
					}

				} else {
					$errors = $resp->getErrorCodes();
					var_dump($errors);
					$output = str_replace('{{ reCAPTCHA.info }}', 'hidden', $output);
					$output = str_replace('{{ reCAPTCHA.error }}', '', $output);
					$output = str_replace('{{ reCAPTCHA.error.message }}', "Ошибка reCAPTCHA", $output);
				}
			}

			$output = str_replace('{{ reCAPTCHA.siteKey }}', $settings['reCAPTCHA']['siteKey'], $output);
			$output = str_replace('{{ reCAPTCHA.lang }}', $settings['reCAPTCHA']['lang'], $output);
			if (isset($_POST['email'])){$email = $_POST['email'];}else{$email='';}
			$output = str_replace('{{ post.Email }}', $email, $output);
			if (isset($_POST['name'])){$name = $_POST['name'];}else{$name='';}
			$output = str_replace('{{ post.Name }}', $name, $output);
			if (isset($_POST['message'])){$message = $_POST['message'];}else{$message='';}
			$output = str_replace('{{ post.Message }}', $message, $output);
			$output = str_replace('{{ reCAPTCHA.error }}', 'hidden', $output);
			$output = str_replace('{{ reCAPTCHA.error.message }}', '', $output);
			$output = str_replace('{{ reCAPTCHA.success }}', 'hidden', $output);
			$output = str_replace('{{ reCAPTCHA.form }}', '', $output);
		}
	}


}

?>
