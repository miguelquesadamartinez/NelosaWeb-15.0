<?php 	
session_start(); 
session_register('cokie'); 
include("../../../../eMiKi/Seg/_secure_/eMiKi/Funciones_PHP.php"); 
$link=conectarse(); 
?>
<HTML><HEAD><TITLE>Control de informes Nelosa</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,INDEX"/>

</HEAD>

<body bgcolor="#FFFFFF" text="#000000">

<div align="center">
  <div align="left">
    <div align="center">
      <div align="left">
        <table width="600" border="0" align="center">
          <tr>
            <td><div align="center">
                <p> <strong><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif"> </font></strong></p>
            </div></td>
          </tr>
        </table>
        <table width="600" border="0" align="center">
          <tr>
            <td height="255"><div align="center">
                <p><font size="4"><strong><font color="#FF0000">Comerciales Nelosa </font></strong></font></p>
                <form name="form1" method="post" action="pwd-check.php">
<?php 				  	
	$result=mysql_query("Select * From c_comerciales Where id_com='" . $id_com . "'",$link);
	$row = mysql_fetch_array($result) ;
	$nom=(string)$row["nombre"];

	$result=mysql_query("Select * From c_pwds Where id_com='" . $id_com . "'",$link);
	$row = mysql_fetch_array($result) ;
	$pwd=(string)$row["pwd"];

?>
                  <p>
                    Nombre<br>
                    <input name="nombre" type="text" id="nombre" value="<?php echo ($nom ); ?>">
</p>
                  <p>Contrase&ntilde;a<br>                    
                    <input name="contra" type="password" id="contra" value="<?php echo ($pwd ); ?>">
                  </p>
                  <p>                    <input type="submit" name="Submit" value="Entrar">
                  </p>
                </form>
                <p><strong><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif"> </font></strong></p>
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
