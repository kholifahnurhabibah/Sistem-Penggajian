<!DOCTYPE HTML PUBLIC "">
<html>
<head>
<title>FORM INPUT TUNJANGAN</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form action="savetunjangan.php" method="post" enctype="multipart/form-data" name="FMHS">
<table width="450" border="3" align="center" cellpadding="0" cellspacing="1" bgcolor="7474d7">
    <tr>
      <td height="50" align="center" bgcolor="PINK"><strong><font face="courier new" size= "5pt" color="#000000">FORM INPUT TUNJANGAN</font></strong></td>
    </tr>
	    <tr>
      <td bgcolor="PINK"><table width="350" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>
    <table width="450" border="1">
      <tr>
        <td bgcolor="#fcfcfc"><table width="450" border="0">
         <tr>
            <td width="150">&nbsp;</td>
            <td width="20">&nbsp;</td>
          </tr>
          <td>kode_Tunjangan</td>
            <td>:</td>
          	<td><select name="kode_tunjangan" class="select">
           <option selected>0T1</option>
	      <option selected>0T2</option>
		  <option selected>0T3</option>
		  <option selected>0T4</option>
	      <option selected>0T5</option>
		  <option selected>0T6</option>
		  </tr>
          <tr>
            <td>Nama_Tunjangan</td>
            <td>:</td>
            <td><input name="nama_tunjangan" type="text" size="9" maxlength="7"></td>
          </tr>
          <tr>
            <td>Total_Tunjangan</td>
            <td>:</td>
            <td><input name="total_tunjangan" type="text" size="9" maxlength="7"></td>
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