<?php

return function($site, $pages, $page) {

	$alert = null;

	if(r::is('post') && get('theme')) {
		if(!empty(get('website'))) {
			go($page->url());
			exit;
		}
		$data = array(
			'username' => esc(get('username')),
			'title'    => esc(get('title')),
			'price'    => esc(get('price')),
			'market'   => esc(get('market')),
			'demo'     => esc(get('demo')),
			'message'  => esc(get('message')),
			'category' => esc(get('category')),
		);
		$rules = array(
			'title'    => array('title'),
			'price'    => array('price'),
			'market'   => array('market'),
			'demo'     => array('demo'),
			'message'  => array('message'),
			'category' => array('category'),
		);
		$messages = array(
			'title'    => 'Please enter a valid title',
			'price'    => 'Please enter a valid price',
			'market'   => 'Please enter a valid market link',
			'demo'     => 'Please enter a valid demo link',
			'category' => 'Please select category',
		);
		if($invalid = invalid($data, $rules, $messages)) {
			$alert = $invalid;
		} else {

			try {
				$newTheme = $page->find('theme')->children()->create(str::slug($data['title'] . '-' . $data['username']) , 'theme', $data);
				$success  = 'Successful registration !';
				$data     = array();
			} catch(Exception $e) {
				echo 'Your registration failed: ' . $e->getMessage();
			}
		}
	}

	return compact('alert', 'data', 'success');
};