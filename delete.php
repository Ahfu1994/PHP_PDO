<?php

    //prepare data
    $dsn = "mysql:host=localhost;dbname=mydb";
    $username="root";
    $password="";

    $id = 2;


    try {
        
        $obj = new PDO($dsn,$username,$password);
        // echo "Connect success";

        $sql = "DELETE FROM employees WHERE id=?";

        $stmt = $obj->prepare($sql);
        $stmt->bindParam(1,$id);
       
       //operate delete data 
       $stmt->execute();
       echo "Delete data complete";

    } catch (PDOException $e) {
       
        echo "Connect failed : ".$e->getMessage();
    }



?>