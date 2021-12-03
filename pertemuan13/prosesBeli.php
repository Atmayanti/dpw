<?php
    if(isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])){
        setcookie("beliNovel", $_POST["beliBuku"]);
        setcookie("beliBuku", $_POST["beliNovel"]);
        header("location:keranjangBelanja.php");
    }
?>