<?php
require_once "model/Conexion.php";
require_once "model/FormModel.php";

class FormController
{

    public static function formRegister()
    {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $fecha_nac = $_POST['fecha_nac'];
        $table = "usuario";

        $db = conectarDB();

        var_dump($db);
        exit;
        $query = "INSERT INTO $table` (nombre,correo,password,fecha_nacimiento)
     VALUES ('$name','$email','$password','$fecha_nac')";
        $resultado = mysqli_query($db, $query);
        echo $resultado;
    }
}
