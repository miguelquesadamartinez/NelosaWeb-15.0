<?php 
include ( "eMiKi/headers/vbles_sesion.php" );
include ( "eMiKi/Funciones_PHP.php" );
$idioma = "esp" ;

$jost = "nelosa.net" ;
if ($usr == "")
{
	$var = isset($_COOKIE["nelosa"]) ? $_COOKIE["nelosa"] : "";
	//echo "<BR>var : " .$var." <BR>" ;
	//echo "<BR> -- <BR>" ;
	if ($var <> "") { $usr = $var;  $distri='' ;}
	$var = isset($_COOKIE["nelosadistri"]) ? $_COOKIE["nelosadistri"] : "";
	if ($var <> "") { $usr = $var; $distri='si' ; }
}

if ($usr == "")	{ $tamano_barra=600; }
else { $tamano_barra=600; }

?>

<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Nelosa Accesorios Home</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>
<style TYPE="text/css">
A:link {color:#0000FF;  text-decoration: none;}
A:hover{color:#0000FF;  text-decoration: none;}
A:visited {color: #0000FF;  text-decoration: none;}
H1{font-family:Arial, Helvetica, sans-serif}
H2{font-family:Arial, Helvetica, sans-serif}
H3{font-family:Arial, Helvetica, sans-serif}
P{font-family:Arial, Helvetica, sans-serif}
BODY{color:"#0000FF"; font-family:Arial, Helvetica, sans-serif}
.Estilo1 {
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.Estilo6 {font-size: 12px}
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo17 {color: #0000FF; font-weight: bold; }
.Estilo20 {
	color: #FFFF00;
	font-weight: bold;
	font-size: 11px;
}
.Estilo25 {font-size: 14px}
.Estilo27 {font-weight: bold; color: #FFFF00;}
.Estilo28 {font-size: 16px}
.Estilo30 {color: #FFFFFF; font-weight: bold; font-size: 18px; }
.Estilo31 {color: #FFFFFF}
a:active {
	color: #0000FF;
}
.Estilo33 {
	color: #FF0000;
	font-size: 18px;
}
.Estilo35 {color: #0000FF}
.Estilo40 {font-size: 10px}
.Estilo41 {color: #FFFFFF; font-weight: bold; font-size: 14px; }
.Estilo43 {
	color: #0000FF;
	font-size: 12px;
	font-weight: bold;
}
.Estilo44 {color: #00FFFF}
</style>

</HEAD>
<body bgcolor="#000099">
<div align="center">
<table width="650" border="0">
      <tr>
        <td><div align="center"><a href="index.php"><img src="../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="paginas/productos/index.php"><img src="../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="paginas/instrucciones/index.php"><img src="../img/diseno.paginas/botones/ins.gif" width="137" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="paginas/varias/comprar.php"><img src="../img/diseno.paginas/botones/comprar.gif" width="99" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="paginas/varias/soporte.php"><img src="../img/diseno.paginas/botones/soporte.gif" width="96" height="29" border="0"></a></div></td>
        <td><div align="center"><a href="paginas/club/index.php"><img src="../img/diseno.paginas/botones/club.gif" width="88" height="29" border="0"></a></div></td>
      </tr>
  </table>
    <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../img/diseno.paginas/base/arriba-up.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
    <tr>
      <td height="13"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="776" height="130">
        <param name="movie" value="../img/animaciones/banner-arriva.swf">
        <param name="quality" value="high">
        <embed src="../img/animaciones/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="776" height="130"></embed>
      </object></td>
    </tr>
  </table>
  <table width="765" border="0" bgcolor="#FFFF00">
    <tr>
      <td><table width="99%"  border="0" align="center">
          <tr>
            <td width="15%"><div align="center" class="Estilo11"><strong><a href="paginas/varias/about.php">Quien somos</a></strong></div></td>
            <td width="29%"><div align="center" class="Estilo11"><a href="paginas/rincon/tipos.impresoras.php"></a><a href="paginas/stp/index.php">Servicio Tecnico Paralelo </a></div></td>
            <td width="30%"><div align="center" class="Estilo11"><a href="paginas/instrucciones/aa.procedures/index.php">Sistemas Anti Recarga </a></div></td>
            <td width="26%"><div align="center" class="Estilo11"><a href="paginas/Mailing/index.php">Alta / Baja Mailing </a></div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo11"><a href="paginas/varias/donde.php">Donde estamos </a></div></td>
            <td><div align="center" class="Estilo11"><a href="paginas/varias/software.php">Software para printables</a></div></td>
            <td><div align="center" class="Estilo11"><a href="paginas/rincon/index.php">Rincon Tecnico </a></div></td>
            <td><div align="center" class="Estilo11"></div>
                <div align="center" class="Estilo11"><a href="paginas/distris/index.php">Acceso Tiendas y Distribuidores </a></div></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF8400">
    <tr>
      <td height="13"><img src="../img/diseno.paginas/middle/middle.jpg" width="750" height="28"></td>
    </tr>
  </table>
  <table width="750" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF8400">
    <tr>
      <td width="5" height="13" bgcolor="#FF8400"><img src="../img/diseno.paginas/lateral/left.jpg" width="9" height="<?php echo ($tamano_barra);?>"></td>
      <td width="204" valign="top" bgcolor="#FF8400"><table width="100%"  border="0">
        <tr>
          <td><img src="../img/diseno.paginas/comunes/banderas/esp.jpg" width="25" height="12"></td>
          <td><a href="paginas/varias/seccion.desactivada.php"><img src="../img/diseno.paginas/comunes/banderas/cat.jpg" width="25" height="12" border="0"></a></td>
          <td><a href="paginas/varias/seccion.desactivada.php"><img src="../img/diseno.paginas/comunes/banderas/eng.jpg" width="25" height="12" border="0"></a></td>
          <td><a href="paginas/varias/seccion.desactivada.php"><img src="../img/diseno.paginas/comunes/banderas/fra.jpg" width="25" height="12" border="0"></a></td>
          <td><a href="paginas/varias/seccion.desactivada.php"><img src="../img/diseno.paginas/comunes/banderas/ned.jpg" width="25" height="12" border="0"></a></td>
          <td><a href="paginas/varias/seccion.desactivada.php"><img src="../img/diseno.paginas/comunes/banderas/por.jpg" width="25" height="12" border="0"></a></td>
        </tr>
      </table>
      <p align="center" class="Estilo20"><img src="../img/diseno.paginas/comunes/Nelosas/nelosa.web.gif" width="195" height="86"></p>
      <p align="center" class="Estilo20 Estilo25">&nbsp;</p>
      <p align="center" class="Estilo20 Estilo25"><span class="Estilo30">Productos</span></p>
      <table width="100%"  border="0">
        <tr>
          <td width="12%" class="Estilo28"><img src="../img/diseno.paginas/index/pastilla-lateral.png" width="20" height="8"></td>
          <td width="88%" class="Estilo28"><div align="center" class="Estilo27"> </div>
              <div align="center" class="Estilo27">
                <div align="left">Recargas de tinta <br> 
                para Cartuchos </div>
            </div></td>
        </tr>
        <tr>
          <td class="Estilo28">&nbsp;</td>
          <td class="Estilo28"><span class="Estilo6 Estilo31">El sistema mas economico, sencillo y ecologico. </span></td>
        </tr>
      </table>      
      <table width="100%"  border="0">
        <tr>
          <td width="33%" class="Estilo28">&nbsp;</td>
          <td width="67%" class="Estilo28"><div align="center" class="Estilo4 Estilo25">
              <p align="left"><a href="paginas/productos/index-refill_ink-jet.php">Ink-Jet </a></p>
          </div></td>
        </tr>
        <tr>
          <td class="Estilo28">&nbsp;</td>
          <td class="Estilo28">
            <div align="center" class="Estilo41">
              <p align="left"> <a href="paginas/productos/index-refill_laser.php">Laser Negro </a></p>
          </div></td>
        </tr>
        <tr>
          <td class="Estilo28">&nbsp;</td>
          <td class="Estilo28">
            <div align="left" class="Estilo41"><a href="paginas/productos/index-refill_laser_color.php">Laser Color</a></div></td>
        </tr>
      </table>      
      <br>
      <table width="100%"  border="0">
        <tr>
          <td width="12%" class="Estilo28"><img src="../img/diseno.paginas/index/pastilla-lateral.png" width="20" height="8"></td>
          <td width="88%" class="Estilo28"><div align="left"><span class="Estilo27"> Printables </span></div></td>
        </tr>
        <tr>
          <td class="Estilo28">&nbsp;</td>
          <td class="Estilo6 Estilo31">Para personalizar sus Etiquetas CD/DVD, Tarjetas de visita, etc. </td>
        </tr>
      </table>
      <table width="100%"  border="0">
        <tr>
          <td width="31%" class="Estilo28">&nbsp;</td>
          <td width="69%" class="Estilo28"><div align="center" class="Estilo1">
              <p align="left" class="Estilo40"><a href="paginas/productos/etq-cd.php" class="Estilo25">Para CD&acute;s y DVD</a></p>
          </div></td>
        </tr>
        <tr>
          <td class="Estilo28">&nbsp;</td>
          <td class="Estilo28">
            <div align="center" class="Estilo1">
              <p align="left"> <strong><a href="paginas/productos/deluxe-cards.php" class="Estilo25">Deluxe cards</a></strong></p>
          </div></td>
        </tr>
      </table>
      <br>
      <table width="100%"  border="0">
        <tr>
          <td width="12%" class="Estilo28"><img src="../img/diseno.paginas/index/pastilla-lateral.png" width="20" height="8"></td>
          <td width="88%" class="Estilo28"><div align="left"><span class="Estilo27"> Audio - 
            Video<br>
            </span></div></td>
        </tr>
      </table>
      <table width="100%"  border="0">
        <tr>
          <td width="31%" class="Estilo28">&nbsp;</td>
          <td width="69%" class="Estilo28"><div align="center" class="Estilo1">
              <p align="left" class="Estilo40"><a href="paginas/productos/accesorios.cd.dvd.audio.video.php" class="Estilo25">Accesorios</a></p>
          </div></td>
        </tr>
      </table>
      </td>
      <td width="11" bgcolor="#FFFFFF"><img src="../img/diseno.paginas/lateral/right.jpg" width="11" height="<?php echo ($tamano_barra);?>"></td>
      <td width="530" rowspan="2" valign="top" bgcolor="#FFFFFF"><div align="center">
        <table width="100%"  border="0">
          <tr>
            <td width="48%" height="398" valign="top"><div align="center">
                <table width="100%"  border="0">
                    <tr>
                      <td colspan="2"><div align="center" class="Estilo17"><a href="paginas/instrucciones/index.php">Instrucciones para la<br>
                  recarga de cartuchos</a><br>
                  <br>
                      </div></td>
                    </tr>
                    <tr>
                      <td width="48%"><div align="center"><a href="paginas/instrucciones/index.ink.jet.php"><img src="../img/diseno.paginas/comunes/logo-ink-jet-p.jpg" width="59" height="75" border="0"></a></div></td>
                      <td width="52%"><div align="center"><a href="paginas/instrucciones/index.laser.php"><img src="../img/diseno.paginas/comunes/logo-laser-p.jpg" width="59" height="74" border="0"></a></div></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div align="center">
                        <p><strong><span class="Estilo25"><a href="../archivos/instrucciones.interactivas/index.php" target="_blank"><br>
                        Instrucciones interactivas</a></span></strong></p>
                        <p class="Estilo25 Estilo35"><a href="paginas/foro/index.php"><strong>El Foro de la Recarga </strong></a></p>
                      </div></td>
                    </tr>
                </table>
                <br>
                <table width="75%" height="10"  border="0">
                  <tr>
                    <td height="10" bgcolor="#FFFFCC"></td>
                  </tr>
                </table>
                <p class="Estilo17 Estilo33">Servicio Tecnico Paralelo </p>
                <p align="center" class="Estilo17"><a href="paginas/varias/proximamente.php">Modificacion Impresoras</a></p>
                <p align="center" class="Estilo17"><a href="paginas/varias/proximamente.php"> Cartuchos acondicionados <br>
                  para la recarga</a></p>
                <p align="center" class="Estilo17"><a href="paginas/stp/index.php">Servicio Gratuito<br>
  de recarga de<br>
  Toner Laser</a></p>
                <p class="Estilo17"><span class="Estilo3 Estilo1 Estilo35"><strong><a href="paginas/varias/compra-impresora.php">Soporte para la compra de una impresora</a></strong></span></p>
            </div>              <div align="center" class="Estilo35"></div></td>
            <td width="50%" valign="top">
              <?php 

				/*if ($usr == "")
				{
					$var = $_COOKIE["nelosa"];
					//echo "<BR>var : " .$var." <BR>" ;
					//echo "<BR> -- <BR>" ;
					if ($var <> "")
					{
						$usr = $var;
					}
				}*/
if ($distri=="")
{
			if ($usr == "")
			{
				echo ('<form action="paginas/club/validationpages/check.php?lastpage=index.php" name="Formulario_3" class="Estilo17" id="Formulario_3"  onSubmit="return validarDatos_3()" >');
				echo ('<div align="center" class="Estilo6">');
				echo ('<p class="Estilo18"><font face="Arial, Helvetica, sans-serif">Validese con su usuario <br> email ');
				echo ('<input name="user" type="text" class="Estilo18" size="20"><br> Clave ');
				echo ('<input name="pwd" type="password" class="Estilo18" size="20"><br>');
				echo ('<input name="Login" type="submit" class="Estilo18" value="Login" size="20"><br>');
				echo ('<a href="paginas/club/validationpages/forgetPwd.php?lastpage=index.php">Olvido su clave ? ! ? </a><BR>');
				echo ('<a href="paginas/club/validationpages/registrar.php?lastpage=index.php">Nuevo Usuario </a></font></p></div></form>');
			}
			else
			{
				    $link=mysql_connect("mysql","nelosa_nelosa","mqm1804") ;
					mysql_select_db("nelosa_nelosa",$link) ;
					
					$result=mysql_query("Select * from Clientes where email = '". $usr ."'" ,$link); 
					$row = mysql_fetch_array($result);
			
					$usr=(string)$row["email"];
					$vs_email=(string)$row["email"];
					$vs_nom=(string)$row["Nombre"];
					$vs_ape1=(string)$row["Apellido1"];
					$vs_tel=(string)$row["Telefono"];
					$vs_ape2=(string)$row["Apellido2"];
					$vs_doc=(string)$row["Doc"];
					$vs_empresa=(string)$row["Empresa"];
					$vs_adr=(string)$row["Direccion"];
					$vs_cp=(string)$row["Cp"];
					$vs_pob=(string)$row["Poblacion"];
					$vs_prov=(string)$row["Provincia"];
					$vs_pais=(string)$row["Pais"];
					
					$result=mysql_query("Select * from Datas where mail = '". $usr ."'" ,$link); 
					$row = mysql_fetch_array($result);
			
					$miki=(string)$row["otro"];

				
				echo ('<p align="center" class="Estilo25">Hola <b>' . $vs_nom . '</b><BR><BR>Usuario registrado:<BR>' . $usr . '<BR><BR></p>');
				echo ('<p align="center" class="Estilo25"><a href="paginas/club/validationpages/modifUser.php">Modificar usuario</a>');
				echo ('<span class="Estilo43"><a href="paginas/varias/log.out.php"><BR>Cerrar sesion</a></span></p>');
			}
}
			?> 
              <div align="center">
                          
              <table width="75%" height="10"  border="0" align="center">
                  <tr>
                    <td height="10" bgcolor="#FFFFCC"></td>
                  </tr>
                  </table>
              <p>                  <font face="Arial, Helvetica, sans-serif" class="Estilo17 Estilo33">                Contactar con soporte</font></p>
              <p class="Estilo17"><font face="Arial, Helvetica, sans-serif"><a href="paginas/soporte/index.php">web mail </a></font>
                  </p>
            </div>
            <table width="75%" height="10"  border="0" align="center">
              <tr>
                <td height="10" bgcolor="#FFFFCC"></td>
              </tr>
</table>            <p align="center" class="Estilo17"><font face="Arial, Helvetica, sans-serif"><a href="paginas/varias/donde.php">Donde estamos</a></font></p>            <div align="center">
			  			    <table width="75%" height="10"  border="0">
                              <tr>
                                <td height="10" bgcolor="#FFFFCC"></td>
                              </tr>
                            </table>
  			    </div>			  			  
			  			  <p align="center" class="Estilo17"><a href="paginas/varias/comprar.php">Como Comprar</a></p>  			    
			  			  <table width="75%" height="10"  border="0" align="center">
                            <tr>
                              <td height="10" bgcolor="#FFFFCC"></td>
                            </tr>
                          </table>  			    
                          <form name="form1" method="post" action="paginas/distris/validationpages/check.php">
                <div align="center">
                  <p class="Estilo17">Acceso Distribuidores 
    y Tiendas </p>
                  <p class="Estilo17">
 <?php 
if ($distri<>"")
{
				    $link=mysql_connect("mysql","nelosa_nelosa","mqm1804") ;
					mysql_select_db("nelosa_nelosa",$link) ;
					
					$result=mysql_query("Select * from Clientes_Tiendas where email = '". $usr ."'" ,$link); 
					$row = mysql_fetch_array($result);
			
					$usr=(string)$row["email"];
					$vs_email=(string)$row["email"];
					$vs_nom=(string)$row["Nombre"];
					$vs_ape1=(string)$row["Apellido1"];
					$vs_tel=(string)$row["Telefono"];
					$vs_ape2=(string)$row["Apellido2"];
					$vs_doc=(string)$row["Doc"];
					$vs_empresa=(string)$row["Empresa"];
					$vs_adr=(string)$row["Direccion"];
					$vs_cp=(string)$row["Cp"];
					$vs_pob=(string)$row["Poblacion"];
					$vs_prov=(string)$row["Provincia"];
					$vs_pais=(string)$row["Pais"];
					
					$result=mysql_query("Select * from Datas_Tiendas where mail = '". $usr ."'" ,$link); 
					$row = mysql_fetch_array($result);
			
					$miki=(string)$row["otro"];

				
				echo ('<p align="center" class="Estilo25">Hola <b>' . $vs_nom . '</b><BR><BR>Usuario registrado:<BR>' . $usr . '</p>');
				echo ('<span class="Estilo43"><a href="paginas/distris/validationpages/modifUser.php">Modificar usuario</a></span><BR>');
				echo ('<span class="Estilo43"><a href="paginas/distris/validationpages/log.out.php">Cerrar sesion</a></span>  ');
}
			?>
				  </p>
                  <table width="90%"  border="0">
                    <tr>
                      <td><div align="center"><span class="Estilo43">email </span></div></td>
                      <td><span class="Estilo17">
                        <input name="user" type="text" id="user" value="
<?php if ($distri<>""){
if ($usr <> ""){echo($usr);
}}
?>
" size="20">
                      </span></td>
                    </tr>
                    <tr>
                      <td><div align="center"><span class="Estilo43">Clave</span></div></td>
                      <td><span class="Estilo17">
                        <input name="pwd" type="password" id="pwd" size="20">
                      </span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div align="center"><span class="Estilo17">
                          <input type="submit" name="Submit" value="entrar">
                      </span></div></td>
                      </tr>
                  </table>
                  <p class="Estilo17">					<span class="Estilo6"><a href="paginas/distris/validationpages/forgetPwd.php">Olvido su clave ? ! ? </a><BR>
				    <a href="paginas/distris/validationpages/registrar.php">Nuevo Usuario </a></span></p>
                  </div>
              </form>              </td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr>
      <td height="22" colspan="3" bgcolor="#000099"><img src="../img/diseno.paginas/lateral/down.jpg" width="223" height="22"></td>
    </tr>
  </table>
  <blockquote>
    <blockquote>
      <blockquote>
        <p> <span class="Estilo4">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
  C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</span>&nbsp;</p>
      </blockquote>
    </blockquote>
  </blockquote>
</div>
</body>
</html>
