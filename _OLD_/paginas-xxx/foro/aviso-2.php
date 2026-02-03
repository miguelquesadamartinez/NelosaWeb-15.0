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
.Estilo3 {color: #FFFFFF;
	font-weight: bold;
}
</style>
<?php 
// Para el cambio de idioma en modo diseño
if (isset($cambiar)) $idioma=$cambiar  ;
 ?>
</HEAD>
<body bgcolor="#000099">
<table width="765" border="0" align="center">
  <tr>
    <td><div align="center">
        <div align="center">
          <?php 
  include ( "../../eMiKi/Headers/upper.". $idioma . ".php" );
?>
          <table width="740" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="141" valign="top" bgcolor="#FFFFFF"><div align="center">
                  <p>&nbsp;</p>
                  <p class="Estilo2"><span class="Estilo1">Solicitar aviso para una respuesta</span></p>
                  <table width="654" border="0" align="center">
                    <?php 
include("../../eMiKi/Funciones_PHP.php");
include "../../eMiKi/libmail.php";
$link=conectarse();  
$link_2=conectarse();  
mysql_query("Insert Into foro_aviso (indise,email) VALUES (" . $ind . ",'" . $emilio . "')",$link);	
      
	  //echo ("Insert Into foro_aviso (indise,email) VALUES (" . $ind . ",'" . $emilio . "')" );

$result_2=mysql_query("Select * From foro_index where indise = " . $ind,$link_2); 
$row_2 = mysql_fetch_array($result_2) ;
$asunto=(string)$row_2["asunto"];

$result=mysql_query("Select * From foro_resp where indise = " . $ind,$link); 

while($row = mysql_fetch_array($result)) 
	{ 
		$texto=(string)$row["texto"];
			
			$filon = "Respuestas del foro de la web www.nelosa.net \n a la pregunta : \n" . $asunto . " \n" . $texto ;
			
			$m = new Mail(); // create the mail
					
			$m->From( "avisos_foro@nelosa.net" ) ; 
			$m->To( $emilio ) ;
			$m->Subject( "Respuesta del foro para " . $asunto ) ;
			$m->Body( $filon ); 
			$m->Send(); // send the mail */
	}
?>
                    <tr align="center" valign="middle">
                      <td>&nbsp;</td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td><p class="Estilo2">Su solicitud ha sido cursada, ahora recibira, si las hay, todas las respuestas </p></td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td width="875"><span class="Estilo2">y en el futuro recibira emails con las respuestas del foro </span></td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  <p><a href="index.php"><img src="../../imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></p>
                  <p align="left">&nbsp; </p>
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
