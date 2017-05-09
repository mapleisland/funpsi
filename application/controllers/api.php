<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {

  public function index() {
    $this->output->set_content_type('application/json');
    echo '{"message": "hello world!"}';
  }

  public function readline() {
    $this->output->set_content_type('application/json');
    echo '{"message": "hello readline!"}';
  }

}