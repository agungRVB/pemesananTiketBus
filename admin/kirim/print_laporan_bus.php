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
	         <center><img src="../images/logo.jpeg" width="400" height="50" onClick="javascript:window.print()" /> <h2>LAPORAN DATA BUS</h2></center>
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
												<th>Kode Bus</th>
												<th>Nomor Polisi</th>
                        <th>Kapasitas</th>
                      </tr>
                    </thead>
                    <tbody>
                              <?php
                          $a=1;
                              include '../config/koneksi.php';
                              $sql=mysql_query("SELECT * FROM bus WHERE status='1'");
                              while($bc=mysql_fetch_row($sql)){

                              ?><tr>
                                    <td><?php echo $a; $a++;?></td>
                                    <td><?php echo $bc['1'];?></td>
                                    <td><?php echo $bc['2'];?></td>
                                    <td><?php echo $bc['3'];?></td>
																		<td><?php echo $bc['4'];?></td>
                                </tr>
                              <?php
                            }
                          ?>
                    </tbody>
                  </table>

                  <span align="right">
                    <p style="align:right;">
                  <br>  Bawen, <?php include '../config/tanggal.php'; ?> <br>
                        Pimpinan <br> <br>

                       ( Ismiyati )
                    </p>
                  </span>
