<?php 	
include("../../../Funciones_PHP.php"); 
$link=conectarse(); 
?>
<HTML><HEAD><TITLE>Control de clientes Nelosa</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,INDEX"/>

<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#00FF00";  text-decoration: none;}
A:visited {color: "#0000FF";  text-decoration: none;}
H1{font-family:Arial, Helvetica, sans-serif}
H2{font-family:Arial, Helvetica, sans-serif}
H3{font-family:Arial, Helvetica, sans-serif}
P{font-family:Arial, Helvetica, sans-serif}
BODY{color:"#0000FF"; font-family:Arial, Helvetica, sans-serif}
.Estilo1 {
	color: #FFFFFF;
	font-weight: bold;
}
</style>
</HEAD>

<body bgcolor="#FFFFFF">

<div align="center">
  <div align="left">
    <div align="center">
      <div align="left"> 
        <table width="600" border="0" align="center">
          <tr> 
            <td><div align="center"> 
                <p><img src="../../../imagenes/comunes/Nelosas/NelosaP.jpg" width="172" height="59"></p>
                <p><strong><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif">Zona 
                  Dealer</font></strong></p>
                <hr>
                <strong><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif"> 
                </font></strong></div></td>
          </tr>
        </table>
        <table width="600" border="0" align="center">
          <tr> 
            <td><div align="center"><a href="proforma_maker/proforma.php">Generador 
                de Facturas Proforma</a></div>              <div align="center"><br>
              </div></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <hr>
              </div></td>
          </tr>
          <tr> 
            <td><div align="center"><a href="proforma_maker/proforma.php"><img src="../../../imagenes/comunes/Register.gif" width="48" height="48" border="0" align="absmiddle"></a><a href="clientes/clientes_main.php"> 
                Datos clientes</a></div></td>
          </tr>
          <tr> 
            <td><div align="center"></div></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <hr>
              </div></td>
          </tr>
        </table>
      </div>
    </div>
    <div align="center">
      <div align="left"> </div>
    </div>
    <table width="641" border="0" align="center">
      <tr> 
        <td width="635"><div align="center"></div></td>
      </tr>
      <tr> 
        <td><div align="center"></div></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
      </tr>
    </table>
    <b></b> 
</div>
  </div>
<table width="600" border="0" align="center">
  <tr> 
    <td colspan="2"> <p align="right"><a href="../../index<?php echo makeHomeLink($idioma) ;?>.php"><b><font face="Arial, Helvetica, sans-serif"><img src="../../../imagenes/comunes/back.jpg" name="backy" width="67" height="35" border="0" onClick="backyF()"></font></b></a></p>
      <p align="center"><a href="../../index<?php echo makeHomeLink($idioma) ;?>.php"> Home</a> | <a href="mailto:info@nelosa.net">@</a> 
        | <a href="http://www.recargas-y-consumibles.net">eShop</a> </p>
      <p align="center"><font face="Arial, Helvetica, sans-serif" size="1">Copyright 
        &copy; 2002 Nelosa. Todas las marcas son popiedad de los respectivos due&ntilde;os.</font></p></td>
  </tr>
</table>
<p> 
  <?php 
  //include("../../Codes/Funciones_JavaScript.miki");   
  mysql_free_result($result);  
mysql_close($link);
?>
</p>
</BODY>
</HTML>
