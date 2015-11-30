     <?
     $nip = $_POST['nip'];
     $nama = $_POST['nama'];
	 $tanggal_lahir = $_POST['tanggal_lahir'];
     $telepon = $_POST['telepon'];
     $alamat = $_POST['alamat'];
	 $status = $_POST['status'];
	 $kode_jabatan = $_POST['kode_jabatan'];
	 $kode_golongan = $_POST['kode_golongan'];
     $tanggal_masuk = $_POST['tanggal_masuk'];
   
     include "connect.php";

    $perintah = mysql_query("insert into Pegawai values('$nip','$nama','$tanggal_lahir','$telepon','$alamat','$status','$kode_jabatan', '$kode_golongan','$tanggal_masuk')") or die(mysql_error());
    if (!$perintah){
    echo "<a href='indexoutput.php'>Lihat Form Output</a><br>";
    echo "<a href='index.php>Kembali</a>";
    }
    else {
    echo " Terimakasih Telah Mengisi Form Pegawai Dengan Nama = <b>$nama</b><br>";
    echo "<a href='outputpegawai.php'>Lihat Form Output Pegawai</a><br>";
	echo "<a href='indexinput.php'>Kembali</a><br>";
	}
	?>