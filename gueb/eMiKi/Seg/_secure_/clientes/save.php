<?php 	
include("../../../../eMiKi/Funciones_PHP.php"); 

$link=conectarse(); 

?>
<HTML><HEAD><TITLE></TITLE>
<meta http-equiv="refresh" content="2;url=../../../../eMiKi/Seg/_secure_/clientes/clientes_main.php?select=<?php echo $empre; ?>">
</HEAD>
<BODY onload="location='clientes_main.php?select=<?php echo $empre; ?>';">
<div align="center"> 
  <p><img src="../../../../eMiKi/_images/_Comunes/Nelosas/NelosaP.jpg" width="172" height="59"> 
  </p>
  <p>
  <?php 
	
	echo $fecha = Date("Y-m-d") ;
  
	echo "Cargando datos . . . . . . " . $empre . "<BR>";

	mysql_query("Insert Into p_data (ind,texto,date) VALUES('" . $indise . "','" . $textarea . "','" . $fecha . "')",$link);		

mysql_free_result($result);  
mysql_close($link);?>
  </p>
</div>
