<?php

class AppController extends Controller {

	var $components = array(
		'Auth' => array(
			'all' => array(
				'fields' => array(
					'username' => 'username',
					'password' => 'password',
				),
			),
			'Form',
		),
		'Session',
	);

}