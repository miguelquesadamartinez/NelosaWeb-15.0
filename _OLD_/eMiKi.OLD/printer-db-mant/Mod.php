<?php session_register('usr'); session_register('v_Pais'); session_register('tabla');
if ( $VBtabla <> "" ) $tabla =  strtolower ( $VBtabla ) ;
 ?>
<HTML><HEAD><TITLE></TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv=refresh content=25;url=Mantenimiento.php?Brandy=<?php echo $VBtabla ?>>
</HEAD>
<body bgcolor="#FFFFFF">
<table width="300" border="0" align="center">
  <tr><td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Mantenimiento
            
    Ink-Jet DB ( mod ) <?php echo $Brandy ; ?></font></strong></div></td>
  </tr></table>
<table width="300" border="0" align="center">
  <tr><td>
<?php
include("../Funciones_PHP.php");
include("../libmail.php");

$link = conectarse_param("nelosa_nelosa_printers") ;

	mysql_query("Update " . $tabla . " Set Ins = '" . $textINS_H . "', proced = '" . $textproced_H . "'  WHERE Printer = '" . $textPRN_H . "'",$link);	
	echo "Update " . $tabla . " Set Ins = '" . $textINS_H . "', proced = '" . $textproced_H . "'  WHERE Printer = '" . $textPRN_H . "'<BR>" ;	
//mysql_free_result($result);  
mysql_close($link);?>
	</td></tr></table>
<p align="center"><a href="Mantenimiento.php"><img src="../../imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></p>
<p align="center">&nbsp;</p>
