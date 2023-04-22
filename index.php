<?php
require_once "controller/ViewController.php";
require_once "controller/FormController.php";
require_once "model/Conexion.php";

$controller = new ViewController();

$controller->router();
Conexion::conectar();