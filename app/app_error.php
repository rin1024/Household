<?php
class AppError extends ErrorHandler {
  /**
   * 通常ページでのエラー
   */
  function SystemError($params) {
    $this->controller->set('message', $params['message']);
    $this->_outputMessage('system_error');
  }
  /**
   * セキュアページでのエラー
   */
  function SystemErrorSecure($params) {
    $this->controller->set('message', $params['message']);
    $this->_outputMessage('system_error');
  }
}
?>

