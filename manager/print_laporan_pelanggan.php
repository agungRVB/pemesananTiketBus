<?php
 /*$dns=$_GET['dns']; $kt=$_GET['kt'];
   include '../config/koneksi.php';
   $subsql1=mysql_query("SELECT * FROM dinas where kd_dinas='$_GET[dns]'");
   $subsql2=mysql_query("SELECT * FROM kota where kd_kota='$_GET[kt]'");
  // $subsql3=mysql_query("SELECT * FROM bidang");

       $subbc1=mysql_fetch_row($subsql1);
       $subbc2=mysql_fetch_row($subsql2);
      // $subbc3=mysql_fetch_row($subsql3);

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/foxitReader");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=LAPORAN.xls");

// Tambahkan table
*/
?>
<section class="content-header" style="width:100%">
     <center><img src="../images/logo.jpeg" width="400" height="50" onClick="javascript:window.print()" />  <h2>LAPORAN DATA PELANGGAN</h2></center>
    </section>
    <div>
      <p>
AGEN BUS BU ISMIATI BAWEN <br>
Jl. Slamet Riyadi, Bawen-Salatiga No. 22, Bawen, Semarang. <br>
Telp : 08122550648 / 085716765330</p>

    </div>
				<table  class="table table-bordered table-striped" border="1" style="font-size:100%">
                    <thead>
                      <tr style="background-color:grey;">
                        <th width="2%">No</th>
                        <th>Nama Pelanggan</th>
                        <th>No. KTP</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                      include '../config/koneksi.php';
                      $sql1=mysql_query("SELECT * FROM pelanggan");
                      while ($bc1=mysql_fetch_array($sql1)){
                          if ($bc1['jns_kelamin']==1) {
                              $jenis_kelamin="Laki-laki";
                          }elseif ($bc1['jns_kelamin']==2) {
                              $jenis_kelamin="Perempuan";
                          }
                      ?><tr>
                          <td align="center"><?php echo $no; $no++;;?></td>
                          <td><?php echo $bc1['nm_pelanggan']; ?></td>
                          <td><?php echo $bc1['no_ktp']; ?></td>
                          <td><?php echo $jenis_kelamin; ?></td>
                          <td><?php echo $bc1['alamat']; ?></td>
                          <td><?php echo $bc1['no_telp']; ?></td>
                              <?php
                            }
                          ?>
                    </tbody>
                  </table>
                  <span align="right">
                    <p style="align:right;">
                  <br>  Bawen,  <?php include '../config/tanggal.php'; ?> <br>
                        Pimpinan <br> <br>

                       ( Ismiyati )
                    </p>
                  </span>
