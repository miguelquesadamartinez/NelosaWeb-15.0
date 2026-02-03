<?php 
include ( "../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );

?>
<HTML><HEAD>
<TITLE>Validacion y creacion de usuarios</TITLE>

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
    <?php 
  include ( "../../eMiKi/Headers/upper.". $idioma . ".php" );
?>
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
