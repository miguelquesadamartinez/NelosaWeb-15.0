<?php
include("../../../eMiKi/Headers/vbles_sesion.php");

include("../../../eMiKi/Funciones_PHP.php");
$brandy = $brand ;
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE>Seleccion modelo impresoras</TITLE>
<meta name="title" content=""/>

<meta name="description" content="">

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

<meta name="keywords" content=""/>

<meta name="Revisit" content="20 days"/>

<meta name="distribution" content="global"/>
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
	font-size: 12px;
}
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
</style>

</HEAD>
<body bgcolor="#000099">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="7%"><div align="center"><span class="Estilo3"><a href="../../../index.php"><img src="../../../imagenes/botones/home.png" width="89" height="29" border="0"></a></span></div></td>
    <td width="14%"><div align="center"><span class="Estilo3"><a href="../../club/index.php"><img src="../../../imagenes/botones/club.png" width="88" height="29" border="0"></a></span></div></td>
    <td width="14%"><div align="center"><span class="Estilo3"><a href="../../productos/index.php"><img src="../../../imagenes/botones/productos.png" width="119" height="29" border="0"></a></span></div></td>
    <td width="23%"><div align="center"><span class="Estilo3"><a href="../index.php"><img src="../../../imagenes/botones/instrucciones.png" width="133" height="29" border="0"></a></span></div></td>
    <td width="15%"><div align="center"><span class="Estilo3"><a href="../../varias/soporte.php"><img src="../../../imagenes/botones/soporte.png" width="96" height="29" border="0"></a></span></div></td>
    <td width="13%"><div align="center"><span class="Estilo3"><a href="../../varias/comprar.php"><img src="../../../imagenes/botones/comprar.png" width="98" height="29" border="0"></a></span></div></td>
    <td width="14%"><div align="center"><span class="Estilo3"> <a href="../../varias/links.php"><img src="../../../imagenes/botones/links.png" width="81" height="29" border="0"></a></span></div></td>
  </tr>
</table>
<table width="763" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="13"><img src="../../../imagenes/index/arriva.png" width="765" height="16"></td>
  </tr>
</table>
<table width="765" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="127"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="763" height="128">
        <param name="movie" value="../../../imagenes/animacione/banner-arriva.swf">
        <param name="quality" value="high">
        <embed src="../../../imagenes/animacione/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="763" height="128"></embed>
    </object></td>
  </tr>
</table>
<table width="765" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="78" height="13" bgcolor="#FFFFFF"><img src="../../../imagenes/index/arriva-down.png" width="765" height="16"></td>
  </tr>
</table>
<table width="740" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
      <table width="97%"  border="0">
          <tr>
            <td height="23"><P>

                <table width="600" border="0" align="center">
                  <tr>
                    <td colspan="2"><p align="center">&nbsp;</p></td>
                  </tr>
                  <tr>
                    <td colspan="2"><div align="center"><img src="../../../imagenes/comunes/logos-/<?php echo $brand ; ?>.jpg" width="127" height="60"></div></td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                </table>
                <table width="600" border="1" align="center">
                  <tr>
                    <td><form name="form1" method="get" action="ReturnIns.php" onSubmit="return emailCheck(text.value);">
                        <div align="center">
                          <p>
                            <input name="hidden" type="hidden" id="hidden" value="brother">
                          </p>
                          <p><font face="Arial, Helvetica, sans-serif"><strong>1&ordm; </strong>Seleccione el modelo de su impresora <?php echo $brand; ?><br>
                        <select name="select" id="select">
                          <?php 
$link=conectarse(); 
$result=mysql_query("Select * From " . $brand . " Order By Printer",$link);   
while($row = mysql_fetch_array($result)) 
	{ 
		$prn=(string)$row["Printer"];	
		echo "<option>".$prn;
	}
?>
                        </select>
                          </font></p>
                          <p><font face="Arial, Helvetica, sans-serif"><strong>2&ordm;</strong> Direccion de correo electronico donde se enviaran las instrucciones<br>
                                <input name="text" type="text" id="text" value="<?php if ($usr<>"Anonimo")echo $usr ; ?>">
</font></p>
                          <p><font face="Arial, Helvetica, sans-serif"><strong>3&ordm; </strong>Codigo de barras del producto<br>
                          </font><font face="Arial, Helvetica, sans-serif">
                          <input type="text" name="textfield"> 
                          </font></p>
                          <p><font face="Arial, Helvetica, sans-serif">
                            <input type="submit" name="Submit" value="Solicitar">
                          </font> </p>
                        </div>
                      </form>
                        <form name="form2" method="post" action="">
                          <div align="center"><strong><a href="SendMail.php"><font face="Arial, Helvetica, sans-serif">Pinche aqui si no aparece su impresora</font></a></strong> </div>
                      </form></td>
                  </tr>
                </table>
                <table width="600" border="0" align="center">
                  <tr>
                    <td colspan="2"><p align="center">&nbsp;</p>
                        <p align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif"><strong><a href="../MorePages/Consejos_<?php echo "$brand"; ?>.php">Consejos para la recarga en impresoras <?php echo "$brand"; ?>&reg;</a></strong></font></p>
                        <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><a href="../../../../index.php">Home</a> | <a href="mailto:info@nelosa.net">@</a> | <a href="http://www.recargas-y-consumibles.net">eShop</a> </font></p>
                        <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="1">Copyright &copy; 2002 Nelosa. Todas las marcas son popiedad de los respectivos due&ntilde;os.</font></p>
                        <p align="center">&nbsp;</p></td>
                  </tr>
                </table>
                <p align="center"></P></td>
          </tr>
        </table>
    </div></td>
  </tr>
  <tr>
    <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<?php 
include("../../../eMiKi/Codes/checkMail.miki"); 
?>
</BODY>
</HTML>