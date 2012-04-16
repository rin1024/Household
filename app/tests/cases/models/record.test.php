<?php
/* Record Test cases generated on: 2012-04-15 21:04:43 : 1334493163*/
App::import('Model', 'Record');

class RecordTestCase extends CakeTestCase {
	var $fixtures = array('app.record', 'app.user', 'app.info_category', 'app.master_category', 'app.vouncer');

	function startTest() {
		$this->Record =& ClassRegistry::init('Record');
	}

	function endTest() {
		unset($this->Record);
		ClassRegistry::flush();
	}

}
?>