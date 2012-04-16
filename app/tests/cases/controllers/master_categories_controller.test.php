<?php
/* MasterCategories Test cases generated on: 2012-04-15 20:04:08 : 1334490668*/
App::import('Controller', 'MasterCategories');

class TestMasterCategoriesController extends MasterCategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MasterCategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.master_category', 'app.user', 'app.info_category', 'app.record', 'app.vouncer');

	function startTest() {
		$this->MasterCategories =& new TestMasterCategoriesController();
		$this->MasterCategories->constructClasses();
	}

	function endTest() {
		unset($this->MasterCategories);
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