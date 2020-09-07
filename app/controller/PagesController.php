<?php

namespace app\controller;
use app\core\Controller;

class PagesController extends Controller {
  public function __construct() {
  }

  public function index () {
    $this->load('index/index');
  }

  public function cep () {
    $this->load('cep/index');
  }

  public function sobre () {
    $this->load('sobre/index');
  }

  public function contato () {
    $this->load('contato/index');
  }
}