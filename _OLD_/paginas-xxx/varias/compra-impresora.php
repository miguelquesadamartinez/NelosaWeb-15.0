<?php 
include ( "../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );

?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Soporte tecnico</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15"/>

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
.Estilo1 {
	color: #FF0000;
	font-size: 24px;
}
.Estilo2 {	color: #FFFFFF;
	font-weight: bold;
}
</style></HEAD>

<body bgcolor="#000099">
<div align="center">
  <?php 
  include ( "../../eMiKi/Headers/upper.". $idioma . ".php" );
  ?>
    <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="141" valign="top" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p class="Estilo3 Estilo1"><strong><?php echo getext($idioma,"title 043"); //Support for the purchase of a printer?>
 </strong></p>
        <table width="97%"  border="0">
          <tr>
            <td height="211"><div align="center">
              <p><font face="Arial, Helvetica, sans-serif"><span class="Estilo3 Estilo1"><strong><?php echo getext($idioma,"txt 005"); //Tel?></strong></span></font></p>
            </div>
              <p align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"> (+34) 93 352 20 03 - 902 32 20 03 </font> </b> </font>
              <p align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#FF0000">Fax</font></b></font></p>
              <p align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"> (+34) 93 340 45 60</font> </b> </font>
              <p align="center"><font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"><font color="#FF0000">email</font> </font> </b> </font>
              <p align="center"> <font face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"><a href="mailto:info@nelosa.net">info@nelosa.net</a></font></b></font><br>
              
              </td>
          </tr>
        </table>
        <p align="left">&nbsp;</p>
      </div></td>
      </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</div>
<p align="center"><a href="soporte.php"><img src="../../imagenes/comunes/Support.GIF" width="57" height="93" border="0"></a></p>
</body>
</html>
