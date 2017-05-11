<?php


class Init extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function createTableCategory() {
    $sql = "CREATE TABLE category (
              category_id INTEGER PRIMARY KEY AUTOINCREMENT,
              category_name TEXT NOT NULL UNIQUE,
              parent_id INTEGER NOT NULL DEFAULT 0,
              active INTEGER NOT NULL DEFAULT 1
            )";
    $this->db->query($sql);
  }

  public function createTableGoods() {
    $sql = "CREATE TABLE goods (
              goods_id INTEGER PRIMARY KEY AUTOINCREMENT,
              goods_name TEXT NOT NULL UNIQUE,
              category_id INTEGER NOT NULL DEFAULT 0,
              barcode TEXT NOT NULL DEFAULT 1
            )";
    $this->db->query($sql);
  }



}

