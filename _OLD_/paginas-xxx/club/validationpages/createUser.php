<?php 
include ( "../../../eMiKi/Headers/vbles_sesion.php" );
?>
<HTML><HEAD>
<TITLE>Validacion y creacion de usuarios</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
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
	font-weight: bold;
	color: #0000FF;
}
.Estilo1 {
	color: #0000FF;
	font-weight: bold;
}
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>
<body bgcolor="#000099">
	<table width="765"  border="0" align="center">
      <tr>
        <td height="0"><div align="center">
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
        </div>
        <table width="763" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="13"><img src="../../../imagenes/index/arriva.png" width="765" height="16"></td>
              </tr>
          </table>
            <table width="765" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="127"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="763" height="128">
                    <param name="movie" value="../../../imagenes/animacione/banner-arriva.swf">
                    <param name="quality" value="high">
                    <embed src="../../../imagenes/animacione/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="763" height="128"></embed>
                </object></td>
              </tr>
            </table>
            <table width="765" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="78" height="13"><img src="../../../imagenes/index/tirilla-imagen.jpg" width="763" height="13"></td>
              </tr>
            </table>
            <table width="751" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="25" colspan="3" valign="top" bgcolor="#000099"><img src="../../../imagenes/comunes/banner-lateral/upy.jpg" width="262" height="25"></td>
                <td rowspan="3" bgcolor="#FFFFFF"><p align="center">Son correctos estos datos ?? </p>
                  <form action="doneUser.php" name="Formulario_3" id="Formulario_3" >
                    <div align="center">
                      <table border="0">
                        <tr bgcolor="#FFFFCC">
                          <td width="115"><div align="right"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif">e-mail : </font></b></div></td>
                          <td width="221"><b><font face="Arial, Helvetica, sans-serif"> <?php echo htmlentities ( $vs_email ) ; ?>                          <input type="hidden" name="hitext0" value="<?php echo $text0;?>">
                          </font></b></td>
                          <td bordercolor="#FFFFFF"><div align="right" class="Estilo1"><font size="2" face="Arial, Helvetica, sans-serif">Password : </font></div></td>
                          <td bordercolor="#FFFFFF"><div align="left"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> <b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $miki ) ; ?></font></b> </font></b></font></div></td>
                        </tr>
                        <tr bgcolor="#FFFFCC">
                          <td width="115"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Nombre : </font></b></font></div></td>
                          <td width="221"><b><font face="Arial, Helvetica, sans-serif"> <?php echo htmlentities ( $vs_nombre ) ; ?>                          <input name="hd_nombre" type="hidden" id="hd_nombre" value="<?php echo $vs_nombre;?>">
                          </font></b></td>
                          <td width="104" bordercolor="#FFFFFF"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">C. P. : </font></b></font><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b></b></font></div></td>
                          <td width="179"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $cp ) ; ?>
                                <input name="hd_cp" type="hidden" id="hd_cp" value="<?php echo $cp;?>">
</font></b></td>
                        </tr>
                        <tr bgcolor="#FFFFCC">
                          <td width="115" height="29"><div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 1 : </font></b></font><font size="2" face="Arial, Helvetica, sans-serif"><b></b></font></div></td>
                          <td width="221" height="29"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $vs_ape1 ) ; ?>
                                <input name="hd_ape1" type="hidden" id="hd_ape1" value="<?php echo $vs_ape1;?>">
</font></b></td>
                          <td width="104" bordercolor="#FFFFFF" height="29"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Apellido 2 : </font></b></font></div></td>
                          <td width="179" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"> <b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $vs_ape2 ) ; ?></font></b>                          <input name="vs_ape2" type="hidden" id="vs_ape2" value="<?php echo $vs_ape2;?>">
                          </font></b></font></td>
                        </tr>
                        <tr bgcolor="#FFFFCC">
                          <td width="115"><div align="right" class="Estilo1"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Provincia :</font></b></font></b></font></div></td>
                          <td width="221"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities (  $vs_prov ) ; ?>
                                <input name="hd_prov" type="hidden" id="hd_prov" value="<?php echo $vs_prov;?>"> 
                          </font></b>
                          <td width="104" bordercolor="#FFFFFF"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF"><span class="Estilo1"><font size="2" face="Arial, Helvetica, sans-serif">Pais :</font></span></font></b></font></b></font></div>
                          <td width="179"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $vs_pais ) ; ?>
                                <input name="hd_pais" type="hidden" id="hd_pais" value="<?php echo $vs_pais;?>">
</font></b>                   
                        </tr>
                        <tr bgcolor="#FFFFCC">
                          <td colspan="4" height="24"><div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif">
                              <input type="submit" name="iniciar2" value="Crear usuario">
                              <input type="hidden" name="hidden1" value="<?php echo "$ch_1" ?>">
                              <input type="hidden" name="hidden2" value="<?php echo "$ch_2" ?>">
                          </font> </div></td>
                        </tr>
                      </table>
                    </div>
                </form>                  <p align="center"><a href="../index.php"><img src="../../../imagenes/comunes/inicio.gif" width="32" height="34" border="0"></a> </p></td>
              </tr>
              <tr>
                <td width="14" valign="top" bgcolor="#000099"><img src="../../../imagenes/comunes/banner-lateral/izq.jpg" width="14" height="250"></td>
                <td width="196" height="57" valign="top" bgcolor="#FF8500"><p align="center">&nbsp;</p>
                    <p align="center" class="Estilo4">&nbsp;</p></td>
                <td width="52" height="57" valign="top" bgcolor="#000099"><div align="center">
                    <p><img src="../../../imagenes/comunes/banner-lateral/dcha.jpg" width="52" height="250"></p>
                </div></td>
              </tr>
              <tr>
                <td height="29" colspan="3" valign="top" bgcolor="#000099"><img src="../../../imagenes/comunes/banner-lateral/downy_azul.jpg" width="262" height="29"></td>
              </tr>
          </table></td>
      </tr>
    </table>
	<noscript></noscript> 
</body>