<?php 
include ( "../../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../../eMiKi/Funciones_PHP.php");
$idioma = "fra" ;
?>

<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instructions pour Xerox</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset="/>

<meta name="Publisher" content="Alma Print, http://www.alma-print.com"/>

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
        <p class="Estilo1"><img src="../../../imagenes/comunes/Logos/logo_xerox.jpg" width="127" height="60" align="absmiddle"></p>
        <table width="97%"  border="0">
          <tr>
            <td class="Estilo1"><p align="center"><img src="../../../imagenes/ins/inkjet/esp/Hp_01.jpg" width="402" height="261"></p>
              <?php echo getext($idioma,"N121"); // ?>
			  <p align="left"><font face="Arial, Helvetica, sans-serif"><strong>1.</strong> La presi&oacute;n de aire dentro del cartucho esta controlada por un AERATOR (Apertura C) la cual debe taparse para prevenir que gotee la tinta durante el rellenado, use un adhesivo PVC para esta labor, tapando tambi&eacute;n los inyectores.<br>
        <strong>2. </strong>Haga el orificio de relleno ( B ) de 3 m/m como se muestra en la figura 1 IMPORTANTE: La apertura en el centro de la parte superior (A) no debe ser agujereada. PRECAUCI&Oacute;N: La bolsa interior no debe ser perforada.<br>
        <strong>3.</strong> Monte la jeringuilla y rell&eacute;nela con 10 ml de la tinta negra. El cartucho se debe poner en posici&oacute;n vertical, rellene la tinta a trav&eacute;s de la apertura B. No deje el cartucho encima de la gamuza mas de dos minutos, esto pudr&iacute;a vaciar el cartucho.<br>
        <strong>4. </strong>Presiones las paredes del cartucho y a continuaci&oacute;n, sin dejar de presionar tape el orificio de relleno (B) con el adhesivo que se adjunta, de esta forma conseguimos el vac&iacute;o necesario para que el cartucho no gotee. La tinta podr&iacute;a gotear por la uni&oacute;n del cabezal y la base del cartucho hasta que se equalice la presi&oacute;n, deber&aacute; limpiar la tinta hasta que deje de gotear.<br>
        <strong>5. </strong>Quite la tapa de la apertura C y de los inyectores, limpiando con liquido limpiador y el tissue que se adjunta.</font></p>
              <p align="center"><img src="../../../imagenes/ins/inkjet/esp/Hp_02.jpg" width="374" height="274"></p>
              <?php echo getext($idioma,"N121"); // ?>
			  <p align="left"><font face="Arial, Helvetica, sans-serif"><strong>1.</strong> Tape los cabezales de impresi&oacute;n, en la base del cartucho con un trozo de PVC adhesivo o un protector de cabezales.<br>
      <strong>2. </strong>Los orificios de relleno se encuentran debajo de la tapa. Qu&iacute;tela con un elemento met&aacute;lico cortante, procurando no da&ntilde;arla.<br>
      <strong>3.</strong> Monte la jeringuilla y rellene con 7 ml de la tinta adecuada.<br>
      <strong>4.</strong> Inserte la aguja por el orificio de relleno, del color correspondiente al de la tinta de la jeringuilla, mirar figura, e introd&uacute;zcala hasta la mitad del cartucho NOTA: el cartucho contiene en su interior esponja por lo que se puede encontrar una leve resistencia.<br>
      <strong>5. </strong>Muy Lentamente inyecte 7 ml de tinta o hasta que empiece ha rebosar.<br>
      <strong>6. </strong>Despu&eacute;s del relleno, ponga la tapa.</font></p>
              <p></p>
              <p>
                <?php
			  if (isset($proced)) {
          $resul = "../procedures/".$proced.".php" ;
          if ($proced != "." AND $proced != "") include ($resul);
        }
			  ?>
              </p>
              <p align="left"><br>
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
