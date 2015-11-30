<!DOCTYPE HTML PUBLIC "">
<html>
<head>
<title>FORM OUTPUT TUNJANGAN</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<form id="form1" name="form1" method="post">
    <table width="450" border="3" align="center" cellpadding="0" cellspacing="1" bgcolor="7474d7">
    <tr>
      <td height="50" align="center" bgcolor="pink"><strong><font face="courier new" size= "6pt" color="#000000">FORM OUTPUT TUNJANGAN</font></strong></td>
    </tr>
	    <tr>
      <td bgcolor="pink"><table width="450" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>

    <table width="450" border="1">
      <tr>
        <td bgcolor="fcfcfc"><table width="450" border="0">
         <tr>
            <td width="165">&nbsp;</td>
            <td width="307">&nbsp;</td>
          </tr>
           <?
    include "connect.php";
    $konek=mysql_connect($host,$user,$password) or die (mysql_error());
    mysql_select_db($db,$konek) or die (mysql_error());
    $query=mysql_query("select * from Tunjangan",$konek) or die (mysql_error());
	echo "<table border='1' width='700px'>";
    echo "<tr><td> Kode Tunjangan</td><td>Nama Tunjangan</td><td>Total Tunjangan</td></td></tr>";

    while ($data=mysql_fetch_array ($query))
    {
    echo "<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td></tr>";
    }
    echo "</table>";
    ?>
              <tr>
            <td colspan="3" align="right"><input name="fok" type="submit" id="fok" value="Cetak" onClick="javascript:window.print()">
            <input name="fulang2" type="button" id="fulang2" value="Keluar" onClick="javascript:history.back()"></td>
          </tr>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>
