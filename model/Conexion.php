<?php
class basedatos
{
    private $con;
    private $dbequipo = 'localhost';
    private $dbusuario = 'root';
    private $dbclave = '';
    private $dbnombre = 'web_services';

    //Método constructor

    public function __construct()
    {

        $this->conectar();

    } //fin constructor

    //función para conectarse a la base de datos

    public function conectar()
    {

        $this->con = mysqli_connect($this->dbequipo, $this->dbusuario, $this->dbclave, $this->dbnombre);

        if (mysqli_connect_error()) {
            die("Error: No se pudo conectar a la base de datos: " . mysqli_connect_error() . mysqli_connect_errno());
        }

    } //fin funcion conectar

    public function insertar_datos($nombre, $correo, $password, $fecha_nacimiento)
    {
        $sql = "Insert into usuario(nombre,correo,password,fecha_nacimiento) values('$nombre','$correo','$password','$fecha_nacimiento');";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

} //fin clase basedatos
