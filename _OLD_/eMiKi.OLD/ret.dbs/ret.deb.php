<?php 
include("../Funciones_PHP.php");
include("../libmail.php");

$link=conectarse_param("nelosa_nelosa_printers") ;

$result=mysql_query("Select * From " . $Brandy ,$link); 

$pos = substr_count($Brandy, "_laser");
//if ($pos === false) { // nota: tres signos igual
//echo $pos . "<BR>";

if ($pos == 0 ){
   // no encontrado ... Ink-Jet
	while($row = mysql_fetch_array($result)) 	{ 
		echo (string)$row["Printer"] . "#1#" . (string)$row["Ins"] . "#2#" . (string)$row["proced"] . "#@\n";	
	}
}
else
{
	while($row = mysql_fetch_array($result)) 	{ 
		echo (string)$row["Printer"] . "#1#" . (string)$row["Ins"] . "#2#" . (string)$row["proced"] . "#3#" . (string)$row["carga"] . "#@\n";	
	}
}
mysql_free_result($result);
?>
