<?php
include("../mailPages/eMiKi/Headers/vbles_sesion.php");

include("../../../../eMiKi/Funciones_PHP.php");

$brand = $prnD ;
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//ES'>
<HTML>
<HEAD>
<TITLE></TITLE>
<meta name="title" content=""/>
<meta http-equiv="title" content=""/>
<meta name="DC.Title" content=""/>

<meta name="description" content="">
<meta http-equiv="description" content="">
<meta http-equiv="DC.Description" content="">

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
<meta http-equiv="Content-Language" content="es-es"/>

<meta name="keywords" content=""/>
<meta http-equiv="keywords" content=""/>

<meta name="Revisit" content="20 days"/>

<meta name="distribution" content="global"/>
<meta name="resource-type" content="document"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<meta name="Publisher" content="Nelosa, http://www.nelosa.net"/>

</HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body bgcolor="#000099">
<table width="600" border="0" align="center"><tr><td><img src="../../../../_images/_Comunes/upper.jpg" width="378" height="90"></td>
<td><div align="right"><a href="http://www.nelosa.net"><img src="../../../../_images/_Comunes/Nelosas/NelosaP.jpg" width="172" height="59" border="0"></a></div></td>
</tr><tr><td colspan="2"><p align="center">&nbsp;</p></td></tr><tr>
<td colspan="2"><div align="center"><img src="../../../../_images/_Comunes/Logos/logo_<?php echo $brand; ?>.jpg" width="127" height="60"></div></td>
</tr><tr><td colspan="2">&nbsp;</td></tr></table>
<table width="600" border="1" align="center">
<tr><td>
<form name="form1" method="get" action="ReturnIns.php">
        <div align="center"> 
          <table width="100%" border="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
          <table width="100%" border="0">
<?php 
//$link=conectarse(); 
//$result=mysql_query("Select * From PRN_" . $brand . " Order By Printer",$link);   
//$cnt=0;
//while($row = mysql_fetch_array($result)) 
//	{ 
//		if ( $cnt == 0 ) echo "<tr>" ;
//		$prn=(string)$row["Printer"];	
//		echo "<input type='radio' name='RadioGroup1' value='".$prn."'>".$prn;
//		if ( $cnt == 0 ) 
//			{
//			echo "</tr>" ;
//			}
//		cnt = cnt + 1 ; 
//		if ( $cnt == 3 ) $cnt = 0 ;
//	}
$link=conectarse(); 
$result=mysql_query("Select * From PRN_" . $brand . " Order By Printer",$link);   
while($row = mysql_fetch_array($result)) 
	{ 
		$prn=(string)$row["Printer"];	
		echo "<option>".$prn;
	}
?>            
          </table>
          <p><font face="Arial, Helvetica, sans-serif"><strong>1&ordm; </strong>Seleccione 
            el modelo de su impresora <?php echo $brand; ?><br>
            
            </font>


            <font face="Arial, Helvetica, sans-serif"> </font></p>
<p><font face="Arial, Helvetica, sans-serif"><strong>2&ordm;</strong> Direccion de correo electronico
          donde se enviaran las instrucciones<br>
            <input name="text" type="text" id="text" value="<?php 
	  if ($usr<>"Anonimo")echo $usr ;
	   ?>">
          </font></p>
      <p><font face="Arial, Helvetica, sans-serif">            
        <input type="submit" name="Submit" value="Solicitar">
      </font> </p>
    </div>
    </form>
      <form name="form2" method="post" action="">
      <div align="center"><strong><a href="SendMail.php"><font face="Arial, Helvetica, sans-serif">Pinche
              aqui si no aparece su impresora</font></a></strong>
      </div>
      </form>
    </td></tr></table><table width="600" border="0" align="center"><tr><td colspan="2"> 
      <p align="center">&nbsp;</p>
      <p align="center"><font color="#FF0000" face="Arial, Helvetica, sans-serif"><strong><a href="../MorePages/Consejos_<?php echo "$brand"; ?>.php">Consejos 
        para la recarga en impresoras <?php echo "$brand"; ?>&reg;</a></strong></font></p>
      <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><a href="../../../../index.php">Home</a> 
        | <a href="mailto:info@nelosa.net">@</a> | <a href="http://www.recargas-y-consumibles.net">eShop</a> 
        </font></p>
      <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif" size="1">Copyright 
        &copy; 2002 Nelosa. Todas las marcas son popiedad de los respectivos due&ntilde;os.</font></p>
      <p align="center">&nbsp;</p>
      </td>
  </tr></table><p align="center"><a href="http://counter28.bravenet.com/index.php?id=348716&usernum=2372887884&cpv=1" 
target="_top">
  <script language="JavaScript1.2" src="http://www.altavista.com/r?entr"></script>
</a></p>

