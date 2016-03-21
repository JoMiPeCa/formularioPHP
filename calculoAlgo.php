<?php

/*
var_dump($_POST);
*/
$var_a = $_POST["val_a"];
$var_b = $_POST["val_b"];
$oper = $_POST["operacionDDL"];
/*
echo $_POST["val_a"];
echo $_POST["operacionDDL"];
echo $_POST["val_b"];
*/
switch ($oper) {
    case "+":
        $suma=0.0;
        $suma = $var_a + $var_b;
        echo 'La suma de las variables es: '+$suma;

        break;
    case "-":
        $resta = 0.0;
        $resta =  $var_a - $var_b;
        echo 'La resta de las variables es: '+$resta;
        break;
    case "*":
        $multi = 0.0;
        $multi =  $var_a * $var_b;
        echo 'La resta de las variables es: '+$multi;
        break;
    case "/":
        $divi = 0.0;
        $divi =  $var_a / $var_b;
        echo 'La resta de las variables es: '+$divi;
        break;

    default:
        break;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>