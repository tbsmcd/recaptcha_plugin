<?php
class ValidationBehavior extends ModelBehavior {
	function beforeValidate(&$model) {
		$model->validate['recaptcha_response_field'] = array(
			'checkRecaptcha' => array(
				'rule' => array('checkRecaptcha', 'recaptcha_challenge_field'),
				'required' => true,
				'message' => 'You did not enter the words correctly. Please try again.',
			),
		);
	}

	function checkRecaptcha(&$model, $data, $target) {
		App::import('Vendor', 'RecaptchaPlugin.recaptchalib');
		Configure::load('RecaptchaPlugin.key');
		$privatekey = Configure::read('Recaptcha.Private');
		$res = recaptcha_check_answer(
			$privatekey, 							$_SERVER['REMOTE_ADDR'],
			$model->data[$model->alias][$target], 	$data['recaptcha_response_field']
		);
		return $res->is_valid;
	}
}
