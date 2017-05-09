<?php

class Category extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function createtable() {
    $sql = "CREATE TABLE psi (id int,name text)";
    $this->db->query($sql);
  }

  public function insertOne($id,$name) {
    $data = array(
      'id' => $id,
      'name' => $name
    );
    $this->db->insert('psi',$data);
  }

  public function all() {
    $query = $this->db->query('SELECT * FROM `psi`');
    foreach ($query->result() as $row) {
      echo $row->id.' ------ '. $row->name;
      echo "<br>";
    }
  }

  public function tables() {
    $tables = $this->db->list_tables();
    foreach ($tables as $table) {
      echo $table;
    }
  }
}