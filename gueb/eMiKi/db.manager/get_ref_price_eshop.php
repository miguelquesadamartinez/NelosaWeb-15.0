<?php
include("../Funciones_PHP.php");
include("../libmail.php");
// Este se usa para actualizar de de  de server.eshop.prods
$link = conectarse_param("nelosa_nelosa") ;
//echo "Select * from prods WHERE Ref = '" . $VBref . "'";
$result = mysql_query("Select * from prods WHERE Ref = '" . $VBref . "'" ,$link);	

$row = mysql_fetch_array($result);

echo (string)$row["precio_eshop"] ;
//mysql_free_result($result);  
mysql_close($link);?>
