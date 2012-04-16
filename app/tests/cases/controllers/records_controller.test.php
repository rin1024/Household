<?php
/* Records Test cases generated on: 2012-04-15 21:04:03 : 1334493183*/
App::import('Controller', 'Records');

class TestRecordsController extends RecordsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RecordsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.record', 'app.user', 'app.info_category', 'app.master_category', 'app.vouncer');

	function startTest() {
		$this->Records =& new TestRecordsController();
		$this->Records->constructClasses();
	}

	function endTest() {
		unset($this->Records);
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