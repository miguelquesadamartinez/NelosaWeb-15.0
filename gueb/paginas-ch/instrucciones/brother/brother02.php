<?php 
include ( "../../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../../eMiKi/Funciones_PHP.php" );
$idioma = "fra" ;
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instructions pour Brother</title>
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
        <p class="Estilo3"><img src="../../../imagenes/comunes/Logos/logo_Brother.jpg" width="127" height="60" align="absmiddle"></p>
        <table width="97%"  border="0">
          <tr>
            <td><P align="center"><img src="../../../imagenes/ins/inkjet/esp/Lex_002_s.jpg" width="316" height="236"></P>
              <P><?php echo getext($idioma,"Instrucciones Serie 02"); //Instrucciones recarga ?></P>
              <p align="center"><img src="../../../imagenes/ins/inkjet/esp/Lex_001_s.jpg" width="336" height="262"><img src="../../../imagenes/ins/inkjet/esp/Lex_003_s.jpg" width="336" height="273"></p>
              <P><?php echo getext($idioma,"Serie 01"); //Instrucciones recarga ?></P>
              <P>
                <?php
			  if (isset($proced)) {
          $resul = "../procedures/".$proced.".php" ;
          if ($proced != "." AND $proced != "") include ($resul);
        }
			  ?>
              </P>
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
    <p>&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
