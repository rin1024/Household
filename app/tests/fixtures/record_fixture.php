<?php
/* Record Fixture generated on: 2012-04-15 21:04:43 : 1334493163 */
class RecordFixture extends CakeTestFixture {
	var $name = 'Record';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'vouncer_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'master_category_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'info_category_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'price' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'use_credit_card' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'pay_temporary' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'add_cash_payment_journal' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'add_bank_payment_journal' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'vouncer_id' => 1,
			'date' => '2012-04-15 21:32:43',
			'master_category_id' => 1,
			'info_category_id' => 1,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'price' => 1,
			'use_credit_card' => 1,
			'pay_temporary' => 1,
			'add_cash_payment_journal' => 1,
			'add_bank_payment_journal' => 1,
			'created' => '2012-04-15 21:32:43',
			'modified' => '2012-04-15 21:32:43'
		),
	);
}
?>