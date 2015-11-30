<!DOCTYPE HTML PUBLIC "">
<html>
<head>
<title>FORM OUTPUT GAJI</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form id="form1" name="form1" method="post">
    <table width="670" border="3" align="center" cellpadding="0" cellspacing="1" bgcolor="pink">
    <tr>
      <td height="50" align="center" bgcolor="pink"><strong><font face="courier new" size= "20pt" color="#000000">FORM OUTPUT GAJI</font></strong></td>
    </tr>
	    <tr>
      <td bgcolor="pink"><table width="670" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>

    <table width="670" border="1">
      <tr>
        <td bgcolor="#fcfcfc"><table width="670" border="0">
         <tr>
            <td width="165">&nbsp;</td>
            <td width="307">&nbsp;</td>
          </tr>
           <?
    include "connect.php";
    $konek=mysql_connect($host,$user,$password) or die (mysql_error());
    mysql_select_db($db,$konek) or die (mysql_error());
    $query=mysql_query("select * from gaji",$konek) or die (mysql_error());
	echo "<table border='1' width='1200px'>";
    echo "<tr><td>Kode Gaji</td><td>NIP</td><td>Kode Tunjangan</td><td>Total Gaji</td><td>Kode Potongan</td><td>Kode Golongan</td>";

    while ($data=mysql_fetch_array ($query))
    {
    echo "<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[7]</td><td>$data[8]</td><td>$data[9]</td><td>$data[10]</td><td>$data[11]</td><td>$data[12]</td></tr>";
    }
    echo "</table>";
    ?>
      <tr>       
	  <td colspan="3" align="right"><input name="fok" type="submit" id="fok" value="Cetak" onClick="javascript:window.print()">
      <a href="indexoutput.php"><input name="fulang2" type="button" id="fulang2" value="Keluar"/></td>      
		  </table>
    </tr>
  </table>
</form>
</body>
</html>
