<?php
/* Post Test cases generated on: 2011-06-22 12:56:02 : 1308714962*/
App::uses('Post', 'Model');

/**
 * Post Test Case
 *
 */
class PostTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.post');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Post = ClassRegistry::init('Post');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Post);
		ClassRegistry::flush();

		parent::tearDown();
	}

	public function testValidations() {
		// 準備
		$this->Post->create(array('title' => ''));
		// チェックする値
		$result = array_key_exists('title', $this->Post->invalidFields());
		// 期待する結果
		$expected = true;
		// テスト実行
		$this->assertEqual($result, $expected);
	}
}
