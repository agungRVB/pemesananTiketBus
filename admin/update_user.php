<?php
    include '../config/koneksi.php';
    $sql=mysql_query("SELECT * FROM user WHERE id_user='$_GET[kd]'");
    $bc=mysql_fetch_array($sql);
 ?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
  <h1 class="box-title" style="font-size:150%;">Surat Keluar</h1>
</div>
<section class="content-header">
  <font size="4px">Tambah Surat Keluar</font>
</section>
<section class="content">
 <div class="box box-primary" style="width:100%;margin:0 auto;">
	<div class="box-body"  style="width:99.5%">
	  <table style="width:100%;line-height:40px;position:relative;top:-15px">
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Username</label></td><td>:</td>
          <td><input type="text" class="form-control" name="namauser" value="<?php echo $bc['namauser']; ?>" placeholder="" required></td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Password</label></td><td>:</td>
          <td><input type="text" class="form-control" name="sandi" value="<?php echo $bc['sandi']; ?>" placeholder="" required></td>
          </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Hak Akses</label></td><td>:</td>
          <td><div>
              <select name="level_akses"  class="form-control select2" required style="width:100%;">
                  <?php
                      include '../config/koneksi.php';
                        $sql2 = mysql_query("SELECT * FROM user WHERE id_user='$_GET[kd]'");
                        $bc2  = mysql_fetch_array($sql2);
                        if ($bc2['level_akses']==1) {
                            $hak_akses="Admin";
                        }elseif ($bc2['level_akses']==2) {
                            $hak_akses="Gudang";
                        }elseif ($bc2['level_akses']==3) {
                            $hak_akses="Manager";
                        }
                  ?>
                  <option value="<?php echo $bc2['level_akses'];?>"><?php echo $hak_akses; ?></option>
                  <option value="1">Administrator</option>
                  <option value="3">Manager</option>
              </select>
              <input type="hidden" name="id_server" value="<?php echo $server_items['id']?>">
              </div>
          </td>
          </div>
      </tr>
        <td></td>
        <td colspan="2"><div class="box-footer">
              <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp Save</button> &nbsp
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
@$namauser   = $_POST['namauser'];
@$sandi     = $_POST['sandi'];
@$level_akses = $_POST['level_akses'];
if (isset($_POST['submit'])) {
  include '../config/koneksi.php';
       mysql_query("UPDATE user SET namauser='$sandi', sandi='$namauser', level_akses='$level_akses' WHERE id_user='$_GET[kd]'");
       ?>
       <script language="javascript">
          window.location.href="?menu=user";
       </script>
       <?php
}
 ?>
