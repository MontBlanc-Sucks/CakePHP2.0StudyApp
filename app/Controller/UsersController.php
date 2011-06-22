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
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->Auth->login($this->User->getLastInsertId());
				$this->redirect(array('controller' => 'posts', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

	function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Auth->flash('Successfully logged in!');
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Auth->flash('Username or password was wrong');
			}
		}
	}

	function logout() {
		$redirectTo = $this->Auth->logout();
		$this->Auth->flash('Successfully logged out');
		$this->redirect($redirectTo);
	}

}
