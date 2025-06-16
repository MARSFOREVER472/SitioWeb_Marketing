<?php
$host_name = "localhost";
$database = "registro_usuarios";
$user_name = "root";
$password = "abcdefg123456789";

$conexion = mysql_connect($host_name, $user_name, $password, $database);

if (mysqli_errno($conexion))
{
  echo "Error al conectar con la base de datos";
}
else
{
  echo "Me conecté con la base de datos";
}