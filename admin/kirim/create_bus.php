<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
  <h1 class="box-title" style="font-size:150%;">Data Busr</h1>
</div>
<section class="content-header">
  <font size="4px">Tambah Data Bus</font>
</section>
<section class="content">
 <div class="box box-primary" style="width:100%;margin:0 auto;">
	<div class="box-body"  style="width:99.5%">
	  <table style="width:100%;line-height:40px;position:relative;top:-15px">
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Nama Bus</label></td><td>:</td>
          <td><input type="text" class="form-control" name="nm_bus" placeholder="" required></td>
        </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Kode Bus</label></td><td>:</td>
          <td><input type="text" class="form-control" name="nmr_bus" placeholder="" required></td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Nomor Polisi</label></td><td>:</td>
          <td><input type="text" class="form-control" name="plat_nmr" placeholder="" required></td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Kapasitas Penumpang</label></td><td>:</td>
          <td><input type="text" class="form-control" name="no_duduk" placeholder="" required></td>
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
@$nm_bus    = $_POST['nm_bus'];
@$nmr_bus       = $_POST['nmr_bus'];
@$no_duduk = $_POST['no_duduk'];
@$plat_nmr = $_POST['plat_nmr'];
if (isset($_POST['submit'])) {
  include '../config/koneksi.php';
       mysql_query("INSERT INTO bus(kd_bus, nm_bus, nmr_bus, plat_nmr, no_duduk, status) VALUES ('','$nm_bus','$nmr_bus','$plat_nmr','$no_duduk','1')");
       ?>
       <script language="javascript">
          window.location.href="?menu=bus";
       </script>
       <?php
}
 ?>
