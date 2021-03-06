<?php
include 'conexion.php';

$id = $_GET['id'];

$c = conexion();
$s = $c->prepare("DELETE FROM temas WHERE id=:id");
$s->bindValue(":id", $id);
$s->execute();

if($s->rowCount() > 0){
    echo "si";
}else{
    echo "no";
}