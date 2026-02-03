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
	color: #FFFFFF;
}
.Estilo1 {
	color: #0000FF;
	font-weight: bold;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>
<body bgcolor="#000099">
<?php 	

//echo "USer: " . $user . " - PWD: " . $pwd . "<BR>" ;

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;

if ( $user <> "" )  // Si le pasamos param.
{
	$result=mysql_query("select * from Datas where mail = '". $user ."'" ,$link); 
	$row = mysql_fetch_array($result);
	$numi=(string)$row["mail"];
}

if ($numi==""){	$algo="1";} //No existe el usuario
else
{
	$result=null; // ! ! !
	
	$result=mysql_query("select * from Datas where mail = '". $user ."' AND otro='" . $pwd . "'" ,$link); 
	$row = mysql_fetch_array($result);
		
	$numi=(string)$row["mail"];
	if ($numi=="")
	{
		$algo="2"; // No coincide PWD
	}
	else
	{
			$algo="0";
			
			$result=mysql_query("select * from Clientes where email = '". $user ."'" ,$link); 
			$row = mysql_fetch_array($result);
			
			$vs_email=(string)$row["email"];
			$vs_nombre=(string)$row["Nombre"];
			$vs_ape1=(string)$row["Apellido1"];
			$vs_ape2=(string)$row["Apellido2"];
			$vs_cp=(string)$row["Cp"];
			$vs_prov=(string)$row["Provincia"];
			$vs_pais=(string)$row["Pais"];
			
			$miki=$pwd;
			
			$usr=$vs_email;
	}
}

	if ( $algo == "1" ){ 
		echo ('<meta http-equiv="refresh" content="4;url=NoUser.php">'); 
		$usr = "" ;
		$fontaneda = "" ;
		//echo "Roger 1<BR>" ;
	}
	elseif (  $algo == "2"  ) { 
		echo ('<meta http-equiv="refresh" content="4;url=NoPwd.php">');
		$usr = "" ;
		$fontaneda = "" ;
		//echo "Roger 2<BR>" ;
	}
	elseif ( $trickyu == $nom_v && $tricky_v == $trickyp) 
	{ 
		echo ('<meta http-equiv="refresh" content="4;url=viewUser.php">');
		//echo "Roger 3<BR>" ;
	}

	mysql_free_result($result);  
	mysql_close($link);
?>
<div align="center">
  <p>&nbsp;</p>
  <p>Comprobando usuario . . . . . . </p>
</div>
