<?php 
include ( "../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );
$idioma = "fra" ;
?><HTML><HEAD>
<TITLE>Aide en ligne</TITLE>

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

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php 	

//echo "Page: " . $page . " ean = ". $ean . "<BR>" ;
//echo "Page: " . $page ;

$link=mysql_connect("mysql","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;

//echo ("select * from prods where Code = '". $ean ."'");

$result=mysql_query("select * from prods where Code = '". $ean ."'" ,$link); 
$row = mysql_fetch_array($result);
$var=(string)$row["Code"];

//echo "Var: " . $var ."<BR>" ;
//echo ("select * from prods where code = '". $ean ."'<BR>");
if ( $var=="" )
{
	$algo="1";
} //No existe el codigo de barras
else 
{ 
	$algo="2"; 
}

	if ( $algo == "1" ){ 
		echo ("<meta http-equiv='refresh' content=1;url=no-code.php>"); 
		//echo "Roger 1<BR>";
	}
	elseif (  $algo == "2"  ) { 
		echo ("<meta http-equiv='refresh' content=1;url=".$page.">"); 
		//echo "Roger 2<BR>";
	}

	//mysql_free_result($result);  
	mysql_close($link);
?>
</HEAD>
<body bgcolor="#000099">

<div align="center">
  <p>&nbsp;</p>
  <p><?php echo getext($idioma,"txt 014"); // Comprobando codigo . . . . . . ?></p>
</div>
