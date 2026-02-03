<?php 	include("../../eMiKi/Headers/vbles_sesion.php");
 
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE>Universal Refill Kit  -  Nelosa Accesrios  -  </TITLE>
<meta name="title" content="El foro de la recarga"/>
<meta http-equiv="title" content="El foro de la recarga"/>
<meta name="DC.Title" content="El foro de la recarga"/>

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
.Estilo2 {	color: #FF0000;
	font-weight: bold;
}
.Estilo3 {color: #0000FF}
.Estilo4 {color: #FFFFFF;
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
                  <table width="654" border="0" align="center" bgcolor="#FFFFCC">
                    <tr>
                      <td width="883"><div align="center" class="Estilo1">El foro de la recarga Ink-Jet</div></td>
                    </tr>
                    <tr>
                      <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                      <td><div align="left"><font face="Arial, Helvetica, sans-serif" ><b><font color="#0000FF" size="2">Usuario :
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
                  <form name="form1" method="post" action="add.php">
                    <table width="654" border="0" align="center">
                      <tr align="center" valign="middle">
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td bgcolor="#FFFFFF"><span class="Estilo2">Escriba aqui su consulta al foro </span></td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td width="875" bgcolor="#FFFFFF"><p class="Estilo3">Asunto</p>
                            <p class="Estilo3">
                              <input name="asunto" type="text" id="asunto" size="100">
                            </p>
                            <p class="Estilo3">Explicacion</p>
                            <p> <span class="Estilo3">
                              <textarea name="texto" cols="75" rows="5" id="texto"></textarea>
                            </span></p>
                            <p>
                              <input type="submit" name="Submit" value="Enviar">
                          </p></td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td bgcolor="#FFFFFF"><div align="right"><b><a href="index.php"><img src="../../imagenes/comunes/back.jpg" name="backy" width="67" height="35" border="0"></a></b></div></td>
                      </tr>
                    </table>
                  </form>
                  <p class="Estilo3">&nbsp;</p>
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
