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

<body bgcolor="#000099">
<div align="center">
  <?php 
  include ( "../../../eMiKi/Headers/nivel2/upper.". $idioma . ".php" );
?>
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p class="Estilo3 Estilo4"><?php echo getext($idioma,"N126"); //Instrucciones recarga ?> Sharp AL-100TD</p>
        <table width="97%"  border="0">
          <tr>
            <td><?php echo getext($idioma,"N121"); // ?><ol>
                <li>Destornille los tornillos que aguantan la tapa lateral.</li>
                <li>Presione en la leng&uuml;eta y estire de la tapa, una vez retirada esta podr&aacute; ver el tap&oacute;n del orificio de relleno, ret&iacute;relo utilizando un destornillador plano.</li>
                <li>Para asegurar que el toner fluya correctamente de la bolsa, mu&eacute;vala un poco.</li>
                <li>Corte una peque&ntilde;a esquina de la bolsa, presione levemente para que el toner no salga e introduzca la punta recortada de la bolsa por el orificio de relleno</li>
                <li>Cada una de las bolsas equivale a una recarga.</li>
                <li>Cierre con el tap&oacute;n original el orificio de relleno.</li>
                <li>Pasada media hora, despu&eacute;s de que el cartucho este puesto en la impresora, compruebe que este no pierde toner.</li>
              </ol>              <p align="center"><img src="../../../imagenes/ins/laser/sharp/sharpAL-100TD.jpg" width="360" height="191"></p>
              <p align="center"><img src="../../../imagenes/ins/laser/sharp/sharpAL-100TD--2.jpg" width="180" height="302"><img src="../../../imagenes/ins/laser/sharp/sharpAL-100TD--3.jpg" width="171" height="370"><img src="../../../imagenes/ins/laser/sharp/sharpAL-100TD--4.jpg" width="141" height="345"></p>
              <p></p>
              <p>
                <?php
			  $resul = "../procedures/".$proced.".php" ;
			  if ($proced != "." AND $proced != "") include ($resul);
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
