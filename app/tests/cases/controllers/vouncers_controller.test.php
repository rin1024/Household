<?php
/* Vouncers Test cases generated on: 2012-04-15 20:04:41 : 1334490701*/
App::import('Controller', 'Vouncers');

class TestVouncersController extends VouncersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VouncersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.vouncer', 'app.user', 'app.record', 'app.master_category', 'app.info_category');

	function startTest() {
		$this->Vouncers =& new TestVouncersController();
		$this->Vouncers->constructClasses();
	}

	function endTest() {
		unset($this->Vouncers);
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