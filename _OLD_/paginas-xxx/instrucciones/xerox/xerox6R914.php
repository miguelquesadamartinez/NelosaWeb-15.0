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
.Estilo1 {color: #FF0000}
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
</style>
</HEAD>

<body bgcolor="#000099">
<div align="center">
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="7%"><div align="center"><span class="Estilo3"><a href="../../../index.eng.php"><img src="../../../imagenes/botones/home.png" width="89" height="29" border="0"></a></span></div></td>
      <td width="14%"><div align="center"><span class="Estilo3"><a href="../../club/index.php"><img src="../../../imagenes/botones/club.png" width="88" height="29" border="0"></a></span></div></td>
      <td width="14%"><div align="center"><span class="Estilo3"><a href="../../productos/index.php"><img src="../../../imagenes/botones/eng/prodictoseng.png" width="118" height="29" border="0"></a></span></div></td>
      <td width="23%"><div align="center"><span class="Estilo3"><a href="../index.php"><img src="../../../imagenes/botones/eng/instrucioneseng.png" width="132" height="29" border="0"></a></span></div></td>
      <td width="15%"><div align="center"><span class="Estilo3"><a href="../../varias/soporte.php"><img src="../../../imagenes/botones/eng/soporteng.png" width="97" height="29" border="0"></a></span></div></td>
      <td width="13%"><div align="center"><span class="Estilo3"><a href="../../varias/comprar.php"><img src="../../../imagenes/botones/eng/comprareng.png" width="98" height="29" border="0"></a></span></div></td>
      <td width="14%"><div align="center"><span class="Estilo3"> <a href="../../varias/links.php"><img src="../../../imagenes/botones/links.png" width="81" height="29" border="0"></a></span></div></td>
    </tr>
  </table>
  <table width="763" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../imagenes/index/arriva.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="127"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="763" height="128">
          <param name="movie" value="../../../imagenes/animacione/banner-arriva.swf">
          <param name="quality" value="high">
          <embed src="../../../imagenes/animacione/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="763" height="128"></embed></object></td>
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
        <p><strong> <span class="Estilo1"><?php echo getext($idioma,"N126"); //Instrucciones recarga ?> Xerox 6R914</span> </strong></p>
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
              <p align="center"><img src="../../../imagenes/ins/laser/xerox/xerox6R914.jpg" width="360" height="163"></p>
              <p align="center"><img src="../../../imagenes/ins/laser/xerox/xerox6R914--2.jpg" width="180" height="307"><img src="../../../imagenes/ins/laser/xerox/xerox6R914--3.jpg" width="180" height="418"></p>
              <p></p>
              <p>
                <?php
			  if (isset($proced)) {
          $resul = "../procedures/".$proced.".php" ;
          if ($proced != "." AND $proced != "") include ($resul);
        }
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
