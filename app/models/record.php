<?php
class Record extends AppModel {
	var $name = 'Record';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Vouncer' => array(
			'className' => 'Vouncer',
			'foreignKey' => 'vouncer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MasterCategory' => array(
			'className' => 'MasterCategory',
			'foreignKey' => 'master_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'InfoCategory' => array(
			'className' => 'InfoCategory',
			'foreignKey' => 'info_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>