<?php 
include ( "../../eMiKi/Headers/vbles_sesion.php" );
include ( "../../eMiKi/Funciones_PHP.php" );
 
?><!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<title>El Foro de la Recarga</title>
<META NAME="ROBOTS" content="FOLLOW,INDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>
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
	color: #0000FF;
	font-size: 16px;
}
.Estilo2 {color: #FFFFFF;
	font-weight: bold;
}
.Estilo3 {color: #0000FF}
</style>
</HEAD>

<body bgcolor="#000099">
<div align="center">
  <table width="765" border="0">
    <tr>
      <td height="334"><div align="center">
        <div align="center">
          <?php 
  include ( "../../eMiKi/Headers/upper.". $idioma . ".php" );
?>
          <table width="740" height="143" border="0" bgcolor="#FFFFFF">
            <tr>
              <td height="139" bgcolor="#FFFFFF"><table width="100%"  border="0" bgcolor="#FFFFFF">
                  <tr>
                    <td width="95%" height="124" bgcolor="#FFFFFF"><p align="right">
                        <?php 
$link=conectarse(); 
//if ($numi=="")
//{
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
	}
//}
?>
                        <a href="../club/index.php"><img src="../../imagenes/comunes/back.jpg" width="67" height="35" border="0"></a>                        
                    <table width="95%" border="0" align="center" bgcolor="#FFFFCC">
                          <tr>
                            <td width="95%" bgcolor="#FFFFFF"><div align='right' class='Estilo3'>
                                
                            </div></td>
                          </tr>
                        </table>
                        <table width="95%" border="0" align="center" bgcolor="#FFFFCC">
                          <tr>
                            <td width="230"><font face="Arial, Helvetica, sans-serif" ><b><font color="#0000FF" size="2">Usuario :
                                      <?php 
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
                            <td width="452"><div align="left"><font face="Arial, Helvetica, sans-serif" ><b><font color="#0000FF" size="2">
                                <?php 
		// Pijadilla que muestra el email o user
        if ($usr=="")
		{
			echo ("<a href='../club/validationpages/registrar.php'>Registrese</a>") ;
		}
		?>
                            </font></b></font></div></td>
                          </tr>
                        </table>
                        <table width="95%" border="0" align="center" bgcolor="#FFFFFF">
                          <tr>
                            <td width="249">&nbsp;</td>
                            <td width="320"><div align="center"><span class="Estilo3">El Foro de la Recarga </span></div></td>
                            <td width="228"><div align="center"></div></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><div align="center"> <a href="<?php
      if ($usr=="")
 	  {
		echo ("nouser.php") ;
	  }
	  else
	  {
	  	echo ("new.php");
	  }

	 ?>?page=new.php">Nueva consulta </a> </div></td>
                          </tr>
                        </table>
                      </td>
                  </tr>
                </table>
                </td>
            </tr>
          </table>
        </div>
      </div></td>
    </tr>
  </table>
  <table width="765" border="0" align="center" bgcolor="#FFFFFF">
    <?php 

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
$link2=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link2) ;
$link3=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link3) ;
$link4=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
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

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
		// Nombre de quien pregunta
		$result2=mysql_query("Select Nombre From Clientes Where email = '" . $email . "'",$link2); 
		$row2 = mysql_fetch_array($result2);
		$nombre=(string)$row2["Nombre"];

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

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
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
        echo ("</td></table><BR>");
		
			// Falta aqui un while, para que se vean todas
		
			$result3=mysql_query("Select * From foro_resp Where indise = " . $ind ,$link3); 
			$row3 = mysql_fetch_array($result3);
			$resp=(string)$row3["resp"];
			$email_resp=(string)$row3["email"];
		
$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
			// Nombre de quien responde
			$result4=mysql_query("Select Nombre From Clientes Where email = '" . $email_resp . "'",$link4); 
			$row4 = mysql_fetch_array($result4);
			$nombre_resp=(string)$row4["Nombre"];
		
      echo ("</div></td>");
  echo ("</tr>");

	}
	//echo $count ;
mysql_free_result($result);  
mysql_close($link);
	
	?>
    <tr align="center" valign="middle">
      <td height="21">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>