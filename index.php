<?php include 'header.php'; ?>

        <?php
            switch (@$_GET['menu']) {
              //pesan
              case 'pesan':
                ?>
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h3 class="box-title">Pemesanan Tiket</h3>
                  </div>
                  <div class="box-body">
                    <?php include 'pesan.php'; ?>
                <?php
                break;
                case 'status-pesan':
                  ?>
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Status Pemesanan Tiket</h3>
                    </div>
                    <div class="box-body">
                      <?php include 'pembayaran_tiket.php'; ?>
                  <?php
                  break;
                //pilih tiket
                case 'pilih-tiket':
                  ?>
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Pemesanan Tiket</h3>
                    </div>
                    <div class="box-body">
                      <?php include 'pilih_tiket.php'; ?>
                  <?php
                  break;
                  //
                  case 'input-pelanggan':
                    ?>
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Pemesanan Tiket</h3>
                      </div>
                      <div class="box-body">
                        <?php include 'create_pelanggan.php'; ?>
                    <?php
                    break;
                    //save-bayar
                    case 'save-bayar':
                      ?>
                      <div class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title"></h3>
                        </div>
                        <div class="box-body">
                          <?php include 'save_bayar.php'; ?>
                      <?php
                      break;

                    case 'cara-pesan':
                      ?>
                      <div class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title">Cara Pemesanan Tiket</h3>
                        </div>
                        <div class="box-body">
                        <div style="">
                      <center>  <h3> Prosedur Pemesanan Tiket <br>
                          Pada Agen Bus Bu Ismiyati Bawen</h3><center>
                        </div>
<p style="font-size:14pt;">Agen Bus Bu Ismiati membuka pemesanan tiket bus secara on line untuk mempermudah pelanggan dalam memesan tiket. Hal ini dapat menghemat waktu pelanggan karena tidak perlu datang langsung ke agen.
Hal-hal yang perlu dilakukan dalam proses pemesanan tiket meliputi :</p>
<p style="font-size:14pt;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.	Mengunjungi website pemesanan tiket Agen Bus Bu Ismiati Bawen <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.	Mengisi data diri pelanggan secara lengkap <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.	Memilih tiket bus yang diinginkan <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.	Setelah memilih tiket dan mengisi data diri secara lengkap, pelanggan dapat melakukan transaksi pembayaran. Dapat melalui &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bank atau transfer melalui ATM. Dengan catatan batas pembayaran maksimal 2 jam setelah proses pemesanan tiket.
Transfer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pembayaran dapat ditujukan kepada : <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a.	Bank BRI a/n Siti Sundari 660501008793530 <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b.	Bank BCA a/n Santoso 560890770990345 <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.	Setelah melakukan proses pembayaran, pelanggan dapat mengecek apakah tiket yang dipesan sudah di validasi apa belum. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apabila sudah di validasi maka tiket yang dipesan sudah menjadi milik pemesan.</p>
</div>
                      <?php
                      break;

                      case 'login':
                        ?>
                        <div class="box box-default">
                          <div class="box-header with-border">
                            <h3 class="box-title">Login</h3>
                          </div>
                          <div class="box-body">
                            <?php include 'form_login.php'; ?>
                        <?php
                        break;
                        case 'bayar-tiket':
                          ?>
                          <div class="box box-default">
                            <div class="box-header with-border">
                              <h3 class="box-title">Login</h3>
                            </div>
                            <div class="box-body">
                              <?php include 'create_bayar.php'; ?>
                          <?php
                          break;
              default:
              ?>
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Beranda</h3>
                </div>
                <div class="box-body">
                  <div class="" style="font-size:14pt;">
                  <center><h3><b>Selamat Datang di Agen Bus Bu Ismiati Bawen</b></h3>
                  <img src="images/beranda.jpeg" width="600px" height="350px" alt=""></center>
<p align="justify">Terimakasih atas kepercayaan anda terhadap Agen Bus Bu Ismiati sebagai sarana terpercaya dalam menyediakan transportasi bus di Indonesia.
Agen Bus Bu Ismiati merupakan agen penyedia tiket bus yang bekerjasama dengan beberapa PO Bus yaitu Handoyo, Budiman dan Putra Remaja. Disini menyediakan tiket berdasarkan PO Bus serta trayek dari masing-masing PO Bus.
Adapun layanan tiket yang disediakan meliputi :</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a.	Bus Putra Remaja dengan tujuan Lampung, Palembang, Jambi, Merak, Baturaja dan Lubuk Linggau.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b.	Bus Budiman dengan tujuan Tasikmalaya.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c.	Bus Handoyo dengan tujuan Malang, Surabaya, Jakarta, Pekan Baru, Wonogiri, Purwokerto.<br></p>
<p>Kontak <br>
Jl. Slamet Riyadi, Bawen-Salatiga No. 22, Bawen, Semarang, Jawa Tengah 50661, Indonesia.<br>
Telp :	08122550648 / 085716765330
081215404057 / 0298-521346
</p>
</div>


              <?php
                break;
            }
         ?>



<?php include 'footer.php'; ?>
