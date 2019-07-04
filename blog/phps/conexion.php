<?php

$c_database = "blog_informatica";
$c_conexion ="localhost";
$c_usuario ="root";
$c_password = "";
	 
function OpenDataBase()
{
 global $c_database, $c_conexion, $c_usuario, $c_password, $mysqli;
 if (isset($mysqli)) $mysqli->close();
 $mysqli = new mysqli($c_conexion, $c_usuario, $c_password, $c_database);
 if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                             }
 return $mysqli;
}

?>