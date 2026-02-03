<?php session_register('usr'); session_register('v_Pais'); session_register('tabla');
if ( $VBtabla <> "" ) $tabla =  strtolower ( $VBtabla ) ;

include("../Funciones_PHP.php");
include("../libmail.php");

$link = conectarse_param("nelosa_nelosa") ;

$result = mysql_query("Select * From emails_nelosa  WHERE email = '" . $email_param . "'",$link);	
//echo "Select * From emails_nelosa  WHERE email = '" . $email_param . "'<BR>";
if ( $row = mysql_fetch_array($result) )
{
	echo (string)$row["email"] ;
}
else
{
	echo "Nada" ;
}
mysql_close($link);?>
