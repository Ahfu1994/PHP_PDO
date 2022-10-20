<?php 

    $number1 = 10;
    $number2 = 0;

   

    try {
        if ($number2 == 0) {
            throw new Exception("Don't division by zero at line ");// send error to show message at catch
        }
        $result  = $number1/$number2;
        echo "division = ".$result;

    } catch (Exception $e) {

        echo $e->getMessage();
        echo $e->getLine();

    }



?>