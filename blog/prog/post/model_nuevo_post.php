<?php

$titulo = $_REQUEST["titulo"];
$autor = $_REQUEST["autor"];
$contenido = $_REQUEST["contenido"];

include("../../phps/conexion.php");
OpenDatabase();

$rs = $mysqli->query("SET NAMES 'utf8'");

$qrystr = "INSERT INTO post
          (titulo,
          autor,
          fecha_publicacion,
          cuerpo,
          estado)
        VALUES
          ('$titulo',
          '$autor',
          NOW(),
          '$contenido',
          1)";
  
$rs = $mysqli->query($qrystr);

echo $rs;
?>