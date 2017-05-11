<?php

/**
 * 表category
 *
 * @field category_id INTEGER UNSIGNED NOT NULL PK AI
 * @field category_name TEXT NOT NULL UNIQUE
 * @field parent_id INTEGER UNSIGNED DEFAULT 0
 * @field active INTEGER UNSIGNED DEFAULT 1
 */

class Category extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function insert($category_name,$parent_id,$active) {
    $data = array(
      'category_name' => $category_name,
      'parent_id' => $parent_id,
      'active' => $active
    );
    $this->db->insert('category',$data);
  }

  public function all() {
    $query = $this->db->query('SELECT * FROM `category`');
    $query->row_array();
    $json = json_encode($query);
    echo $json;
  }

  public function update() {
    $tables = $this->db->list_tables();
    foreach ($tables as $table) {
      echo $table;
    }
  }
}