<?php
class RecaptchaHelper extends Helper {
	public $helpers = array('Form');

	function show() {
		App::import('Vender', 'RecaptchaPlugin.recaptchalib');
		Configure::load('RecaptchaPlugin.key');
		$publickey = Configure::read('Recaptcha.Public');
		$html = '';
		if (isset($recaptcha_error)) {
			$html .= $recaptcha_error . '<br/>';
		}
		return $html .= recaptcha_get_html($publickey);
	}

	function error() {
		return $this->Form->error('recaptcha_response_field');
	}
}
