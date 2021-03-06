<?php
include 'conexion.php';

$id = $_GET['id'];
$tema = $_GET['tema'];
$desc = $_GET['desc'];

$c = conexion();
$s = $c->prepare("UPDATE temas SET tema=:t, descripcion=:d WHERE id=:id");
$s->bindValue(":t", $tema);
$s->bindValue(":d", $desc);
$s->bindValue(":id", $id);
$s->execute();

if($s->rowCount() > 0){
    echo "si";
}else{
    echo "no";
}