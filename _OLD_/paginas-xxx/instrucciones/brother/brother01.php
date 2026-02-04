<?php 
include ( "../../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../../eMiKi/Funciones_PHP.php");

?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instrucciones recarga Brother</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset="/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>

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
  <?php 
  include ( "../../../eMiKi/Headers/nivel2/upper.". $idioma . ".php" );
?>
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p class="Estilo1"><img src="../../../imagenes/comunes/Logos/logo_Brother.jpg" width="127" height="60" align="absmiddle"></p>
        <table width="97%"  border="0">
          <tr>
            <td class="Estilo1"><p align="center"><img src="../../../imagenes/ins/inkjet/esp/Lexmark_01.jpg" width="426" height="306"></p>
              <p><?php echo getext($idioma,"Instrucciones Serie 01"); //Instrucciones recarga ?></p>
              <p align="center"><img src="../../../imagenes/ins/inkjet/esp/Lexmark_02.jpg" width="174" height="247"></p>
<p align="left">&nbsp;</p>
<p><?php echo getext($idioma,"Instrucciones Serie 02"); //Instrucciones recarga ?></p>
<p>
  <?php
			  if (isset($proced)) {
          $resul = "../procedures/".$proced.".php" ;
          if ($proced != "." AND $proced != "") include ($resul);
        }
			  ?>
</p></td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
    <p>&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
