     <?
     $kode_jabatan = $_POST['kode_jabatan'];
     $jabatan_jenis = $_POST['jenis_jabatan'];
     $tunjangan = $_POST['tunjangan'];
     include "connect.php";

    $perintah = mysql_query("insert into Jabatan values('$kode_jabatan','$jenis_jabatan','$tunjangan')") or die(mysql_error());
    if (!$perintah){
    echo "<a href='output.php'>Lihat Form Output</a><br>";
    echo "<a href='index.php>Kembali</a>";
    }
    else {
  echo " Terimakasih Telah Mengisi Form jabatan Dengan Kode jabatan = <b>$kode_jabatan</b><br>";
   echo "<a href='outputjabatan.php'>Lihat Form Output jabatan</a><br>";
    echo "<a href='indexinput.php'>Kembali</a><br>";
    }
    ?>
