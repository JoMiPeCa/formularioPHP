<?php

require 'funcion.php';

/*
var_dump($_POST);
*/
if(!isset($_POST["val_a"]) || !isset($_POST["val_b"])){
    exit("No esta seteado el valor A o el valor B");
}
if($_POST["val_a"]=="" || $_POST["val_b"]==""){
    exit("No envio el valor A o el valor B");
}

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
        $resultado = suma($var_a,$var_b);
        break;
    case "-":
        $resultado = resta($var_a,$var_b);
        break;
    case "*":
        $resultado = multiplicacion($var_a,$var_b);
        break;
    case "/":
        $resultado = division($var_a,$var_b);
        break;

    default:
        $resultado = "Simbolo no registrado";
        break;
}

echo "El resultado de $var_a $oper $var_b es $resultado";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>