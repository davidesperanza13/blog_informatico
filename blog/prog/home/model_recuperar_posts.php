<?php

$busqueda = $_REQUEST['busqueda'];

include("../../phps/conexion.php");
OpenDataBase();

$qrystr = "SELECT post_id,
				titulo,
				autor,
				DATE_FORMAT(fecha_publicacion,'%d/%m/%Y') fecha_publicacion,
				DATE_FORMAT(fecha_publicacion,'%H:%i') hora,
				estado
			FROM post
			WHERE titulo LIKE '%$busqueda%' 
			ORDER BY fecha_publicacion DESC,hora DESC";

$rs = $mysqli->query($qrystr);

while($obj = $rs->fetch_object()){
	$obj->titulo = utf8_encode($obj->titulo);
	$obj->autor = utf8_encode($obj->autor);
	$posts[] = $obj;
}

$json_response = json_encode($posts);
echo $json_response;

?>