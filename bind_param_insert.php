<?php

    $dsn = "mysql:host=localhost;dbname=mydb";
    $username="root";
    $password="";

    //prepare data
    $fnameValue = "chiradet";
    $ageValue = 28;
    $departmentValue = "Web development";

    try {
        
        $obj = new PDO($dsn,$username,$password);
        // echo "Connect success";
                                    // parameter                      colomn name
        $sql = "INSERT INTO employees(fname, age, department) VALUES(?,?,?)";
       
        // link column name with variable name
        $stmt = $obj->prepare($sql);
        $stmt->bindParam(1,$fnameValue,PDO::PARAM_STR);
        $stmt->bindParam(2,$ageValue,PDO::PARAM_INT);
        $stmt->bindParam(3,$departmentValue,PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt) {
            echo "Insert success";
        }
        else {
            echo "Insert fail";
        }

    } catch (PDOException $e) {
       
        echo "Connect failed : ".$e->getMessage();
    }



?>