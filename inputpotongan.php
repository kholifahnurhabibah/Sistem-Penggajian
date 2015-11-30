<!DOCTYPE HTML PUBLIC "">
<html>
<head>
<title>FORM INPUT POTONGAN</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form action="savepotongan.php" method="post" enctype="multipart/form-data" name="FMHS">
 <table width="450" border="3" align="center" cellpadding="0" cellspacing="1" bgcolor="7474d7">
    <tr>
      <td height="50" align="center" bgcolor="PINK"><strong><font face="courier new" size= "5pt" color="#000000">FORM INPUT POTONGAN</font></strong></td>
    </tr>
	    <tr>
      <td bgcolor="#fcfcfc"><table width="350" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>
    <table width="450" border="1">
      <tr>
        <td bgcolor="#fcfcfc"><table width="450" border="0">
         <tr>
            <td width="150">&nbsp;</td>
            <td width="20">&nbsp;</td>
          </tr>
         <tr>
            <td>kode Potongan</td>
            <td>:</td>
			<td><input name="kode_potongan" type="text" id="kode_potongan" size="8" maxlength="6"></td>
		  </tr>
          <tr>
            <td>Nama_potongan</td>
            <td>:</td>
           <td><select name="nama_potongan" class="select">
           <option selected>Koprasi</option>
	      <option selected>Kehadiran</option>
		  <option selected>Kasbon</option>
		  <option selected>Pajak</option>
	      <option selected>JAMSOSTEK</option>
		  <option selected>Asuransi Jiwa</option>
          </tr>
          <tr>
            <td>Total Potongan</td>
            <td>:</td>
            <td><input name="total_potongan" type="text" id="total_potongan" size="8" maxlength="6"></td>
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