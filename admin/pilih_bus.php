<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
    <h1 class="box-title" style="font-size:150%;">Pilih Armada Bus</h1>
</div>
<!-- Main content -->
<section class="content">
  <div class="row">
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
                <th width="15%">Action</th>
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

                  <td align="center">
                      <a class="action" href="?menu=create-tiket&kd=<?php echo $bc1['kd_bus']; ?>" style="padding:2.3px 4px 2.3px 8px;" >
                        <i class="fa fa-ticket" style="color:green;"> </i>Pilih Bus
                      </a>
                  </td>
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
