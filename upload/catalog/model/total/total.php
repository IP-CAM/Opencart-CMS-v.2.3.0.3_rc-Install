<?php
// *	@copyright	OCSHOP.CMS \ ocshop.net 2011 - 2015.
// *	@demo	http://ocshop.net
// *	@blog	http://ocshop.info
// *	@forum	http://forum.ocshop.info
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ModelTotalTotal extends Model {
	public function getTotal(&$total_data, &$total, &$taxes) {
		$this->language->load('total/total');

		$total_data[] = array(
			'code'       => 'total',
			'title'      => $this->language->get('text_total'),
			'value'      => max(0, $total),
			'sort_order' => $this->config->get('total_sort_order')
		);
	}
}