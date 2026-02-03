<?php 	
session_register('itemsEnCesta'); 
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


include("../../../eMiKi/Funciones_PHP.php"); 

//  J U U U M M M M M !!!!!!!!!!!!!
$p_nombre = $nombre ;
$p_dto = $radiobutton ;
$p_pais = $radiopais ;
$p_via = $radioportes ;

if ($vaciar == "si") 
{
	$itemsEnCesta = NULL ; 	
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
		//$cantidad = 20 ;
	  }
	  else 	  
	  {
	  	$cantidad = 0 ;
	  }
	  
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
}

}

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

<?php include("../../../eMiKi/Headers/Styles/Style_001.htm"); ?>
</HEAD>

<body bgcolor="#FFFFFF">



<div align="center"><img src="../../../../eMiKi/_images/_Comunes/Nelosas/Nelosa_2.gif" width="165" height="64"> 
</div>
<table width="670" border="0" align="center">
  <tr> 
    <td colspan="3"><div align="center"> 
        <p><b><font face="Arial, Helvetica, sans-serif"><b>Generador de Facturas 
          Proforma</b></font></b></p>
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
<form action="print.php" method="post" name="form2" target="_blank">
  <table width="670" border="0" align="center">
    <tr> 
      <td><p align="right">Nombre 
          <input name="vv_nombre" type="text" size="70">
          <br>
          RUC 
          <input name="vv_ruc" type="text" size="70">
          <br>
          Direccion 
          <input name="vv_direc" type="text" size="70">
          <br>
          <input name="vv_direc2" type="text" size="70">
          <br>
          Poblacion 
          <input name="vv_pob" type="text" size="70">
          <br>
          Pais 
          <input name="vv_pais" type="text" size="70">
          <br>
        </p>
        </td>
      <td width="84"><div align="center"><img src="../../../../eMiKi/_images/zVarias/images14.jpg" width="56" height="56" border="0"><br>
          <font size="1">Version para imprimir</font><br>
          <input type="submit" name="Submit3" value="Click">
        </div></td>
    </tr>
  </table>
  <input name="hnombre" type="hidden" id="hnombre" <?php echo "value='" . $p_nombre . "'" ?> >
  <input name="hdto" type="hidden" id="hdto" <?php echo  "value='" . $p_dto . "'" ?> >
  <input name="hpais" type="hidden" id="hpais" <?php echo "value='" . $p_pais . "'" ?> >
  <input name="hvia" type="hidden" id="hvia" <?php echo  "value='" . $p_via . "'" ?> >
</form>
<?php /* onSubmit="return validarDatos()"  */?>
<form action="" method="post" name="Formulario_2" id="Formulario_2" >
  <font size="2"> </font> 
  <table width="648" border="0" align="center">
    <tr> 
      <td width="219"><div align="left"><font size="2"> <a href="../../../../eMiKi/Seg/_secure_/proforma_maker/proforma/save.php?nombre=<?php echo $nombre; ?>">Guardar 
          Formulario</a> </font></div></td>
      <td width="273"><div align="center"><font size="2">
          <input name="nombre" type="text" id="nombre2" value="<?php echo $nombre; ?>">
          </font></div></td>
      <td width="3"><div align="center"></div></td>
      <td width="155"><div align="center"><font size="2"><a href="proforma.php?vaciar=si">Vaciar 
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
	  	$strTmp=(string)$itemsEnCesta[$k];
		$str=(string)$k;
		if ($strTmp != "0" )
		{	
		  echo ("<tr><td><div align='center'>" . $str . "</div></td>");
		  
		  echo ("<td><div align='center'>" . $strTmp . "</div></td>");
		  
		  $result=mysql_query("Select * From prods where Ref = '" . $str . "'",$link);

		  $row = mysql_fetch_array($result);

		  $des = (string)$row["Des"];
		  
		  echo ("<td><div align='left'> <font size='2'>" . $des . "</font='2'></div></td>");
		  
		  $preu = (string)$row["precio_ibero"];
		  
		  echo ("<td><div align='center'>" . $preu . "</div></td>");
		  
		  $prod_total = $preu * $strTmp ;
		  
		  $sub_total = $prod_total + $sub_total ;
		  
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
	  /*
	  BAF - Msnipulacion Puerto = 6,5 USD
	  Flete - Maritimo es lo que cambia
	  Gastos FOB - alculo igual en todos
	  */
function calk ($vol, $flete)
{
	$res = $vol * 6.5 ; // El BAF que siempres es el mismo
	$res = $res + ($vol * $flete);
	return $res ;
}
function calk_peso ($peso, $flete)
{
	$res = $vol * 6.5 ; // El BAF que siempres es el mismo
	$res = $res + ($peso * $flete);
	return $res ;
}

$parte_1 = 0 ;
$parte_2 = 0 ;
$portes = 0 ;

if ( $volumen > 1 ) // Si es mas de un metro cubico 
{

	  if ($radioportes == "barco")
	  {
	  		// calculo segun funcion
	  		if ( $radiopais=="losangeles") $parte_1 = calk( $volumen , 70 ) ; 
			if ( $radiopais=="newyork") $parte_1 = calk( $volumen , 36 ) ; 
			if ( $radiopais=="miami") $parte_1 = calk( $volumen , 56 ) ; 
			if ( $radiopais=="sanjose") $parte_1 = calk( $volumen , 100 ) ; 
			if ( $radiopais=="veracruz") $parte_1 = calk( $volumen , 80 ) ; 
			if ( $radiopais=="mexico") $parte_1 = calk( $volumen , 135 ) ; 
			if ( $radiopais=="cartagena") $parte_1 = calk( $volumen , 85 ) ; 
			if ( $radiopais=="bogota") $parte_1 = calk( $volumen , 170 ) ; 
			if ( $radiopais=="chile") $parte_1 = calk( $volumen , 85 ) ; 
			if ( $radiopais=="asuncion") $parte_1 = calk( $volumen , 95 ) ; 
			if ( $radiopais=="callao") $parte_1 = calk( $volumen , 85 ) ; 
			if ( $radiopais=="montevideo") $parte_1 = calk( $volumen , 40 ) ; 
			if ( $radiopais=="guayra") $parte_1 = calk( $volumen , 85 ) ; 
	  		if ( $radiopais=="guayaquil" ) $parte_1 = calk( $volumen , 85 ) ; 
	  		if ( $radiopais=="quito" ) $parte_1 = calk( $volumen , 130 ) ;
	  		if ($radiopais == "cuenca" ) $parte_1 = calk( $volumen , 155 ) ;
	  		
			$parte_2 = 18 * $volumen ; // Manipulacion
			$parte_2 = $parte_2 + 40;  // Impresos
			$parte_2 = $parte_2 +( 3 * $peso_ton); // T-3
			$parte_2 = $parte_2 + 40; // Despacho Aduanas
			$parte_2 = $parte_2 + 21; // Comunicaciones

			if ($peso <= 20 ) $recogida = 20 ; // Recogida
			elseif ($peso > 20 && $peso < 51 ) $recogida = 25 ;
			elseif ($peso > 51 && $peso < 100 ) $recogida = 35 ;
			elseif ($peso > 100 && $peso < 200 ) $recogida = 43 ;
			elseif ($peso > 200 && $peso < 300 ) $recogida = 50 ;
			elseif ($peso > 300 && $peso < 500 ) $recogida = 61 ;
			elseif ($peso > 500 && $peso < 750 ) $recogida = 65 ;
			elseif ($peso > 750 && $peso < 1000 ) $recogida = 85 ;
			elseif ($peso > 100 && $peso < 1500 ) $recogida = 110 ;
			elseif ($peso > 1500) $recogida = 150 ;

			$parte_2 = $parte_2 + $recogida;

			if ($parte_2 < 139) $parte_2 = 139; // Gasto FOB minimo

			$portes = $parte_1 + $parte_2 ;
		}


		// Aqui faltan todos los fletes
		// Suponiendo que el baf y others sean el mismo
		// Todo va segun el peso


		if ($radioportes == "avion")
	    {
			//Uno de estos por pais
	  		if ( $radiopais=="losangeles"); 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="newyork") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="miami") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="sanjose") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="veracruz") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="mexico") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="cartagena") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="bogota") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="chile") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="asuncion") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="callao") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="montevideo") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			if ( $radiopais=="guayra") ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
	  		if ( $radiopais=="guayaquil" ) ; 
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
	  		if ( $radiopais=="quito" ) ;
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
	  		if ($radiopais == "cuenca" ) ;
			{
				if ( $peso < 44 ) $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 44 && $peso > 100 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 100 && $peso > 300 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 300 && $peso > 500 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 500 && $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
				elseif ( $peso > 1000 )  $parte_1 = calk_peso ($peso,0);
	  		}	
			// end 	
			$parte_2 = 18 * $volumen ; // Manipulacion
			$parte_2 = $parte_2 + 40;  // Impresos
			$parte_2 = $parte_2 +( 3 * $peso_ton); // T-3
			$parte_2 = $parte_2 + 40; // Despacho Aduanas
			$parte_2 = $parte_2 + 21; // Comunicaciones

			if ($peso <= 20 ) $recogida = 20 ; // Recogida
			elseif ($peso > 20 && $peso < 51 ) $recogida = 25 ;
			elseif ($peso > 51 && $peso < 100 ) $recogida = 35 ;
			elseif ($peso > 100 && $peso < 200 ) $recogida = 43 ;
			elseif ($peso > 200 && $peso < 300 ) $recogida = 50 ;
			elseif ($peso > 300 && $peso < 500 ) $recogida = 61 ;
			elseif ($peso > 500 && $peso < 750 ) $recogida = 65 ;
			elseif ($peso > 750 && $peso < 1000 ) $recogida = 85 ;
			elseif ($peso > 100 && $peso < 1500 ) $recogida = 110 ;
			elseif ($peso > 1500) $recogida = 150 ;

			// Tasas de seguridad, fuel y G-4
			$tasa = $peso * 0.32 ; // Utilizamos el peso para calcolos

			$parte_2 = $parte_2 + $recogida + $tasa; //esta es la diferencia con lo de arriba

			// Me falta saber el minimo
			//if ($parte_2 < 139) $parte_2 = 139; // Gasto FOB minimo

			$portes = $parte_1 + $parte_2 ;

		}

} 
else // si no llega al metro cubico
{
	  if ($radioportes == "barco")
	  {
	  		//minimoes establecidos
	  		if ( $radiopais == "losangeles") $portes = 235 ; 
			if ( $radiopais == "newyork") $portes = 180 ; 
			if ( $radiopais == "miami") $portes = 200 ; 
			if ( $radiopais == "sanjose") $portes = 310 ; 
			if ( $radiopais == "veracruz") $portes = 245 ; 
			if ( $radiopais == "mexico") $portes = 300 ; 
			if ( $radiopais == "cartagena") $portes = 250 ; 
			if ( $radiopais == "bogota") $portes = 350 ; 
			if ( $radiopais == "chile") $portes = 250 ; 
			if ( $radiopais == "asuncion" ) $portes = 260 ; 
			if ( $radiopais == "callao" ) $portes = 250 ; 
			if ( $radiopais == "montevideo" ) $portes = 185 ; 
			if ( $radiopais == "guayra" ) $portes = 250 ; 
			if ( $radiopais == "guayaquil" ) $portes = 250 ; 
	  		if ( $radiopais == "quito" ) $portes = 295 ; 
	  		if ( $radiopais == "cuenca" ) $portes = 320 ; 
	  		
			//$parte_1 = 139; // Gasto FOB minimo
			//$parte_2 = 139; // Gasto FOB minimo
	}
		
		if ($radioportes == "avion")
	    {
	  		//minimoes establecidos
			
			// O J O
			// Solo he duplicado los de arriba
			
	  		if ( $radiopais == "losangeles") $portes = 470 ; 
			if ( $radiopais == "newyork") $portes = 340 ; 
			if ( $radiopais == "miami") $portes = 400 ; 
			if ( $radiopais == "sanjose") $portes = 620 ; 
			if ( $radiopais == "veracruz") $portes = 490 ; 
			if ( $radiopais == "mexico") $portes = 600 ; 
			if ( $radiopais == "cartagena") $portes = 500 ; 
			if ( $radiopais == "bogota") $portes = 700 ; 
			if ( $radiopais == "chile") $portes = 500 ; 
			if ( $radiopais == "asuncion" ) $portes = 520 ; 
			if ( $radiopais == "callao" ) $portes = 500 ; 
			if ( $radiopais == "montevideo" ) $portes = 370 ; 
			if ( $radiopais == "guayra" ) $portes = 500 ; 
			if ( $radiopais == "guayaquil" ) $portes = 500 ; 
	  		if ( $radiopais == "quito" ) $portes = 590 ; 
	  		if ( $radiopais == "cuenca" ) $portes = 640 ; 

	    }

}	
		
$portes = $portes - ( $portes *30 / 100 ) ; // Descuento en los portes del 30 %

 $total = $sub_total - $dto + $portes + $seguro ;

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
      <td> <div align="left"> <font size="2"> 
          <input type="submit" name="Submit" value="Calcular">
          <input name="vaciar" type="hidden" id="vaciar" value="no">
          </font></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
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
      <td><div align="left"><font size="1">Escoja forma de pago</font></div></td>
      <td><div align="right"><font size="2"><strong>SUBTOTAL U$</strong></font></div></td>
      <td width="17%"> <div align="right"> <?php echo $sub_total; ?> </div></td>
    </tr>
    <tr> 
      <td height="34"><div align="left"> 
          <p><font size="2"><strong>A:</strong> Pago anticipado, ingreso en cuenta<br>
            </font><font size="2">10% Dto. del subtotal de factura</font></p>
        </div></td>
      <td><p> 
          <label> </label>
          <input name="radiobutton" type="radio" value="a" <?php if ( $p_dto=="a")echo "checked"; ?>>
          <br>
        </p></td>
      <td><div align="right">
          <?php if ($p_dto == "a")echo $dto; ?>
        </div></td>
    </tr>
    <tr> 
      <td><div align="left"><font size="2"><strong>B: </strong>Cr&eacute;dito 
          documentario 90 d&iacute;as<br>
          5% Dto. del subtotal de factura</font></div></td>
      <td><input type="radio" name="radiobutton" value="b" <?php if ( $p_dto=="b")echo "checked"; ?>></td>
      <td><div align="right"> 
          <?php if ($p_dto == "b")echo $dto; ?>
        </div></td>
    </tr>
    <tr> 
      <td><div align="left"><font size="2"><strong>C:</strong> Pago mediante tarjeta 
          de cr&eacute;dito anticipado<br>
          5% Dto. ( M&aacute;ximo 3.000 U$ por d&iacute;a y tarjeta )</font></div></td>
      <td><input type="radio" name="radiobutton" value="c" <?php if ( $p_dto=="c")echo "checked"; ?>></td>
      <td><div align="right"> 
          <?php if ($p_dto == "c")echo $dto; ?>
        </div></td>
    </tr>
    <tr> 
      <td><div align="left"><font size="2"><strong>D:</strong> Pagare 90 d&iacute;as, 
          previa concesi&oacute;n de cr&eacute;dito. Tramitaci&oacute;n cr&eacute;dito; 
          Valor de los tres &uacute;ltimos pedidos dividido entre 3 El resultado 
          ser&aacute; el m&aacute;ximo riesgo autorizado<br>
          </font></div></td>
      <td><input type="radio" name="radiobutton" value="d" <?php if ( $p_dto=="d")echo "checked"; ?>></td>
      <td><div align="right"> 
          <?php if ($p_dto == "d")echo $dto; ?>
        </div></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="right"><font size="2"> 
          <input type="radio" name="radiopais" value="losangeles" <?php if ( $radiopais=="losangeles")echo "checked"; ?>>
          Los Angeles 
          <input type="radio" name="radiopais" value="newyork" <?php if ( $radiopais=="newyork")echo "checked"; ?>>
          New York 
          <input type="radio" name="radiopais" value="miami" <?php if ( $radiopais=="miami")echo "checked"; ?>>
          Miami<strong> </strong><strong>( EEUU )<br>
          </strong> 
          <input type="radio" name="radiopais" value="sanjose" <?php if ( $radiopais=="sanjose")echo "checked"; ?>>
          San Jose<strong> ( Costa Rica )</strong><br>
          <input type="radio" name="radiopais" value="veracruz" <?php if ( $radiopais=="veracruz")echo "checked"; ?>>
          Veracruz - 
          <input type="radio" name="radiopais" value="mexico" <?php if ( $radiopais=="mexico")echo "checked"; ?>>
          Mexico D.F.<strong> </strong><strong>( Mexico )</strong><br>
          <input type="radio" name="radiopais" value="cartagena" <?php if ( $radiopais=="cartagena")echo "checked"; ?>>
          Cartagena - 
          <input type="radio" name="radiopais" value="bogota" <?php if ( $radiopais=="bogota")echo "checked"; ?>>
          Bogot&aacute; <strong> ( Colombia )<br>
          </strong> 
          <input type="radio" name="radiopais" value="chile" <?php if ( $radiopais=="chile")echo "checked"; ?>>
          San Antonio / Valparaiso <strong> ( Chile )</strong><br>
          <input type="radio" name="radiopais" value="asuncion" <?php if ( $radiopais=="asuncion")echo "checked"; ?>>
          Asunci&oacute;n <strong>( Paraguay )<br>
          </strong> 
          <input type="radio" name="radiopais" value="callao" <?php if ( $radiopais=="callao")echo "checked"; ?>>
          Callao <strong>( Per&uacute; )</strong><br>
          <input type="radio" name="radiopais" value="montevideo" <?php if ( $radiopais=="guayra")echo "checked"; ?>>
          Montevideo<strong>( Uruguay )</strong><br>
          <input type="radio" name="radiopais" value="guayra" <?php if ( $radiopais=="guayra")echo "checked"; ?>>
          La Guayra <strong>( Venezuela )</strong><br>
          <input type="radio" name="radiopais" value="guayaquil" <?php if ( $radiopais=="guayaquil")echo "checked"; ?>>
          Guayaquil -- 
          <input type="radio" name="radiopais" value="quito" <?php if ( $radiopais=="quito")echo "checked"; ?>>
          Quito -- 
          <input type="radio" name="radiopais" value="cuenca" <?php if ( $radiopais=="cuenca")echo "checked"; ?>>
          Cuenca <strong>( Ecuador )</strong><br>
          </font></div></td>
      <td><div align="right"></div></td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#FFFFCC"><div align="right"><font size="2"> 
          <input type="radio" name="radioportes" value="avion" <?php if ( $radioportes=="avion")echo "checked"; ?>>
          Avion 
          <input type="radio" name="radioportes" value="barco" <?php if ( $radioportes=="barco")echo "checked"; ?>>
          Barco - GASTOS TRANSPORTE (CPT)</font></div></td>
      <td><div align="right"> <?php echo $portes; ?> </div></td>
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
      <td><div align="right"> <?php echo $total; ?> </div></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="left"><font size="2">Formas de pago : Ingreso 
          en cuenta o pagar&eacute; </font></div>
        <p align="left"><font size="2">BANCO DE SABADELL: oficina 149 C&oacute;digo 
          SWIFT BSAB ES EE <br>
          BANCO IBAN: ES36 0081 0149 9000 0101 9809<br>
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
  <div align="center"> </div>
</form>
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
      <p align="center"><a href="../../../../eMiKi/index.php"> Home</a> | <a href="mailto:info@nelosa.net">@</a> 
        | <a href="http://www.recargas-y-consumibles.net">eShop</a> </p>
      <p align="center"><font face="Arial, Helvetica, sans-serif" size="1">Copyright 
        &copy; 2002 Nelosa. Todas las marcas son popiedad de los respectivos due&ntilde;os.</font></p></td>
  </tr>
</table>
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

</BODY>
</HTML>
