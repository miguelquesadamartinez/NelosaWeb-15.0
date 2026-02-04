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

include("../../../eMiKi/Funciones_PHP.php"); 
$link=conectarse(); 

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



<div align="center">
  <div align="left"> </div>
  <table width="641" border="0" align="center">
    <tr> 
      <td width="198" valign="top"><div align="left"> 
          <p><img src="../../../../eMiKi/_images/_Comunes/Nelosas/NelosaP.jpg" width="172" height="59"><br>
            <font color="#0000FF">Nieves Maetinez Lloret<br>
            C.I.F.: 77 058 410 S<br>
            C/ Velia, 81<br>
            08016 Barcelona - Espa&ntilde;a</font></p>
          <p><font color="#0000FF" size="2">Tel: &nbsp;0034 93 352 2003<br>
            Fax: 0034 93 340 4560<br>
            Movil 0034 696 412 959<br>
            info@nelosa.net<br>
            www.nelosa.net </font></p>
        </div></td>
      <td width="447" align="left" valign="middle"> 
          <?php
	if ( isset ( $empresa ) )
	{
		$result=mysql_query("Select * From p_clientes where empresa = '" . $empresa . "'",$link);
		$row = mysql_fetch_array($result) ;
	
		$nom=(string)$row["empresa"];
			
		echo $nom . "<BR>" ;
		
		$nom=(string)$row["email"];
		if ($nom != "-")
		{
			echo $nom . "<BR>" ;
		}
		$nom=(string)$row["nombre"];
		if ($nom != "-")
		{
			echo $nom . "<BR>"  ;
		}
		$nom=(string)$row["telefono"];
		if ($nom != "-")
		{
			echo $nom . "<BR>"  ;
		}
		$nom=(string)$row["fax"];
		if ($nom != "-")
		{
			echo $nom . "<BR>"  ;
		}
		$nom=(string)$row["doc"];
		if ($nom != "-")
		{
			echo $nom . "<BR>"  ;
		}
		$nom=(string)$row["direccion"];
		if ($nom != "-")
		{
			echo $nom . "<BR>"  ;
		}
		$nom=(string)$row["direccion2"];
		if ($nom != "-")
		{
			echo $nom . "<BR>"  ;
		}
		$nom=(string)$row["poblacion"];
		if ($nom != "-")
		{
			echo $nom . "<BR>"  ;
		}
		$nom=(string)$row["provincia"];
		if ($nom != "-")
		{
			echo $nom . "<BR>"  ;
		}
		$nom=(string)$row["pais"];
		if ($nom != "-")
		{
			echo $nom . "<BR>"  ;
		}
		$nom=(string)$row["cp"];
		if ($nom != "-")
		{
			echo $nom . "<BR>"  ;
		}
	}
	?>
        <div align="left"></div>
        <div align="right"></div></td>
    </tr>
  </table>
</div>
<form action="" method="post" name="Formulario_2" id="Formulario_2" >
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
//$seguro = 0;
//$dto = 0;
//$portes = 0;
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
$total = $sub_total - $dto + $portes + $seguro ;

?>
    <tr> 
      <td><div align="center"> <font size="2"> </font></div></td>
      <td><div align="center"> <font size="2"> </font></div></td>
      <td> <div align="left"> <font size="2"> </font></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
  </table>
  <table width="640" border="0" align="center">
    <tr> 
      <td><div align="left"></div></td>
      <td><div align="right"><font size="2"><strong>SUBTOTAL U$</strong></font></div></td>
      <td width="17%"> <div align="right"> <?php echo $sub_total; ?> </div></td>
    </tr>
     
      <?php if ( $hdto=="a")echo "<tr><td height='34'><div align='left'><p><font size='2'><strong>A:</strong> 
	  Pago anticipado, ingreso en cuenta<br>10% Dto. del subtotal de factura</font></p>
        </div></td><td><p> <input name='radiobutton' type='radio' value='a' checked ><br></p></td>"  ;?>
		
      <?php if ($hdto == "a")echo "<td><div align='right'>" . $dto . "</div></td></tr>" ;?>
	  
    <?php if ( $hdto=="b")echo "<tr><td><div align='left'><font size='2'><strong>B: </strong>Cr&eacute;dito 
          documentario 90 d&iacute;as<br>5% Dto. del subtotal de factura</font></div></td>
      <td><input type='radio' name='radiobutton' value='b' checked></td>" ;?>
      <?php if ($hdto == "b")echo "<td><div align='right'>" . $dto . "</div></td></tr>" ;?>
    <?php if ( $hdto=="c")echo "<tr><td><div align='left'><font size='2'><strong>C:</strong> 
	Pago mediante tarjeta de cr&eacute;dito anticipado<br>
	  5% Dto. ( M&aacute;ximo 3.000 U$ por d&iacute;a y tarjeta )</font></div></td>
      <td><input type='radio' name='radiobutton' value='c' checked ><br></p></td>"  ;?>
      <?php if ($hdto == "c")echo "<td><div align='right'> " . $dto . "</div></td></tr>" ;?>
    <?php if ( $hdto=="d")echo "<tr><td><div align='left'><font size='2'><strong>D:</strong> Pagare 90 d&iacute;as, 
          previa concesi&oacute;n de cr&eacute;dito. Tramitaci&oacute;n cr&eacute;dito; 
          Valor de los tres &uacute;ltimos pedidos dividido entre 3 El resultado 
          ser&aacute; el m&aacute;ximo riesgo autorizado<br></font></div></td>
      <td><input type='radio' name='radiobutton' value='d' checked></td>"; ?>
      <?php if ($hdto == "d")echo "<td><div align='right'> " . $dto . "</div></td></tr>" ;?>
    <tr> 
      <td colspan="2"><div align="right"><font size="2"> 
          <?php if ( $hpais=='losangeles')echo "<input type='radio' name='radiopais' value='losangeles' checked >Los Angeles ";?>
          <?php if ( $hpais=="newyork")echo "<input type='radio' name='radiopais' value='newyork' checked >New York ";?>
          <?php if ( $hpais=="miami")echo "<input type='radio' name='radiopais' value='miami' checked >Miami";?>
          <?php //<strong>( EEUU ) </strong> <br>?>
          <?php if ( $hpais=="sanjose")echo "<input type='radio' name='radiopais' value='sanjose' checked >San Jose";?>
          <?php //<strong> ( Costa Rica )</strong><br>?>
          <?php if ( $hpais=="veracruz")echo "<input type='radio' name='radiopais' value='veracruz' checked >Veracruz";?>
          <?php if ( $hpais=="mexico")echo "<input type='radio' name='radiopais' value='mexico' checked >Mexico D.F.";?>
          <?php //<strong> </strong><strong>( Mexico )</strong><br>?>
          <?php if ( $hpais=="cartagena")echo "<input type='radio' name='radiopais' value='cartagena' checked >Cartagena";?>
          <?php if ( $hpais=="bogota")echo "<input type='radio' name='radiopais' value='bogota' checked >Bogot&aacute; ";?>
          <?php //<strong> ( Colombia )</strong><br>?>
          <?php if ( $hpais=="chile")echo "<input type='radio' name='radiopais' value='chile' checked >San Antonio / Valparaiso";?>
          <?php //<strong> ( Chile )</strong><br>?>
          <?php if ( $hpais=="asuncion")echo "<input type='radio' name='radiopais' value='asuncion' checked >Asunci&oacute;n ";?>
          <?php //<strong>( Paraguay ) </strong><br>?>
          <?php if ( $hpais=="callao")echo "<input type='radio' name='radiopais' value='callao' checked >Callao ";?>
          <?php //<strong>( Per&uacute; )</strong><br>?>
          <?php if ( $hpais=="guayra")echo "<input type='radio' name='radiopais' value='montevideo' checked >Montevideo";?>
          <?php //<strong>( Uruguay )</strong><br>?>
          <?php if ( $hpais=="guayra")echo "<input type='radio' name='radiopais' value='guayra' checked >La Guayra ";?>
          <?php //<strong>( Venezuela )</strong><br>?>
          <?php if ( $hpais=="guayaquil")echo "<input type='radio' name='radiopais' value='guayaquil' checked >Guayaquil";?>
          <?php if ( $hpais=="quito")echo "<input type='radio' name='radiopais' value='quito' checked >Quito";?>
          <?php if ( $hpais=="cuenca")echo "<input type='radio' name='radiopais' value='cuenca' checked >Cuenca ";?>
          <?php //<strong>( Ecuador )</strong><br>?>
          </font></div></td>
      <td><div align="right"></div></td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#FFFFCC"><div align="right"><font size="2"> 
          <?php if ( $hvia=="avion")echo "<input type='radio' name='radioportes' value='avion' checked >Avion ";?>
          <?php if ( $hvia=="barco")echo "<input type='radio' name='radioportes' value='barco' checked >Barco ";?>
          - GASTOS TRANSPORTE (CPT)</font></div></td>
      <td><div align="right"> <?php echo $portes; ?> </div></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="right"><font size="2">Seguro 1%</font></div></td>
      <td><div align="right"> <?php echo $seguro; ?> </div></td>
    </tr>
    <tr> 
      <td width="60%">&nbsp;</td>
      <td width="23%"><div align="center"><font size="2"><strong>TOTAL FACTURA 
          U$ </strong></font></div></td>
      <td><div align="right"> <?php echo $total; ?> </div></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="left">
          <div align="left"><font size="2">Formas de pago : Ingreso en cuenta 
            o pagar&eacute; </font></div>
          <p align="left"><font size="2">BANCO DE SABADELL:<br>
            </font><font size="2">C&oacute;digo BIC: BSABESBB<br>
            IBAN: ES36 0081 0149 9000 0101 9809<br>
            PAGO POR TRANSFERENCIA SWIFT EN U$ AMERICANOS</font></p>
        </div>
        </td>
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
    <td colspan="2"> <p align="right"><a href="../../index<?php echo makeHomeLink($idioma) ;?>.php"><b><font face="Arial, Helvetica, sans-serif"><img src="../../../../eMiKi/_images/_Comunes/_Back.jpg" name="backy" width="67" height="35" border="0" onClick="backyF()"></font></b></a></p>
      <p align="center"><a href="../../index<?php echo makeHomeLink($idioma) ;?>.php"> Home</a> | <a href="mailto:info@nelosa.net">@</a> 
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
