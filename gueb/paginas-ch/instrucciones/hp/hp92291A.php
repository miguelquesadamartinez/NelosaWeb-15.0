<?php 
include ( "../../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../../eMiKi/Funciones_PHP.php");
$idioma = "fra" ;
?>

<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instructions pour HP</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset="/>

<meta name="Publisher" content="Alma Print, http://www.alma-print.com"/>
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
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
.Estilo4 {color: #FF0000}
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
        <p class="Estilo3 Estilo4"> <?php echo getext($idioma,"N126"); //Instrucciones recarga ?> HP 92291A </p>
        <table width="97%"  border="0">
          <tr>
            <td><p align="center"><img src="../../../imagenes/ins/laser/hp/hp92291A.jpg" width="360" height="237"></p>
              <ol>
                <li>
                  <p align="left">&nbsp;</p>
                  <ol>
                    <li>En utilisant le chablon milim&egrave;tr&eacute; annexe dans le kit dessiner un carr&eacute; de un cm. avec les mesures indiqu&eacute;es dans les instructions.. </li>
                    <li>Chauffer la pointe du cutter et faites un orifice &agrave; la place indiqu&eacute;e.</li>
                    <li>Les mesures de la photo indique le centre de l'orifice. </li>
                    <li>Observez la photo pour voir l'emplacement exact de l'orifice. </li>
                    <li>Il ne doit en aucune fa&ccedil;on avoir des restes de plastique &agrave; l'int&eacute;rieur de la cartouche, l'impression pourrait &ecirc;tre d&eacute;fectueuse ou m&ecirc;me d&eacute;t&eacute;riorer la cartouche.</li>
                    <li>Pour s'assurer que le toner soit fluide dans le sachet secouez-le.</li>
                    <li>D&eacute;coupez l'un des coins du sachet &agrave; env. 5 mm. Introduire le tube annex&eacute; au kit et collez-le au sachet avec du scotch. </li>
                    <li>Introduire le tube dans l'orifice de remplissage pressionnez sur le sachet pour faire rentrer le toner dans la cartouche et secouez la cartouche pour que le toner se r&eacute;partisse &agrave; l'int&eacute;rieur. </li>
                    <li>Chacun des sachets &eacute;quivaut &agrave; une recharge. </li>
                    <li>Fermez avec l'adh&eacute;sif joint l'orifice de recharge. </li>
                    <li>Mettez la cartouche dans l'imprimante et apr&egrave;s une demie heure s'assurer qu'il n'y est pas de fuite </li>
                  </ol>
                </li>
                </ol>              
              <p></p>
              <p>
                <?php
			  if (isset($proced)) {
          $resul = "../procedures/".$proced.".php" ;
          if ($proced != "." AND $proced != "") include ($resul);
        }
			  ?>
              </p>              <p align="left"><br>
              </p></td>
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
