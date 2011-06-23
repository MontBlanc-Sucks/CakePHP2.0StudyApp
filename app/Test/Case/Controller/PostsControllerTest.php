<?php
/* PostsController Test cases generated on: 2011-06-23 19:18:51 : 1308824331*/
App::uses('Controller', 'Controller');
App::uses('AppController', 'Controller');
App::uses('PostsController', 'Controller');

/**
 * TestPostsController 
 *
 */
class TestPostsController extends PostsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;
/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}
/**
 * PostsController Test Case
 *
 */
class PostsControllerTestCase extends ControllerTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PostsController = new TestPostsController();
		$this->PostsController->constructClasses();
	}
/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PostsController);
		ClassRegistry::flush();

		parent::tearDown();
	}

	public function testIndex() {
		$this->testAction('/posts/index');
		$this->assertType('array', $this->vars['posts']);
	}

}
