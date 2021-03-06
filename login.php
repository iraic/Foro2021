<?php
$u = $_GET['user'];
$p = $_GET['pass'];

if($u == "admin" && $p == "222"){
    echo "si";
}else{
    echo "no";
}