<title>::tanggal::</title><?php
   include"koneksi.php";
   $tanggal=date("d-m-Y");
   $q=mysql_query("select datediff('$tanggal', curdate()) as selisih");
   $data=mysql_fetch_array($q);
$selisih=$data['selisih'];
      $x= mktime(0, 0, 0, date("m"), date("d")+ $selisih, date("Y"));
	  $namahari=date("l", $x);

	 if($namahari=="Sunday"){
   $namahari="Minggu";
   }elseif($namahari=="Tuesday"){
   $namahari="Selasa";
   }elseif($namahari=="Wednesday"){
  $namahari="Rabu";
   }elseif($namahari=="Thursday"){
   $namahari="Kamis";
   }elseif($namahari=="Friday"){
   $namahari="Jum'at";
   }elseif($namahari=="Saturday"){
   $namahari="Sabtu";
    }elseif($namahari=="Monday"){
   $namahari="Senin";
   }
   //tanggal & tahun
   $tahun=date("Y");
   $tgl=date("d");
   //bulan
   $bulan=date("m");
   if($bulan==1){
		 $bulan="Januari";
		 }elseif($bulan==2){
		 $bulan="Februari";
		 }elseif($bulan==3){
		 $bulan="Maret";
		 }elseif($bulan==4){
		 $bulan="April";
		 }elseif($bulan==5){
		 $bulan="Mei";
		 }elseif($bulan==6){
		 $bulan="Juni";
		 }elseif($bulan==7){
		 $bulan="Juli";
		 }elseif($bulan==8){
		 $bulan="Agustus";
		 }elseif($bulan==9){
		 $bulan="September";
		 }elseif($bulan==10){
		 $bulan="Oktober";
		 }elseif($bulan==11){
		 $bulan="November";
		 }elseif($bulan==12){
		 $bulan="Desember";
		 }
   echo" $tgl $bulan $tahun";
?>
