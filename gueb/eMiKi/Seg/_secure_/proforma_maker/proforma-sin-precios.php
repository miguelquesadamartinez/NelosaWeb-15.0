<?php 	
session_register('itemsEnCesta'); 
session_register('preciosEnCesta'); 
// Para los calculos
session_register('sub_total');
session_register('total');
session_register('seguro');
session_register('dto');

session_register('portes');

session_register('cajas');
session_register('volumen');
session_register('peso');
 
//Para los parametros que vienen de objetos
session_register('p_nombre');
session_register('p_dto');
session_register('p_pais');
session_register('p_via	');


include("../../../../eMiKi/Funciones_PHP.php"); 

//  J U U U M M M M M !!!!!!!!!!!!!
$p_nombre = $nombre ;
$p_dto = $radiobutton ;
$p_pais = $radiopais ;
$p_via = $radioportes ;

if ($vaciar == "si") 
{
	$itemsEnCesta = NULL ; 	
	$preciosEnCesta = NULL ; 	
	$sub_total = 0; 	
	$total = 0; 	
	$seguro = 0; 
	$dto = 0; 	
	$portes = 0; 	
	$cajas = 0; 	
	$volumen = 0; 	
	$peso = 0;
	p_nombre == "" ;
	p_dto == "" ;
	p_pais == "" ;
	p_via == "" ;
	echo "Vaciando .... <BR>" ;
}

if ($cantidad == "")
{
	//Calcular total
}
else
{
	//Calcular ref
	
	if ($refi){ 
	
		  // Comprobamos cantidad
		  if ( $cantidad > 0 )
		  {
			//DoNothing
		  }
		  else 	  
		  {
			$cantidad = 0 ;
		  }
	   // Inicio  	  
	   if (!isset($itemsEnCesta)){ 
		  
		  $itemsEnCesta[$refi]=$cantidad; 
			
		  }else{ 
		  foreach($itemsEnCesta as $k => $v){ 
  		
			 if ($refi==$k)
			 { 	
				$itemsEnCesta[$k]=$cantidad; 
				$encontrado=1; 
					
			 } 
		  } 
		  if ($encontrado!=1)
		  {
			if($cantidad)$itemsEnCesta[$refi]=$cantidad;
		  }
	   } 
	   // Fin
	}
	// Fin items en cesta
}
	// inicio precios en cesta
if ($modprecio)
{ 
	
		  // Comprobamos cantidad
		  if ( $modprecio > 0 )
		  {
			//DoNothing
		  }
		  else 	  
		  {
			$modprecio = 0 ;
		  }
	   // Inicio  	  
	   $encontrado==0;
	   if (!isset($preciosEnCesta))
	   { 
		  
		  $preciosEnCesta[$refi]=$modprecio; 
			
		}
		else
		{
		  foreach($preciosEnCesta as $k => $v)
		  { 
			 if ($refi==$k)
			 { 	
				$preciosEnCesta[$k]=$modprecio; 
				$encontrado=1; 
				echo " - Done mod";
			 } 
		  } 
		  if ($encontrado!=1)
		  {
			if($modprecio)
			{
				$preciosEnCesta[$refi]=$modprecio;
				echo "Done add";
			}
		  }
	   } 
	   // Fin
}

/*echo "<BR>";
if (isset($itemsEnCesta))
{ 
	foreach($itemsEnCesta as $k => $v)
	{ 
		$cnt=(string)$itemsEnCesta[$k];
		$referencia=(string)$k;
		echo $referencia . " - " . $cnt ."<BR>";
	} 
}
echo "<BR>---------<BR>";
if (isset($preciosEnCesta))
{ 
	foreach($preciosEnCesta as $k => $v)
	{ 
		$cnt=(string)$preciosEnCesta[$k];
		$referencia=(string)$k;
		echo $referencia . " - " . $cnt ."<BR>";
	} 
}
*/
?>
<HTML><HEAD><TITLE>Generador de facturas proforma</TITLE>
<meta name="title" content=""/>
<meta http-equiv="title" content=""/>
<meta name="DC.Title" content=""/>

<meta name="description" content=""/>
<meta http-equiv="description" content=""/>
<meta http-equiv="DC.Description" content=""/>

<META NAME="ROBOTS" content="NOFOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta name="keywords" content=""/>
<meta http-equiv="keywords" content=""/>

<meta name="Revisit" content="20 days"/>

<meta name="distribution" content="global"/>
<meta name="resource-type" content="document"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>

<?php include("../../../eMiKi/headers/Styles/Style_001.htm"); ?>
</HEAD>

<body bgcolor="#FFFFFF">



<div align="center"><img src="../../../../eMiKi/_images/_Comunes/Nelosas/Nelosa_2.gif" width="165" height="64"> 
</div>
<table width="670" border="0" align="center">
  <tr> 
    <td colspan="3"><div align="center"> 
        <p><b><font face="Arial, Helvetica, sans-serif"><b>Generador de Facturas 
          Proforma SIN PRECIOS</b></font></b></p>
      </div></td>
  </tr>
  <tr> 
    <td colspan="3"><div align="center"><img src="../../../../eMiKi/_images/_Comunes/Barras/Barra8.jpg" width="624" height="15"></div></td>
  </tr>
  <tr> 
    <td width="123"><div align="center"><a href="../../../../eMiKi/Seg/varias/calkulata.php" target="_blank">Calculadora</a></div></td>
    <td width="431"><div align="center"> 
        <form name="form1" method="post" action="proforma/load.php">
          <select name="nombre">
            <option></option>
            <?php

	$link=conectarse(); 
	$result=mysql_query("Select distinct nombre From proformas",$link);

	while($row = mysql_fetch_array($result)) 
		{ 			
					$nom=(string)$row["nombre"];
		 			echo "<option>" . $nom ;
					echo "</option> \n";
			}

		?>
          </select>
          <input type="submit" name="Submit2" value="Cargar Formulario">
        </form>
      </div></td>
    <td width="102"><div align="center"></div></td>
  </tr>
</table>
<form action="" method="post" name="Formulario_2" id="Formulario_2" >
  <font size="2"> </font> 
  <table width="648" border="0" align="center">
    <tr> 
      <td width="121"><div align="left"><font size="2"> <a href="../../../../eMiKi/Seg/_secure_/proforma_maker/proforma/save.php?nombre=<?php echo $nombre; ?>">Guardar 
          Formulario</a> </font></div></td>
      <td width="356"><div align="center"><font size="2">Nombre proforma 
          <input name="nombre" type="text" id="nombre2" value="<?php echo $nombre; ?>">
          </font></div></td>
      <td width="2"><div align="center"></div></td>
      <td width="151"><div align="center"><font size="2"><a href="proforma-sin-precios.php?vaciar=si">Vaciar 
          formulario</a></font></div></td>
    </tr>
  </table>
  <div align="center"><font size="2"> </font> </div>
  <table width="641" border="0" align="center">
    <tr> 
      <td width="69"><div align="center"><font size="2"><strong>Articulo</strong></font></div></td>
      <td width="94"><div align="center"><font size="2"><strong>Cantidad</strong></font></div></td>
      <td width="289"><div align="left"><font size="2"><strong>Descripcion</strong></font></div></td>
      <td width="87"><div align="center"><font size="2"><strong>Precio Und</strong></font></div></td>
      <td width="80"><div align="center"><font size="2"><strong>Total</strong></font></div></td>
    </tr>
    <?php 

if (isset($itemsEnCesta))
{ 

$sub_total = 0;
$total = 0;
$seguro = 0;
$dto = 0;
$portes = 0;
$cajas = 0;
$volumen = 0;
$peso = 0;


      foreach($itemsEnCesta as $k => $v)
	  { 
	  	// Cantidad
		$strTmp=(string)$itemsEnCesta[$k];

		// Referencia
		$str=(string)$k;
		if ($strTmp != "0" )
		{	
		  // Mostramos referencia 
		  echo ("<tr><td><div align='center'>" . $str . "</div></td>");
		  // Mostramos cantidad 
		  echo ("<td><div align='center'>" . $strTmp . "</div></td>");
		  
		  $result=mysql_query("Select * From prods where Ref = '" . $str . "'",$link);

		  $row = mysql_fetch_array($result);

		  $des = (string)$row["Des"];
		  
		  echo ("<td><div align='left'> <font size='2'>" . $des . "</font='2'></div></td>");
		  
		  $preu = (string)$row["precio_ibero"];
		  
			//echo ("$preu_$str");
			
  		  foreach($preciosEnCesta as $k => $v){ 
					
			 if ($str==$k)
			 { 	
				$preciomod=$preciosEnCesta[$k]; 
			 } 
		  } 

		  //echo ("<td><div align='center'>");
		  //echo ("<input name='mpreu' type='text' id='preu_' value='" . $preciomod . "' size='8' maxlength='4'>");
		  //echo ("</div></td>");

		  echo ("<td><div align='center'>" . $preciomod . "</div></td>");

		  // Calculo Precio total de producto
		  $prod_total = $preciomod * $strTmp ;
		  
		  $sub_total = $prod_total + $sub_total ;
		  // Mostramos Precio total de producto
		  echo ("<td><div align='center'>" . $prod_total . "</div></td></tr>");
		  
		  $seguro = $sub_total * 1 / 100 ;
		  
		  if ( $p_dto=="a")
		  {
		  		$dto = $sub_total * 10 / 100 ;
		  }
		  elseif ( $p_dto=="b")
		  {
		  		$dto = $sub_total * 5 / 100 ;
		  }
		  elseif ( $p_dto=="c")
		  {
		  		$dto = $sub_total * 5 / 100 ;
		  }
		  elseif ( $p_dto=="d")
		  {
		  		$dto = 0 ;
		  }
		  
		  
		  $peso_db = (string)$row["peso"];
		  $peso = $peso + ( $peso_db * $strTmp ) ;

		  $Und_Box_db = (string)$row["Und_Box"];
		  $cajas = $cajas + ( $strTmp / $Und_Box_db ) ;
		  
  
		  $Und_db = (string)$row["Und"];
		  $unds = $strTmp / $Und_db ;
	    	
			echo "<tr colspan='5'><td colspan='5'><div align='center'><font size='1'>";
    		  	echo $unds . " Cajas de " . $Und_db . " Unidades" ;
		    echo "</font></div><div align='center'></div></td></tr>";
		  
		}		
      }

	  $volumen = 0.12 * $cajas ; 
	  
	  $peso_ton = $peso / 1000 ;  // Passamos el peso a toneladas
}	  		  

$total = $sub_total - $dto + $vportes + $seguro ;

//}

//$cajas = round ($cajas,+1);
//$volumen = round ($volumen,+2);
?>
    <tr> 
      <td><div align="center"> <font size="2">
          <input name="refi" type="text" id="refi" size="8" maxlength="4">
          </font></div></td>
      <td><div align="center"> <font size="2">
          <input name='cantidad' type='text' size='8' maxlength='4'>
          </font></div></td>
      <td> <div align="left"> <font size="2"> </font></div></td>
      <td><div align="center">
          <input name="modprecio" type="text" id="modprecio" size="10" maxlength="10">
        </div></td>
      <td><div align="center"><font size="2">
          <input type="submit" name="Submit" value="Calcular">
          <input name="vaciar" type="hidden" id="vaciar2" value="no">
          </font></div></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="640" border="0" align="center">
    <tr> 
      <td><div align="left"></div></td>
      <td><div align="right"><font size="2"><strong>SUBTOTAL U$</strong></font></div></td>
      <td width="17%"> <div align="right"> <?php echo $sub_total; ?> </div></td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#FFFFCC"><div align="right"><font size="2"> 
          <input type="radio" name="radioportes" value="avion" <?php if ( $radioportes=="avion")echo "checked"; ?>>
          Avion 
          <input type="radio" name="radioportes" value="barco" <?php if ( $radioportes=="barco")echo "checked"; ?>>
          Barco - GASTOS TRANSPORTE 
          <input name="vdestino" type="text" id="vdestino" value="<?php if ( $vportes )echo $vdestino ; ?>" size="15">
          (CPT)</font></div></td>
      <td><div align="right"> 
          <input name="vportes" type="text" id="vportes" value="<?php if ( $vportes )echo $vportes ; ?>" size="15">
          <?php 		  
		  if ($vportes) $portes = $vportes ;	  		  
		  ?>
        </div></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="right"><font size="2">Seguro 1%</font></div></td>
      <td><div align="right"> <?php echo $seguro; ?> </div></td>
    </tr>
    <tr> 
      <td width="60%"><div align="center"> 
          <input type="submit" name="Submit4" value="calcular">
        </div></td>
      <td width="23%"><div align="center"><font size="2"><strong>TOTAL FACTURA 
          U$ </strong></font></div></td>
      <td><div align="right"> <?php echo $total ; ?> </div></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="left"><font size="1">Formas de pago : Ingreso 
          en cuenta o pagar&eacute; </font></div>
        <p align="left"><font size="1">BANCO DE SABADELL:<br>
          C&oacute;digo BIC: BSABESBB<br>
          IBAN: ES36 0081 0149 9000 0101 9809<br>
          PAGO POR TRANSFERENCIA SWIFT EN U$ AMERICANOS</font></p></td>
      <td><div align="right"></div></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="center"> 
          <p><font color="#FF0000" size="2"><strong>DATOS LOGISTICOS</strong> 
            </font></p>
          <p><font size="2"></strong><?php echo $cajas; ?></strong> CAJAS 40X50X60 
            CM <br>
            VOLUMEN <strong><?php echo $volumen; ?></strong> METROS CUBICOS <br>
            PESO<strong> <?php echo $peso; ?> </strong>KILOS</font></p>
        </div></td>
      <td><div align="right"></div></td>
    </tr>
  </table>
  
</form>
<div align="center">
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
  <b></b> <a href="../main_secure.php"><b><font face="Arial, Helvetica, sans-serif"><img src="../../../../eMiKi/_images/_Comunes/_Back.jpg" name="backy" width="67" height="35" border="0" onClick="backyF()"></font></b></a> 
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
</div>
</BODY>
</HTML>
