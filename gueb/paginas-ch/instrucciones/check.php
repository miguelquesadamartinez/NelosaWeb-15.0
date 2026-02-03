<?php 
include ( "../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );
$idioma = "fra" ;
?>
<HTML><HEAD>
<TITLE>Aide en ligne</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

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
	font-weight: bold;
	color: #FFFFFF;
}
.Estilo1 {color: #0000FF}
.Estilo4 {color: #FFFFFF;
	font-weight: bold;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>
<body bgcolor="#000099">
<div align="center">
   <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="765" height="13">  
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
      <td height="0" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
        <table width="97%"  border="0">
            <tr>
              <td height="80"><P>
                  <div align="center"><form name="form1" method="post" action="check2.php">
                    <p class="Estilo1">
					
					  <input name='page' type='hidden' value='<?php echo($page);?>'>
					  <input name='brand' type='hidden' id="brand" value='<?php echo($brand);?>'> 
					  <input name='brand' type='hidden' id="page" value='<?php echo($page);?>'> 
                    </p>
                    <p class="Estilo1"><?php echo getext($idioma,"txt 020"); //Introduzca el codigo de barras del producto Nelosa ?></p>
                    <p>
                      <input name="ean" type="text" id="ean">
                    </p>
                      <p>
                        <input type="submit" name="Submit" value="<?php echo getext($idioma,'txt 021'); // Enviar?>"> 
                    </p>
                      <p>&nbsp;                          </p>
                  </form>
                  </div>
                  <p></P></td>
            </tr>
          </table>
      </div></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</div>
<div align="center"></div>
