<?php
require_once "Conexion.php";

class FormModel {

  static public function insertUser() {
     Conexion::conectar();
  }
}