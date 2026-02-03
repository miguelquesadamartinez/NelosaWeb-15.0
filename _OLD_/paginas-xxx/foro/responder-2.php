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

<meta http-equiv="refresh" content="5;url=index.php">

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
.Estilo5 {
	color: #0000FF;
	font-weight: bold;
}
.Estilo7 {
	font-size: 10px;
	font-weight: bold;
	color: #0000FF;
}
.Estilo3 {color: #0000FF}
.Estilo2 {color: #FFFFFF;
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
                  <p class="Estilo3">El Foro de la Recarga </p>
                  <table width="654" border="0" align="center" bgcolor="#FFFFCC">
                    <tr>
                      <td width="883"><div align="center" class="Estilo1">Responder a una consulta</div></td>
                    </tr>
                  </table>
                  <table width="654" border="0" align="center">
                    <?php  
include( "../../eMiKi/Funciones_PHP.php" ) ;
include( "../../eMiKi/libmail.php" ) ;
			
			if ($usr == "" ) $nombre = "Anonimo" ;
			else $nombre = $usr ;
			
			$resp2 = ereg_replace( " ", "%20", $resp );
			
			/*string htmlentities ( string string )
			function unhtmlentities ($string)
			{
				$trans_tbl = get_html_translation_table (HTML_ENTITIES);
				$trans_tbl = array_flip ($trans_tbl);
				return strtr ($string, $trans_tbl);
			}*/

			
			$filon = "Respuesta de: " . $nombre . "\nTexto: " . $resp . "\nPara la respuesta con indice: " . $hidden .
			"\nhttp://www.nelosa.net/gueb/paginas/foro/addResp.php?email=" . $nombre . "&indise=" . $hidden . "&texto=" . $resp2 ;
			
			//echo $filon ;
			
			$m = new Mail(); // create the mail
			//echo "<BR>1<BR>" ;
			$m->From( "web@nelosa.net" ) ; 
			//echo "<BR>2<BR>" ;
			$m->To( "foro@nelosa.net" ) ;
			//$m->To( "info@nelosa.net" ) ;
			//echo "<BR>3<BR>" ;
			$m->Subject( "Respuesta para el foro" ) ;
			//echo "<BR>4<BR>" ;
			$m->Body( $filon ); 
			//echo "<BR>5<BR>" ;
			$m->Send(); // send the mail */
			//echo "<BR>6<BR>" ;
			
			//echo "<BR>THE END" ;

	//		mail($emilio,"Password recargas-y-consumibles.net",$text,"From: <password@recargas-y-consumibles.net>");

	?>
                    <tr align="center" valign="middle">
                      <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td bgcolor="#FFFFFF"><p><span class="Estilo5">Gracias por su colaboracion</span><br>
                      </p></td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td width="875" bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td bgcolor="#FFFFFF"><span class="Estilo7">En breves segundos sera redirigido a la pagina principal del foro </span></td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                  </table>
                  <p><a href="index.php"><img src="../../imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></p>
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
