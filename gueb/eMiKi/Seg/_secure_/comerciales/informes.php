<?php 	
//session_start(); 
session_register('cokie'); 
include("../../../../eMiKi/Seg/_secure_/eMiKi/Funciones_PHP.php"); 
$link=conectarse(); 
?>
<HTML><HEAD><TITLE>Control de informes Nelosa</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,INDEX"/>
<meta http-equiv="refresh" content="1;url=main.php">
</HEAD>

<body bgcolor="#FFFFFF" text="#000000">
        <table width="600" border="0" align="center">
          <tr>
            <td height="103"><div align="center">
                <p align="center"><font size="4"><strong><font color="#FF0000">Comerciales Nelosa </font></strong></font></p>
                <p align="center"><font color="#0000FF"><strong>Informe enviado 
                <?php 
						
				mysql_query("Insert Into c_informes (id_com,texto,fecha) VALUES('" . $cokie . "','" . $texto . "','" . Date("Y-m-d") . "')",$link);
						
				mail("info@nelosa.net","Informe",$texto,"From: <informEs@nelosa.net>");
				
				?>
</strong></font></p>
                <p align="center"><strong><font color="#0000FF" size="3"><a href="main.php">&lt; &lt; </a></font></strong></p>
                <p align="center">&nbsp;</p>
            </td>
          </tr>
        </table>
    <div align="center">
      <div align="left"><b></b></div>
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
