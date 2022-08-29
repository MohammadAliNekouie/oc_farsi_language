<?php
namespace Opencart\Admin\Model\Extension\OcPaymentExample\Payment;
class CreditCard extends \Opencart\System\Engine\Model {
	public function charge(int $customer_id, int $customer_payment_id, float $amount): int {
		$this->load->language('extension/oc_payment_example/payment/credit_card');

		$json = [];

		if (!$json) {

		}

		return $this->config->get('config_subscription_active_status_id');
	}

	public function install(): void {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "credit_card_report` (
		 `credit_card_report_id` int(11) NOT NULL,
		 `order_id` int(11) NOT NULL,
		 `card`
		 `amount`
		 `response`
		 `order_status_id` int(11) NOT NULL,
		 `date_added` datetime NOT NULL,
		  PRIMARY KEY (`ip`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");
	}

	public function uninstall(): void {
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "credit_card_report`");
	}
}
