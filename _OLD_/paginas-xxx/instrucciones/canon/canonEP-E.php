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
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
.Estilo4 {color: #FF0000}
</style>
</HEAD>

<body bgcolor="#000099"><div align="center">
  <?php 
  include ( "../../../eMiKi/Headers/nivel2/upper.". $idioma . ".php" );
?>
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p class="Estilo3 Estilo4"> <?php echo getext($idioma,"N126"); //Instrucciones recarga ?> Canon EP-E</p>
        <table width="97%"  border="0">
          <tr>
            <td><p align="center"><img src="../../../imagenes/ins/laser/canon/canonEPE.jpg" width="360" height="220"></p>
              <ol>
                <li>Utilizando la plantilla milimetrada que se adjunta a este Kit marcar un cuadrado de un cm con las medias que indican las instrucciones. </li>
                <li>Extraer la cuchilla y para dejarla fija trabar con el punz&oacute;n, como muestra la foto </li>
                <li>Calentar la punta de la cuchilla y clavar r&aacute;pidamente en el cuadro se&ntilde;alado </li>
                <li>Las medidas en las instrucciones indican el centro del orificio . NO el lado </li>
                <li>Observe la imagen para ver donde se debe hacer el orificio exactamente </li>
                <li>No deben caer restos de pl&aacute;stico en el interior del cartucho. Puede salir defectuosa la impresi&oacute;n, o incluso deteriorar el cartucho, si ha ca&iacute;do dentro alg&uacute;n trozo de pl&aacute;stico grande, </li>
                <li>extraerlo con unas pinzas, para evitar estos inconvenientes. </li>
                <li>Para asegurar que el toner fluya correctamente de la bolsa, mu&eacute;vala un poco. </li>
                <li>Cortar una peque&ntilde;a esquina de la bolsa de unos 5 mm. Introducir la punta recortada por el orificio de relleno. </li>
                <li>Presione levemente para que el toner vaya entrando sin derramarse y mueva el cartucho para que el toner se reparta. </li>
                <li>Cada una de las bolsas equivale a una recarga. </li>
                <li>Cierre con el adhesivo que se adjunta, el orificio de relleno. </li>
                <li>Pasada media hora, despu&eacute;s de que el cartucho este puesto en la impresora, compruebe que &eacute;ste no pierde toner.</li>
                </ol>              
              <p></p>
              <p>
                <?php
			  $resul = "../procedures/".$proced.".php" ;
			  if ($proced != "." AND $proced != "") include ($resul);
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
    <p>&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
