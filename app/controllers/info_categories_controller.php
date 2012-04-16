<?php
class InfoCategoriesController extends AppController {

	var $name = 'InfoCategories';

	function index() {
		$this->InfoCategory->recursive = 0;
		$this->set('infoCategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'info category'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('infoCategory', $this->InfoCategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->InfoCategory->create();
			if ($this->InfoCategory->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'info category'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'info category'));
			}
		}
		$users = $this->InfoCategory->User->find('list');
		$masterCategories = $this->InfoCategory->MasterCategory->find('list');
		$this->set(compact('users', 'masterCategories'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'info category'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->InfoCategory->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'info category'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'info category'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->InfoCategory->read(null, $id);
		}
		$users = $this->InfoCategory->User->find('list');
		$masterCategories = $this->InfoCategory->MasterCategory->find('list');
		$this->set(compact('users', 'masterCategories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'info category'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->InfoCategory->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Info category'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Info category'));
		$this->redirect(array('action' => 'index'));
	}
}
?>