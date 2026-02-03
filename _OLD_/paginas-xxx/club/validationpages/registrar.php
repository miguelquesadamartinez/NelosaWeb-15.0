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
            <td rowspan="3" bgcolor="#FFFFFF">
              <form action="check.php" name="Formulario_3" id="Formulario_3"  onSubmit="return validarDatos_3()" >
                <div align="center">
                  <p><font face="Arial, Helvetica, sans-serif"><b>Validese con su usuario</b></font></p>
                  <p><font face="Arial, Helvetica, sans-serif">      email
                  <input name="user" type="text" size="20">
        Password
        <input name="pwd" type="password" size="20">
                  </font></p>
                  <p><font face="Arial, Helvetica, sans-serif">
                  <input type="submit" value="Login" name="Login" ="20">
                                    </font></p>
                </div>
              </form>              
              <p align="center"><font face="Arial, Helvetica, sans-serif"><a href="forgetPwd.php"><font size="2">Olvido su password ? ! ? </font></a></font></p>
              <hr>              <form action="createUser.php" name="Formulario_2" id="Formulario_2"  onSubmit="return validarDatos()" >
                <div align="center">
                  <p><font face="Arial, Helvetica, sans-serif"> </font><font face="Arial, Helvetica, sans-serif"><b>O cree un nuevo usuario </b></font></p>
                  <b><font face="Arial, Helvetica, sans-serif">
                  </font></b>
                  <table border="0">
                    <tr>
                      <td width="87" bgcolor="#FFFFCC"><div align="right"><b><font color="#0000FF" size="2" face="Arial, Helvetica, sans-serif">e-mail : </font></b></div></td>
                      <td width="132"><b><font face="Arial, Helvetica, sans-serif">
                      <input type="text" name="hd_usr" id="hd_usr" size="15" value="<?php echo htmlentities (  $vs_email ) ;?>">
                      </font></b></td>
                      <td bordercolor="#FFFFFF" bgcolor="#FFFFCC"><div align="right" class="Estilo1"><font face="Arial, Helvetica, sans-serif"><font size="2">Password :</font> </font></div></td>
                      <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="left" class="Estilo1"><font face="Arial, Helvetica, sans-serif">
                        <b><font face="Arial, Helvetica, sans-serif">
                        <input name="hd_pwd" type="password" id="hd_pwd" value="<?php echo htmlentities ( $miki ) ;?>" size="15">
                      </font></b>                      </font></div></td>
                    </tr>
                    <tr>
                      <td width="87" bgcolor="#FFFFCC"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Nombre : </font></b></font></div></td>
                      <td width="132"><b><font face="Arial, Helvetica, sans-serif">
                      </font><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                      </font></b></font></font><font face="Arial, Helvetica, sans-serif">
                      <input type="text" name="hd_email" id="hd_email" size="15" value="<?php echo htmlentities (  $vs_nombre ) ;?>">                      
                      </font></b></td>
                      <td width="112" bordercolor="#FFFFFF" bgcolor="#FFFFCC"><div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><strong><font face="Arial, Helvetica, sans-serif"><font size="2">Codigo postal </font></font></strong><span class="Estilo1"><font face="Arial, Helvetica, sans-serif"><font size="2"> :</font></font></span></font></div></td>
                      <td width="140"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
                      </font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                        <input name="hd_cp" type="text" id="hd_cp" value="<?php echo  htmlentities ( $vs_cp ) ;?>" size="15">
                      </font></b></font></font></b></font></b></font><font face="Arial, Helvetica, sans-serif">                        </font></b> </font></b></td>
                    </tr>
                    <tr>
                      <td width="87" bgcolor="#FFFFCC" height="29"><div align="right"><font face="Arial, Helvetica, sans-serif" color="#0000FF"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 1 :</font></b></font><font size="2" face="Arial, Helvetica, sans-serif"><b></b></font></div></td>
                      <td width="132" height="29"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                      </font><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                      <input name="hd_ape1" type="text" id="hd_ape1" value="<?php echo htmlentities (  $vs_ape1 ) ;?>" size="15">
                      </font></b></font></font><font face="Arial, Helvetica, sans-serif">                      </font></b> </font></font></td>
                      <td width="112" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Apellido 2 : </font></b></font></div></td>
                      <td width="140" height="29"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
                      <b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                        <input name="hd_ape2" type="text" id="hd_ape2" value="<?php echo  htmlentities ( $vs_ape2 ) ;?>" size="15">
                      </font></b></font></font></b>                      </font></b></font></td>
                    </tr>
                    <tr>
                      <td width="87" bgcolor="#FFFFCC"><div align="right" class="Estilo1"><font size="2" face="Arial, Helvetica, sans-serif"><b><font color="#0000FF">Provincia : </font></b></font></div></td>
                      <td width="132"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">
                      </font><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                        </font></b></font></b></font></b></font></font><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                        <input name="hd_prov" type="text" id="hd_prov" value="<?php echo  htmlentities ( $vs_prov ) ;?>" size="15">
                        </font></b></font></b></font></b></font></font></font></b></font></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">                        </font></font>              
                      <td width="112" bordercolor="#FFFFFF" bgcolor="#FFFFCC"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><b><span class="Estilo1"><font size="2" face="Arial, Helvetica, sans-serif">Pais :</font></span></b></font></div>
                      <td width="140"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">
                      </font><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                      </font></b></font></b></font></b></font></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2">                      </font></font><font face="Arial, Helvetica, sans-serif"> </font></b></font></font>               
                        <font color="#000066" size="2"><font color="#000066" size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" color="#000066" size="2"><b><font face="Arial, Helvetica, sans-serif">
                        <input name="hd_pais" type="text" id="hd_pais" value="<?php echo htmlentities ( $vs_pais ) ;?>" size="15">
                        </font></b></font></b></font></b></font></font></font></tr>
                    <tr>
                      <td colspan="4" bgcolor="#FFFFCC" height="24"><div align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif">
                          <input type="submit" name="iniciar2" value="Nuevo usuario">
                      </font> </div></td>
                    </tr>
                  </table>
                  <p><a href="../index.php"><img src="../../../imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></p>
                </div>
              </form>              </td>
          </tr>
          <tr>
            <td width="14" valign="top" bgcolor="#000099"><img src="../../../imagenes/comunes/banner-lateral/izq.jpg" width="14" height="450"></td>
            <td width="196" height="57" valign="top" bgcolor="#FF8500"><p align="center">&nbsp;</p>
                <p align="center" class="Estilo4">&nbsp;</p>
            </td>
            <td width="52" height="57" valign="top" bgcolor="#000099"><div align="center">
                <p><img src="../../../imagenes/comunes/banner-lateral/dcha.jpg" width="52" height="450"></p>
            </div></td>
          </tr>
          <tr>
            <td height="29" colspan="3" valign="top" bgcolor="#000099"><img src="../../../imagenes/comunes/banner-lateral/downy_azul.jpg" width="262" height="29"></td>
          </tr>
      </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>
<noscript>
</noscript> 
</p>
</body>
	<script language='JavaScript' type='text/javascript'>
		function validarDatos_3(){	
			if ( Formulario_3.user.value==""){
				alert ("Falta usuario !!");
				return (false);
			}
			if ( Formulario_3.pwd.value==""){
				alert ("Falta password !!");
				return (false);
			}
		}
		function validarDatos(){
		
			if ( Formulario_2.text0.value=="" ) {
				alert ("Falta email !!");
				return (false); 
			}			else if ( Formulario_2.textp.value=="" ) {
				alert ("Falta password !!");
				return (false); 
			}			else if ( Formulario_2.text1.value=="" ) {
				alert ("Falta nombre !!");
				return (false); 
			}			else if ( Formulario_2.text2.value=="" ) {
				alert ("Falta apellido 1  !!");
				return (false); 
			}			else if ( Formulario_2.text4.value=="" ) {
				alert ("Falta apellido 2  !!");
				return (false); 
			}			else if ( Formulario_2.text3.value=="" ) {
				alert ("Falta telefono !!");
				return (false); 
			}			else if ( Formulario_2.text5.value=="" ) {
				alert ("Falta C.I.F. / N.I.F. !!");
				return (false); 
			}			else if ( Formulario_2.text7.value=="" ) {
				alert ("Falta direccion !!");
				return (false); 
			}			else if ( Formulario_2.text8.value=="" ) {
				alert ("Falta Codigo Postal !!");
				return (false); 
			}			else if ( Formulario_2.text9.value=="" ) {
				alert ("Falta Poblacion !!");
				return (false); 
			}			else if (chivi==0){
				alert ("Seleccione Provincia !!");
				return (false); 
			}			else			{
					return (true);
			}
		
		}
	</script>
