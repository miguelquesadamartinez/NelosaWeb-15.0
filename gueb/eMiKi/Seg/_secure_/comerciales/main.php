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
  <div align="left">
    <div align="center">
      <div align="left">
        <table width="600" border="0" align="center">
          <tr>
            <td height="447"><div align="center">
                <p>&nbsp;</p>
                <p><font size="4"><strong><font color="#FF0000">Comerciales Nelosa </font></strong></font></p>
                <table width="676" border="0">
                  <tr>
                    <td colspan="2"><div align="center">
                      <p>&nbsp;</p>
                      <p><strong><font color="#0000FF"><a href="contacto.php">Datos Contacto</a></font></strong></p>
                      <p>&nbsp;</p>
                    </div>                      </td>
                  </tr>
                  <tr>
                    <td width="54%"><form name="form1" method="post" action="informes.php">
                      <p align="center"><strong><font color="#0000FF">Envio de Informes </font></strong></p>
                      <p> <strong><font color="#0000FF">
                        <textarea name="texto" cols="50" rows="15" id="texto"></textarea>
                      </font></strong></p>
                      <p align="center"> <strong><font color="#0000FF">
                        <input type="submit" name="Submit" value="Enviar informe">
                      </font></strong></p>
                    </form></td>
                    <td width="46%"><FORM ACTION = "send-mail.php" METHOD = "POST">
                      <p align="center"><strong><font color="#0000FF">Envio de correo electronico </font></strong></p>
                      <table width="100%"  border="0">
                        <tr>
                          <td width="25%"><div align="right"><strong><font color="#0000FF"> Para:</font></strong></div></td>
                          <td width="75%"><div align="left"><strong><font color="#0000FF"> info@nelosa.net </font></strong></div></td>
                        </tr>
                        <tr>
                          <td><div align="right"><strong><font color="#0000FF">de:</font></strong></div></td>
                          <td><div align="left"><strong><font color="#0000FF">
                              <input name="email" type=text value="<?php if ($email_nelosa_v != "" ) { echo $email_nelosa_v ; }
							 elseif  ($email_v != "" ) {	echo $email_v ; }
							 else { echo "anonimo"; } ?>" size="50">
                          </font></strong></div></td>
                        </tr>
                        <tr>
                          <td><div align="right"><strong><font color="#0000FF">Asunto:</font></strong></div></td>
                          <td><div align="left"><strong><font color="#0000FF">
                              <input name="subject" type=text size="50">
                          </font></strong></div></td>
                        </tr>
                        <tr>
                          <td><div align="right"><font color="#0000FF"><strong>Texto:</strong></font></div></td>
                          <td><div align="left">
                              <textarea name="texto" cols="50" rows="10" id="texto"></textarea>
                          </div></td>
                        </tr>
                      </table>
                      <p align="center"><strong><font color="#0000FF">
                        <input type="submit" name="Submit" value="Enviar @">
                      </font></strong></p>
                    </FORM></td>
                  </tr>
                </table>
                </div></td>
          </tr>
        </table>
      </div>
    </div>
    <div align="center">
      <div align="left"><b></b></div>
    </div>
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
