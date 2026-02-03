<?php 
include ( "../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );
$tipo = "inkjet" ;
$idioma = "fra" ;
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instructions</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

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
.Estilo2 {
	font-weight: bold;
	color: #FF0000;
	font-size: 24px;
}
.Estilo4 {font-size: 14}
.Estilo5 {
	font-size: 14px;
	font-weight: bold;
}
.Estilo6 {color: #FFFFFF;
	font-weight: bold;
}
</style>

</HEAD>

<body bgcolor="#000099">
<div align="center">

  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="765" height="13">	 
	  <table width="763" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../imagenes/index/arriva.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="127"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="763" height="128">
          <param name="movie" value="../../imagenes/animacione/banner-ch.swf">
          <param name="quality" value="high">
          <embed src="../../imagenes/animacione/banner-ch.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="763" height="128"></embed></object></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="78" height="13" bgcolor="#FFFFFF"><img src="../../imagenes/index/arriva-down.png" width="765" height="16"></td>
    </tr>
  </table>

        <table width="758" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="25" colspan="3" valign="top" bgcolor="#000099"><img src="../../imagenes/comunes/banner-lateral/upy.jpg" width="262" height="25"></td>
            <td width="496" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td width="14" valign="top" bgcolor="#000099"><img src="../../imagenes/comunes/banner-lateral/izq.jpg" width="14" height="555"></td>
            <td width="196" height="509" valign="top" bgcolor="#FF8500"><p align="center"><strong><a href="consejos-generales.php"><?php echo getext($idioma,"title 039"); //General advices?></a></strong></p>
                <p align="center" class="Estilo4"><strong><a href="zvarias/mantener-cartucho.php"><?php echo getext($idioma,"txt 015"); //How to maintain the cartridge in prefect conditions?></a></strong></p>
                <p align="center" class="Estilo4"><strong><a href="zvarias/limpiar-epson.php"><?php echo getext($idioma,"txt 016"); //Instructions for cleaning Epson nozzles?></a></strong></p>
                <p align="center" class="Estilo1"><span class="Estilo5"><a href="epson/epson03.php">
				<?php echo getext($idioma,"txt 017"); //Instructions for separated cartridges Epson C70 / C80 / CX5400 / C64 / C84 / R200 / R300 etc . . .?></a></span></p>
                <p align="center" class="Estilo1"><a href="zvarias/sccr.php"><strong><?php echo getext($idioma,"txt 018"); //Fast refill continuos system?></strong></a></p>
                <p align="center" class="Estilo1"><a href="epson-chip/index.php"><img src="../../imagenes/comunes/Chips.jpg" width="139" height="52" border="0"><br>
                    <strong>Epson Chip Reset </strong></a></p>
                <p align="center" class="Estilo1"><a href="../faq/index.php"><img src="../../imagenes/comunes/phf.jpg" width="113" height="113" border="0"></a></p></td>
            <td width="52" height="479" valign="top" bgcolor="#000099"><div align="center">
                <p><img src="../../imagenes/comunes/banner-lateral/dcha.jpg" width="52" height="555"></p>
            </div></td>
            <td bgcolor="#FFFFFF"><p align="center" class="Estilo2"><?php echo getext($idioma,"title 048"); //Select INK-JET printer brand?></p>
                <table width="97%"  border="0">
                  <tr>
                    <td><div align="center"><a href="brother/index.php?brand=brother"><img src="../../imagenes/comunes/Logos/logo_Brother.jpg" width="127" height="60" border="0"></a>
                    </div></td>
                    <td><div align="center"></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"></div></td>
                    <td><div align="center"><a href="canon/index.php?brand=canon"><img src="../../imagenes/comunes/Logos/logo_Canon.gif" width="142" height="35" border="0"></a></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"><a href="epson/index.php?brand=epson"><img src="../../imagenes/comunes/Logos/logo_epson.jpg" width="127" height="60" border="0"></a></div></td>
                    <td><div align="center"></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"></div></td>
                    <td><div align="center"><a href="hp/index.php?brand=hp"><img src="../../imagenes/comunes/Logos/logo_HP.jpg" width="127" height="60" border="0"></a></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"><a href="lexmark/index.php?brand=lexmark"><img src="../../imagenes/comunes/Logos/logo_Lexmark.gif" width="142" height="43" border="0"></a></div></td>
                    <td><div align="center"></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"></div></td>
                    <td><div align="center"><a href="olivetti/index.php?brand=olivetti"><img src="../../imagenes/comunes/Logos/logo_Olivetti.jpg" width="127" height="60" border="0"></a></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"><a href="xerox/index.php?brand=xerox"><img src="../../imagenes/comunes/Logos/logo_xerox.jpg" width="127" height="60" border="0"></a></div></td>
                    <td>&nbsp;</td>
                  </tr>
              </table></td>
          </tr>
          <tr>
            <td height="18" colspan="3" valign="top" bgcolor="#000099"><img src="../../imagenes/comunes/banner-lateral/downy_azul.jpg" width="262" height="29"></td>
            <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
