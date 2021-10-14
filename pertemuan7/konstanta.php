<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            $var = "Ini adalah contoh variable";
            echo $var;
            echo "<br><br>";
            define('konstanta', 'ini adalah contoh konstanta'/*, true*/); 
            //key true tidak dapat digunakan karena tidak support
            echo konstanta;
            echo "<br>";
            echo konstanta;
            //echo KONSTANTA; php saya tidak support dengan case sensitive
        ?>
    </body>
</html>