<?php

namespace app\controller;
use app\core\Controller;

class ErrorController extends Controller {
  public function error_404 () {
    http_response_code(404);
    $this->load('error/index', [
      'error' => '404',
      'message' => 'A página solicitada não foi encontrada'
    ]);
  }
}