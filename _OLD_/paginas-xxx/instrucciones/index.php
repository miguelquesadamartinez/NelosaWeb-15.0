<?php 
if ( $jost == "" ) $jost = "nelosa.net" ;
include ( "../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );

?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Instrucciones recarga</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

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
.Estilo2 {
	font-weight: bold;
	color: #FF0000;
	font-size: 24px;
}
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
</style>

</HEAD>

<body bgcolor="#000099">
<div align="center">

  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="765" height="13">  
<?php 
  include ( "../../eMiKi/Headers/upper.". $idioma . ".php" );
?>
        <table width="758" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="758" height="25" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td height="112" bgcolor="#FFFFFF"><p align="center" class="Estilo2"><?php echo getext($idioma,"title 051"); //Seleccione el tipo de impresora?></p>
                <table width="97%"  border="0" align="center">
                  <tr>
                    <td><div align="center">
                      <p><a href="check.php?page=index.laser.php"><img src="../../imagenes/comunes/logo-laser.jpg" width="236" height="297" border="0"></a></p>
                      </div></td>
                    <td><div align="center">
                      <p><a href="check.php?page=index.ink.jet.php"><img src="../../imagenes/comunes/logo-ink-jet.jpg" width="236" height="298" border="0"></a></p>
                      </div></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
            </table></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
        </table>
        <div align="center"></div></td>
    </tr>
  </table>
  <p><a href="../varias/soporte.php"><img src="../../imagenes/comunes/Support.GIF" width="57" height="93" border="0"></a></p>
</div>
</body>
</html>
