<?php 	include("../../eMiKi/Headers/vbles_sesion.php");
 
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE>Universal Refill Kit  -  Nelosa Accesrios  -  </TITLE>
<meta name="title" content="El foro de la recarga"/>
<meta http-equiv="title" content="El foro de la recarga"/>
<meta name="DC.Title" content="El foro de la recarga"/>

<meta name="description" content="">
<meta http-equiv="description" content="">
<meta http-equiv="DC.Description" content="">

<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta name="keywords" content="
"/>
<meta http-equiv="keywords" content="
"/>

<meta name="Revisit" content="20 days"/>

<meta name="distribution" content="global"/>
<meta name="resource-type" content="document"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>

<?php /* <meta http-equiv="refresh" content="10;url=index.php"> */
?>

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
.Estilo3 {color: #0000FF}
body,td,th {
	color: #0000FF;
}
.Estilo2 {color: #FFFFFF;
	font-weight: bold;
}
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
                  <p class="Estilo3">El Foro de la Recarga </p>
                  <table width="654" border="0" align="center" bgcolor="#FFFFCC">
                    <tr>
                      <td width="883"><div align="center" class="Estilo1">El foro de la recarga Ink-Jet</div></td>
                    </tr>
                    <tr>
                      <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                      <td><div align="right"><font face="Arial, Helvetica, sans-serif" ><b><font color="#0000FF" size="2">Usuario :
                                    <?php 
		// Pijadilla que muestra el email o user
        if ($usr=="")
		{
			echo " Anonimo";
		}
		else
		{
			 echo " " . $usr ;
		}
		?>
                      </font></b></font></div></td>
                    </tr>
                  </table>
                  <table width="654" border="0" align="center">
                    <tr align="center" valign="middle">
                      <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td bgcolor="#FFFFFF"><span class="Estilo3">Su pregunta sera revisada por nuestros tecnicos<br>
      y en breve sera insertada en el foro </span></td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td width="875" bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td bgcolor="#FFFFFF"><div align="right"><b><a href="index.php"><img src="../../imagenes/comunes/back.jpg" name="backy" width="67" height="35" border="0" ></a></b></div></td>
                    </tr>
                  </table>
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
<div align="center"></div>
<div align="center"></div>
</BODY>
</HTML>


<?php 
include("../../eMiKi/Funciones_PHP.php");
//include "../../eMiKi/libmail.php";
include "../../eMiKi/libmail2.php";

$link=conectarse();  

if ($usr=="") { $usr_tmp = "Anonimo" ; }
else { $usr_tmp = $usr ; }
			
			//$texto2 = htmlentities ($texto);
			
			$texto2 = ereg_replace( " ", "%20", $texto );
			
			$filon = "Pregunta de: " . $usr_tmp . "\nAsunto: " . $asunto . "\nPregunta: " . $texto .
			"\nhttp://www.nelosa.net/gueb/paginas/foro/addNew.php?email=" . $usr_tmp . "&asunto=" . $asunto . "&texto=" . $texto2  ;
			
			echo $filon ;
			
			$m = new Mail(); // create the mail
					
			$m->From( "web@nelosa.net" ) ; 
			//$m->To( "miki@nelosa.net" ) ;
			$m->To( "foro@nelosa.net" ) ;
			//$m->To( "e_m_i_k_i_@hotmail.com" ) ;
			$m->Subject( "Pregunta para el foro" ) ;
			$m->Body( $filon ); 
			$m->Send(); // send the mail */
			
			echo "<BR>The end<BR>" ;
			
			//mail ("foro@nelosa.net","Pregunta al foro",$filon);

?>
