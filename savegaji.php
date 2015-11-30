     <?
     $kode_jabatan = $_POST['kode_jabatan'];
     $nip = $_POST['nip'];
     $nama = $_POST['nama'];
     $golongan = $_POST['golongan'];
	 $tunjangan = $_POST['tunjangan'];
     $potongan = $_POST['potongan'];
     $gaji_pokok = $_POST['gaji_pokok'];
     $total_gaji = $_POST['total_gaji'];
     include "connect.php";

    $perintah = mysql_query("insert into gaji values
	('$kode_jabatan','$nip','$golongan','$tunjangan','$potongan','$gaji_pokok','$total_gajik')") or die(mysql_error());
    if (!$perintah){
    echo "<a href='output.php'>Lihat Form Output</a><br>";
    echo "<a href='index.php'>Kembali</a>";
    }
    else {
   echo " Terimakasih Telah Mengisi Form Gaji Dengan Kode Gaji = <b>$kode_gaji</b><br>";
   echo "<a href='outputgaji.php'>Lihat Form Output Gaji</a><br>";
    echo "<a href='indexinput.php'>Kembali</a><br>";
   }
    ?>
