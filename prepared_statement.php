<?php

    $dsn = "mysql:host=localhost;dbname=mydb";
    $username="root";
    $password="";

    //prepare data
    $fnameValue = "chiradet";
    $ageValue = 25;
    $departmentValue = "Web development";

    try {
        
        $obj = new PDO($dsn,$username,$password);
        // echo "Connect success";
                                    // parameter                      colomn name
        $sql = "INSERT INTO employees(fname, age, department) VALUES(:fname,:age,:department)";
       
        // link column name with variable name
        $stmt = $obj->prepare($sql);
        $stmt->bindParam(":fname",$fnameValue);
        $stmt->bindParam(":age",$ageValue);
        $stmt->bindParam(":department",$departmentValue);
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