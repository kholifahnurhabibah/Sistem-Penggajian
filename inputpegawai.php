<!DOCTYPE HTML PUBLIC "">
<html>
<head>
<title>FORM INPUT PEGAWAI</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form action="savepegawai.php" method="post" enctype="multipart/form-data" name="FMHS">
    <table width="500" border="3" align="center" cellpadding="0" cellspacing="1" bgcolor="7474d7">
    <tr>
      <td height="50" align="center" bgcolor="PINK"><strong><font face="courier new" size= "6pt" color="BLACK">FORM INPUT PEGAWAI</font></strong></td>
    </tr>
	    <tr>
      <td bgcolor="PINK"><table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>

    <table width="500" border="1">
      <tr>
        <td bgcolor="#fcfcfc"><table width="500" border="0">
         <tr>
            <td width="150">&nbsp;</td>
            <td width="20">&nbsp;</td>
          </tr>
          <tr>
            <td>nip</td>
            <td>:</td>
            <td><input name="nip" type="text" id="nip" size="8" maxlength="6"></td>
          </tr>
          <tr>
            <td>nama</td>
            <td>:</td>
            <td><input name="nama" type="text" id="nama" size="22" maxlength="20"></td>
          </tr>
		  <tr>
            <td>Tanggal_Lahir</td>
            <td>:</td>
            <td><input name="tanggal_lahir" type="date" id="ttl" size="22" maxlength="20"></td>
          </tr>
		  <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input name="telepon" type="text" id="telepon" size="22" maxlength="20"></td>
          </tr>
          <tr>
            <td>alamat</td>
            <td>:</td>
            <td><textarea name ="alamat"></textarea></td>
          </tr>
		  <tr>
          <td>Status</td>
            <td>: </td>
             <td> <input name="status" type="radio" value="Menikah" checked="checked" />
              Menikah
              <input name="status" type="radio" value="Belum Menikah" />
              Belum Menikah</td>
          </tr>
		  <tr>
            <td>kode_jabatan</td>
            <td>:</td>
          	<td><select name="kode_jabatan" class="select">
          <option selected>01</option>
	      <option selected>02</option>
		  <option selected>03</option>
		  <option selected>04</option>
	      <option selected>05</option>
		  <option selected>06</option>
          <tr>
            <td>kode_golongan</td>
            <td>:</td>
          	<td><select name="kode_golongan" class="select">
          <option selected>001</option>
	      <option selected>002</option>
		  <option selected>003</option>
		  <option selected>004</option>
	      <option selected>005</option>
		  <option selected>006</option>
        
        </select></td>
    </tr>
          </tr>
          
          <tr>
          <td>Tanggal Masuk</td>
		      <td>:</td>
		      <td><input name="tanggal_masuk" type="date" id="tanggal_masuk" size="22" maxlength="1"></td>
		      </tr>
          <tr>
            <div></div>
          <tr></tr><tr></tr><tr></tr><tr></tr>
		  <td colspan="3" align="right"><input name="fok" type="submit" id="fok" value="Simpan">
              <input name="fulang" type="reset" id="fulang" value="Edit">
              <input name="fulang2" type="button" id="fulang2" value="Keluar" onClick="javascript:history.back()"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>
