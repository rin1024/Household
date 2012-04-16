<?php
/* Category Test cases generated on: 2010-05-31 17:05:44 : 1275294464*/
App::import('Model', 'Category');

class CategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.category', 'app.record');

	function startTest() {
		$this->Category =& ClassRegistry::init('Category');
	}

	function endTest() {
		unset($this->Category);
		ClassRegistry::flush();
	}

}
?>