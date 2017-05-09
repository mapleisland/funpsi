<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class start extends CI_Controller {

  public function index() {
    $this->load->view('start');
  }

	public function about() {
		$this->load->view('about');
	}
}
