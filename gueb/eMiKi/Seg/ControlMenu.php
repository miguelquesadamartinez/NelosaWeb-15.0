<?php 
include ( "../../eMiKi/headers/vbles_sesion.php" );
$tipo = "inkjet" ;
if ( $jost == "" ) $jost = "nelosa.net" ;
if ($usr == "")
{
	$var = $_COOKIE["nelosa"];
	if ($var <> "") { $usr = $var;  $distri='' ;}
	$var = $_COOKIE["nelosadistri"];
	if ($var <> "") { $usr = $var; $distri='si' ; }
}

?>
<HTML>
<HEAD>
<TITLE>Menu control de mi gueb</TITLE>
<?php 
if ( ( $usr <> "emiki@nelosa.net" ) AND ( $usr <> "miki@nelosa.net" ) AND ( $usr <> "info@nelosa.net" ) ){ 
		//echo ('<meta http-equiv="refresh" content="0;url=../../paginas/varias/restricted.php">'); 
		//echo ("User: SIN ACCESO : " . $usr . "<BR>"); 
}
else
{
		//echo ("User: ACCESO : " . $usr . "<BR>"); 
}
?>

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
	color: #0000FF;
	font-size: 16px;
}
.Estilo2 {color: #0000FF}
</style>
</HEAD>

<BODY bgcolor="#FFFFFF">
<table width="95%" border="0" align="center">
  <tr> 
    <td><div align="center"><strong><font color="#FF0000" face="Arial, Helvetica, sans-serif">Menu 
        de control<br>
        <br>
        </font></strong></div></td>
  </tr>
</table>
<table width="95%" border="0" align="center">
  <tr> 
    <td width="25%"> <p align="center"><a href="../Clientes/clientes.php"><strong>Clientes</strong></a></p>
      <p align="center"><strong><font face="Arial, Helvetica, sans-serif"><a href="http://www.nelosa.net/gueb/paginas/distris/validationpages/emiki/index.php">@ 
        alta distribuidor</a></font></strong></p>
      <p align="center"><strong><font face="Arial, Helvetica, sans-serif"><a href="../distri/distris.php">Listar 
        Distribuidores</a> </font></strong></p>
      <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong><a href="http://www.recargas-y-consumibles.net/Control/control.php"><font color="#0000FF" face="Arial, Helvetica, sans-serif">Pagina 
        control eShop</font></a></strong></font></strong></p>
      <p align="center"><span class="Estilo2"><a href="traductor/traductor.php"><strong>Traductor</strong></a></span></p>
      <p align="center"><span class="Estilo2"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><a href="IPControl/Main.php">IP 
        Control</a></font></strong></span></p></td>
    <td width="25%"><div align="center"><strong><a href="http://www.recargas-y-consumibles.net/_Control/control.php"></a></strong> 
      </div>
      <form name="form1" method="post" action="http://www.nelosa.net/gueb/eMiKi/Seg/db.mant/del.user.php">
        <p align="center"><strong>Delete User </strong></p>
        <p align="center"><strong> 
          <input name="usr" type="text" id="usr">
          </strong></p>
      </form>
      <form name="form1" method="post" action="http://www.nelosa.net/gueb/eMiKi/Seg/db.mant/del.user.distri.php">
        <p align="center"><strong>Delete Distribuidor</strong></p>
        <p align="center"><strong> 
          <input name="distri" type="text" id="emiliousr22">
          </strong></p>
      </form>
      <form name="form1" method="post" action="db.mant/show.distri.php">
        <p align="center"><strong>Find Distri </strong></p>
        <p align="center"><strong> 
          <input name="user" type="text" id="user">
          </strong></p>
      </form>
      <form name="form1" method="post" action="db.mant/show.php">
        <p align="center"><strong>Find User </strong></p>
        <p align="center"><strong> 
          <input name="user" type="text" id="user">
          </strong></p>
      </form>
      
    </td>
    <td width="25%"> <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong><a href="prodsdb/prods-update.php"><font face="Arial, Helvetica, sans-serif">Prods 
        DB Update </font></a></strong></font><font face="Arial, Helvetica, sans-serif"></font></strong></font></strong></p>
      <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong><font face="Arial, Helvetica, sans-serif"><a href="../printer-db-mant/Main.php">Mantenimiento 
        DB&acute;s impresoras</a></font></strong></font></p>
      <p align="center"><strong><font face="Arial, Helvetica, sans-serif"><a href="Brand-Ins.php">Brand 
        Ins</a></font></strong></p>
      <p align="center"><font color="#0000FF" face="Arial, Helvetica, sans-serif"><a href="../emailCtrl/main2.php"><strong>emails</strong></a></font></p>
      <p align="center"><strong><font color="#0000FF" face="Arial, Helvetica, sans-serif"><strong><a href="email-search/index.php"><strong>email 
        search</strong></a></strong></font></strong></p>
      <p align="center"><a href="ins.mant/index.php"><strong>Ins Mant </strong></a></p>
      <p align="center"><span class="Estilo2"><a href="../ret.dbs/index.php"><strong>Ret 
        DB&acute;s</strong></a></span></p>
      <p align="center"><a href="Utils/check.db.php"><strong>Check DB </strong></a></p>
      <p align="center"><a href="../mysql.backup/index.php"><strong>MySql BackUp</strong></a> 
      </p></td>
  </tr>
  <tr> 
    <td colspan="3"><p align="center">&nbsp;</p></td>
  </tr>
  <tr> 
    <td colspan="3"><div align="center"></div>
      <div align="center"></div></td>
  </tr>
  <tr> 
    <td width="25%"><div align="center"></div>
      <div align="center"><strong><a href="http://www.nelosa.net/rehost/emiki.php">Control 
        Rehost</a></strong></div></td>
    <td width="25%">&nbsp;</td>
    <td width="25%"><div align="center"><strong><font color="#FF0000"><a href="http://www.nelosa.net/agenda/emiki.php">Agenda</a></font></strong></div></td>
  </tr>
  <tr> 
    <td colspan="3"><div align="center"><strong></strong></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p align="center"><a href="../../index.php"><img src="../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
</BODY>
</HTML>
