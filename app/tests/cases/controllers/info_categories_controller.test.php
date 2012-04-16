<?php
/* InfoCategories Test cases generated on: 2012-04-15 20:04:00 : 1334490660*/
App::import('Controller', 'InfoCategories');

class TestInfoCategoriesController extends InfoCategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class InfoCategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.info_category', 'app.user', 'app.master_category', 'app.record', 'app.vouncer');

	function startTest() {
		$this->InfoCategories =& new TestInfoCategoriesController();
		$this->InfoCategories->constructClasses();
	}

	function endTest() {
		unset($this->InfoCategories);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>