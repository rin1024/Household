<?php
/* User Test cases generated on: 2012-04-15 21:04:53 : 1334492273*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.info_category', 'app.master_category', 'app.record', 'app.vouncer');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
?>