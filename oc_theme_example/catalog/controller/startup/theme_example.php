<?php
namespace Opencart\Catalog\Controller\Extension\OcThemeExample\Startup;
class ThemeExample extends \Opencart\System\Engine\Controller {
	public function index(): void {

		echo 'hi';
		if ($this->config->get('theme_theme_example_status')) {
			$this->event->register('view/extension/oc_theme_example/theme/theme_example/before', new Action('startup/theme_example|event'));
		}
	}

	public function event(string &$route, array &$args, mixed &$output): void {
		$override = [
			'common/header'
		];
echo 'hi';
		if (in_array($route, $override)) {
			$route = 'extension/oc_theme_example/' . $route;
		}
	}
}