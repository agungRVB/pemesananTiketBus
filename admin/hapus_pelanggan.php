<?php
include '../config/koneksi.php';
    mysql_query("UPDATE pelanggan SET status='0' WHERE id_pelanggan='$_GET[kd]'");
    header('location:index.php?menu=pelanggan');
 ?>
