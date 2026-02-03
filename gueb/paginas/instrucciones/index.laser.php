<?php 
include ( "../../eMiKi/headers/vbles_sesion.php" );
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
<?php 
if ( $usr == "" ){ 
		echo ('<meta http-equiv="refresh" content="0;url=../varias/restricted.php">'); 
	}?>

<style TYPE="text/css">
A:link {color:#0000FF;  text-decoration: none;}
A:hover{color:#0000FF;  text-decoration: none;}
A:visited {color: #0000FF;  text-decoration: none;}
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
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
.Estilo4 {
	font-size: 12px;
	color: #0000FF;
	font-weight: bold;
}
.Estilo8 {color: #0000FF}
.Estilo9 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo12 {font-size: 12px; font-weight: bold;}
.Estilo13 {font-size: 14px}
.Estilo14 {color: #0000FF; font-size: 14px; }
a:active {
	color: #0000FF;
}
</style>

</HEAD>

<body bgcolor="#000099">
<div align="center">

  <table width="650" border="0">
    <tr>
      <td><div align="center"><a href="../../index.php"><img src="../../../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="index.php"><img src="../../../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../instrucciones/index.php"><img src="../../../img/diseno.paginas/botones/ins.gif" width="132" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../varias/comprar.php"><img src="../../../img/diseno.paginas/botones/comprar.gif" width="99" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../varias/soporte.php"><img src="../../../img/diseno.paginas/botones/soporte.gif" width="96" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../club/index.php"><img src="../../../img/diseno.paginas/botones/club.gif" width="88" height="29" border="0"></a></div></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../img/diseno.paginas/base/arriba-up.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
    <tr>
      <td height="13"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="776" height="130">
          <param name="movie" value="../../../img/animaciones/banner-arriva.swf">
          <param name="quality" value="high">
          <embed src="../../../img/animaciones/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="776" height="130"></embed>
      </object></td>
    </tr>
  </table>
  <table width="765" border="0" bgcolor="#FFFF00">
    <tr>
      <td><table width="99%"  border="0" align="center">
          <tr>
            <td width="15%"><div align="center" class="Estilo11"><strong><a href="../varias/about.php">Quien somos</a></strong></div></td>
            <td width="29%"><div align="center" class="Estilo11"><a href="../stp/index.php">Servicio Tecnico Paralelo </a></div></td>
            <td width="30%"><div align="center" class="Estilo11"><a href="../instrucciones/aa.procedures/index.php">Sistemas Anti Recarga </a></div></td>
            <td width="26%"><div align="center" class="Estilo11"><a href="../Mailing/index.php">Alta / Baja Mailing </a></div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo11"><a href="../varias/donde.php">Donde estamos </a></div></td>
            <td><div align="center" class="Estilo11"><a href="../varias/software.php">Software para printables</a></div></td>
            <td><div align="center" class="Estilo11"><a href="../rincon/index.php">Rincon Tecnico </a></div></td>
            <td><div align="center" class="Estilo11"></div>
                <div align="center" class="Estilo11"><a href="../distris/index.php">Acceso Tiendas y Distribuidores </a></div></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF8400">
    <tr>
      <td height="13"><img src="../../../img/diseno.paginas/middle/middle.jpg" width="750" height="28"></td>
    </tr>
  </table>
  <table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF8400">
    <tr>
      <td width="9" height="13" bgcolor="#FF8400"><img src="../../../img/diseno.paginas/lateral/left.jpg" width="9" height="450"></td>
      <td width="203" valign="top" bgcolor="#FF8400"><p align="center" class="Estilo8 Estilo13"><strong><span class="Estilo13"><a href="../../../archivos/instrucciones.interactivas/index.php" target="_blank">Instrucciones interactivas</a></span></strong></p>
        <p align="center" class="Estilo14"><strong><a href="aa.instrucciones.laser/consejos-generales-laser.php">Consejos Generales</a></strong></p>
        <p align="center" class="Estilo14"><strong>Tipos de Cartuchos</strong></p>
        <p align="center" class="Estilo14"><strong>A tener en cuenta sobre las diferentes marcas de impresoras<br>
  Laser</strong></p>
        <p align="center" class="Estilo4"><span class="Estilo13"><a href="aa.instrucciones.laser/mantener-cartucho-laser.php">Como mantener el<br>
  cartucho en <br>
  prefecto estado</a></span> </p></td>
      <td width="11" bgcolor="#FFFFFF"><img src="../../../img/diseno.paginas/lateral/right.jpg" width="11" height="450"></td>
      <td width="529" rowspan="2" valign="top" bgcolor="#FFFFFF"><div align="center">
        <p align="center" class="Estilo2">Seleccione su impresora LASER </p>
        <table width="97%"  border="0">
          <tr>
            <td><div align="center"><a href="apple/index.php"><img src="../../../img/diseno.paginas/comunes/logos/logo_apple.gif" width="77" height="30" border="0"></a></div></td>
            <td><div align="center"><a href="brother/index.php"><img src="../../../img/diseno.paginas/comunes/logos/logo_brother.jpg" width="127" height="60" border="0"></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="canon/index.php?brand=canon"><img src="../../../img/diseno.paginas/comunes/logos/logo_canon.jpg" width="127" height="60" border="0"></a></div></td>
            <td><div align="center"><a href="epson/index.php?brand=epson"><img src="../../../img/diseno.paginas/comunes/logos/logo_epson.jpg" width="127" height="60" border="0"></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="hp/index.php?brand=hp"><img src="../../../img/diseno.paginas/comunes/logos/logo_hp.jpg" width="127" height="60" border="0"></a></div></td>
            <td><div align="center"><a href="ibm/index.php"><img src="../../../img/diseno.paginas/comunes/logos/logo_ibm.jpg" width="94" height="80" border="0"></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="lexmark/index.php?brand=lexmark"><img src="../../../img/diseno.paginas/comunes/logos/logo_lexmark.jpg" width="127" height="60" border="0"></a></div></td>
            <td><div align="center"><img src="../../../img/diseno.paginas/comunes/logos/logo_oki.jpg" width="127" height="60"></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="sharp/index.php?brand=sharp"><img src="../../../img/diseno.paginas/comunes/logos/logo_sharp.gif" width="102" height="15" border="0"></a></div></td>
            <td><div align="center"><a href="xerox/index.php?brand=xerox"><img src="../../../img/diseno.paginas/comunes/logos/logo_xerox.jpg" width="127" height="60" border="0"></a></div></td>
          </tr>
        </table>
        <p>Consulte en <a href="mailto:info@nelosa.net">info@nelosa.net</a> si su impresora o marca no aparece</p>
      </div></td>
    </tr>
    <tr>
      <td height="13" colspan="3" bgcolor="#000099"><img src="../../../img/diseno.paginas/lateral/down.jpg" width="221" height="22"></td>
    </tr>
  </table>
  <blockquote>
    <blockquote>
      <blockquote>
        <p> <span class="Estilo9">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
        C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</span></p>
      </blockquote>
    </blockquote>
  </blockquote>
</div>
</body>
</html>
