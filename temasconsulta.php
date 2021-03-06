<?php
include 'conexion.php';

$c = conexion();
$s = $c->prepare("SELECT * FROM temas");
$s->execute();
$s->setFetchMode(PDO::FETCH_ASSOC);
$r = $s->fetchAll();

echo json_encode($r);