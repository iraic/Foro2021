<?php
include 'conexion.php';

$tema = $_GET['tema'];
$desc = $_GET['desc'];

$c = conexion();
$s = $c->prepare("INSERT INTO temas(tema,descripcion) VALUES(:t,:d)");
$s->bindValue(":t", $tema);
$s->bindValue(":d", $desc);
$s->execute();

if($s->rowCount() > 0){
    echo "si";
}else{
    echo "no";
}