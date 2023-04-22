<?php
require_once "model/Conexion.php";
require_once "model/FormModel.php";

class FormController {

  static public function  formRegister() {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fecha_nac = $_POST['fecha_nac'];
    $table ="users";

    $data = array( "name" =>  $name , "password" =>  $password , "email" => $email, "fecha_nac" =>  $fecha_nac, $table);
    $response = FormModel::insertUser($table,$data);

    return $response;
  }
}