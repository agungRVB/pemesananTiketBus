<?php
include '../config/koneksi.php';
    mysql_query("UPDATE tiket SET status='0' WHERE kd_tiket='$_GET[kd]'");
    header('location:index.php?menu=tiket');
 ?>
