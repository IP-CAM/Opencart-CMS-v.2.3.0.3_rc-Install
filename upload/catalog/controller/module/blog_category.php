<?php
class ControllerModuleBlogCategory extends Controller {
	public function index() {
		$this->load->language('blog/module/category');

		$data['heading_title'] = $this->language->get('heading_title');

		if (isset($this->request->get['blog_category_id'])) {
			$parts = explode('_', (string)$this->request->get['blog_category_id']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['blog_category_id'] = $parts[0];
		} else {
			$data['blog_category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('blog/category');

		$this->load->model('blog/article');

		$data['categories'] = array();

		$categories = $this->model_blog_category->getCategories(0);

		foreach ($categories as $category) {
			$children_data = array();

			if ($category['blog_category_id'] == $data['blog_category_id']) {
				$children = $this->model_blog_category->getCategories($category['blog_category_id']);

				foreach($children as $child) {
					$filter_data = array('filter_blog_category_id' => $child['blog_category_id'], 'filter_sub_category' => true);

					$children_data[] = array(
						'blog_category_id' => $child['blog_category_id'],
						'name' => $child['name'] . ($this->config->get('configblog_article_count') ? ' (' . $this->model_blog_article->getTotalArticles($filter_data) . ')' : ''),
						'href' => $this->url->link('blog/category', 'blog_category_id=' . $category['blog_category_id'] . '_' . $child['blog_category_id'])
					);
				}
			}

			$filter_data = array(
				'filter_blog_category_id'  => $category['blog_category_id'],
			);

			$data['categories'][] = array(
				'blog_category_id' => $category['blog_category_id'],
				'name'        => $category['name'] . ($this->config->get('configblog_article_count') ? ' (' . $this->model_blog_article->getTotalArticles($filter_data) . ')' : ''),
				'children'    => $children_data,
				'href'        => $this->url->link('blog/category', 'blog_category_id=' . $category['blog_category_id'])
			);
		}

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/blog/module/category.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/blog/module/category.tpl', $data);
		} else {
			return $this->load->view('default/template/blog/module/category.tpl', $data);
		}
	}
}