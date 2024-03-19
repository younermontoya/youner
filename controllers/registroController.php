<?php
//importamos las dependencias
require_once "../../gym-youner/models/conexion_db.php";
require_once '../../gym-youner/models/consultasUsuario.php';
//captura en variables los datos enviados 
//desde el formulario a travez ddel metodo post y los name de los campos


$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$objConsultas = new ConsultaUsuario();
    $result = $objConsultas->registrarUsuario($email,$contrasena);
    
echo "<script> location.href='../index.html'</script> ";

?>