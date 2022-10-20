<?php

    //prepare data
    $dsn = "mysql:host=localhost;dbname=mydb";
    $username="root";
    $password="";

    $fnameEdit = "chiradet";
    $ageEdit = 29;
    $departmentEdit = "Programmer";
    $id = 1;


    try {
        
        $obj = new PDO($dsn,$username,$password);
        // echo "Connect success";

        $sql = "UPDATE employees SET fname=?,age=?,department=? WHERE id=?";
        $stmt = $obj->prepare($sql);
        $stmt->bindParam(1,$fnameEdit);
        $stmt->bindParam(2,$ageEdit);
        $stmt->bindParam(3,$departmentEdit);
        $stmt->bindParam(4,$id);

        $stmt->execute();

        echo "Update complete";


    } catch (PDOException $e) {
       
        echo "Connect failed : ".$e->getMessage();
    }



?>