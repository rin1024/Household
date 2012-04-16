<?php
/* User Fixture generated on: 2012-04-15 21:04:52 : 1334492272 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'mail' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'pass' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'permission' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'mail' => 'Lorem ipsum dolor sit amet',
			'pass' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'permission' => 1,
			'created' => '2012-04-15 21:17:52'
		),
	);
}
?>