<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "prakwebdb";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if ($connect) {
        echo "Koneksi dengan MySQL berhasil <br>";
    }
    else {
        echo "Koneksi dengan MySQL gagal".mysqli_connect_error();
    }

    $sql = "INSERT INTO product(id, product_name, harga)
            VALUES ('1', 'Pensil', '3000'),('2', 'Penghapus', '1500'),
                    ('3', 'Pulpen', '4000'),('4', 'Correction Pen', '6000')";

    if (mysqli_query($connect, $sql)) {
        echo "Data berhasil ditambahkan";
    }
    else {
        echo "Data gagal ditambahkan <br>".mysqli_error($connect);
    }

    mysqli_close($connect);
?>