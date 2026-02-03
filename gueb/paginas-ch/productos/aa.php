<?php 
include ( "../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );
$idioma = "fra" ;
?><!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Kits universales recarga Cartuchos Impresoras Ink-Jet</title>
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
</style>

</HEAD>

<body bgcolor="#000099" text="#0000FF">
<div align="center">

      
  </table>
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
          <embed src="../../imagenes/animacione/banner-ch.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="763" height="128"></embed>
      </object></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="78" height="13" bgcolor="#FFFFFF"><img src="../../imagenes/index/arriva-down.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
          <p>&nbsp;</p>
          <table width="97%"  border="0">
            <tr>
              <td><p align="center"><b></b></p>
                <font size="2">
                <?php 	

$bar = 0 ;

$des = getDenom ( $idioma , $ref ) ; // OJO es asi, hay un lio denominacion - descripcion

$texto = getDesc ( $idioma , $ref ) ;
	
echo (" <table width='99%' border='0'><tr><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>") ;
echo (" <td height ='55' colspan='4'><div align='center'>Ref: $ref - $des</div></td>") ;
echo (" </tr>") ;
echo (" <tr>") ;
echo (" <td width='40%'><div align='right'><img src='../../imagenes/productos/$ref.jpg' border='0'</div></td>") ;
echo (" <td width='10%'><div></div></td>") ;
echo (" <td width='40%'><div align='left'>$texto</div></td>") ;
echo (" <td width='10%'><div></div></td>") ;
echo (" </font></tr></table>") ;
	?>
                </font><font size="4">&nbsp;                </font>
                <p align="center">&nbsp;</p></td>
            </tr>
          </table>
      </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF"><div align="right"><a href="../../index.ch.php"><img src="../../imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></div></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>

</body>
</html>
