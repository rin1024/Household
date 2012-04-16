<?php
class MasterCategoriesController extends AppController {

	var $name = 'MasterCategories';

	function index() {
		$this->MasterCategory->recursive = 0;
		$this->set('masterCategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'master category'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('masterCategory', $this->MasterCategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MasterCategory->create();
			if ($this->MasterCategory->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'master category'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'master category'));
			}
		}
		$users = $this->MasterCategory->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'master category'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MasterCategory->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'master category'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'master category'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MasterCategory->read(null, $id);
		}
		$users = $this->MasterCategory->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'master category'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MasterCategory->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Master category'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Master category'));
		$this->redirect(array('action' => 'index'));
	}
}
?>