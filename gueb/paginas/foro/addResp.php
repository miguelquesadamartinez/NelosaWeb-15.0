<?php 
include ( "../../eMiKi/headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );
include ( "../../eMiKi/libmail2.php" );
?><!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML><HEAD><TITLE>Universal Refill Kit  -  Nelosa Accesrios  -  </TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<style type="text/css">
<!--
.Estilo3 {color: #0000FF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.Estilo4 {color: #0000FF}
.Estilo2 {color: #FFFFFF;
	font-weight: bold;
}
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo12 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>
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
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="141" valign="top" bgcolor="#FFFFFF"><div align="center">
          <p>&nbsp;</p>
          <p class="Estilo4">El Foro de la Recarga </p>
          <p align="left">&nbsp; </p>
      </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</div>

<p align="center"><span class="Estilo12">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</span></p>
<p>&nbsp;</p>
</BODY></HTML>
<?php 
$link=conectarse();  
$link_2=conectarse();  
$link_3=conectarse();  
//Insrtamos la respuesta que viene del email
mysql_query("Insert Into foro_resp (email,indise,texto) VALUES('" . $email . "'," . $indise . ",'" . $texto . "')",$link);	

echo "Insert Into foro_resp (email,indise,texto) VALUES('" . $email . "'," . $indise . ",'" . $texto . "')" ;

//echo "Select * From foro_index where indise = " . $indise ;
//Obtenemos el asunto
$result_2=mysql_query("Select * From foro_index where indise = " . $indise ,$link_2); 
$row_2 = mysql_fetch_array($result_2) ;
$asunto=(string)$row_2["asunto"];

//Obtenemos la respuesta
$result_3=mysql_query("Select * From foro_resp where indise = " . $indise ,$link_3); 
$row_3 = mysql_fetch_array($result_3) ;
$resp=(string)$row_3["texto"];

// Por cada email que tenga ese indice enviamos un email con la respuesta
$result=mysql_query("Select * From foro_aviso where indise = " . $indise ,$link); 
while($row = mysql_fetch_array($result)) 
	{ 
		$email=(string)$row["email"];
			//$resp2 = ereg_replace( " ", "%20", $resp );
		if ($email != "" )
		{
			$filon = "Como solicito en el foro de la web www.nelosa.net recibe \nla respuesta a la pregunta de: \n" . $asunto . " \n" . $resp ;
			
			$m = new Mail(); // create the mail
					
			$m->From( "avisos_foro@nelosa.net" ) ; 
			$m->To( $email ) ;
			$m->Subject( "Respuesta del foro para " . $asunto ) ;
			$m->Body( $filon ); 
			$m->Send(); // send the mail */
		}
	}
?>
