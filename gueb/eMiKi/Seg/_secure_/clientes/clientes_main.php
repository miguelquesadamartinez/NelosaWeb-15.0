<?php 	
session_register('doing'); 

include("../../../eMiKi/Funciones_PHP.php"); 
$link=conectarse(); 
$link2=conectarse(); 

if ($hidden == 'yes')$doing = "";

if ($tempresa != "")$tempresaB = $tempresa ;
else $tempresaB = "-" ;
if ($temail != "")$temailB = $temail ;
else $temailB = "-" ;
if ($tnombre != "")$tnombreB = $tnombre ;
else $tnombreB = "-" ;
if ($ttel != "")$ttelB = $ttel ;
else $ttelB = "-" ;
if ($tfax != "")$tfaxB = $tfax ;
else $tfaxB = "-" ;
if ($tdoc != "")$tdocB = $tdoc ;
else $tdocB = "-" ;
if ($tdireccion != "")$tdireccionB = $tdireccion ;
else $tdireccionB = "-" ;
if ($tdireccion2 != "")$tdireccion2B = $tdireccion2 ;
else $tdireccion2B = "-" ;
if ($tpob != "")$tpobB = $tpob ;
else $tpobB = "-" ;
if ($tprov != "")$tprovB = $tprov ;
else $tprovB = "-" ;
if ($tpais != "")$tpaisB = $tpais ;
else $tpaisB = "-" ;
if ($tcp != "")$tcpB = $tcp ;
else $tcpB = "-" ;

if ($doing == "nueva")
{
//echo "Creando cliente ....." ;
$result=mysql_query("Select max(ind) From p_clientes",$link);

$row = mysql_fetch_array($result);

$TmpNum=(int)$row["max(ind)"];
$next = $TmpNum + 1 ;
$tmpS=(string)$next ;

mysql_query("Insert Into p_clientes (ind,empresa,email,nombre,telefono,fax,doc,direccion,direccion2,poblacion,provincia,pais,cp) VALUES(" . $tmpS . ",'" . $tempresaB ."','" . $temailB ."','" . $tnombreB ."','" . $ttelB ."','" . $tfaxB ."','" . $tdocB ."','" . $tdireccionB ."','" . $tdireccion2B ."','" . $tpobB ."','" . $tprovB ."','" . $tpaisB ."','" . $tcpB . "')",$link);

$select = $tempresa ;
}
elseif ($doing == "mod")
{
//echo "Modificando cliente ....." ;
mysql_query("UPDATE p_clientes SET empresa='" . $tempresaB . "',email='" . $temailB . "',nombre='" . $tnombreB . "',telefono='" . $ttelB . "',fax='" . $tfaxB . "',
doc='" . $tdocB . "',direccion='" . $tdireccionB . "',direccion2='" . $tdireccion2B . "',poblacion='" . $tpobB . "',provincia='" . $tprovB . "',
pais='" . $tpaisB . "',cp='" . $tcpB . "' Where empresa='" . $tempresaB . "'",$link);		

$select = $tempresa ;
}



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
  <table width="642" border="0" align="center">
    <tr> 
      <td width="624"> <p align="center"><img src="../../../../eMiKi/_images/_Comunes/Nelosas/NelosaP.jpg" width="172" height="59"></p>
        <p align="center"><strong><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif">Zona 
          Dealer - Mantenimiento de Clientes</font></strong></p>
        <hr></td>
    </tr>
    <tr> 
      <td> <form name="form1" method="post" action="clientes_main.php">
          <div align="center"> 
            <select name="select">
              <option>Seleccione nombre de empresa . . . </option>
              <?php

	$result=mysql_query("Select empresa From p_clientes",$link);

	while($row = mysql_fetch_array($result)) 
		{ 			
					$nom=(string)$row["empresa"];
		 			echo "<option>" . $nom ;
					echo "</option> \n";
			}

		?>
            </select>
            <input type="submit" name="Submit2" value="Cargar Datos">
            <input name="hidden" type="hidden" id="hidden" value="yes">
          </div>
        </form></td>
    </tr>
    <tr>
      <td><hr></td>
    </tr>
  </table>
  <form name="form2" method="post" action="clientes_manip.php">
    <table width="642" border="0" align="center">
      <tr> 
        <td><strong><font size="1"> </font></strong></td>
        <td><div align="right"><strong><font size="2"><a href="clientes_manip.php?todo=nueva">Nueva 
            empresa </a></font></strong></div></td>
      </tr>
      <tr> 
        <td colspan="2"><hr> </td>
      </tr>
      <tr> 
        <td colspan="2"> 
          <?php
	if ( isset ( $select ) )
	{
		$result=mysql_query("Select * From p_clientes where empresa = '" . $select . "'",$link);
		$row = mysql_fetch_array($result) ;
	
		$nom=(string)$row["empresa"];
		if ($nom != "-")
		{	
			echo "<strong>Empresa : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='hempresa' value='" . $nom . "'> \n";
		}
		$nom=(string)$row["email"];
		if ($nom != "-")
		{
			echo "<strong>email : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='hemail' value='" . $nom . "'> \n";
		}
		$nom=(string)$row["nombre"];
		if ($nom != "-")
		{
			echo "<strong>Nombre : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='hnombre' value='" . $nom . "'> \n";
		}
		$nom=(string)$row["telefono"];
		if ($nom != "-")
		{
			echo "<strong>Tel : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='htel' value='" . $nom . "'> \n";
		}
		$nom=(string)$row["fax"];
		if ($nom != "-")
		{
			echo "<strong>Fax : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='hfax' value='" . $nom . "'> \n";
		}
		$nom=(string)$row["doc"];
		if ($nom != "-")
		{
			echo "<strong>Doc : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='hdoc' value='" . $nom . "'> \n";
		}
		$nom=(string)$row["direccion"];
		if ($nom != "-")
		{
			echo "<strong>Direccion : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='hdireccion' value='" . $nom . "'> \n";
		}
		$nom=(string)$row["direccion2"];
		if ($nom != "-")
		{
			echo "<strong>Empresa : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='hdireccion2' value='" . $nom . "'> \n";
		}
		$nom=(string)$row["poblacion"];
		if ($nom != "-")
		{
			echo "<strong>Poblacion : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='hpob' value='" . $nom . "'> \n";
		}
		$nom=(string)$row["provincia"];
		if ($nom != "-")
		{
			echo "<strong>Provincia : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='hprov' value='" . $nom . "'> \n";
		}
		$nom=(string)$row["pais"];
		if ($nom != "-")
		{
			echo "<strong>Pais : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='hpais' value='" . $nom . "'> \n";
		}
		$nom=(string)$row["cp"];
		if ($nom != "-")
		{
			echo "<strong>Codigo Postal : </strong>" . $nom ;
			echo "</BR><input type='hidden' name='hcp' value='" . $nom . "'> \n";
		}
	}
	?>
        </td>
      </tr>
      <tr> 
        <td colspan="2"><div align="center"><strong><font size="1"> 
            <input type="submit" name="Submit" value="Modificar datos empresa">
            <input name="todo" type="hidden" id="todo" value="mod">
            </font></strong></div></td>
      </tr>
      <tr> 
        <td colspan="2"><hr></td>
      </tr>
    </table>
  </form>
  <form name="form3" method="post" action="save.php">
    <table width="642" border="0">
      <tr> 
        <td> <div align="center"><strong><font color="#FF0000">Contactos con el 
            cliente</font></strong></div></td>
      </tr>
      <tr> 
        <td><div align="center">
            <?php 
		if ( isset ( $select ) )
		{
			$result=mysql_query("Select * From p_clientes where empresa = '" . $select . "'",$link);
			$row = mysql_fetch_array($result) ;
			$bar=(string)$row["ind"];// Esto es para obtener el index para la selec de abajo
			
			$result2=mysql_query("Select * From p_data where ind = " . $bar ,$link2);
			
			//echo "selec - " . $select . "<BR>";
			//echo "bar - " . $bar . "<BR>";
			
			echo "<table width='640' border='1' align='left'>";
				
			while($row2 = mysql_fetch_array($result2)) 
			{ 			
				$testo=(string)$row2["texto"];
				$fecha=(string)$row2["date"];
					
					//echo "testo - " . $testo . "<BR>";				
					//echo "fecha - " . $data . "<BR>";				
			      
				  echo "<tr><td width='75'><font size='1'>" . $fecha . "</font></td>";
			      echo "<td><font size='1'>" . $testo . "</font></td></tr>";
			}
			echo "</table>" ;
		}
		?>
          </div></td>
      </tr>
      <tr>
        <td> <div align="center">
            <hr>
            <textarea name="textarea" cols="75"></textarea>
            <br>
            <input type="submit" name="Submit3" value="     Grabar Nuevo Contacto     ">
            <input name="indise" type="hidden" id="indise" value="<?php echo $bar;?>">
            <input name="empre" type="hidden" id="empre" value="<?php echo $select;?>">
          </div></td>
      </tr>
    </table>
  </form>
</div>
<table width="641" border="0" align="center">
  <tr> 
    <td width="635"><div align="center"></div></td>
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
    <td colspan="2"> <p align="right"><a href="../main_secure.php"><b><font face="Arial, Helvetica, sans-serif"><img src="../../../../eMiKi/_images/_Comunes/_Back.jpg" name="backy" width="67" height="35" border="0" onClick="backyF()"></font></b></a></p>
      <p align="center"><a href="../../../index<?php echo makeHomeLink($idioma) ;?>.php"> Home</a> | <a href="mailto:info@nelosa.net">@</a> 
        | <a href="http://www.recargas-y-consumibles.net">eShop</a> </p>
      <p align="center"><font face="Arial, Helvetica, sans-serif" size="1">Copyright 
        &copy; 2002 Nelosa. Todas las marcas son popiedad de los respectivos due&ntilde;os.</font></p></td>
  </tr>
</table>
<p> 
  <?php include("../../../eMiKi/Codes/Funciones_JavaScript.miki");   
mysql_close ($link_2) ; 
mysql_free_result($result);  
mysql_close($link);?>
</p>
<p>&nbsp; </p>
</BODY>
</HTML>
