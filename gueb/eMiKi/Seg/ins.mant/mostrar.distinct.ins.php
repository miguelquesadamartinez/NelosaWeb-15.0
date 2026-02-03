<HTML>
<HEAD>
<TITLE>Ins Mant</TITLE>
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
	color: #0000FF;
	font-size: 16px;
}
.Estilo1 {color: #FF0000}
</style>
</HEAD>
<BODY bgcolor="#FFFFFF" text="#0000FF" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<table width="600" border="0" align="center">
  <tr>
    <td><div align="center">
      <p><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Ins Mant - Instrucciones </font></strong></p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div align="right"></div>
<table width="600" border="0" align="center">
  <tr>
    <td>
<?php
	// Listar tablas
	$dbname = 'nelosa_nelosa_printers';
	if (!mysql_connect($jost,"nelosa","mqm1804")) {	   echo 'Could not connect to mysql';	   exit;	}
	$result = mysql_list_tables($dbname);
	if (!$result) {	   echo "DB Error, could not list tables\n";	   echo 'MySQL Error: ' . mysql_error();	   exit;	}
	// Rellenar el array "rest" con los nombres de las tablas y contarlas en array_cnt
	$arry_cnt = 0 ;
	while ($row = mysql_fetch_row($result)) {
			$rest [$arry_cnt] = $row[0];
			$arry_cnt = $arry_cnt + 1 ;
	}
	mysql_free_result($result);
include("../../Funciones_PHP.php");

$link = conectarse_param("nelosa_nelosa_printers") ;

$last = $arry_cnt ;
for ( $j = 1; $j < $last ; $j++ ) // Por cada tabla, menos Ins_Brand
{		// Devuelve la marca desde los nombres de las db´s
		$string1 = $rest [$j];
		$needle = "_";
		$needle_len = strlen($needle);//find length of the needle
		$position_num = strpos($string1,$needle) + $needle_len;//find postion
		$result_string = substr("$string1",0,$position_num-1);//cut the string
	
		if ($result_string == "") $result_string = $rest [$j];
	//-----
	// Buequeda en directorio de las instrucciones
	$files[] = NULL ;
	$dir = "../../../paginas/instrucciones/" . $result_string ;
	$cnt_2=0 ;
	// Encabezado de tabla con nombre de la db
	echo ('<table width="100%"  border="0"><tr><td><div align="center"><b><font size="3" face="Arial, Helvetica, sans-serif">' . $rest [$j] . '</font></b></div></td></tr></table>');
	echo ('<table width="100%"  border="0"><tr>');
	//Select de disticnt ins´s
	$result=mysql_query("Select distinct Ins From " . $rest [$j] ,$link);
	$cnt = 0 ;
	while ($row = mysql_fetch_row($result)) {
		$var=$row[0];
		//echo $var ;
		$chivato = 0 ;
			// Para ver si existe la instruccion, sino no se muestra
//echo $dir . "/" . $result_string . $var.".php<BR>" ;
			if ( file_exists ( $dir . "/" . $result_string . $var.".php") ) {
				$esta = "-ok-";
			}
			else {
				$esta = "-xx-";
				//echo "no<BR>" ;
			}
		echo ('<td><div align="center"><font size="2" face="Arial, Helvetica, sans-serif">');
		echo ('<a href="printer.x.ins.php?instrucc=' . $var . '&bd=' . $rest [$j] . '">' . $var . ' <b>'. $esta .'</b></a></font></td>');
				
		$cnt = $cnt + 1 ;
		if ( $cnt == 5 ){
			$cnt=0 ;
			echo "<tr></tr>";
		}
	}
	echo "<table>";
}
?>
<table width="763" border="1">
  <tr>
    <td>d</td>
    <td><span class="Estilo1">a</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY>
</HTML>
