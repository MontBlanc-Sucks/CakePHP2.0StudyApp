<?php

class AppController extends Controller {

	var $components = array(
		'Auth' => array(
			'fields' => array(
				'username' => 'username',
				'password' => 'password',
			),
		),
		'Session',
	);

}