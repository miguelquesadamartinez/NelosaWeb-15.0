<?php 	include("../../eMiKi/Headers/vbles_sesion.php");
 
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE>Universal Refill Kit  -  Nelosa Accesrios  -  </TITLE>
<meta name="title" content="El foro de la recarga"/>
<meta http-equiv="title" content="El foro de la recarga"/>
<meta name="DC.Title" content="El foro de la recarga"/>

<meta name="distribution" content="global"/>
<meta name="resource-type" content="document"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>

<style TYPE="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#FF00FF";  text-decoration: none;}
A:visited {color: "#FF0000";  text-decoration: none;}
H1{font-family:Arial, Helvetica, sans-serif}
H2{font-family:Arial, Helvetica, sans-serif}
H3{font-family:Arial, Helvetica, sans-serif}
P{font-family:Arial, Helvetica, sans-serif}
BODY{color:"#0000FF"; font-family:Arial, Helvetica, sans-serif}
.Estilo1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
.Estilo2 {color: #0000FF}
.Estilo4 {
	font-size: 12px;
	color: #0000FF;
}
.Estilo5 {color: #FFFFFF;
	font-weight: bold;
}
</style>
</HEAD>
<body bgcolor="#000099">
<table width="765" border="0" align="center">
  <tr>
    <td height="423"><div align="center">
        <div align="center">
          <?php 
  include ( "../../eMiKi/Headers/upper.". $idioma . ".php" );
?>
          <table width="740" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="141" valign="top" bgcolor="#FFFFFF"><div align="center">
                  <p>&nbsp;</p>
                  <p class="Estilo2">El Foro de la Recarga </p>
                  <table width="654" border="0" align="center" bgcolor="#FFFFCC">
                    <tr>
                      <td width="883"><div align="center" class="Estilo1">Respuestas</div></td>
                    </tr>
                  </table>
                  <table width="654" border="0" align="center">
                    <tr align="center" valign="middle">
                      <td>&nbsp;</td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td>
                        <?php 
include("../../eMiKi/Funciones_PHP.php");
$link=conectarse();  
$link_2=conectarse();  
$link_3=conectarse();  

$result_2=mysql_query("Select * From foro_index where indise = " . $indise,$link_2); 
$row_2 = mysql_fetch_array($result_2);
$text=(string)$row_2["text"];
$asunto=(string)$row_2["asunto"];

echo "<B>" . $asunto . "</B><BR>" .  $text . "<BR><BR>";

$result=mysql_query("Select * From foro_resp where indise = " . $indise,$link); 

$count = 0 ;

while($row = mysql_fetch_array($result)) 
	{ 
		// Datos de las consultas
		$count = $count + 1 ;
		$text=(string)$row["texto"];
		$email=(string)$row["email"];
		// Nombre de quien responde
		$result_3=mysql_query("Select Nombre From Clientes Where email = '" . $email . "'",$link_3); 
		$row_3 = mysql_fetch_array($result_3);
		$nombre=(string)$row_3["Nombre"];
		if ($nombre == "" ) $nombre = "Anonimo" ;
		echo ("<table width='654' border='1' align='center'><tr><td>" . $text . "<HR>Por: " . $nombre . "</td></tr><tr></tr></table><BR>");
	}
	?>
                      </td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td width="875">&nbsp;</td>
                    </tr>
                  </table>
                  </div></td>
            </tr>
            <tr>
              <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
          </table>
        </div>
        <p align="center">&nbsp;</p>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY>
</HTML>
