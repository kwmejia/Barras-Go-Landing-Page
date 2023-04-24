<?php
require_once "Conexion.php";

class FormModel {

  static public function insertUser($table,$data) {
    $declare = Conexion::conectar()
     ->prepare("INSERT INTO $table` (nombre,correo,password,fecha_nacimiento)
     VALUES (:nombre,:correo,:password,:fecha_nacimiento)");

     $declare->bindParam(":nombre",$data["name"], PDO::PARAM_STR);
     $declare->bindParam(":correo",$data["email"], PDO::PARAM_STR);
     $declare->bindParam(":password",$data["password"], PDO::PARAM_STR);
     $declare->bindParam(":fecha_nacimiento",$data["fecha_nac"], PDO::PARAM_STR);
    
     if ($declare->execute()) {
       return "Recibido";
     }else {
      return "No Recibido";
     }
  }
}