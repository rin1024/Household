<?php
/* Vouncer Test cases generated on: 2012-04-15 20:04:24 : 1334490624*/
App::import('Model', 'Vouncer');

class VouncerTestCase extends CakeTestCase {
	var $fixtures = array('app.vouncer', 'app.user', 'app.record', 'app.master_category', 'app.info_category');

	function startTest() {
		$this->Vouncer =& ClassRegistry::init('Vouncer');
	}

	function endTest() {
		unset($this->Vouncer);
		ClassRegistry::flush();
	}

}
?>