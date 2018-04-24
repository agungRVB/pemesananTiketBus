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
     <center><img src="../images/logo.jpeg" width="400" height="50" onClick="javascript:window.print()" />  <h2>LAPORAN DATA PEMESANAN</h2></center>
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
                        <th>Nama Bus</th>
                        <th>Tujuan</th>
                        <th>Keberangkatan</th>
                        <th>Nomor Duduk</th>
                        <th>Harga</th>
                        <th>keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                        include '../config/koneksi.php';
                        $sql1=mysql_query("SELECT * FROM tiket WHERE status='3'");
                        while ($bc1=mysql_fetch_array($sql1)){
                              $sql2 = mysql_query("SELECT * FROM bus WHERE kd_bus='$bc1[kd_bus]'");
                              $bc2  = mysql_fetch_array($sql2);
                            if ($bc1['status']==1) {
                                $status="Tiket Siap";
                            }elseif ($bc1['status']==2) {
                                $status="Tiket Terpesan";
                            }elseif ($bc1['status']==3) {
                                $status="Terpesan";
                            }
                        ?><tr>
                            <td align="center"><?php echo $no; $no++;;?></td>
                            <td><?php echo $bc2['nm_bus']." ".$bc2['nmr_bus']; ?></td>
                            <td><?php echo $bc1['tujuan']; ?></td>
                            <td><?php echo $bc1['tanggal']." Pukul ". $bc1['jam']." WIB"; ?></td>
                            <td><?php echo $bc1['no_duduk']; ?></td>
                            <td><?php echo $bc1['harga']; ?></td>
                            <td><?php echo "Terpesan"; ?></td>


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
