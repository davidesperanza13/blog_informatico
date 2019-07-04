<?php

$post_id = $_REQUEST["post_id"];
include("../../phps/conexion.php");
OpenDataBase();

$qrystr = "SELECT post_id,
				titulo,
				autor,
				DATE_FORMAT(fecha_publicacion,'%d/%m/%Y') fecha_publicacion,
				DATE_FORMAT(fecha_publicacion,'%H:%i') hora,
				cuerpo,
				estado
			FROM post
			WHERE post_id = $post_id 
			ORDER BY fecha_publicacion DESC";

$rs = $mysqli->query($qrystr);

while($obj = $rs->fetch_object()){
	$obj->titulo = utf8_encode($obj->titulo);
	$obj->cuerpo = utf8_encode($obj->cuerpo);
	$obj->autor = utf8_encode($obj->autor);
	$post = $obj;
}

$json_response = json_encode($post);
echo $json_response;

?>