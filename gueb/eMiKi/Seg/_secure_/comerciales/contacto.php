<?php 	
//session_start(); 
session_register('cokie'); 
include("../../../../eMiKi/Seg/_secure_/eMiKi/Funciones_PHP.php"); 
$link=conectarse(); 
if ( $cokie != "" )
{
	$result=mysql_query("Select * From c_comerciales Where id_com='" . $cokie . "'",$link);
	$row = mysql_fetch_array($result) ;
	$nombre_v=(string)$row["nombre"];
	$ape1_v=(string)$row["ape1"];
	$ape2_v=(string)$row["ape2"];
	$email_v=(string)$row["email"];
	$email_nelosa_v=(string)$row["email_nelosa"];
	$tel_v=(string)$row["tel"];
	$fax_v=(string)$row["fax"];
	$pob_v=(string)$row["pob"];
	$pais_v=(string)$row["pais"];
	$empresa_v=(string)$row["empresa"];
}
?>
<HTML><HEAD><TITLE>Control de informes Nelosa</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

</HEAD>

<body bgcolor="#FFFFFF" text="#000000">

<div align="center">
        <table width="600" border="0" align="center">
          <tr>
            <td height="104"><div align="center">
                <p>&nbsp;</p>
                <p align="center"><font size="4"><strong><font color="#FF0000">Datos contacto</font></strong></font></p>
                                <form name="form1" method="post" action="contacto2.php">
                                  <p>&nbsp;</p>
                                  <table width="100%"  border="0">
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>Nombre</strong></font></div></td>
                                      <td><input name="nombre" type="text" value="<?php echo $nombre_v ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>1&ordm; Apellido </strong></font></div></td>
                                      <td><input type="text" name="ape1" value="<?php echo $ape1_v ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>2&ordm; Apellido </strong></font></div></td>
                                      <td><input type="text" name="ape2" value="<?php echo $ape2_v ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>email</strong></font></div></td>
                                      <td><input type="text" name="email" value="<?php echo $email_v ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>email_nelosa</strong></font></div></td>
                                      <td><input type="text" name="email_nelosa" value="<?php echo $email_nelosa_v ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>Tel</strong></font></div></td>
                                      <td><input type="text" name="tel" value="<?php echo $tel_v ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>Fax</strong></font></div></td>
                                      <td><input type="text" name="fax" value="<?php echo $fax_v ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>Poblacion</strong></font></div></td>
                                      <td><input type="text" name="pob" value="<?php echo $pob_v ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>Pais</strong></font></div></td>
                                      <td><input type="text" name="pais" value="<?php echo $pais_v ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>Empresa</strong></font></div></td>
                                      <td><input type="text" name="empresa" value="<?php echo $empresa_v ?>"></td>
                                    </tr>
                                  </table>
                                  <p align="center">
                                    <input type="submit" name="Submit" value="Actualizar datos">
                                  </p>
                                </form>                <p align="center"><strong><font color="#FF0000" size="4"></font><font color="#0000FF" size="3"><a href="main.php">&lt; &lt; </a></font></strong></p>
                                <p align="center">&nbsp;</p></td>
          </tr>
        </table>
    <div align="center">
      <div align="left"><b></b></div>
    </div>
</div>
<table width="600" border="0" align="center">
  <tr> 
    <td colspan="2"><p align="center"><a href="../../../../eMiKi/Seg/index.php"> Home</a> | <a href="mailto:info@nelosa.net">@</a></p>
      <p align="center"><font color="#0000FF" size="1" face="Arial, Helvetica, sans-serif">Copyright 
        &copy; 2004 Nelosa.</font></p></td>
  </tr>
</table>
</BODY>
</HTML>
