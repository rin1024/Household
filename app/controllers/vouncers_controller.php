<?php
class VouncersController extends AppController {

	var $name = 'Vouncers';

	function index() {
		$this->Vouncer->recursive = 0;
		$this->set('vouncers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'vouncer'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('vouncer', $this->Vouncer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Vouncer->create();
			if ($this->Vouncer->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'vouncer'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'vouncer'));
			}
		}
		$users = $this->Vouncer->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'vouncer'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Vouncer->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'vouncer'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'vouncer'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Vouncer->read(null, $id);
		}
		$users = $this->Vouncer->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'vouncer'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Vouncer->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Vouncer'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Vouncer'));
		$this->redirect(array('action' => 'index'));
	}
}
?>