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
     <center><img src="../images/logo.jpeg" width="400" height="50" onClick="javascript:window.print()" />  <h2>LAPORAN DATA PEMBAYARAN</h2></center>
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
                        <th>Atas Nama</th>
                        <th>Tiket</th>
                        <th>Tanggal Pembayaran</th>
                        <th>No. Rekening</th>
                        <th>Bank Tujuan</th>
                        <th>Jumlah Transver</th>
                        <th>keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                        include '../config/koneksi.php';
                        $sql1=mysql_query("SELECT * FROM pembayaran");
                        while ($bc1=mysql_fetch_array($sql1)){
                            //tiket
                              $sql2 = mysql_query("SELECT * FROM tiket WHERE kd_tiket='$bc1[kd_tiket]'");
                              $bc2  = mysql_fetch_array($sql2);
                            //bus
                              $sql3 = mysql_query("SELECT * FROM bus WHERE kd_bus='$bc2[kd_bus]'");
                              $bc3  = mysql_fetch_array($sql3);
                            //pelanggan
                              $sql4 = mysql_query("SELECT * FROM pelanggan WHERE no_ktp='$bc1[no_ktp]'");
                              $bc4  = mysql_fetch_array($sql4);

                            if ($bc1['status']==1) {
                                $status="Belum Tervalidasi";
                            }elseif ($bc1['status']==2) {
                                $status="Tervalidasi";
                            }

                            if ($bc1['bank_tujuan']==1) {
                              $bank = "Bank BCA";
                            }elseif ($bc1['bank_tujuan']==2) {
                              $bank = "Bank Mandiri";
                            }elseif ($bc1['bank_tujuan']==3) {
                              $bank = "Bank BRI";
                            }elseif ($bc1['bank_tujuan']==4) {
                              $bank = "Bank BNI";
                            }
                        ?><tr>
                            <td align="center"><?php echo $no; $no++;;?></td>
                            <td><?php echo $bc4['nm_pelanggan']."<br>".$bc4['no_ktp']; ?></td>
                            <td><?php echo $bc3['nm_bus']."<br>".$bc2['tujuan']."<br>".$bc2['tanggal']."<br>".$bc2['jam']; ?></td>
                            <td><?php echo $bc1['tanggal'];?></td>
                            <td><?php echo $bc1['rek_asal']; ?></td>
                            <td><?php echo $bank; ?></td>
                            <td><?php echo $bc1['total']; ?></td>
                            <td><?php echo $status; ?></td>


                              <?php
                            }
                          ?>
                    </tbody>
                  </table>
                  <?php
                        include '../config/koneksi.php';
                        $sumq   = mysql_query("SELECT sum(total) as total FROM pembayaran");
                        $bcsum  = mysql_fetch_array($sumq);

                        $total = $bcsum['total'];
                  ?>

                      <div style="font-size:16pt; align:right;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                          total pembayaran : <?php echo $total; ?>
                      </div>
                  <span align="right">
                    <p style="align:right;">
                  <br>  Bawen,  <?php include '../config/tanggal.php'; ?> <br>
                        Pimpinan <br> <br>

                       ( Ismiyati )
                    </p>
                  </span>
