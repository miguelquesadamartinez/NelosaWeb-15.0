<?php 
include ( "../../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../../eMiKi/Funciones_PHP.php");

?>

<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instrucciones recarga Brother</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

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
.Estilo1 {color: #FF0000}
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
</style>
</HEAD>

<body bgcolor="#000099">
<div align="center">
  <?php 
  include ( "../../../eMiKi/Headers/nivel2/upper.". $idioma . ".php" );
?>
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p class="Estilo1"><strong> <?php echo getext($idioma,"N126"); //Instrucciones recarga ?> Xerox 6R343 </strong></p>
        <table width="97%"  border="0">
          <tr>
            <td><?php echo getext($idioma,"N121"); // ?><ol>
              <li>Destornille los tornillos que aguantan la tapa. </li>
              <li>Retire la tapa y podr&aacute; ver el tap&oacute;n del orificio de relleno, ret&iacute;relo utilizando un destornillador plano. </li>
              <li>Para asegurar que el toner fluya correctamente de la bolsa, mu&eacute;vala un poco. </li>
              <li>Cortar una peque&ntilde;a esquina de la bolsa de unos 5 mm. Introducir la punta recortada por el orificio de relleno. </li>
              <li>Presione levemente para que el toner vaya entrando sin derramarse y mueva el cartucho para que el toner se reparta. </li>
              <li>Cada una de las bolsas equivale a una recarga. </li>
              <li>Cierre el orificio de relleno con su tapon, y atornille la tapa. </li>
              <li>Pasada media hora, despu&eacute;s de que el cartucho este puesto en la impresora, compruebe que &eacute;ste no pierde toner. </li>
            </ol>
              <p align="center">&nbsp;</p>
              <p align="left">&nbsp;</p>
              <p align="center"><img src="../../../imagenes/ins/laser/xerox/xerox6R343.jpg" width="360" height="163"></p>
              <p align="center"><img src="../../../imagenes/ins/laser/xerox/xerox6R343--2.jpg" width="180" height="164"><img src="../../../imagenes/ins/laser/xerox/xerox6R343--3.jpg" width="180" height="179"></p>
              <p></p>
              <p>
                <?php
			  if (isset($proced)) {
          $resul = "../procedures/".$proced.".php" ;
          if ($proced != "." AND $proced != "") include ($resul);
        }
			  ?>
              </p>
              <p align="center"><br>
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
