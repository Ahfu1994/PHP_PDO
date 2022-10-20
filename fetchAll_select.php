<?php

    $dsn = "mysql:host=localhost;dbname=mydb";
    $username="root";
    $password="";

    try {
        
        $obj = new PDO($dsn,$username,$password);
        // echo "Connect success";
       
        $sql = "SELECT * FROM employees";

        $result = $obj->query($sql);

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "employee ID:".$row['id']."<br>";
            echo "employee Name:".$row['fname']."<br>";
            echo "employee Age:".$row['age']."<br>";
            echo "employee Department:".$row['department']."<br>";
            echo "<hr>";
        }


    } catch (PDOException $e) {
       
        echo "Connect failed : ".$e->getMessage();
    }



?>