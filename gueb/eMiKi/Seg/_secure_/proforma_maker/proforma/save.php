<?php 	
session_register('itemsEnCesta'); 
include("../../../../eMiKi/Funciones_PHP.php"); 

$link=conectarse(); 

?>
<HTML><HEAD><TITLE></TITLE>
<meta http-equiv="refresh" content="2;url=../../../../../eMiKi/Seg/_secure_/proforma.php?nombre=<?php echo $nombre; ?>">
</HEAD>
<BODY onload="location='../proforma.php?nombre=<?php echo $nombre; ?>';">
<div align="center"> 
  <p><img src="../../../../../eMiKi/_images/_Comunes/Nelosas/NelosaP.jpg" width="172" height="59"> 
  </p>
  <p>
  <?php
	echo "Cargando datos . . . . . . " . $nombre . "<BR>";
	mysql_query("Delete from proformas where nombre = '" . $nombre . "')",$link);
		  foreach($itemsEnCesta as $k => $v)
		  { 
			$strTmp=(string)$itemsEnCesta[$k]; //Cantidad
			$str=(string)$k; //Ref
			
			mysql_query("Insert Into proformas (nombre,ref,cnt) VALUES('" . $nombre . "','" . $str . "','" . $strTmp . "')",$link);		
		}
mysql_free_result($result);  
mysql_close($link);?>
  </p>
</div>
