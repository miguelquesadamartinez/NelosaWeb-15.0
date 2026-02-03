<?php 
include ( "../../../eMiKi/headers/vbles_sesion.php" );
include("../../../eMiKi/Funciones_PHP.php");
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instrucciones recarga HP</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>
<?php 
if ( $usr == "" ){ 
		echo ('<meta http-equiv="refresh" content="0;url=../../varias/restricted.php">'); 

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
	font-size: 12px;
}
.Estilo3 {	color: #FFFFFF;
	font-weight: bold;
}
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
      <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p><img src="../../../../img/diseno.paginas/comunes/logos/logo_hp.jpg" width="127" height="60" align="absmiddle"></p>
        <p>Seleccione la imagen de cartucho</p>
        <?php if ($tipo=="inkjet")echo ('<p><a href="hp01.php"><img src="../../../../img/a.inkjet/instrucciones/recarga/cartucho.ins/hp22.jpg" width="76" height="83" border="0"></a><a href="hp02.php"><img src="../../../../img/a.inkjet/instrucciones/recarga/cartucho.ins/C1823%20-%2023.gif" width="70" height="70" border="0"></a><a href="hp02.php"><img src="../../../../img/a.inkjet/instrucciones/recarga/cartucho.ins/5164.jpg" width="31" height="70" border="0"></a><a href="hp04.php"><img src="../../../../img/a.inkjet/instrucciones/recarga/cartucho.ins/hp.jpg" width="218" height="87" border="0"><img src="../../../../img/a.inkjet/instrucciones/recarga/cartucho.ins/Imagen%201.jpg" width="78" height="81" border="0"></a></p>');
        if ($tipo=="laser")echo ('<p><a href="hp92298A.php"><img src="../../../../img/a.laser/recarga/hp/hp92298A.1.jpg" width="155" height="95" border="0"></a><a href="hpC4092A.php"><img src="../../../../img/a.laser/recarga/hp/hpC4092A.jpg" width="247" height="93" border="0"></a><a href="hpQ2612A.php"><img src="../../../../img/a.laser/recarga/hp/hpQ2612A.jpg" width="264" height="91" border="0"></a><br>
          <a href="hpQ267xA.php"><img src="../../../../img/a.laser/recarga/hp/Q267xA_1.jpg" width="269" height="98" border="0"></a> <a href="hpQ397xA.php"><img src="../../../../img/a.laser/recarga/hp/Q397xA.jpg" width="288" height="91" border="0"><br>
          </a><a href="hpQ2613A.php"><img src="../../../../img/a.laser/recarga/hp/hpQ2613A.jpg" width="245" height="101" border="0"></a><a href="hpC4182C.php"><img src="../../../../img/a.laser/recarga/hp/hpC4182X.2.jpg" width="162" height="123" border="0"></a></p>');
        ?>

        
        <p>Seleccione el modelo de su impresora</p>
        <table width="97%"  border="0">
          <tr>
            <td><p>
							<table width="97%"  border="0">

<?php 
$marca= "hp" ;
include("../../../eMiKi/listar_impresoras.php");
?>

           	    </table>
              </p>
              </td>
          </tr>
        </table>
      Consulte en <a href="mailto:info@nelosa.net">info@nelosa.net</a> si su impresora 
          o marca no aparece</div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
  <div align="center">
    <p><span class="Estilo12">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
    C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a </span></p>
  </div>
  <p align="center">&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
