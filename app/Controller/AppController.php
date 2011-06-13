<?php

class AppController extends Controller {

	public $components = array(
		'Auth' => array(
			'authenticate' => array(
				'all' => array(
					'fields' => array(
						'username' => 'username',
						'password' => 'password',
					),
				),
				'Form' => array(
				),
			),
		),
		'Session',
	);

}