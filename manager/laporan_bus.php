<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
    <h1 class="box-title" style="font-size:150%;">Laporan Bus</h1>
</div>
<!-- Main content -->
<section class="content">
  <div class="row">
    <a href="print_laporan_bus.php" style="color:#595757;float:right;">
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
            <font size="4px" style="float:left;padding:10px;">Data Bus</font>
          </div>
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped" style="font-size:100%">
            <thead>
              <tr>
                <th width="2%">No</th>
                <th>Nama Bus</th>
                <th>Kode Bus</th>
                <th>Kapasitas</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $no=1;
              include '../config/koneksi.php';
              $sql1=mysql_query("select * from bus WHERE status='1'");
              while ($bc1=mysql_fetch_array($sql1)){
                /*if ($bc1['level_akses']==1) {
                    $hak_akses="Admin";
                }elseif ($bc1['level_akses']==2) {
                    $hak_akses="Gudang";
                }elseif ($bc1['level_akses']==3) {
                    $hak_akses="Manager";
                }*/
              ?><tr>
                  <td align="center"><?php echo $no; $no++;;?></td>
                  <td><?php echo $bc1['nm_bus']; ?></td>
                  <td><?php echo $bc1['nmr_bus']; ?></td>
                  <td><?php echo $bc1['no_duduk']; ?> Tempat Duduk</td>


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
