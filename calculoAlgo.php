<?php

require 'funciones.php';

/*
var_dump($_POST);
*/

/* VALIDACIÓN DEL ENVÍO DEL INPUT*/
if ((!isset($_POST["val_a"])) || (!isset($_POST["val_a"]))){
    exit("No fue recibida la variable A o B");
}
/*VALIDACIÓN DEL ENVÍO DE VALORES*/
if (($_POST["val_a"])=="" || ($_POST["val_a"])==""){
        exit("No fue recibida la variable A o B");
}
$var_a = $_POST["val_a"];
$var_b = $_POST["val_b"];
$oper = $_POST["operacionDDL"];
/*
echo $_POST["val_a"];
echo $_POST["val_b"];
echo $_POST["operacionDDL"];
*/

switch ($oper) {
    case "+": $resultado= sumar($var_a, $var_b);
        break;
    case "-": $resultado= restar($var_a, $var_b);
        break;
    case "*": $resultado= multiplicar($var_a, $var_b);
        break;
    case "/": $resultado= dividir($var_a, $var_b);
        break;
    default:
        echo 'Simbolo desconocido';
        break;
}

echo "El resultado es $resultado";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
