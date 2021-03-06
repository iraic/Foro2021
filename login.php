<?php
include 'conexion.php';

$u = $_GET['user'];
$p = $_GET['pass'];

$c = conexion();
$s = $c->prepare("SELECT * FROM users WHERE user='$u' AND pass='$p'");
$s->execute();
$s->setFetchMode(PDO::FETCH_ASSOC);
$r = $s->fetch();

if($r){
    echo "si";
}else{
    echo "no";
}