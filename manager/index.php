<?php
session_start();
include"../config/koneksi.php";
/*if (empty($_SESSION['username'])) {
      header('location:../');
}else{*/
include_once 'header.php';
    switch (@$_GET['menu']) {
      //user
        case 'user':
          include 'laporan_user.php';
          break;
        case 'input-user':
          include 'create_user.php';
          break;
        case 'edit-user':
          include 'update_user.php';
          break;
      //bus
        case 'bus':
          include 'laporan_bus.php';
          break;
        case 'input-bus':
          include 'create_bus.php';
          break;
        case 'edit-bus':
          include 'update_bus.php';
          break;
      //tiket
       case 'tiket':
         include 'laporan_tiket.php';
         break;
       case 'input-tiket':
         include 'pilih_bus.php';
         break;
       case 'create-tiket':
         include 'create_tiket.php';
         break;
       case 'edit-tiket':
         include 'update_tiket.php';
         break;
      //pelanggan
       case 'pelanggan':
         include 'laporan_pelanggan.php';
         break;
      //pembayaran
      case 'pembayaran':
         include 'laporan_pembayaran.php';
         break;
         case 'laporan-pemesanan':
           include 'laporan_pemesanan.php';
           break;
      default:
      echo "<br>";
      break;
    }
include_once 'footer.php';
//}
 ?>
