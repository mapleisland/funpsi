<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {

  public function index() {
    $this->output->set_content_type('text/plain');
    echo 'hello';
    if(isset($_GET['id'])) {
      echo $_GET['id'];
    }
  }

  public function insert() {
    $id = 0;
    $name = 3;
    $this->output->set_content_type('text/plain');
    if(isset($_POST['id'])) {
      $id = $_POST['id'];
    }
    if(isset($_POST['name'])) {
      $name = $_POST['name'];
    }
    $this->load->model('Category');
    $a = $this->Category->insertOne($id,$name);
    echo $a;
  }

  public function all() {
    $this->output->set_content_type('text/plain');
    $this->load->model('Category');
    $a = $this->Category->all();
    echo $a;
  }

  public function tables() {
    $this->output->set_content_type('text/plain');
    $this->load->model('Category');
    $a = $this->Category->tables();
    echo $a;
  }

}