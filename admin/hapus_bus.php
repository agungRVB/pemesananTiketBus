<?php
include '../config/koneksi.php';
    mysql_query("UPDATE bus SET status='0' WHERE kd_bus='$_GET[kd]'");
    header('location:index.php?menu=bus');
 ?>
