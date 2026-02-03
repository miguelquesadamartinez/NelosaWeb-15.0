<?php 
include ( "../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );
$idioma = "fra" ;
?><!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Accesorios CD - DVD - CD ROM</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset="/>

<meta name="Publisher" content="Alma Print, http://www.alma-print.com"/>

<style type="text/css">
<!--
.Estilo2 {color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#00FF00";  text-decoration: none;}
A:visited {color: "#0000FF";  text-decoration: none;}
H1{font-family:Arial, Helvetica, sans-serif}
H2{font-family:Arial, Helvetica, sans-serif}
H3{font-family:Arial, Helvetica, sans-serif}
P{font-family:Arial, Helvetica, sans-serif}
BODY{color:"#0000FF"; font-family:Arial, Helvetica, sans-serif}
</style>

</HEAD>

<body bgcolor="#000099" text="#0000FF">
<div align="center">
  <table width="763" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../imagenes/index/arriva.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="127"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="763" height="128">
          <param name="movie" value="../../imagenes/animacione/banner-ch.swf">
          <param name="quality" value="high">
          <embed src="../../imagenes/animacione/banner-ch.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="763" height="128"></embed>
      </object></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="78" height="13" bgcolor="#FFFFFF"><img src="../../imagenes/index/arriva-down.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="0" valign="top" bgcolor="#FFFFFF"><div align="center">
          <p>&nbsp;</p>
          <p class="Estilo3"><font color="#0000FF" size="3"><b><font face="Arial, Helvetica, sans-serif"><?php echo getext($idioma,"title 004"); //?> <?php echo getext($idioma,"title 003"); //?></font></b></font></p>
          <p class="Estilo3">
            <?php 	

//echo "USer: " . $user . " - PWD: " . $pwd . "<BR>" ;

$bar = 0 ;

$link=mysql_connect("mysql","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;

	echo ("<table width='99%' border='0'><tr>");
	
	$result=mysql_query("select * from prods Where Grupo='03'" ,$link); 
	while($row = mysql_fetch_array($result)) 
	{
		$ref=(string)$row["Ref"];

		$des = getDesc ( $idioma , $ref ) ;

		echo ("<td><div align='center'><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>");
		echo ("<a href='aa.php?ref=$ref'>$des<BR><BR></font>");
		echo ("<img src='../../imagenes/productos/$ref.jpg' border='0'></a></div></td>\n");
		$bar = $bar + 1 ;
		if ($bar == 2)
		{
			echo ("</tr><tr>\n");
			$bar = 0 ;
		} 
	}
	echo ("</tr></table>") ;
?> 
          </p>
      </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</div>
<p align="center"><img src="../../imagenes/comunes/Support.GIF" width="57" height="93"></p>
</body>
</html>
