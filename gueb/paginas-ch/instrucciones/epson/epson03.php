<?php 
include ( "../../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../../eMiKi/Funciones_PHP.php");
$idioma = "fra" ;
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instructions pour Epson</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset="/>

<meta name="Publisher" content="Alma Print, http://www.alma-print.com"/>

<style type="text/css">
<!--
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #0000FF;
}
.Estilo2 {
	font-size: 18px;
	color: #FF0000;
}
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</HEAD>

<body bgcolor="#000099">
<div align="center">
  
  <table width="763" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../imagenes/index/arriva.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="127"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="763" height="128">
          <param name="movie" value="../../../imagenes/animacione/banner-ch.swf">
          <param name="quality" value="high">
          <embed src="../../../imagenes/animacione/banner-ch.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="763" height="128"></embed></object></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="78" height="13" bgcolor="#FFFFFF"><img src="../../../imagenes/index/arriva-down.png" width="765" height="16"></td>
    </tr>
  </table>
    <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p class="Estilo1"><img src="../../../imagenes/comunes/Logos/logo_epson.jpg" width="127" height="60" align="absmiddle"></p>
        <table width="97%"  border="0">
          <tr>
            <td class="Estilo1"><table width="100%"  border="0">
              <tr>
                <td colspan="2"><p align="center" class="Estilo2">Instructions de recharge cartouches Epson s&eacute;par&eacute;es</p>
                  <p align="center" class="Estilo2"><img src="../../../imagenes/ins/inkjet/esp/Epson_sep_02.jpg" width="508" height="133"></p>
                  <p align="center">&nbsp;</p></td>
                </tr>
              <tr>
                <td rowspan="2"><p>ATTENTION recharger ces cartouches avant que le niveau d'encre indique la moiti&eacute; de sa capacit&eacute;. </p>
                  <p><strong>1.-A</strong> Faites deux orifices sur la partie sup&eacute;rieure de la cartouche, en perforant avec le poin&ccedil;on inclu dans le kit dans l'espace ray&eacute; qu'on indique sur la photo ci-dessous. </p>
                  <p>&nbsp;</p>                  
                  <p align="center"><img src="../../../imagenes/ins/inkjet/esp/Epson_sep_05.jpg" width="462" height="44"></p>                  
                  <p>ATTENTION vous devez traverser une double paroi de 6 mm. pour acc&eacute;der au r&eacute;servoir d'encre. </p>
                  <p>&nbsp;</p>
                  </td>
                <td><img src="../../../imagenes/ins/inkjet/esp/Epson_sep_03.jpg" width="60" height="131"></td>
              </tr>
              <tr>
                <td><p><img src="../../../imagenes/ins/inkjet/esp/Epson_sep_04.jpg" width="78" height="114"></p></td>
              </tr>
              <tr>
                <td colspan="2"><p><strong>1-B</strong> hacer dos orificios que est&eacute;n situados dentro del espacio que esta oscurecido por la tinta, en diagonal como se indica en el gr&aacute;fico &ldquo;B&rdquo; uno para introducir la tinta y otro para que tome aire.</p>
                  <p>-Si no consumi&oacute; m&aacute;s del 50% del contenido de tinta, una vez abiertos los dos orificios <br>
  Para introducirla. INYECTAR 5 ML. Con cuidado de no introducir la aguja m&aacute;s de 10 ML. Para no pinchar la bolsa . -Moviendo ligeramente el cartucho, podr&aacute; comprobar que si no oye moverse la tinta en el interior, es que ya est&aacute; completa la recarga. <br>
  Cuando se haya de rellenar un cartucho, completamente vac&iacute;o se ha de tapar uno de los orificios , inyectando la tinta. Al mismo tiempo se ha de ir abriendo la v&aacute;lvula &ldquo;A&rdquo; por donde baja la tinta hac&iacute;a el cabezal y la V&aacute;lvula &ldquo; B &ldquo; por donde toma aire, hasta que este completa la recarga, si al moverlo no oye moverse la tinta en el interior del cartucho , es que ya est&aacute; completa la recarga. </p></td>
                </tr>
            </table>            
              <p></p>
              <p>
                <?php
			  if (isset($proced)) {
          $resul = "../procedures/".$proced.".php" ;
          if ($proced != "." AND $proced != "") include ($resul);
        }
			  ?>
              </p>              <p align="left"><br>
              </p>
              </td>
          </tr>
        </table>
      </div></td>
      </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
