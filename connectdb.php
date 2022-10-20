<?php

    $dsn = "mysql:host=localhost;dbname=mydb";
    $username="root";
    $password="";

    try {
        
        $conn = new PDO($dsn,$username,$password);
        echo "Connect success";
        

    } catch (PDOException $e) {
       
        echo "Connect failed : ".$e->getMessage();
    }



?>