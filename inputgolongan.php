<!DOCTYPE HTML PUBLIC "">
<html>
<head>
<title>FORM INPUT GOLONGAN</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form action="savegolongan.php" method="post" enctype="multipart/form-data" name="FMHS">
    <table width="420" border="3" align="center" cellpadding="0" cellspacing="1" bgcolor="7474d7">
    <tr>
      <td height="50" align="center" bgcolor="PINK"><strong><font face="courier new" size= "5pt" color="#000000">FORM INPUT GOLONGAN</font></strong></td>
    </tr>
	    <tr>
      <td bgcolor="#fcfcfc"><table width="420" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>

    <table width="420" border="1">
      <tr>
        <td bgcolor="#fcfcfc"><table width="420" border="0">
         <tr>
            <td width="130">&nbsp;</td>
            <td width="20">&nbsp;</td>
          </tr>    
		  <tr>
            <td>kodeGolongan</td>
            <td>:</td>
          	<td><select name="kode_golongan" class="select">
            <option selected>0G1</option>
	      <option selected>0G2</option>
		  <option selected>0G3</option>
		  <option selected>0G4</option>
	      <option selected>0G5</option>
		  <option selected>0G6</option>
		  </tr>
		  
		  <tr>
            <td>jenis Golongan</td>
            <td>:</td>
          	<td><select name="jenis_golongan" class="select">
           <option selected>Golongan A</option>
	      <option selected>Golongan B</option>
		  <option selected>Golongan C</option>
		  <option selected>Golongan D</option>
	      <option selected>Golongan E</option>
		  <option selected>Golongan F</option>
		  </tr>
          <tr>
          <td>Gaji Pokok</td>
		    <td>:</td>
		    <td><input name="gaji_pokok" type="text" id="gaji_pokok" size="9" maxlength="7"></td>
		  </tr>
          <tr>
            <div></div>
          <tr></tr><tr></tr><tr></tr><tr></tr>
		  <td colspan="3" align="right"><input name="fok" type="submit" id="fok" value="Simpan">
              <input name="fulang" type="reset" value="Edit">
              <input name="fulang2" type="button" value="Keluar" onClick="javascript:history.back()"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>