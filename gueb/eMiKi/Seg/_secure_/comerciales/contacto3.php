<?php 	
//session_start(); 
session_register('cokie'); 
include("../../../../eMiKi/Seg/_secure_/eMiKi/Funciones_PHP.php"); 
$link=conectarse(); 

mysql_query("UPDATE c_comerciales SET nombre = '" . $nombre_h . "', ape1='" . $ape1_h . "', ape2='" . $ape2_h . "', email='" . $email_h . "', email_nelosa='" . $email_nelosa_h . "', tel='" . $tel_h . "', fax='" . $fax_h . "', pob='" . $pob_h . "', pais='" . $pais_h . "', empresa='" . $empresa_h . "' Where id_com='" . $cokie . "' ",$link);	
?>
<HTML><HEAD><TITLE>Control de informes Nelosa</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv="refresh" content="1;url=main.php">
</HEAD>

<body bgcolor="#FFFFFF" text="#000000">

<div align="center">
        <table width="600" border="0" align="center">
          <tr>
            <td height="104"><div align="center">
              <p align="center"><font size="4"><strong><font color="#FF0000">Datos contacto</font></strong></font></p>
              <p align="center">&nbsp;</p>
              <p align="center"><font color="#0000FF" size="3"><strong>Datos actualizados ! !</strong></font></p>
              <p align="center"><strong><font color="#0000FF" size="3"><a href="main.php">&lt; &lt; </a></font></strong></p>
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
