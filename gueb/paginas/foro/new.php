<?php 	include("../../eMiKi/headers/vbles_sesion.php");
$idioma = "esp" ; 
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE>Universal Refill Kit  -  Nelosa Accesrios  -  </TITLE>
<meta name="title" content="El foro de la recarga"/>
<meta http-equiv="title" content="El foro de la recarga"/>
<meta name="DC.Title" content="El foro de la recarga"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>
<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#FF00FF";  text-decoration: none;}
A:visited {color: "#FF0000";  text-decoration: none;}
H1{font-family:Arial, Helvetica, sans-serif}
H2{font-family:Arial, Helvetica, sans-serif}
H3{font-family:Arial, Helvetica, sans-serif}
P{font-family:Arial, Helvetica, sans-serif}
BODY{color:"#0000FF"; font-family:Arial, Helvetica, sans-serif}
.Estilo1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
.Estilo2 {	color: #FF0000;
	font-weight: bold;
}
.Estilo3 {color: #0000FF}
.Estilo4 {color: #FFFFFF;
	font-weight: bold;
}
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo12 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
</style>
<?php 
// Para el cambio de idioma en modo dise�o
if (isset($cambiar)) $idioma=$cambiar  ;
 ?>
</HEAD>
<body bgcolor="#000099">
<div align="center">
  <table width="650" border="0" align="center">
    <tr>
      <td><div align="center"><a href="../../index.php"><img src="../../../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="index.php"><img src="../../../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../instrucciones/index.php"><img src="../../../img/diseno.paginas/botones/ins.gif" width="132" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../varias/comprar.php"><img src="../../../img/diseno.paginas/botones/comprar.gif" width="99" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../varias/soporte.php"><img src="../../../img/diseno.paginas/botones/soporte.gif" width="96" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../club/index.php"><img src="../../../img/diseno.paginas/botones/club.gif" width="88" height="29" border="0"></a></div></td>
    </tr>
  </table>
  <table width="765" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../img/diseno.paginas/base/arriba-up.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
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
</div>
<table width="765" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="13"><img src="../../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
  </tr>
</table>
<table width="740" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="141" valign="top" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <table width="654" border="0" align="center" bgcolor="#FFFFCC">
          <tr>
            <td width="883"><div align="center" class="Estilo1">El foro de la recarga Ink-Jet</div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td><div align="left"><font face="Arial, Helvetica, sans-serif" ><b><font color="#0000FF" size="2">Usuario :
                          <?php 
		// Pijadilla que muestra el email o user
        if ($usr=="")
		{
			echo " Anonimo";
		}
		else
		{
			 echo " " . $usr ;
		}
		?>
            </font></b></font></div></td>
          </tr>
        </table>
        <form name="form1" method="post" action="add.php">
          <table width="654" border="0" align="center">
            <tr align="center" valign="middle">
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr align="center" valign="middle">
              <td bgcolor="#FFFFFF"><span class="Estilo2">Escriba aqui su consulta al foro </span></td>
            </tr>
            <tr align="center" valign="middle">
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr align="center" valign="middle">
              <td width="875" bgcolor="#FFFFFF"><p class="Estilo3">Asunto</p>
                  <p class="Estilo3">
                    <input name="asunto" type="text" id="asunto" size="100">
                  </p>
                  <p class="Estilo3">Explicacion</p>
                  <p> <span class="Estilo3">
                    <textarea name="texto" cols="75" rows="5" id="texto"></textarea>
                  </span></p>
                  <p>
                    <input type="submit" name="Submit" value="Enviar">
                </p></td>
            </tr>
            <tr align="center" valign="middle">
              <td bgcolor="#FFFFFF"><div align="right"><b><a href="index.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" name="backy" width="67" height="35" border="0"></a></b></div></td>
            </tr>
          </table>
        </form>
        <p class="Estilo3">&nbsp;</p>
        <p align="left">&nbsp; </p>
    </div></td>
  </tr>
  <tr>
    <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>

<p align="center"><span class="Estilo12">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</span></p>
<p>&nbsp;</p>
</BODY>
</HTML>
