<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE></TITLE>
</HEAD><body bgcolor="#FFFFFF">
<form name="form1" method="post" action="ret.deb.php">
  <?php 
	$dbname = 'nelosa_printers';
	if (!mysql_connect("mysql","nelosa","mqm1804")) {	   echo 'Could not connect to mysql';	   exit;	}
	$result = mysql_list_tables($dbname);
	if (!$result) {	   echo "DB Error, could not list tables\n";	   echo 'MySQL Error: ' . mysql_error();	   exit;	}
	$arry_cnt = 0 ;
	echo ('<select name="printers" id="printers">');
	echo "<option></option>";
	while ($row = mysql_fetch_row($result)) {
	   if (  ( $row[0] != "Ins_Brand" ) && ( $row[0] != "Error_Codes" )  )  {
			//echo "" . $row[0] . "<BR>\n";
			echo "<option>" . $row[0] . "</option>";
		}
	}
	echo ('</select>');
	mysql_free_result($result);
echo "<BR>";
	$dbname = 'nelosa_nelosa';
	if (!mysql_connect("mysql","nelosa","mqm1804")) {	   echo 'Could not connect to mysql';	   exit;	}
	$result = mysql_list_tables($dbname);
	if (!$result) {	   echo "DB Error, could not list tables\n";	   echo 'MySQL Error: ' . mysql_error();	   exit;	}
	$arry_cnt = 0 ;
	echo ('<select name="nelosa" id="nelosa">');
	echo "<option></option>";
	while ($row = mysql_fetch_row($result)) {
			echo "<option>" . $row[0] . "</option>";
	}
	echo ('</select>');
	mysql_free_result($result);
echo "<BR>";

?>
  <p>
    <input type="submit" name="Submit" value="Submit">
  </p>
</form>
</BODY>
</HTML>
