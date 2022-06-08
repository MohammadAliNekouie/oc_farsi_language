<?php
namespace LanguageExample\Admin\Controller\Extension\Opencart\Startup;
class German extends \Opencart\System\Engine\Controller {
	public function index(): void {
		if ($this->config->get('language_german_status') && $this->session->data['language_admin'] == 'de') {
			$code = 'de';

			$this->load->model('localisation/language');

			$language_info = $this->model_localisation_language->getLanguageByCode($code);

			if ($language_info) {
				$this->config->set('config_language_id', $language_info['language_id']);
				$this->config->set('config_language_admin', $code);

				$this->session->data['language_admin'] = $code;

				// Language
				$language = new \Opencart\System\Library\Language($code);
				$language->addPath('extension/language_example/language/german/');
				$language->load($this->config->get('config_language_admin'));

				$this->registry->set('language', $language);
			}
		}
	}
}