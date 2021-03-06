<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake.libs.model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Load Model and AppModel
 */
App::uses('AppModel', 'Model');

/**
 * Access Request Object
 *
 * @package       cake.libs.model
 */
class Aro extends AclNode {

/**
 * Model name
 *
 * @var string
 * @access public
 */
	public $name = 'Aro';

/**
 * AROs are linked to ACOs by means of Permission
 *
 * @var array
 * @access public
 */
	public $hasAndBelongsToMany = array('Aco' => array('with' => 'Permission'));
}
