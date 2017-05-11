<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_category extends CI_Controller {

  public function index() {
    $this->output->set_content_type('text/plain');
    echo 'hello';
    if(isset($_GET['id'])) {
      echo $_GET['id'];
    }
  }

  public function insert() {
    $category_name = "饮料";
    $parent_id = 0;
    $active = 1;
    $this->load->model('Category');
    $a = $this->Category->insert($category_name,$parent_id,$active);
    echo $a;
  }

  public function all() {
    $this->output->set_content_type('application/json');
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