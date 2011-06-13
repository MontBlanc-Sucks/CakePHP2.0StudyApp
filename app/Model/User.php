<?php
/**
 * User Model
 *
 */
class User extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';

	public $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				'required' => true,
				'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minlength' => array(
				'rule' => array('minLength', 4),
				'message' => 'Must be at least 4 characters',
				//'allowEmpty' => false,
				//'required' => false,
				'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'halfCapital' => array(
				'rule' => array('custom', '/^[a-z0-9]+$/'),
				'message' => 'Half capital and digits are permitted',
				//'allowEmpty' => false,
				//'required' => false,
				'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public function beforeSave() {
		if (!empty($this->data['User']['password'])) {
			$this->set('password', AuthComponent::password($this->data['User']['password']));
		}

		return true;
	}

}
