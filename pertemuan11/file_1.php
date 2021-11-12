<html>
    <head>
    </head>
    <body>
        <?php 
            $myFile = "testFile.txt";
            $fh = fopen($myFile, 'r');
            $theData = fgets($fh);
            echo $theData;
        ?>
    </body>
</html>