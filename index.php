<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form action="calculoAlgo.php" method="POST">
            Valor A:<br>
            <input type="text" name="val_a"><br><br>

            <select name="operacionDDL">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><br><br>

            Valor B:<br>
            <input type="text" name="val_b">

            <input type="submit" value="Enviar">
        </form>



        <?php
        // put your code here
        ?>
    </body>

</html>
