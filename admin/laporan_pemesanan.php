<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
    <h1 class="box-title" style="font-size:150%;">Laporan Pemesanan</h1>
</div>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="row">
      <a href="print_laporan_pemesanan.php" style="color:#595757;float:right;">
      <div class="tab-pane" id="glyphicons">
        <ul class="bs-glyphicons">
          <li>
            <span class="glyphicon glyphicon-print"></span>
            <span class="glyphicon-class">Print</span>
          </li>
        </ul>
      </div><!-- /#ion-icons -->
      </a>
          <?php// if (!$note==NULL) {
          ?><!--<div class="alert alert-info alert-dismissable" style="float:right;width:30%;margin:2px -30px 0 0;padding:0 30px 0 0;overflow:hidden">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="position:relative;padding-top:7px;font-size:25px">&times;</button>
              <h4 style="padding:7px 0 0 10px"><i class="icon fa fa-info"></i><?php//  echo $note;?></h4>
            </div>--><?php
        //  }?>
          <div style="width:28%;margin:5px 15px 0 5px ;padding:0 30px 0 0;overflow:hidden">
            <font size="4px" style="float:left;padding:10px;">Data Pemesanan</font>
          </div>
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped" style="font-size:100%">
            <thead>
              <tr>
                <th width="2%">No</th>
                <th>Nama Bus</th>
                <th>Pelanggan</th>
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
                    $sql3 = mysql_query("SELECT * FROM pesan WHERE kd_tiket='$bc1[kd_tiket]'");
                    $bc3  = mysql_fetch_array($sql3);
                    $sql4 = mysql_query("SELECT * FROM pelanggan WHERE no_ktp='$bc3[no_ktp]'");
                    $bc4  = mysql_fetch_array($sql4);

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
                  <td><?php echo $bc4['nm_pelanggan']."<br>".$bc4['no_ktp']; ?></td>
                  <td><?php echo $bc1['tujuan']; ?></td>
                  <td><?php echo $bc1['tanggal']." Pukul ". $bc1['jam']." WIB"; ?></td>
                  <td><?php echo $bc1['no_duduk']; ?></td>
                  <td><?php echo $bc1['harga']; ?></td>
                  <td><?php echo "Terpesan"; ?></td>


                </tr>
              <?php
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
