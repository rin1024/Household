<?php
class RecordsController extends AppController {
  var $name = 'Records';

  function index() {
    $this->Record->recursive = 0;
    $this->set('records', $this->paginate());
  }

  function view($id = null) {
    if (!$id) {
      $this->Session->setFlash(sprintf(__('Invalid %s', true), 'record'));
      $this->redirect(array('action' => 'index'));
    }
    $this->set('record', $this->Record->read(null, $id));
  }

  function add() {
    if (!empty($this->data)) {
      // 日付のフォーマットをCake仕様にそわせる
      $this->data['Record']['date'] = sprintf("%s 00:00:00", $this->data['Record']['date']);

      // 保存
      $this->Record->create();
      if ($this->Record->save($this->data)) {
        $this->Session->setFlash(sprintf(__('The %s has been saved', true), 'record'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'record'));
      }
    }
    //$users = $this->Record->User->find('list');
    $vouncers = $this->Record->Vouncer->find('list');
    $masterCategories = $this->Record->MasterCategory->find('list');
    $infoCategories = $this->Record->InfoCategory->find('list');
    $this->set(compact('users', 'vouncers', 'masterCategories', 'infoCategories'));
  }

  function edit($id = null) {
    if (!$id && empty($this->data)) {
      $this->Session->setFlash(sprintf(__('Invalid %s', true), 'record'));
      $this->redirect(array('action' => 'index'));
    }
    if (!empty($this->data)) {
      if ($this->Record->save($this->data)) {
        $this->Session->setFlash(sprintf(__('The %s has been saved', true), 'record'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'record'));
      }
    }
    if (empty($this->data)) {
      $this->data = $this->Record->read(null, $id);
    }
    $users = $this->Record->User->find('list');
    $vouncers = $this->Record->Vouncer->find('list');
    $masterCategories = $this->Record->MasterCategory->find('list');
    $infoCategories = $this->Record->InfoCategory->find('list');
    $this->set(compact('users', 'vouncers', 'masterCategories', 'infoCategories'));
  }

  function delete($id = null) {
    if (!$id) {
      $this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'record'));
      $this->redirect(array('action'=>'index'));
    }
    if ($this->Record->delete($id)) {
      $this->Session->setFlash(sprintf(__('%s deleted', true), 'Record'));
      $this->redirect(array('action'=>'index'));
    }
    $this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Record'));
    $this->redirect(array('action' => 'index'));
  }
}
?>
