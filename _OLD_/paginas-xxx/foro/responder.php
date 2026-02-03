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
.Estilo5 {
	color: #FF0000;
	font-weight: bold;
}
.Estilo7 {color: #0000FF}
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
                  <p class="Estilo7">El Foro de la Recarga </p>
                  <form name="form1" method="post" action="responder-2.php">
                    <table width="654" border="0" align="center" bgcolor="#FFFFCC">
                      <tr>
                        <td width="883"><div align="center" class="Estilo1">Responder a una consulta </div></td>
                      </tr>
                    </table>
                    <?php 
include("../../eMiKi/Funciones_PHP.php");
$link=conectarse();  

$result=mysql_query("Select * From foro_index where indise = " . $indise,$link); 
$row = mysql_fetch_array($result);
		$text=(string)$row["text"];
		$asunto=(string)$row["asunto"];
		$email=(string)$row["email"];
		$ind=(string)$row["indise"];
	
?>
                    <table width="654" border="0" align="center">
                      <tr align="center" valign="middle">
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td bgcolor="#FFFFFF"><p><span class="Estilo5"><?php echo $asunto ; ?></span></p></td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td width="875" bgcolor="#FFFFFF" class="Estilo7"><?php echo $text ; ?></td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td bgcolor="#FFFFFF" class="Estilo7"><br>
        Respuesta<br>
        <input name="hidden" type="hidden" id="hidden" value="<?php echo $indise ?>">
        <textarea name="resp" cols="75" rows="6" id="resp"></textarea></td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td bgcolor="#FFFFFF" class="Estilo7">&nbsp;</td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td bgcolor="#FFFFFF" class="Estilo7"><input type="submit" name="Submit" value="Enviar"></td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td bgcolor="#FFFFFF" class="Estilo7">&nbsp;</td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td bgcolor="#FFFFFF" class="Estilo7"><a href="index.php"><img src="../../imagenes/comunes/back.jpg" width="67" height="35" border="0"></a></td>
                      </tr>
                    </table>
                  </form>
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
