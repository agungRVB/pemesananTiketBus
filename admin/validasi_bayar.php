<?php
include '../config/koneksi.php';
    mysql_query("UPDATE pembayaran SET status='2' WHERE kd_bayar='$_GET[kd]'");
    header('location:index.php?menu=pembayaran');
 ?>
