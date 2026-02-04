<?php 
include ( "../../../eMiKi/headers/vbles_sesion.php" );
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Proceso b&aacute;sico de recarga</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>
<?php 
if ( $usr == "" ){ 
		echo ('<meta http-equiv="refresh" content="1;url=../varias/restricted.php">'); 
	}
?>

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
.Estilo1 {
	color: #FF0000;
	font-size: 24px;
	font-weight: bold;
}
.Estilo3 {font-weight: bold}
.Estilo4 {color: #FF0000}
.Estilo5 {color: #FFFFFF;
	font-weight: bold;
}
.Estilo6 {font-size: 18px}
.Estilo8 {font-size: 24px}
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo12 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
</style>
</HEAD>

<body bgcolor="#000099">
<div align="center">
  <table width="650" border="0">
    <tr>
      <td><div align="center"><a href="../../../index.php"><img src="../../../../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../../productos/index.php"><img src="../../../../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../../instrucciones/index.php"><img src="../../../../img/diseno.paginas/botones/ins.gif" width="132" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../../varias/comprar.php"><img src="../../../../img/diseno.paginas/botones/comprar.gif" width="99" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../../varias/soporte.php"><img src="../../../../img/diseno.paginas/botones/soporte.gif" width="96" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../index.php"><img src="../../../../img/diseno.paginas/botones/club.gif" width="88" height="29" border="0"></a></div></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../../img/diseno.paginas/base/arriba-up.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
    <tr>
      <td height="13"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="776" height="130">
          <param name="movie" value="../../../../img/animaciones/banner-arriva.swf">
          <param name="quality" value="high">
          <embed src="../../../../img/animaciones/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="776" height="130"></embed>
      </object></td>
    </tr>
  </table>
  <table width="765" border="0" bgcolor="#FFFF00">
    <tr>
      <td><table width="99%"  border="0" align="center">
          <tr>
            <td width="15%"><div align="center" class="Estilo11"><a href="../../varias/about.php">Quien somos</a></div></td>
            <td width="29%"><div align="center" class="Estilo11"><a href="../../stp/index.php">Servicio Tecnico Paralelo </a></div></td>
            <td width="30%"><div align="center" class="Estilo11"><a href="../../instrucciones/aa.procedures/index.php">Sistemas Anti Recarga </a></div></td>
            <td width="26%"><div align="center" class="Estilo11"><a href="../../Mailing/index.php">Alta / Baja Mailing </a></div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo11"><a href="../../varias/donde.php">Donde estamos </a></div></td>
            <td><div align="center" class="Estilo11"><a href="../../varias/software.php">Software para printables</a></div></td>
            <td><div align="center" class="Estilo11"><a href="../../rincon/index.php">Rincon Tecnico </a></div></td>
            <td><div align="center" class="Estilo11"><a href="../../distris/index.php">Acceso Tiendas y Distribuidores </a></div></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p class="Estilo3 Estilo1">Proceso b&aacute;sico de recarga</p>
        <table width="97%"  border="0">
          <tr>
            <td colspan="2"><p align="left" class="Estilo6"><span class="Estilo4"><br>
            </span> </p></td>
            </tr>
          <tr>
            <td colspan="2"><strong>1a Cartucho con cabezal :</strong> Proteger los cabezales , utilizando un protector , evitar dar golpes.<br>
              <strong>1b Cartuchos sin cabezal :</strong> &uml;Descubrir el orifico de relleno , si no entra la jeringuilla se puede hacer mas grande con cualquier utensilio que corte , normalmente se encuentra debajo de la pegatina o tapa superior del cartucho, seria conveniente disponer de dos juegos de cartuchos para que no se seque el perno de entrada</td>
            </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="2"><div align="center"><img src="../../../../img/a.inkjet/instrucciones/proc.basico.recarga.1.jpg" width="716" height="214"></div></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><strong>3 </strong>Inyectar tinta<br>
              <strong>4 </strong>Tapar orificio de relleno: <br>
              En la mayor&iacute;a de cartuchos no es necesario cerrar el orificio de relleno, solamente poner la tapa, si la tuviera<br>
              <strong>5</strong> Limpiar cabezales si el cartucho tiene el cabezal incorporado</td>
            </tr>
          <tr>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center" class="Estilo4"><strong><span class="Estilo8">Recarga de los cartuchos de HP de negro</span><br>
              Exceptuando los modelos 26, 56 10 y 11</strong></div></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">En estos cartuchos es necesario crear un vacio presionando las paredes cuando se cierra el orificio de relleno.<br>
              No introducir la aguja en el cartucho mas de 1 cm. evitara pinchar las bolsas internas</td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center"><strong>Hacer orificio y cerrar hermeticamente</strong></div></td>
            <td><div align="center"><strong>Meter bola dentro del cartucho y reemplazar despu&eacute;s</strong></div></td>
          </tr>
          <tr>
            <td><div align="center"><img src="../../../../img/a.inkjet/instrucciones/proc.basico.recarga.2.jpg" width="226" height="289"></div></td>
            <td><div align="center"><img src="../../../../img/a.inkjet/instrucciones/proc.basico.recarga.3.jpg" width="235" height="286"></div></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Se pueden cargar utilizando herramientas que inyectan tinta por los cabezales</div></td>
            </tr>
        </table>
        </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
  <p><span class="Estilo12">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</span></p>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
