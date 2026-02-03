<?php 
//session_start(); 
session_register('cokie'); 
?>
<HTML><HEAD><TITLE>Control de informes Nelosa</TITLE>
<?php 	
include("../../../../eMiKi/Seg/_secure_/eMiKi/Funciones_PHP.php"); 

$link=conectarse(); 

  	$result=mysql_query("Select * From c_comerciales Where nombre='" . $nombre . "'",$link);
	$row = mysql_fetch_array($result) ;
	$nom=(string)$row["nombre"];
	$id_com=(string)$row["id_com"];

  	$result=mysql_query("Select * From c_pwds Where id_com='" . $id_com . "'",$link);
	$row = mysql_fetch_array($result) ;
	$passwd=(string)$row["pwd"];
	
	if ( $nom == "" ){ echo ('<meta http-equiv="refresh" content="0;url=wrong-user.php">'); }
	elseif ( $nombre == $nom && $contra != $passwd) { echo ('<meta http-equiv="refresh" content="0;url=wrong-pwd.php">'); }
	elseif ( $nombre == $nom && $contra == $passwd) 
	{ 
		echo ('<meta http-equiv="refresh" content="0;url=main.php">');
		$cokie = $id_com ;
		
	}
	//echo "Nombre: $nom - $nombre <BR> Password: $contra - $passwd <BR> id_com: $id_com ";
?>
<META NAME="ROBOTS" content="NOFOLLOW,INDEX"/>


</HEAD>

<body bgcolor="#FFFFFF" text="#000000">
<p align="center">&nbsp;</p>
<p align="center">Comprobando usuario</p>
<p align="center">Por favor, espere . . . . . </p>

<?php 	
	/*if ( $nom == "" ){ echo ('wrong-user.php'); }
	elseif ( ( $nombre == $nom ) && ( $contra == $passwd ) ) { echo ('main.php'); }
	else { echo ('wrong-pwd.php'); }
	
	if ( ( $nombre == $nom ) && ( $contra == $passwd ) ) { echo ('si'); }*/
?>
</BODY>
</HTML>

<?php 
mysql_free_result($result); 
mysql_close($link); 
?>