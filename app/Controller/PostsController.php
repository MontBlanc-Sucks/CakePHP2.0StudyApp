<?php
class PostsController extends AppController {

	public $name = 'Posts';

	public function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->paginate());
	}

	public function view($id = null) {
		$post = $this->Post->read(null, $id);
		if (empty($post)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set(compact('post'));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is('post')) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		if (empty($this->request->data)) {
			$this->request->data = $this->Post->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$this->request->isPost()) {
			throw new MethodNotAllowedException();
		}

		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->Post->delete($id)) {
			$this->Session->setFlash(__('Post deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Post was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
