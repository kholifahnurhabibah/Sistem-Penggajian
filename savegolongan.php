     <?
     $kode_golongan = $_POST['kode_golongan'];
     $jenis_golongan= $_POST['jenis_golongan'];
	 $gaji_pokok = $_POST['gaji_pokok'];
     include "connect.php";

    $perintah = mysql_query("insert into golongan values('$kode_golongan','$jenis_golongan','$gaji_pokok')") or die(mysql_error());
    if (!$perintah){
    echo "<a href='indexoutput.php'>Lihat Form Output</a><br>";
    echo "<a href='index.php>Kembali</a>";
    }
    else {
   echo " Terimakasih Telah Mengisi Form Golongan Dengan Kode Golongan = <b>$kode_golongan</b><br>";
   echo "<a href='outputgolongan.php'>Lihat Form Output Golongan</a><br>";
   echo "<a href='indexinput.php'>Kembali</a><br>";}
   
    ?>
