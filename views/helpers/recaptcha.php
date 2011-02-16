<?php
class RecaptchaHelper extends Helper {
	public $helpers = array('Form');

	function show($theme = null) {
		if (empty($theme) || !in_array($theme, array('red', 'white', 'blackglass', 'clean'))) {
			$theme = 'red';
		}
		App::import('Vendor', 'RecaptchaPlugin.recaptchalib');
		Configure::load('RecaptchaPlugin.key');
		$publickey = Configure::read('Recaptcha.Public');
		$html = '<script type="text/javascript">var RecaptchaOptions = {theme : \'' . $theme . '\'};</script>';
		if (isset($recaptcha_error)) {
			$html .= $recaptcha_error . '<br/>';
		}
		return $html .= recaptcha_get_html($publickey);
	}

	function error() {
		return $this->Form->error('recaptcha_response_field');
	}
}
