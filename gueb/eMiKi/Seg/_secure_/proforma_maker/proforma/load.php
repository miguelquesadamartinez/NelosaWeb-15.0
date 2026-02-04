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
  <p><img src="../../../../../eMiKi/_images/_Comunes/Nelosas/NelosaP.jpg" width="172" height="59"></p>
  <p>
  <?php 
	echo "Cargando datos . . . . . . <BR>";
  	$result=mysql_query("Select * From proformas Where nombre='" . $nombre . "'",$link);
	echo ( $nombre . "<BR>") ;
	while($row = mysql_fetch_array($result)) 
		{ 			
			$nom=(string)$row["nombre"];
			$ref=(string)$row["ref"];
			$cnt=(string)$row["cnt"];

		   if (!isset($itemsEnCesta)){ 
	  			$itemsEnCesta[$ref]=$cnt; 
	  	
	  			}else{ 
      			foreach($itemsEnCesta as $k => $v){ 
	  		  					
					 if ($ref==$k)
					 { 	
			         	$itemsEnCesta[$k]=$cnt; 
			         	$encontrado=1; 
			         } 
				  } 
			      if ($encontrado!=1)
				  {
 			      	if($cnt)$itemsEnCesta[$ref]=$cnt;
				  }
   			} 
		}
mysql_free_result($result);  
mysql_close($link);?>
  </p>
</div>
</body>