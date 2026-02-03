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
<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#00FF00";  text-decoration: none;}
A:visited {color: "#0000FF";  text-decoration: none;}
H1{font-family:Arial, Helvetica, sans-serif}
H2{font-family:Arial, Helvetica, sans-serif}
H3{font-family:Arial, Helvetica, sans-serif}
P{font-family:Arial, Helvetica, sans-serif}
BODY{color:"#0000FF"; font-family:Arial, Helvetica, sans-serif}
body,td,th {
	color: #0000FF;
	font-size: 16px;
}
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
.Estilo4 {color: #FF0000}
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
  </table>  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p class="Estilo3 Estilo4"><?php echo getext($idioma,"N126"); //Instrucciones recarga ?> Xerox 6R359</p>
        <table width="97%"  border="0">
          <tr>
            <td><?php echo getext($idioma,"N121"); // ?><ol>
              <li>Destornille los tornillos que aguantan la tapa. </li>
              <li>Retire la tapa y podr&aacute; ver el tap&oacute;n del orificio de relleno, ret&iacute;relo utilizando un destornillador plano. </li>
              <li>Para asegurar que el toner fluya correctamente de la bolsa, mu&eacute;vala un poco. </li>
              <li>Cortar una peque&ntilde;a esquina de la bolsa de unos 5 mm. Introducir la punta recortada por el orificio de relleno. </li>
              <li>Presione levemente para que el toner vaya entrando sin derramarse y mueva el cartucho para que el toner se reparta. </li>
              <li>Cada una de las bolsas equivale a una recarga. </li>
              <li>Cierre el orificio de relleno con su tapon, y atornille la tapa. </li>
              <li>Pasada media hora, despu&eacute;s de que el cartucho este puesto en la impresora, compruebe que &eacute;ste no pierde toner. </li>
            </ol>              
              <ol>
                <li></li>
              </ol>
              <p align="center"><img src="../../../imagenes/ins/laser/xerox/xerox6R359.jpg" width="360" height="158"></p>
              <p align="center"><img src="../../../imagenes/ins/laser/xerox/xerox6R359--2.jpg" width="180" height="177"><img src="../../../imagenes/ins/laser/xerox/xerox6R359--3.jpg" width="180" height="182"></p>
              <p></p>
              <p>
                <?php
			  $resul = "../procedures/".$proced.".php" ;
			  if ($proced != "." AND $proced != "") include ($resul);
			  ?>
              </p>
              <p align="center"><br>
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
