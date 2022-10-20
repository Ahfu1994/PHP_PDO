<?php

    $dsn = "mysql:host=localhost;dbname=mydb";
    $username="root";
    $password="";

    try {
        
        $conn = new PDO($dsn,$username,$password);
        // echo "Connect success";
        $sql = "INSERT INTO employees(fname, age, department) VALUES('fu', 27, 'Web development')";
        $result = $conn->exec($sql);

        if ($result) {
            echo "Insert success";
        }
        else {
            echo "Insert fail";
        }

    } catch (PDOException $e) {
       
        echo "Connect failed : ".$e->getMessage();
    }



?>