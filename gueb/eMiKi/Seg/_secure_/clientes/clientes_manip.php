<?php 	
session_register('doing'); 

include("../../../eMiKi/Funciones_PHP.php"); 
$link=conectarse(); 

$doing = $todo ;

?>
<HTML><HEAD><TITLE>Control de clientes Nelosa</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,INDEX"/>

<?php include("../../../eMiKi/headers/Styles/Style_001.htm");
// Para el cambio de idioma en modo dise�o
if (isset($cambiar)) $idioma=$cambiar  ;
 ?>
</HEAD>

<body bgcolor="#FFFFFF">

<div align="center">
  <div align="left"> </div>
  <table width="641" border="0" align="center">
    <tr> 
      <td width="631"> <p align="center"><img src="../../../../eMiKi/_images/_Comunes/Nelosas/NelosaP.jpg" width="172" height="59"></p>
        <p align="center"><strong><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif">Zona 
          Dealer - Mantenimiento de Clientes</font></strong></p>
        <hr></td>
    </tr>
    <tr> 
      <td> </td>
    </tr>
  </table>
  <form name="form1" method="post" action="clientes_main.php">
    <table width="641" border="0" align="center">
      <tr> 
        <td width="147"><p align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Empresa 
            :<br>
            </strong></font></p></td>
        <td width="484"> 
          <?php 
		  if ($doing == "mod")
			{
			  echo $hempresa ;
			  echo "<input name='tempresa' type='hidden' id='tempresa' value='" . $hempresa . "'></td>";
			}
		  if ($doing == "nueva")
			{
				echo "<input name='tempresa' type='text' id='tempresa' size='80' value='" . $hempresa . "'>";
			}
			 ?>
      </tr>
      <tr> 
        <td><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>email:</strong></font></div></td>
        <td> <input name="temail" type="text" id="temail2" size="80" value="<?php if (isset($hemail))echo $hemail ; ?>"></td>
      </tr>
      <tr> 
        <td><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Nombre 
            Contacto: </strong></font></div></td>
        <td> <input name="tnombre" type="text" size="80" value="<?php if (isset($hnombre))echo $hnombre ; ?>"></td>
      </tr>
      <tr> 
        <td><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Tel 
            :</strong></font></div></td>
        <td> <input name="ttel" type="text" size="80" value="<?php if (isset($htel))echo $htel ; ?>"></td>
      </tr>
      <tr> 
        <td><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Fax 
            :</strong></font></div></td>
        <td> <input name="tfax" type="text" size="80" value="<?php if (isset($hfax))echo $hfax ; ?>"></td>
      </tr>
      <tr> 
        <td><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Doc: 
            </strong></font></div></td>
        <td> <input name="tdoc" type="text" size="80" value="<?php if (isset($hdoc))echo $hdoc ; ?>"></td>
      </tr>
      <tr> 
        <td><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Direccion 
            :</strong></font></div></td>
        <td> <input name="tdireccion" type="text" size="80" value="<?php if (isset($hdireccion))echo $hdireccion ; ?>"></td>
      </tr>
      <tr> 
        <td><div align="right"><font color="#0000FF"><font face="Arial, Helvetica, sans-serif"></font></font></div></td>
        <td> <input name="tdireccion2" type="text" size="80" value="<?php if (isset($hdireccion2))echo $hdireccion2 ; ?>"></td>
      </tr>
      <tr> 
        <td><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Poblacion 
            :</strong></font></div></td>
        <td> <input name="tpob" type="text" size="80" value="<?php if (isset($hpob))echo $hpob ; ?>"></td>
      </tr>
      <tr> 
        <td><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Provincia 
            :</strong></font></div></td>
        <td> <input name="tprov" type="text" size="80" value="<?php if (isset($hprov))echo $hprov ; ?>"></td>
      </tr>
      <tr> 
        <td><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Pais 
            :</strong></font></div></td>
        <td> <input name="tpais" type="text" size="80" value="<?php if (isset($hpais))echo $hpais ; ?>"></td>
      </tr>
      <tr> 
        <td><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong>Codigo 
            Postal :</strong></font></div></td>
        <td> <input name="tcp" type="text" size="80" value="<?php if (isset($hcp))echo $hcp ; ?>"></td>
      </tr>
      <tr> 
        <td colspan="2"><div align="center"> 
            <input type="submit" name="Submit2" value="<?php if ($doing == "nueva" ){echo "Crear Cliente";} elseif ($doing == "mod" ){echo "Modificar Cliente";} ?>">
          </div></td>
      </tr>
    </table>
  </form>
  
</div>
<table width="641" border="0" align="center">
  <tr> 
    <td width="635"><div align="center">
        <hr>
      </div></td>
  </tr>
  <tr> 
    <td><div align="center"><img src="../../../../eMiKi/_images/_Comunes/Barras/Barra6.jpg" width="623" height="15"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<b></b> 
<table width="600" border="0" align="center">
  <tr> 
    <td colspan="2"> <p align="right"><a href="clientes_main.php"><b><font face="Arial, Helvetica, sans-serif"><img src="../../../../eMiKi/_images/_Comunes/_Back.jpg" name="backy" width="67" height="35" border="0" onClick="backyF()"></font></b></a></p>
      <p align="center"><a href="../../../index<?php echo makeHomeLink($idioma) ;?>.php"> Home</a> | <a href="mailto:info@nelosa.net">@</a> 
        | <a href="http://www.recargas-y-consumibles.net">eShop</a> </p>
      <p align="center"><font face="Arial, Helvetica, sans-serif" size="1">Copyright 
        &copy; 2002 Nelosa. Todas las marcas son popiedad de los respectivos due&ntilde;os.</font></p></td>
  </tr>
</table>
<p> 
  <?php include("../../../eMiKi/Codes/Funciones_JavaScript.miki");   
  mysql_free_result($result);  
mysql_close($link);?>
  <script language='JavaScript' type='text/javascript'>

		function validarDatos()
		{
		
				var chivi=0;
			
				if (Formulario_2.refi.value=="")chivi=1;
				if (Formulario_2.refi.value < 3121 )chivi=3;
				if (Formulario_2.cantidad.value=="")chivi=2;
				if (chivi==1)
				{
					alert ("Seleccione referencia !!");
					return (false); 
				}			
				else if (chivi==2)
				{
					alert ("Seleccione cantidad !!");
					return (false); 
				}			
				else if (chivi==3)
				{
					alert ("La referencia parece no ser correcta !!");
					return (false); 
				}			
				else
				{
						return (true);
				}			

		}

	</script>
</p>
</BODY>
</HTML>
