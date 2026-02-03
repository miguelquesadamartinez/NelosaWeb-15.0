<?php 
include ( "../../eMiKi/headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );
?><!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>El Foro de la Recarga</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset="/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>
<?php 
if ( $usr == "" ){ 
		echo ('<meta http-equiv="refresh" content="0;url=../varias/restricted.php">'); 
	}?>

<style TYPE="text/css">
A:link {color:#0000FF;  text-decoration: none;}
A:hover{color:#0000FF;  text-decoration: none;}
A:visited {color: #0000FF;  text-decoration: none;}
H1{font-family:Arial, Helvetica, sans-serif}
H2{font-family:Arial, Helvetica, sans-serif}
H3{font-family:Arial, Helvetica, sans-serif}
P{font-family:Arial, Helvetica, sans-serif}
BODY{color:"#0000FF"; font-family:Arial, Helvetica, sans-serif}
body,td,th {
	color: #0000FF;
	font-size: 16px;
}
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo12 {font-size: 12px}
.Estilo13 {
	font-size: 18px;
	font-weight: bold;
	color: #FF0000;
}
a:active {
	color: #0000FF;
}
.Estilo4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
</style>
</HEAD>

<body bgcolor="#000099">
<div align="center">
  <table width="650" border="0">
    <tr>
      <td><div align="center"><a href="../../index.php"><img src="../../../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="index.php"><img src="../../../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../instrucciones/index.php"><img src="../../../img/diseno.paginas/botones/ins.gif" width="132" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../varias/comprar.php"><img src="../../../img/diseno.paginas/botones/comprar.gif" width="99" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../varias/soporte.php"><img src="../../../img/diseno.paginas/botones/soporte.gif" width="96" height="29" border="0"></a></div></td>
      <td><div align="center"><a href="../club/index.php"><img src="../../../img/diseno.paginas/botones/club.gif" width="88" height="29" border="0"></a></div></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../img/diseno.paginas/base/arriba-up.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
    <tr>
      <td height="13"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="776" height="130">
          <param name="movie" value="../../../img/animaciones/banner-arriva.swf">
          <param name="quality" value="high">
          <embed src="../../../img/animaciones/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="776" height="130"></embed>
      </object></td>
    </tr>
  </table>
  <table width="765" border="0" bgcolor="#FFFF00">
    <tr>
      <td><table width="99%"  border="0" align="center">
          <tr>
            <td width="15%"><div align="center" class="Estilo11"><strong><a href="../varias/about.php">Quien somos</a></strong></div></td>
            <td width="29%"><div align="center" class="Estilo11"><a href="../stp/index.php">Servicio Tecnico Paralelo </a></div></td>
            <td width="30%"><div align="center" class="Estilo11"><a href="../instrucciones/aa.procedures/index.php">Sistemas Anti Recarga </a></div></td>
            <td width="26%"><div align="center" class="Estilo11"><a href="../Mailing/index.php">Alta / Baja Mailing </a></div></td>
          </tr>
          <tr>
            <td><div align="center" class="Estilo11"><a href="../varias/donde.php">Donde estamos </a></div></td>
            <td><div align="center" class="Estilo11"><a href="../varias/software.php">Software para printables</a></div></td>
            <td><div align="center" class="Estilo11"><a href="../rincon/index.php">Rincon Tecnico </a></div></td>
            <td><div align="center" class="Estilo11"></div>
                <div align="center" class="Estilo11"><a href="../distris/index.php">Acceso Tiendas y Distribuidores </a></div></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="765" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="13"><img src="../../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
    </tr>
  </table>
  <table width="740" height="134" border="0" bgcolor="#FFFFFF">
    <tr>
      <td height="130" bgcolor="#FFFFFF"><table width="100%"  border="0" bgcolor="#FFFFFF">
          <tr>
            <td width="95%" height="124" bgcolor="#FFFFFF"><p align="center">
                <span class="Estilo3 Estilo13"><br>
                El Foro de la Recarga </span>            
              <p align="center">              
              <table width="95%" border="0" align="center" bgcolor="#FFFFCC">
                  <tr>
                    <td width="223" class="Estilo12"><font face="Arial, Helvetica, sans-serif" ><b><font color="#0000FF">Usuario :
         <?php 
/*$link=conectarse(); 
	$result=mysql_query("select * from Datas where mail = '". $usuario ."' AND otro='" . $passwd . "'" ,$link); 
	$row = mysql_fetch_array($result);
	$numi=(string)$row["mail"];
	if ($numi=="")	{	 // No coincide PWD
	}
	else	{
			$result=mysql_query("select * from Clientes where email = '". $usuario ."'" ,$link); 
			$row = mysql_fetch_array($result);
			
			$usr=(string)$row["email"];
			$t1=(string)$row["Nombre"];
	}*/
		// Pijadilla que muestra el email o user
        if ($usr=="")
		{
			echo (" Anonimo");
		}
		else
		{
			 echo " " . $usr ;
		}
		?>
                    </font></b></font></td>
                    <td width="201" class="Estilo12"><font face="Arial, Helvetica, sans-serif" ><b><font color="#0000FF">
                      <?php 
		// Pijadilla que muestra el email o user
        if ($usr=="")
		{
			echo ("<a href='../club/validationpages/registrar.php'>Registrese</a>") ;
		}
		?>
                    </font></b></font></td>
                    <td width="265" class="Estilo12"><div align="center"><font face="Arial, Helvetica, sans-serif" ><b><font color="#0000FF"><a href="<?php
      if ($usr=="")
 	  {
		echo ("nouser.php") ;
	  }
	  else
	  {
	  	echo ("new.php");
	  }

	 ?>?page=new.php">Nueva consulta </a>
                    </font></b></font></div></td>
                  </tr>
              </table>
                <table width="95%" border="0" align="center" bgcolor="#FFFFFF">
                  <tr>
                    <td width="797" class="Estilo12"><?php 

$link=mysql_connect("mysql","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
$link2=mysql_connect("mysql","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link2) ;
$link3=mysql_connect("mysql","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link3) ;
$link4=mysql_connect("mysql","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link4) ;



$result=mysql_query("Select * From foro_index",$link); 

$count = 0 ;
		  
while($row = mysql_fetch_array($result)) 
	{ 
		// Datos de las consultas
		$count = $count + 1 ;
		$text=(string)$row["text"];
		$asunto=(string)$row["asunto"];
		$email=(string)$row["email"];
		$ind=(string)$row["indise"];

$link=mysql_connect("mysql","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
		// Nombre de quien pregunta
		$result2=mysql_query("Select Nombre From Clientes Where email = '" . $email . "'",$link2); 
		$row2 = mysql_fetch_array($result2);
		$nombre=(string)$row["email"];

		//  Respuestas a las consultas
		
			if ($nombre == "" ) $nombre = "Anonimo" ;
		echo ("<table width='740' border='1' align='center' bgcolor='#FFFFFF'>");
	  echo ("<tr align='center' valign='middle'>");
    echo ("<td><div align='center'>");
        echo ("<table width='95%'  border='0'>");
          echo ("<tr>");
            echo ("<td width='75%'><font color='#FF0000'><B>" . $asunto . "</font></B></td>");
            echo ("<td width='25%'>" . $nombre . "</td>");
          echo ("</tr>");
          echo ("<tr>");
            echo ("<td colspan='2'>" . $text . "</td>");
          echo ("</tr>");
        echo ("</table>");
        echo ("</div>");
		echo ("<div align='center'><HR><font color='#FF0000' size='2'>");
		echo ("<a href='responder.php?indise=" . $ind . "'>Responder</a> - ");

$link=mysql_connect("mysql","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;

$result_R=mysql_query("Select * From foro_resp where indise = " . $ind,$link); 

$respis = 0 ;
		  
while($row_R = mysql_fetch_array($result_R)) 
	{ 
		$chivi = "" ;
		$chivi=(string)$row_R["indise"];
		if ($chivi != "" )$respis = $respis + 1 ;
	}
	
		echo ("<a href='ver.php?indise=" . $ind . "'>Ver respuestas( " . $respis . " )</a> - ");
		echo ("<a href='aviso.php?indise=" . $ind . "'>Solicitar aviso de respuesta</a></font></div>");
        //echo ("</td></table><BR>");
		
			// Falta aqui un while, para que se vean todas
		
			$result3=mysql_query("Select * From foro_resp Where indise = " . $ind ,$link3); 
			$row3 = mysql_fetch_array($result3);
			$resp=(string)$row3["resp"];
			$email_resp=(string)$row3["email"];
		
$link=mysql_connect("mysql","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
			// Nombre de quien responde
			$result4=mysql_query("Select Nombre From Clientes Where email = '" . $email_resp . "'",$link4); 
			$row4 = mysql_fetch_array($result4);
			$nombre_resp=(string)$row4["Nombre"];
		
      echo ("</div></td>");
  echo ("</tr>");
  echo ("</table>");

	}
	//echo $count ;
mysql_free_result($result);  
mysql_close($link);
	
	?></td>
                  </tr>
              </table>
            </td>
          </tr>
      </table></td>
    </tr>
  </table>
  <p><span class="Estilo4">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</span></p>
  <p>&nbsp;</p>
</div>
</body>
</html>