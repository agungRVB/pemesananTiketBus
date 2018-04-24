<?php
    include '../config/koneksi.php';
    $sql  = mysql_query("SELECT * FROM bus WHERE kd_bus='$_GET[kd]'");
    $bc   = mysql_fetch_array($sql);
 ?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
  <h1 class="box-title" style="font-size:150%;">Tiket</h1>
</div>
<section class="content-header">
  <font size="4px">Create Tiket Perjalanan</font>
</section>
<section class="content">
 <div class="box box-primary" style="width:100%;margin:0 auto;">
	<div class="box-body"  style="width:99.5%">
	  <table style="width:100%;line-height:40px;position:relative;top:-15px">
      <tr><div class="form-group">
          <td style="font-size:90%" width="17%"><label for="exampleInputEmail1">Nama Bus</label></td><td>:</td>
          <td><?php echo $bc['nm_bus']; ?></td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Kapasitas Penumpang</label></td><td>:</td>
          <td><?php echo $bc['no_duduk']; ?> Tempat Duduk</td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Tujuan</label></td><td>:</td>
          <td><input type="text" class="form-control" name="tujuan" placeholder="" required></td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Tanggal Keberangkatan</label></td><td>:</td>
          <td><div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" name="tanggal" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
          </div></td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Jam Keberangkatan</label></td><td>:</td>
          <td><input type="text" class="form-control" name="jam" placeholder="" required></td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Harga Tiket</label></td><td>:</td>
          <td><input type="text" class="form-control" name="harga" placeholder="" required></td>
          </div>
      </tr>
        <td></td>
        <td colspan="2"><div class="box-footer">
              <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp Save</button> &nbsp
              <button type="reset" class="btn btn-primary" style="background:#713A3A">Reset</button> &nbsp
              <input type="button" class="btn btn-primary" style="color:white;font-weight:bold;background:#6B6B6B" value="Back" onclick="history.back(-1)" >
            </div>
        </td>
      </tr>
    </table>
    </div>
  </div>
</section>
</form>
<?php
@$kd_bus     = $bc['kd_bus'];
@$tujuan     = $_POST['tujuan'];
@$tanggal    = $_POST['tanggal'];
@$jam        = $_POST['jam'];
@$harga      = $_POST['harga'];
$kapasitas   = $bc['no_duduk'];
if (isset($_POST['submit'])) {
  include '../config/koneksi.php';
  for ($no_duduk=1; $no_duduk <= $kapasitas ; $no_duduk++) {
    mysql_query("INSERT INTO tiket(kd_tiket, kd_bus, tujuan, tanggal, jam, no_duduk, harga, status)
    VALUES
    ('','$kd_bus','$tujuan','$tanggal','$jam','$no_duduk','$harga','1')");
  }
       ?>
       <script language="javascript">
          window.location.href="?menu=tiket";
       </script>
       <?php
}
 ?>
