<!DOCTYPE HTML PUBLIC "">
<html>
<head>
<title>FORM INPUT GAJI</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form action="savetunjangan.php" method="post" enctype="multipart/form-data" name="FMHS">
<table width="450" border="3" align="center" cellpadding="0" cellspacing="1" bgcolor="7474d7">
    <tr>
      <td height="50" align="center" bgcolor="PINK"><strong><font face="courier new" size= "5pt" color="#000000">FORM INPUT GAJI</font></strong></td>
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
          <tr>
            <td>Kode Jabatan</td>
            <td>:</td>
          	<td><select name="golongan" class="select">
          <option selected>111</option>
	      <option selected>112</option>
		  <option selected>113</option>
		  <option selected>114</option>
	      <option selected>115</option>
		  <option selected>116</option>
		  </tr>
          <tr>
            <td>NIP</td>
            <td>:</td>
            <td><input name="NIP" type="text" id="NIP" size="9" maxlength="7"></td>
          </tr>
		  
		  <tr>
            <td>Golongan</td>
            <td>:</td>
          	<td><select name="golongan" class="select">
          <option selected>Golongan A</option>
	      <option selected>Golongan B</option>
		  <option selected>Golongan C</option>
		  <option selected>Golongan D</option>
	      <option selected>Golongan E</option>
		  <option selected>Golongan F</option>
		  </tr>
		  
          <tr>
            <td>Tunjangan</td>
            <td>:</td>
            <td><input name="tunjangan" type="text" id="tunjangan" size="9" maxlength="7"></td>
          </tr>
		  
		  <tr>
            <td>Potongan</td>
            <td>:</td>
            <td><input name="Potongan" type="text" id="Potongan" size="9" maxlength="7"></td>
          </tr>
		  <tr>
            <td>Gaji Pokok</td>
            <td>:</td>
            <td><input name="Gaji Pokok" type="text" id="Gaji Pokok" size="9" maxlength="7"></td>
          </tr>
		  
		  <tr>
		  <td>  <td colspan="2">__________________ +</td>
          </tr>
  <tr>
            <td>Total Gaji </td>
            <td>:</td>
            <td><input name="Total Gaji" type="text" id="Total Gaji" size="9" maxlength="7"></td>
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