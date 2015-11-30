    <?
    $host="localhost";
    $user="root";
    $password="root";
    $db="pegawai";
    $konek=mysql_connect($host,$user,$password) or die (mysql_error());
    if ($konek) {
    echo "Berhasil";
    
        
    }
    else {
    echo "Koneksi php ke database gagal";
    }
    mysql_select_db($db,$konek) or die (mysql_error());
    ?>
