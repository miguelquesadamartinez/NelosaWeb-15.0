<?php 
include ("../../eMiKi/Headers/vbles_sesion.php");

include ("../../eMiKi/Funciones_PHP.php");

$tipo = "laser" ;

?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instrucciones recarga Laser</title>
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
	font-size: 18px;
}
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
.Estilo4 {color: #0000FF}
</style>

</HEAD>

<body bgcolor="#000099">
<div align="center"> 
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="765" height="13">
	  <?php 
  include ( "../../eMiKi/Headers/upper.". $idioma . ".php" );
?>


        <table width="758" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="25" colspan="3" valign="top" bgcolor="#000099"><img src="../../imagenes/comunes/banner-lateral/upy.jpg" width="262" height="25"></td>
            <td width="496" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td width="14" valign="top" bgcolor="#000099"><img src="../../imagenes/comunes/banner-lateral/izq.jpg" width="14" height="600"></td>
            <td width="196" height="509" valign="top" bgcolor="#FF8500"><p align="center">&nbsp;</p>
              <p align="center"><strong><a href="instrucciones-laser-varias/consejos-generales-laser.php"><?php echo getext($idioma,"title 039"); //General advices?></a></strong></p>              
			  <p align="center" class="Estilo4"><strong><a href="instrucciones-laser-varias/mantener-cartucho-laser.php"><?php echo getext($idioma,"txt 015"); //How to maintain the cartridge in prefect conditions?></a></strong></p>
              <p align="center" class="Estilo4"><a href="../varias/soporte.php"><img src="../../imagenes/comunes/Support.GIF" width="57" height="93" border="0"></a></p>
            </td>
            <td width="52" height="479" valign="top" bgcolor="#000099"><div align="center">
                <p><img src="../../imagenes/comunes/banner-lateral/dcha.jpg" width="52" height="600"></p>
            </div></td>
            <td bgcolor="#FFFFFF"><p align="center" class="Estilo2"><?php echo getext($idioma,"title 048"); //Select INK-JET printer brand?></p>
                <table width="97%"  border="0">
                  <tr>
                    <td><div align="center"><a href="apple/index.php"><img src="../../imagenes/comunes/Logos/logo_Apple.gif" width="77" height="30" border="0"></a></div></td>
                    <td>&nbsp;</td>
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
                    <td><div align="center"><a href="ibm/index.php"><img src="../../imagenes/comunes/Logos/logo_ibm.jpg" width="94" height="80" border="0"></a></div></td>
                    <td><div align="center"></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"></div></td>
                    <td><div align="center"><a href="lexmark/index.php?brand=lexmark"><img src="../../imagenes/comunes/Logos/logo_Lexmark.gif" width="142" height="43" border="0"></a></div></td>
                  </tr>
                  <tr>
                    <td height="29"><div align="center"><a href="olivetti/index.php?brand=olivetti"><img src="../../imagenes/comunes/Logos/logo_Olivetti.jpg" width="127" height="60" border="0"></a></div></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="center"><a href="sharp/index.php?brand=sharp"><img src="../../imagenes/comunes/Logos/logo_sharp.gif" width="102" height="15" border="0"></a></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"><a href="xerox/index.php?brand=xerox"><img src="../../imagenes/comunes/Logos/logo_xerox.jpg" width="127" height="60" border="0"></a></div></td>
                    <td><div align="center"></div></td>
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
</div>
</body>
</html>
