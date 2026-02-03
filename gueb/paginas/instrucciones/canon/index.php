<?php 
include ( "../../../eMiKi/headers/vbles_sesion.php" );
include("../../../eMiKi/Funciones_PHP.php");
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instrucciones recarga Canon</title>
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
.Estilo7 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
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
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="853" height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <p>
		 </p>
        <p><img src="../../../../img/diseno.paginas/comunes/logos/logo_canon.jpg" width="127" height="60" align="absmiddle"></p>
        <p>Seleccione la imagen de cartucho</p>
        
       <?php if ($tipo=="inkjet")echo ('<p><a href="canon09.php"><img src="../../../../img/a.inkjet/instrucciones/recarga/cartucho.ins/canon1.jpg" width="150" height="100" border="0"></a><a href="canon10.php"><img src="../../../../img/a.inkjet/instrucciones/recarga/cartucho.ins/BC-10-11.jpg" width="98" height="75" border="0"></a><a href="canon01.php"><img src="../../../../img/a.inkjet/instrucciones/recarga/cartucho.ins/BC-02.jpg" width="95" height="98" border="0"></a><a href="canon01.php"><img src="../../../../img/a.inkjet/instrucciones/recarga/cartucho.ins/BC-05.jpg" width="100" height="100" border="0"></a><a href="canon01.php"><img src="../../../../img/a.inkjet/instrucciones/recarga/cartucho.ins/canon2.jpg" width="100" height="80" border="0"></a><a href="canon01.php"><img src="../../../../img/a.inkjet/instrucciones/recarga/cartucho.ins/canon3.jpg" width="100" height="100" border="0"></a></p>');
        if ($tipo=="laser")echo ('<p><a href="canonA-30.php"><img src="../../../../img/a.laser/recarga/canon/canonA30.jpg" width="151" height="67" border="0"></a><a href="canonE-20.php"><img src="../../../../img/a.laser/recarga/canon/canonE20.jpg" width="154" height="69" border="0"></a><a href="canonE-40.php"><img src="../../../../img/a.laser/recarga/canon/canonE40.jpg" width="154" height="71" border="0"></a><a href="canonEP-E.php"><img src="../../../../img/a.laser/recarga/canon/canonEPE.jpg" width="121" height="73" border="0"></a>         <a href="canonEP-L.php"><br>
         <img src="../../../../img/a.laser/recarga/canon/canonEPL.jpg" width="195" height="78" border="0"></a> <a href="canonEP-P.php"><img src="../../../../img/a.laser/recarga/canon/canonEPP.jpg" width="187" height="85" border="0"></a><a href="canonEP-S.php">
         <img src="../../../../img/a.laser/recarga/canon/canonEPS.jpg" width="144" height="76" border="0"></a><a href="canonFX-1.php"><img src="../../../../img/a.laser/recarga/canon/canonFX1.jpg" width="186" height="74" border="0"><br>
         </a><a href="canonFX-2.php"><img src="../../../../img/a.laser/recarga/canon/canonFX2.jpg" width="170" height="80" border="0"></a><a href="canonFX-3.php"><img src="../../../../img/a.laser/recarga/canon/canonFX3.jpg" width="203" height="71" border="0"></a><a href="canonFX-4.php"><img src="../../../../img/a.laser/recarga/canon/canonFX4.jpg" width="150" height="68" border="0"></a></p>');
		?>
       
       <p>Seleccione el modelo de su impresora</p>
        <table width="97%"  border="0">
          <tr>
            <td><p>
							<table width="97%"  border="0">

<?php 
$marca= "canon" ;
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
    <p><span class="Estilo7">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
    C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</span></p>
  </div>
    <p>&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
