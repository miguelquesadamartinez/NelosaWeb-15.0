<?php 
include ( "../../../eMiKi/headers/vbles_sesion.php" );
?>
<HTML><HEAD>
<TITLE>Validacion y creacion de usuarios</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

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
	font-weight: bold;
	color: #0000FF;
}
.Estilo1 {
	color: #0000FF;
	font-weight: bold;
}
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.Estilo6 {font-size: 12px}
.Estilo8 {	font-size: 16px;
	font-weight: bold;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>
</head>

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
  <table width="745" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13" bgcolor="#FFFFFF"><div align="center">
          <p>&nbsp;</p>
          <p>En breve recibira un email en la direccion utilizada como usuario<br>
            para finalizar el proceso de creacion de su usuario </p>
          <p>
		  <?php 
$emilio=$hi_usr;

include("../../../eMiKi/Funciones_PHP.php");
include "../../../eMiKi/libmail2.php";

/*$text = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><HTML><HEAD><META http-equiv=Content-Type content="text/html; charset=iso-8859-1"><META content="MSHTML 6.00.2900.2668" name=GENERATOR><STYLE></STYLE></HEAD><BODY><DIV><FONT face=Arial size=2>';
$text = $text . "Pinche en el siguiente link, o copielo en la barra de direccion del navegador<BR>para finalizar el proceso de creacion del usuario<BR><BR>";
$text = $text . "<a href='http://www.nelosa.net/gueb/paginas/club/validationpages/doneUser.php?";
$text = $text . "hd_usr=" . $hi_usr . "&hd_pwd=" . $hi_pwd . "&hd_nom=" . $hi_nom . "&hd_ape1=" . $hi_ape1 . "&hd_tel=" . $hi_tel . "&hd_ape2=" . $hi_ape2 . "&hd_doc=" . $hi_doc ;
$text = $text . "&hd_empresa=" . $hi_empresa . "&hd_dir=" . $hi_dir . "&hd_cp=" . $hi_cp . "&hd_pob=" . $hi_pob . "&hd_pais=" . $hi_pais . "&hd_prov=" . $hi_prov ;
$text = $text . "'>Crear Usuario</a></DIV></FONT></BODY></HTML>";

mail($emilio,"Usuario www.nelosa.net",$text,"From: <usuarios@nelosa.net>");
*/

$usr = str_replace ( " ", "%20", $hi_usr );
$pwd = str_replace ( " ", "%20", $hi_pwd );
$nom = str_replace ( " ", "%20", $hi_nom );
$ape1 = str_replace ( " ", "%20", $hi_ape1 );
$tel = str_replace ( " ", "%20", $hi_tel );
$ape2 = str_replace ( " ", "%20", $hi_ape2 );
$doc = str_replace ( " ", "%20", $hi_doc );
$empresa = str_replace ( " ", "%20", $hi_empresa );
$cp = str_replace ( " ", "%20", $hi_cp );
$pob = str_replace ( " ", "%20", $hi_pob );
$pais = str_replace ( " ", "%20", $hi_pais );
$prov = str_replace ( " ", "%20", $hi_prov );
$adr = str_replace ( " ", "%20", $hi_adr );
//echo "<BR>bar: " . $bar ."<BR>";
$text = "Pinche en el siguiente link, o copielo en la barra de direccion del navegador\npara finalizar el proceso de creacion del usuario\n";
$text = $text . "http://www.nelosa.net/gueb/paginas/club/validationpages/doneUser.php?hd_usr=" .
 $usr . "&hd_pwd=" . $pwd . "&hd_nom=" . $nom . "&hd_ape1=" . $ape1 . "&hd_tel=" . $tel . "&hd_ape2=" .
  $ape2 .  "&hd_doc=" . $doc ."&hd_empresa=" . $empresa . "&hd_cp=" . $cp . "&hd_pob=" . $pob . "&hd_pais=" .
   $pais . "&hd_prov=" . $prov . "&hd_adr=" . $adr  ;
$text = $text . "\n\nReciba un cordial saludo";

			
			$m = new Mail(); // create the mail
					
			$m->From( "creacion.usuarios@nelosa.net" ) ; 
			$m->To( $hi_usr ) ;
			$m->Subject( "Usuario www.nelosa.net" ) ;
			$m->Body( $text ); 
			$m->Send(); // send the mail */
			
			$m = new Mail(); // create the mail
					
			$m->From( "creacion.usuarios@nelosa.net" ) ; 
			$m->To( "emiki@nelosa.net" ) ;
			$m->Subject( "Usuario www.nelosa.net" ) ;
			$m->Body( $text ); 
			$m->Send(); // send the mail */
?>
          <span class="Estilo8"><a href="../../../index.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></span>		  </p>
          <table width="100%"  border="0">
            <tr>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
</div>
<p align="center"><span class="Estilo4">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
  C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</span></p>
	
</body>