<!DOCTYPE html>
    <head>
    </head>
    <body>
        <h2>Fungsi</h2>
        <?php 
            echo "Luas Lingkaran dengan jari-jari 7cm = ".luas_lingkaran(7);

            function luas_lingkaran($jari2){
                return 3.14*$jari2*$jari2;
            }
        ?>
    </body>
</html>