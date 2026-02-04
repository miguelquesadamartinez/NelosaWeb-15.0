<?php 
include ( "../../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../../eMiKi/Funciones_PHP.php");
$idioma = "fra" ;
?>

<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instructions pour HP</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset="/>

<meta name="Publisher" content="Alma Print, http://www.alma-print.ch"/>

<style type="text/css">
<!--
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #0000FF;
}
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</HEAD>

<body bgcolor="#000099">
<div align="center">  
   <table width="763" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../imagenes/index/arriva.png" width="765" height="16"></td>
    </tr>
  </table>
   <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="127"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="763" height="128">
          <param name="movie" value="../../../imagenes/animacione/banner-ch.swf">
          <param name="quality" value="high">
          <embed src="../../../imagenes/animacione/banner-ch.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="763" height="128"></embed></object></td>
    </tr>
  </table>
   <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="78" height="13" bgcolor="#FFFFFF"><img src="../../../imagenes/index/arriva-down.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p class="Estilo1"><img src="../../../imagenes/comunes/Logos/logo_HP.jpg" width="127" height="60" align="absmiddle"></p>
        <table width="97%"  border="0">
          <tr>
            <td class="Estilo1"><p align="center"><img src="../../../imagenes/ins/inkjet/esp/HP02.jpg" width="422" height="271"></p>
              <p><?php echo getext($idioma,"Instrucciones Serie 01"); //Instrucciones recarga ?></p>
              <p>&nbsp;</p>
              <p align="center"><img src="../../../imagenes/ins/inkjet/esp/HP01.jpg" width="402" height="261"></p>
              <p><?php echo getext($idioma,"Instrucciones HP 01"); //Instrucciones recarga ?></p>
              <p>
                <?php
			  if (isset($proced)) {
          $resul = "../procedures/".$proced.".php" ;
          if ($proced != "." AND $proced != "") include ($resul);
        }
			  ?>
              </p>
              <p><br>
                </p></td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
