<?php
function conexion(){
    try{
        $c = new PDO("mysql:host=localhost;dbname=forodb", "root", "");
        $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $c;
    }catch(PDOException $e){
        exit();
    }
}

