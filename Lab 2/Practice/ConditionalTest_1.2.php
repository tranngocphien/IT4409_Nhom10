<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conditional Test</title>
    </head>
    <body>
        <?php
        $first = $_GET["firstName"]; $middle = $_GET["middleName"]; $last = $_GET["lastName"];
        print ("Hi $first Your full name is $last $middle $first <br></br>");
        if ($first == $last){
            print ("$first and $last are equal");
        }
        if($first < $last){
            print ("$first less than $last");
        }
        if ($first > $last){
            print("$first greater than $last");
        }
        print("<br></br>");
        $grade1 = $_GET["grade1"]; $grade2= $_GET["grade2"];
        $final = $grade1 * 0.4 + $grade2 * 0.6;
        if ($final > 89){
            print("Your final grade is $final. You got A. Congratulation!! ");
        }elseif ($final >79){
             print("Your final grade is $final. You got B.");
        }elseif ($final > 69){
             print("Your final grade is $final. You got C.");
        }elseif ($final > 59){
             print("Your final grade is $final. You got D.");
        }elseif($final >=0){
             print("Your final grade is $final. You got F.");
        }else{
             print("Illegal less than 0. Final grade is $final");
        }        
        ?>
    </body>
</html>
