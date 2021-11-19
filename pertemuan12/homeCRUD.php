<html>

<head>
    <title>Data Produk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="insertForm.html">Tambah Data</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";

        $query = "SELECT * FROM product";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["product_name"] ?></td>
                    <td><?php echo $row["harga"] ?></td>
                    <td>
                        <a href="editForm.php?id=<?php echo $row['id'] ?>">Edit</a>
                        <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "0 result";
        }
        ?>
    </table>
</body>

</html>