<?php
/* PostsController Test cases generated on: 2011-06-23 19:18:51 : 1308824331*/
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
class PostsControllerTestCase extends CakeTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PostsController = new TestPostsController();
		$this->Posts->constructClasses();
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

}
