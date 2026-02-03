<?php 
include ( "../../eMiKi/headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );
?><!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Zona para distribuidores</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset="/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>
<?php 
if ( $distri == "" ){ 
		if ( $usr == "" ){ 
			echo ('<meta http-equiv="refresh" content="0;url=restricted.php">'); 
		}
	}
?>

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
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo54 {
	font-size: 24px;
	color: #FF0000;
	font-weight: bold;
}
.Estilo62 {
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo66 {font-size: 14px}
.Estilo67 {color: #FF0000; font-weight: bold;}
.Estilo68 {color: #FF0000}
.Estilo69 {
	font-size: 16px;
	font-weight: bold;
}
</style></HEAD>

<body bgcolor="#000099">
<div align="center">
  <div align="center">
    <table width="650" border="0">
      <tr>
        <td><div align="center"><a href="../../index.php"><img src="../../../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="../productos/index.php"><img src="../../../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
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
    <table width="745" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="13" bgcolor="#FFFFFF"><div align="center">
            <table width="100%"  border="0">
              <tr>
                <td height="95" valign="top"><div align="center">
                    <p>&nbsp;</p>
                    <p class="Estilo54">Zona para distribuidores</p>
                    <table width="100%"  border="0">
                      <tr>
                        <td width="350"><div align="center">
                          <p class="Estilo66 Estilo1 Estilo3 Estilo68"><strong>Contactar con Nelosa </strong></p>
                          <table width="100%"  border="0">
                            <tr>
                              <td><div align="center">
                                  <form name="form1" method="post" action="send.consulta.php">
                                    <div align="center">
                                      <p>email<br>
                                          <input name="hd_usr" type="text" id="hd_email3" value="<?php echo $usr ; ?>" size="40">
                                        </p>
                                      <p>Asunto<br>
                                          <input name="hd_asunto" type="text" id="hd_asunto" size="40">
                                      </p>
                                      <p>Consulta<br>
                                          <textarea name="hd_consulta" cols="40" rows="6" id="hd_consulta"></textarea>
                                      </p>
                                      <p>
                                        <input type="submit" name="Submit" value="Enviar consulta">
                                        <br>
                                  </p>
                                    </div>
                                    </form>
                                  </div></td>
                            </tr>
                          </table>
                          <span class="Estilo66"></span></div></td>
                        <td width="50%"><div align="center">
                          <table width="100%"  border="0">
                            <tr>
                              <td><div align="center" class="Estilo66"><span class="Estilo67">Descarga de archivos</span></div></td>
                            </tr>
                            <tr>
                              <td><a href="descarga.php">Para descargar videos interactivos de promocion. publicidades, carteles instrucciones de recarga, etc pinche AQUI </a></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td><div align="center"><a href="pedidos/disponible.en.breve.php" class="Estilo69">Pedidos</a></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><a href="pedidos/disponible.en.breve.php">Para realizar un pedido o ver el importe pinche AQUI </a></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>
							  <?php 
							  if ($usr="emiki@nelosa.net" or $usr="miki@nelosa.net" or $usr="info@nelosa.net" )
							  {echo('<form name="form2" method="post" action="printers/consulta.impresora.php">');}
							  else
							  {echo('<form name="form2" method="post" action="printers/no.disponible.php">');}
							  ?>
                                <table width="100%"  border="0">
                                  <tr>
                                    <td colspan="2"><span class="Estilo66"><span class="Estilo68"><strong>Consulta de las instrucciones de recarga</strong></span> para el</span></td>
                                  </tr>
                                  <tr>
                                    <td><div align="right"><span class="Estilo66"><strong>Modelo</strong> de impresora :</span></div></td>
                                    <td><span class="Estilo66">
                                      <input name="modelo" type="text" id="modelo" size="25">
                                    </span></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2">Escriba solo el numero del modelo, sin LaserJet o </td>
                                    </tr>
                                  <tr>
                                    <td><div align="right"><span class="Estilo66">Marca : </span></div></td>
                                    <td><span class="Estilo66">
                                      <input name="marca" type="text" id="marca" size="25">
                                    </span></td>
                                  </tr>
                                  <tr>
                                    <td><div align="right"><span class="Estilo66">N&ordm; de cartucho: </span></div></td>
                                    <td><span class="Estilo66">
                                      <input name="crt" type="text" id="crt" size="25">
                                    </span></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2">&nbsp;</td>
                                    </tr>
                                </table>
                                <p align="center">
                                  <input type="submit" name="Submit2" value="Consultar">
                                </p>
                              </form></td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                      <tr>
                        <td><div align="center"><span class="Estilo66"></span></div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div align="center"><span class="Estilo66"></span></div></td>
                        <td><div align="center">                          <span class="Estilo66"></span></div></td>
                      </tr>
                    </table>
                    <div align="center"></div>
                    </div></td>
              </tr>
            </table>
        </div></td>
      </tr>
    </table>
  </div>
  <p align="center" class="Estilo62">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
  C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</p>
</div>
</body>
</html>
