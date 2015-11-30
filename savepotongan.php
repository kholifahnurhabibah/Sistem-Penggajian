     <?
     $kode_potongan = $_POST['kode_potongan'];
     $nama_potongan = $_POST['nama_potongan'];
     $total_potongan= $_POST['total_potongan'];
     include "connect.php";

    $perintah = mysql_query("insert into potongan values('$kode_potongan','$nama_potongan','$total_potongan')") or die(mysql_error());
    if (!$perintah){
    echo "<a href='output.php'>Lihat Form Output</a><br>";
    echo "<a href='index.php>Kembali</a>";
    }
    else {
   echo " Terimakasih Telah Mengisi Form Potongan Dengan Kode Potongan = <b>$kode_potongan</b><br>";
   echo "<a href='outputpotongan.php'>Lihat Form Output Potongan</a><br>";
    echo "<a href='indexinput.php'>Kembali</a><br>";
   }
 ?>
