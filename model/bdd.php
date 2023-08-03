<?php
    try{
        $pdo=new PDO('mysql: host=localhost','root','');
        $pdo->exec('CREATE DATABASE ninjafood');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
?>