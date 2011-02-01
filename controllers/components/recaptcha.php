<?php
class RecaptchaComponent extends Object {
	function startup(&$controller) {
		$modelClass = $controller->modelClass;
		if (!empty($controller->params['form']['recaptcha_challenge_field']) && !empty($controller->params['form']['recaptcha_response_field'])) {
			$controller->data[$modelClass]['recaptcha_challenge_field'] = $controller->params['form']['recaptcha_challenge_field'];
			$controller->data[$modelClass]['recaptcha_response_field'] = $controller->params['form']['recaptcha_response_field'];
		}

		$controller->$modelClass->Behaviors->attach('RecaptchaPlugin.Validation');

	}
}
