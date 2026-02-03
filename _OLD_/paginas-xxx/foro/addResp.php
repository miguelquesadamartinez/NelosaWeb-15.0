<?php 
include ( "../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );
 
?><!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML><HEAD><TITLE>Universal Refill Kit  -  Nelosa Accesrios  -  </TITLE>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<style type="text/css">
<!--
.Estilo3 {color: #0000FF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.Estilo4 {color: #0000FF}
.Estilo2 {color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
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
                  <p class="Estilo4">El Foro de la Recarga </p>
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
<table width="654" border="0" align="center">
  <tr align="center" valign="middle">
    <td><span class="Estilo3">Que Miki como va la cosa ?? </span></td>
  </tr>
  <tr align="center" valign="middle">
    <td width="875"><span class="Estilo3">Por aqui bien </span></td>
  </tr>
  <tr align="center" valign="middle">
    <td><div align="right"><b><a href="index.php"><img src="../../imagenes/comunes/back.jpg" name="backy" width="67" height="35" border="0"></a></b></div></td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY></HTML>
<?php 
include("../../eMiKi/Funciones_PHP.php");
include "../../eMiKi/libmail.php";
$link=conectarse();  
$link_2=conectarse();  
$link_3=conectarse();  
//Insrtamos la respuesta que viene del email
mysql_query("Insert Into foro_resp (email,indise,texto) VALUES('" . $email . "'," . $indise . ",'" . $texto . "')",$link);	

echo "Insert Into foro_resp (email,indise,texto) VALUES('" . $email . "'," . $indise . ",'" . $texto . "')" ;

//echo "Select * From foro_index where indise = " . $indise ;
//Obtenemos el asunto
$result_2=mysql_query("Select * From foro_index where indise = " . $indise ,$link_2); 
$row_2 = mysql_fetch_array($result_2) ;
$asunto=(string)$row_2["asunto"];

//Obtenemos la respuesta
$result_3=mysql_query("Select * From foro_resp where indise = " . $indise ,$link_3); 
$row_3 = mysql_fetch_array($result_3) ;
$resp=(string)$row_3["texto"];

// Por cada email que tenga ese indice enviamos un email con la respuesta
$result=mysql_query("Select * From foro_aviso where indise = " . $indise ,$link); 
while($row = mysql_fetch_array($result)) 
	{ 
		$email=(string)$row["email"];
			//$resp2 = ereg_replace( " ", "%20", $resp );
		if ($email != "" )
		{
			$filon = "Como solicito en el foro de la web www.nelosa.net recibe \nla respuesta a la pregunta de: \n" . $asunto . " \n" . $resp ;
			
			$m = new Mail(); // create the mail
					
			$m->From( "avisos_foro@nelosa.net" ) ; 
			$m->To( $email ) ;
			$m->Subject( "Respuesta del foro para " . $asunto ) ;
			$m->Body( $filon ); 
			$m->Send(); // send the mail */
		}
	}
?>
