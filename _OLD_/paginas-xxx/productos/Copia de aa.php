<?php 
include ( "../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );

?><!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>Kits universales recarga Cartuchos Impresoras Ink-Jet</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset="/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>

<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#00FF00";  text-decoration: none;}
A:visited {color: "#0000FF";  text-decoration: none;}
H1{font-family:Arial, Helvetica, sans-serif}
H2{font-family:Arial, Helvetica, sans-serif}
H3{font-family:Arial, Helvetica, sans-serif}
P{font-family:Arial, Helvetica, sans-serif}
BODY{color:"#0000FF"; font-family:Arial, Helvetica, sans-serif}
.Estilo2 {color: #0000FF}
</style>

</HEAD>

<body bgcolor="#000099" text="#0000FF">
<div align="center">
  <?php 
  include ( "../../eMiKi/Headers/upper.". $idioma . ".php" );
?>
  <table width="740" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
          <p>&nbsp;</p>
          <table width="97%"  border="0">
            <tr>
              <td><p align="center"><b></b></p>
                <font size="2">
                <?php 	

$bar = 0 ;

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;


$tmp = $ref ;

	$result=mysql_query("select * from prods Where Ref = '$tmp'" ,$link); 
	$row = mysql_fetch_array($result) ;
	
		$des=(string)$row["Des"];
	
$link2=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa_textos",$link2) ;
//echo ("select * from Descs_esp Where Ref = '$tmp'");  ;
	$result2=mysql_query("select * from Descs_esp Where Ref = '$tmp'" ,$link2); 
	$row2 = mysql_fetch_array($result2) ;
	
	$texto=(string)$row2["texto"];

echo (" <table width='99%' border='0'><tr><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>") ;
echo (" <td height ='55' colspan='4'><div align='center'>Ref: $ref - $des</div></td>") ;
echo (" </tr>") ;
echo (" <tr>") ;
echo (" <td width='40%'><div align='right'><img src='../../imagenes/productos/$ref.jpg' border='0'</div></td>") ;
echo (" <td width='10%'><div></div></td>") ;
echo (" <td width='40%'><div align='left'>$texto</div></td>") ;
echo (" <td width='10%'><div></div></td>") ;
echo (" </font></tr></table>") ;
	?>
                </font><font size="4">&nbsp;                </font>
                <p align="center">&nbsp;</p></td>
            </tr>
          </table>
      </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF"><div align="right"><a href="index.php"><img src="../../imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></div></td>
    </tr>
  </table>
</div>
<p align="center"><img src="../../imagenes/comunes/Support.GIF" width="57" height="93"></p>

</body>
</html>
