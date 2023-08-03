<?php
    try{
        $pdo=new PDO('mysql: host=localhost;dbname=ninjafood','root','');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
    
?>