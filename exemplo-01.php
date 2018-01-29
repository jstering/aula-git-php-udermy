<!DOCTYPE html>
<!--
Codigo referente a datas em php.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $data = new DateTime();
        
        echo $data ->format("d/m/y H:i:s");
        ?>
    </body>
</html>
