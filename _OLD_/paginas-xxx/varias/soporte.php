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
	font-size: 24px;
	color: #FF0000;
	font-weight: bold;
}
.Estilo2 {font-weight: bold}
.Estilo3 {font-weight: bold; font size:14 ; face:Arial, Helvetica, sans-serif; }
.Estilo4 {color: #FFFFFF;
	font-weight: bold;
}
.Estilo5 {color: #FF0000; font-weight: bold; font size:16 ; face:Arial, Helvetica, sans-serif; }

</style>
</HEAD>

<body bgcolor="#000099">
<div align="center">
    <?php 
  include ( "../../eMiKi/Headers/upper.". $idioma . ".php" );
  ?>

    <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="141" valign="top" bgcolor="#FFFFFF"><div align="center">
        <p>&nbsp;</p>
        <p class="Estilo1"><?php echo getext($idioma,"title 028"); //Technical support ?></p>
        <table width="97%"  border="0">
          <tr>
            <td><div align="center">
              <h5>&nbsp;</h5>
<h5><a href="../instrucciones/index.php"><span class="Estilo3"><?php echo getext($idioma,"N126"); //Refill instructions ?>
</a></h5>
<h5><a href="mailto:info@nelosa.net"><span class="Estilo3"><?php echo getext($idioma,"title 030"); //Ask Us ?>
</a></h5>
<p><a href="../instrucciones/zvarias/centrar-disenos.php"><span class="Estilo3"><?php echo getext($idioma,"title 031");  //How to use the software (Templates) for center your designs ?>
</a></p>
<h4><a href="../faq/index.php"><span class="Estilo3"><?php echo getext($idioma,"title 032"); //Refill FAQ ?>
</a></h4>
<p><span class="Estilo5"><?php echo getext($idioma,"txt 005"); //Tel ?></span></p>
</div>
<p align="center"><span class="Estilo3">(+34) 93 352 20 03 - 902 32 20 03 </span></p>
<p align="center"><span class="Estilo5">Fax</span></p>
<p align="center"><span class="Estilo3">(+34) 93 340 45 60</span></p>
<p align="center"><span class="Estilo5">email</span></p>
<p align="center"><a href="mailto:info@nelosa.net"><span class="Estilo3">info@nelosa.net</a></p>

              </td>
          </tr>
        </table>
        <p align="left">&nbsp;        </p>
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
