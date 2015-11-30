     <?
     $kode_tunjangan = $_POST['kode_tunjangan'];
     $nama_tunjangan = $_POST['nama_tunjangan'];
     $total_tunjangan = $_POST['total_tunjangan'];
     include "connect.php";

    $perintah = mysql_query("insert into Tunjangan values('$kode_tunjangan','$nama_tunjangan','$total_tunjangan')") or die(mysql_error());
    if (!$perintah){
    echo "<a href='output.php'>Lihat Form Output</a><br>";
    echo "<a href='index.php>Kembali</a>";
    }
    else {
  echo " Terimakasih Telah Mengisi Form Tunjangan Dengan Kode Tunjangan = <b>$kode_tunjangan</b><br>";
   echo "<a href='outputtunjangan.php'>Lihat Form Output Tunjangan</a><br>";
    echo "<a href='indexinput.php'>Kembali</a><br>";
    }
    ?>
