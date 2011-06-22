<?php
/**
 * Users Controller
 *
 */
class UsersController extends AppController {

	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(
			'register',
			'login',
			'logout'
		);
	}

/**
 * add method
 *
 * @return void
 */
	function register() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->Auth->login($this->User->getLastInsertId());
				$this->redirect(array('controller' => 'posts', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
	}

	function login() {
	}

	function logout() {
		$redirectTo = $this->Auth->logout();
		$this->Session->setFlash('Successfully logged out');
		$this->redirect($redirectTo);
	}

}
