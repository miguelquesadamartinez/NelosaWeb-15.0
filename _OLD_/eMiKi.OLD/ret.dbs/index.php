<?php 
	$dbname = 'nelosa_nelosa_printers';
	if (!mysql_connect("localhost","nelosa_nelosa","mqm1804")) {	   echo 'Could not connect to mysql';	   exit;	}
	$result = mysql_list_tables($dbname);
	if (!$result) {	   echo "DB Error, could not list tables\n";	   echo 'MySQL Error: ' . mysql_error();	   exit;	}
	$arry_cnt = 0 ;
	while ($row = mysql_fetch_row($result)) {
	   if (  ( $row[0] != "Ins_Brand" ) && ( $row[0] != "Error_Codes" )  )  {
			echo "" . $row[0] . "<BR>\n";
		}
	}
	mysql_free_result($result);
?>