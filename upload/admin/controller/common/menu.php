<?php
// *	@copyright	OPENCART.PRO 2011 - 2015.
// *	@forum	http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

		$data['text_analytics'] = $this->language->get('text_analytics');
		$data['text_affiliate'] = $this->language->get('text_affiliate');
		$data['text_api'] = $this->language->get('text_api');
		$data['text_attribute'] = $this->language->get('text_attribute');
		$data['text_attribute_group'] = $this->language->get('text_attribute_group');
		$data['text_backup'] = $this->language->get('text_backup');
		$data['text_banner'] = $this->language->get('text_banner');
		$data['text_menu'] = $this->language->get('text_menu');
		$data['text_captcha'] = $this->language->get('text_captcha');
		$data['text_catalog'] = $this->language->get('text_catalog');
		$data['text_category'] = $this->language->get('text_category');
		$data['text_confirm'] = $this->language->get('text_confirm');
		$data['text_contact'] = $this->language->get('text_contact');
		$data['text_country'] = $this->language->get('text_country');
		$data['text_coupon'] = $this->language->get('text_coupon');
		$data['text_currency'] = $this->language->get('text_currency');
		$data['text_customer'] = $this->language->get('text_customer');
		$data['text_customer_group'] = $this->language->get('text_customer_group');
		$data['text_customer_field'] = $this->language->get('text_customer_field');
		$data['text_custom_field'] = $this->language->get('text_custom_field');
		$data['text_sale'] = $this->language->get('text_sale');
		$data['text_paypal'] = $this->language->get('text_paypal');
		$data['text_paypal_search'] = $this->language->get('text_paypal_search');
		$data['text_design'] = $this->language->get('text_design');
		$data['text_download'] = $this->language->get('text_download');
		$data['text_seomanager'] = $this->language->get('text_seomanager');
		$data['text_error_log'] = $this->language->get('text_error_log');
		//blog
		$data['text_blog'] = $this->language->get('text_blog');
		$data['text_blog_category'] = $this->language->get('text_blog_category');
		$data['text_blog_article'] = $this->language->get('text_blog_article');
		$data['text_blog_review'] = $this->language->get('text_blog_review');
		$data['text_blog_setting'] = $this->language->get('text_blog_setting');
		//end blog
		$data['text_extension'] = $this->language->get('text_extension');
		$data['text_feed'] = $this->language->get('text_feed');
		$data['text_fraud'] = $this->language->get('text_fraud');
		$data['text_filter'] = $this->language->get('text_filter');
		$data['text_geo_zone'] = $this->language->get('text_geo_zone');
		$data['text_dashboard'] = $this->language->get('text_dashboard');
		$data['text_help'] = $this->language->get('text_help');
		$data['text_information'] = $this->language->get('text_information');
		$data['text_installer'] = $this->language->get('text_installer');
		$data['text_language'] = $this->language->get('text_language');
		$data['text_layout'] = $this->language->get('text_layout');
		$data['text_localisation'] = $this->language->get('text_localisation');
		$data['text_location'] = $this->language->get('text_location');
		$data['text_marketing'] = $this->language->get('text_marketing');
		$data['text_modification'] = $this->language->get('text_modification');
		$data['text_manufacturer'] = $this->language->get('text_manufacturer');
		$data['text_module'] = $this->language->get('text_module');
		$data['text_option'] = $this->language->get('text_option');
		$data['text_order'] = $this->language->get('text_order');
		$data['text_order_status'] = $this->language->get('text_order_status');
		$data['text_opencart'] = $this->language->get('text_opencart');
		$data['text_payment'] = $this->language->get('text_payment');
		$data['text_product'] = $this->language->get('text_product');
		$data['text_reports'] = $this->language->get('text_reports');
		$data['text_report_sale_order'] = $this->language->get('text_report_sale_order');
		$data['text_report_sale_tax'] = $this->language->get('text_report_sale_tax');
		$data['text_report_sale_shipping'] = $this->language->get('text_report_sale_shipping');
		$data['text_report_sale_return'] = $this->language->get('text_report_sale_return');
		$data['text_report_sale_coupon'] = $this->language->get('text_report_sale_coupon');
		$data['text_report_sale_return'] = $this->language->get('text_report_sale_return');
		$data['text_report_product_viewed'] = $this->language->get('text_report_product_viewed');
		$data['text_report_product_purchased'] = $this->language->get('text_report_product_purchased');
		$data['text_report_customer_activity'] = $this->language->get('text_report_customer_activity');
		$data['text_report_customer_online'] = $this->language->get('text_report_customer_online');
		$data['text_report_customer_order'] = $this->language->get('text_report_customer_order');
		$data['text_report_customer_reward'] = $this->language->get('text_report_customer_reward');
		$data['text_report_customer_credit'] = $this->language->get('text_report_customer_credit');
		$data['text_report_customer_order'] = $this->language->get('text_report_customer_order');
		$data['text_report_affiliate'] = $this->language->get('text_report_affiliate');
		$data['text_report_affiliate_activity'] = $this->language->get('text_report_affiliate_activity');
		$data['text_review'] = $this->language->get('text_review');
		$data['text_return'] = $this->language->get('text_return');
		$data['text_return_action'] = $this->language->get('text_return_action');
		$data['text_return_reason'] = $this->language->get('text_return_reason');
		$data['text_return_status'] = $this->language->get('text_return_status');
		$data['text_shipping'] = $this->language->get('text_shipping');
		$data['text_setting'] = $this->language->get('text_setting');
		$data['text_stock_status'] = $this->language->get('text_stock_status');
		$data['text_system'] = $this->language->get('text_system');
		$data['text_tax'] = $this->language->get('text_tax');
		$data['text_tax_class'] = $this->language->get('text_tax_class');
		$data['text_tax_rate'] = $this->language->get('text_tax_rate');
		$data['text_theme'] = $this->language->get('text_theme');
		$data['text_tools'] = $this->language->get('text_tools');
		$data['text_total'] = $this->language->get('text_total');
		$data['text_upload'] = $this->language->get('text_upload');
		$data['text_tracking'] = $this->language->get('text_tracking');
		$data['text_user'] = $this->language->get('text_user');
		$data['text_user_group'] = $this->language->get('text_user_group');
		$data['text_users'] = $this->language->get('text_users');
		$data['text_voucher'] = $this->language->get('text_voucher');
		$data['text_voucher_theme'] = $this->language->get('text_voucher_theme');
		$data['text_weight_class'] = $this->language->get('text_weight_class');
		$data['text_length_class'] = $this->language->get('text_length_class');
		$data['text_zone'] = $this->language->get('text_zone');
		$data['text_recurring'] = $this->language->get('text_recurring');
		$data['text_order_recurring'] = $this->language->get('text_order_recurring');
		$data['text_openbay_extension'] = $this->language->get('text_openbay_extension');
		$data['text_openbay_dashboard'] = $this->language->get('text_openbay_dashboard');
		$data['text_openbay_orders'] = $this->language->get('text_openbay_orders');
		$data['text_openbay_items'] = $this->language->get('text_openbay_items');
		$data['text_openbay_ebay'] = $this->language->get('text_openbay_ebay');
		$data['text_openbay_etsy'] = $this->language->get('text_openbay_etsy');
		$data['text_openbay_amazon'] = $this->language->get('text_openbay_amazon');
		$data['text_openbay_amazonus'] = $this->language->get('text_openbay_amazonus');
		$data['text_openbay_settings'] = $this->language->get('text_openbay_settings');
		$data['text_openbay_links'] = $this->language->get('text_openbay_links');
		$data['text_openbay_report_price'] = $this->language->get('text_openbay_report_price');
		$data['text_openbay_order_import'] = $this->language->get('text_openbay_order_import');
		
		$data['text_seo'] = $this->language->get('text_seo');
		$data['text_gogettop'] = $this->language->get('text_gogettop');
		$data['text_gogettop_help'] = $this->language->get('text_gogettop_help');
		$data['text_seopult'] = $this->language->get('text_seopult');
		$data['text_seopult_help'] = $this->language->get('text_seopult_help');
		$data['text_blogun'] = $this->language->get('text_blogun');
		$data['text_blogun_help'] = $this->language->get('text_blogun_help');

		$data['analytics'] = $this->url->ssl('extension/analytics', 'token=' . $this->session->data['token'], true);
		$data['home'] = $this->url->ssl('common/dashboard', 'token=' . $this->session->data['token'], true);
		$data['affiliate'] = $this->url->ssl('marketing/affiliate', 'token=' . $this->session->data['token'], true);
		$data['api'] = $this->url->ssl('user/api', 'token=' . $this->session->data['token'], true);
		$data['attribute'] = $this->url->ssl('catalog/attribute', 'token=' . $this->session->data['token'], true);
		$data['attribute_group'] = $this->url->ssl('catalog/attribute_group', 'token=' . $this->session->data['token'], true);
		$data['backup'] = $this->url->ssl('tool/backup', 'token=' . $this->session->data['token'], true);
		$data['banner'] = $this->url->ssl('design/banner', 'token=' . $this->session->data['token'], true);
		$data['menu'] = $this->url->ssl('design/menu', 'token=' . $this->session->data['token'], true);
		$data['captcha'] = $this->url->ssl('extension/captcha', 'token=' . $this->session->data['token'], true);
		$data['category'] = $this->url->ssl('catalog/category', 'token=' . $this->session->data['token'], true);
		$data['country'] = $this->url->ssl('localisation/country', 'token=' . $this->session->data['token'], true);
		$data['contact'] = $this->url->ssl('marketing/contact', 'token=' . $this->session->data['token'], true);
		$data['coupon'] = $this->url->ssl('marketing/coupon', 'token=' . $this->session->data['token'], true);
		$data['currency'] = $this->url->ssl('localisation/currency', 'token=' . $this->session->data['token'], true);
		$data['customer'] = $this->url->ssl('customer/customer', 'token=' . $this->session->data['token'], true);
		$data['customer_fields'] = $this->url->ssl('customer/customer_field', 'token=' . $this->session->data['token'], true);
		$data['customer_group'] = $this->url->ssl('customer/customer_group', 'token=' . $this->session->data['token'], true);
		$data['custom_field'] = $this->url->ssl('customer/custom_field', 'token=' . $this->session->data['token'], true);
		$data['download'] = $this->url->ssl('catalog/download', 'token=' . $this->session->data['token'], true);
		$data['seomanager'] = $this->url->ssl('tool/seomanager', 'token=' . $this->session->data['token'], true);
		$data['error_log'] = $this->url->ssl('tool/error_log', 'token=' . $this->session->data['token'], true);
		$data['feed'] = $this->url->ssl('extension/feed', 'token=' . $this->session->data['token'], true);
		$data['filter'] = $this->url->ssl('catalog/filter', 'token=' . $this->session->data['token'], true);
		$data['fraud'] = $this->url->ssl('extension/fraud', 'token=' . $this->session->data['token'], true);
		$data['geo_zone'] = $this->url->ssl('localisation/geo_zone', 'token=' . $this->session->data['token'], true);
		$data['information'] = $this->url->ssl('catalog/information', 'token=' . $this->session->data['token'], true);
		//blog
		$data['blog_article'] = $this->url->ssl('blog/article', 'token=' . $this->session->data['token'], true);
		$data['blog_category'] = $this->url->ssl('blog/category', 'token=' . $this->session->data['token'], true);
		$data['blog_review'] = $this->url->ssl('blog/review', 'token=' . $this->session->data['token'], true);
		$data['blog_setting'] = $this->url->ssl('blog/setting', 'token=' . $this->session->data['token'], true);
		//blog
		$data['installer'] = $this->url->ssl('extension/installer', 'token=' . $this->session->data['token'], true);
		$data['language'] = $this->url->ssl('localisation/language', 'token=' . $this->session->data['token'], true);
		$data['layout'] = $this->url->ssl('design/layout', 'token=' . $this->session->data['token'], true);
		$data['location'] = $this->url->ssl('localisation/location', 'token=' . $this->session->data['token'], true);
		$data['modification'] = $this->url->ssl('extension/modification', 'token=' . $this->session->data['token'], true);
		$data['manufacturer'] = $this->url->ssl('catalog/manufacturer', 'token=' . $this->session->data['token'], true);
		$data['marketing'] = $this->url->ssl('marketing/marketing', 'token=' . $this->session->data['token'], true);
		$data['module'] = $this->url->ssl('extension/module', 'token=' . $this->session->data['token'], true);
		$data['option'] = $this->url->ssl('catalog/option', 'token=' . $this->session->data['token'], true);
		$data['order'] = $this->url->ssl('sale/order', 'token=' . $this->session->data['token'], true);
		$data['order_status'] = $this->url->ssl('localisation/order_status', 'token=' . $this->session->data['token'], true);
		$data['payment'] = $this->url->ssl('extension/payment', 'token=' . $this->session->data['token'], true);
		$data['paypal_search'] = $this->url->ssl('payment/pp_express/search', 'token=' . $this->session->data['token'], true);
		$data['product'] = $this->url->ssl('catalog/product', 'token=' . $this->session->data['token'], true);
		$data['report_sale_order'] = $this->url->ssl('report/sale_order', 'token=' . $this->session->data['token'], true);
		$data['report_sale_tax'] = $this->url->ssl('report/sale_tax', 'token=' . $this->session->data['token'], true);
		$data['report_sale_shipping'] = $this->url->ssl('report/sale_shipping', 'token=' . $this->session->data['token'], true);
		$data['report_sale_return'] = $this->url->ssl('report/sale_return', 'token=' . $this->session->data['token'], true);
		$data['report_sale_coupon'] = $this->url->ssl('report/sale_coupon', 'token=' . $this->session->data['token'], true);
		$data['report_product_viewed'] = $this->url->ssl('report/product_viewed', 'token=' . $this->session->data['token'], true);
		$data['report_product_purchased'] = $this->url->ssl('report/product_purchased', 'token=' . $this->session->data['token'], true);
		$data['report_customer_activity'] = $this->url->ssl('report/customer_activity', 'token=' . $this->session->data['token'], true);
		$data['report_customer_online'] = $this->url->ssl('report/customer_online', 'token=' . $this->session->data['token'], true);
		$data['report_customer_order'] = $this->url->ssl('report/customer_order', 'token=' . $this->session->data['token'], true);
		$data['report_customer_reward'] = $this->url->ssl('report/customer_reward', 'token=' . $this->session->data['token'], true);
		$data['report_customer_credit'] = $this->url->ssl('report/customer_credit', 'token=' . $this->session->data['token'], true);
		$data['report_marketing'] = $this->url->ssl('report/marketing', 'token=' . $this->session->data['token'], true);
		$data['report_affiliate'] = $this->url->ssl('report/affiliate', 'token=' . $this->session->data['token'], true);
		$data['report_affiliate_activity'] = $this->url->ssl('report/affiliate_activity', 'token=' . $this->session->data['token'], true);
		$data['review'] = $this->url->ssl('catalog/review', 'token=' . $this->session->data['token'], true);
		$data['return'] = $this->url->ssl('sale/return', 'token=' . $this->session->data['token'], true);
		$data['return_action'] = $this->url->ssl('localisation/return_action', 'token=' . $this->session->data['token'], true);
		$data['return_reason'] = $this->url->ssl('localisation/return_reason', 'token=' . $this->session->data['token'], true);
		$data['return_status'] = $this->url->ssl('localisation/return_status', 'token=' . $this->session->data['token'], true);
		$data['shipping'] = $this->url->ssl('extension/shipping', 'token=' . $this->session->data['token'], true);
		$data['setting'] = $this->url->ssl('setting/store', 'token=' . $this->session->data['token'], true);
		$data['stock_status'] = $this->url->ssl('localisation/stock_status', 'token=' . $this->session->data['token'], true);
		$data['tax_class'] = $this->url->ssl('localisation/tax_class', 'token=' . $this->session->data['token'], true);
		$data['tax_rate'] = $this->url->ssl('localisation/tax_rate', 'token=' . $this->session->data['token'], true);
		$data['total'] = $this->url->ssl('extension/total', 'token=' . $this->session->data['token'], true);
		$data['upload'] = $this->url->ssl('tool/upload', 'token=' . $this->session->data['token'], true);
		$data['user'] = $this->url->ssl('user/user', 'token=' . $this->session->data['token'], true);
		$data['user_group'] = $this->url->ssl('user/user_permission', 'token=' . $this->session->data['token'], true);
		$data['voucher'] = $this->url->ssl('sale/voucher', 'token=' . $this->session->data['token'], true);
		$data['voucher_theme'] = $this->url->ssl('sale/voucher_theme', 'token=' . $this->session->data['token'], true);
		$data['weight_class'] = $this->url->ssl('localisation/weight_class', 'token=' . $this->session->data['token'], true);
		$data['length_class'] = $this->url->ssl('localisation/length_class', 'token=' . $this->session->data['token'], true);
		$data['zone'] = $this->url->ssl('localisation/zone', 'token=' . $this->session->data['token'], true);
		$data['recurring'] = $this->url->ssl('catalog/recurring', 'token=' . $this->session->data['token'], true);
		$data['order_recurring'] = $this->url->ssl('sale/recurring', 'token=' . $this->session->data['token'], true);
		
		$data['gogettop'] = $this->url->ssl('howto/gogettop', 'token=' . $this->session->data['token'], true);
		$data['seopult'] = $this->url->ssl('howto/seopult', 'token=' . $this->session->data['token'], true);
		$data['blogun'] = $this->url->ssl('howto/blogun', 'token=' . $this->session->data['token'], true);

		$data['openbay_show_menu'] = $this->config->get('openbaypro_menu');
		$data['openbay_link_extension'] = $this->url->ssl('extension/openbay', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_orders'] = $this->url->ssl('extension/openbay/orderlist', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_items'] = $this->url->ssl('extension/openbay/items', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_ebay'] = $this->url->ssl('openbay/ebay', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_ebay_settings'] = $this->url->ssl('openbay/ebay/settings', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_ebay_links'] = $this->url->ssl('openbay/ebay/viewitemlinks', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_etsy'] = $this->url->ssl('openbay/etsy', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_etsy_settings'] = $this->url->ssl('openbay/etsy/settings', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_etsy_links'] = $this->url->ssl('openbay/etsy_product/links', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_ebay_orderimport'] = $this->url->ssl('openbay/ebay/vieworderimport', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_amazon'] = $this->url->ssl('openbay/amazon', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_amazon_settings'] = $this->url->ssl('openbay/amazon/settings', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_amazon_links'] = $this->url->ssl('openbay/amazon/itemlinks', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_amazonus'] = $this->url->ssl('openbay/amazonus', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_amazonus_settings'] = $this->url->ssl('openbay/amazonus/settings', 'token=' . $this->session->data['token'], true);
		$data['openbay_link_amazonus_links'] = $this->url->ssl('openbay/amazonus/itemlinks', 'token=' . $this->session->data['token'], true);
		$data['openbay_markets'] = array(
			'ebay' => $this->config->get('ebay_status'),
			'amazon' => $this->config->get('openbay_amazon_status'),
			'amazonus' => $this->config->get('openbay_amazonus_status'),
			'etsy' => $this->config->get('etsy_status'),
		);

		return $this->load->view('common/menu', $data);
	}
}
