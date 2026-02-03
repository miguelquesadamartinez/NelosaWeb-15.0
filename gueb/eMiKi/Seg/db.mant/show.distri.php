<?php 
include ( "../../../eMiKi/headers/vbles_sesion.php" );
?>
<HTML>
<HEAD>

<TITLE>Validacion y creacion de usuarios</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
A:link {color:"#0000FF";  text-decoration: none;}
A:hover{color:"#00FF00";  text-decoration: none;}
A:visited {color: "#0000FF";  text-decoration: none;}
.Estilo4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.Estilo5 {font-family: Arial, Helvetica, sans-serif}
.Estilo6 {color: #FFFFFF; font-weight: bold; font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo7 {font-size: 12px}
.Estilo8 {
	font-size: 16px;
	font-weight: bold;
}
.Estilo12 {	color: #FF0000;
	font-weight: bold;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	color: #0000FF;
}
.Estilo13 {color: #0000FF}
.Estilo14 {color: #0000FF; font-weight: bold; }
-->
</style>
</HEAD>
<body bgcolor="#000099">
	<div align="center">
	  <p>&nbsp;</p>
	  <table width="745" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="13" bgcolor="#FFFFFF"><div align="center">
              <table width="100%"  border="0">
                <tr>
                  <td height="95" valign="top"><div align="center" class="Estilo7">
                      <p><font color="#FF0000" size="5"><strong><font face="Arial, Helvetica, sans-serif">
					  
					  <?php 	

$link=mysql_connect("localhost","nelosa_nelosa","mqm1804") ;
mysql_select_db("nelosa_nelosa",$link) ;
if ( $user <> "" )  // Si le pasamos param.
{
	$result=mysql_query("select * from Datas_Tiendas where mail = '". $user ."'" ,$link); 
	$row = mysql_fetch_array($result);
	$numi=(string)$row["mail"];
}
if ($numi==""){	$algo="1";} //No existe el usuario
else
{
	$result=null; // ! ! !
	
	$result=mysql_query("select * from Datas_Tiendas where mail = '". $user ."'" ,$link); 
	$row = mysql_fetch_array($result);
		
	$numi=(string)$row["mail"];
	$miki=(string)$row["otro"];
			
			$result=mysql_query("select * from Clientes_Tiendas where email = '". $user ."'" ,$link); 
			$row = mysql_fetch_array($result);
			
			$usr=$user;
			$vs_email=(string)$row["email"];
			$vs_nom=(string)$row["Nombre"];
			$vs_ape1=(string)$row["Apellido1"];
			$vs_ape2=(string)$row["Apellido2"];
			$vs_cp=(string)$row["Cp"];
			$vs_prov=(string)$row["Provincia"];
			$vs_pais=(string)$row["Pais"];
			$vs_pob=(string)$row["Poblacion"];
			$vs_tel=(string)$row["Telefono"];
			$vs_doc=(string)$row["Doc"];
			$vs_empresa=(string)$row["Empresa"];
			$vs_adr=(string)$row["Direccion"];
			$vs_pais=(string)$row["Pais"];
}

	if ( $algo == "1" ){ 
		echo ('No exsiste usuario'); 
		$usr = "" ;
		$fontaneda = "" ;
	}
	else 
	{ 
		echo ('Datos usuario'); 
	}

	mysql_free_result($result);  
	mysql_close($link);
?>

					  
					  </font></strong></font></p>
                      <form action="modifUser.php" name="Formulario_3" id="Formulario_3" >
                        <div align="center">
                          <table border="0">
                            <tr>
                              <td width="115" bgcolor="#FFFFCC">
                                <div align="right" class="Estilo12 Estilo13"><font size="2" face="Arial, Helvetica, sans-serif"><b>e-mail</b> / Usuario: </font></div></td>
                              <td width="214" bgcolor="#FFFFCC"><span class="Estilo13"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_email ) ; ?>
                                <input name="hd_email" type="hidden" id="hd_email" value="<?php echo $vs_email ; ?>">
                              </font></b></span></td>
                              <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="95">
                                <div align="right" class="Estilo13"><strong><font face="Arial, Helvetica, sans-serif"><font size="2">Clave :</font> </font></strong></div></td>
                              <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="246">
                                <div align="left" class="Estilo13"><strong><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $miki ) ; ?>
                                <font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif">
                                <input name="hd_pwd" type="hidden" id="hd_ape122" value="<?php echo $miki;?>">
                                          </font></b></font></font></b></font></strong></div></td>
                            </tr>
                            <tr>
                              <td width="115" bgcolor="#FFFFCC">
                                <div align="right" class="Estilo14"><font size="2" face="Arial, Helvetica, sans-serif">Nombre : </font></div></td>
                              <td width="214" bgcolor="#FFFFCC"><span class="Estilo13"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_nom ) ; ?>
                                <input name="hd_nom" type="hidden" id="hd_nom" value="<?php echo $vs_nom;?>">
                              </font></b></span></td>
                              <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                                <div align="right" class="Estilo13"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">Apellido 1 : </font></b></font></div></td>
                              <td width="246" bgcolor="#FFFFCC"><span class="Estilo13"><b>                              <font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $vs_ape1 ) ; ?>
                                <input name="hd_ape1" type="hidden" id="hd_ape1" value="<?php echo $vs_ape1;?>">
                              </font></b></span></td>
                            </tr>
                            <tr>
                              <td width="115" bgcolor="#FFFFCC" height="29">
                                <div align="right" class="Estilo13"><font size="2" face="Arial, Helvetica, sans-serif"><b>Telefono :</b></font></div></td>
                              <td width="214" height="29" bgcolor="#FFFFCC"><span class="Estilo13"><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_tel ) ; ?>
                                <input name="hd_tel" type="hidden" id="hd_tel" value="<?php echo $vs_tel ; ?>">
                              </font></b> </font></font></span></td>
                              <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                                <div align="right" class="Estilo13"><font size="2" face="Arial, Helvetica, sans-serif"><b> Apelido 2 : </b></font></div></td>
                              <td width="246" height="29" bgcolor="#FFFFCC"><span class="Estilo13"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $vs_ape2 ) ; ?> <b><font face="Arial, Helvetica, sans-serif">
                              <input name="vs_ape2" type="hidden" id="vs_ape2" value="<?php echo $vs_ape2;?>">
                              </font></b></font></b> </font></b></font></font></b></font></b> </font></b></font></span></td>
                            </tr>
                            <tr>
                              <td width="115" bgcolor="#FFFFCC" height="29">
                                <div align="right" class="Estilo13"><font size="2" face="Arial, Helvetica, sans-serif"><b>C.I.F. / N.I.F. : </b></font></div></td>
                              <td width="214" height="29" bgcolor="#FFFFCC"><span class="Estilo13"><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_doc ) ; ?>
                                <input name="hd_doc" type="hidden" id="hd_email4" value="<?php echo $vs_doc ; ?>">
                              </font></b> </font></font></span></td>
                              <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                                <div align="right" class="Estilo13"><font face="Arial, Helvetica, sans-serif" size="2"><b>Empresa : </b></font></div></td>
                              <td width="246" height="29" bgcolor="#FFFFCC"><span class="Estilo13"><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>  <font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_empresa ) ; ?>
                                <input name="hd_empresa" type="hidden" id="hd_email6" value="<?php echo $vs_empresa ; ?>">
                              </font></b> </font></font></span></td>
                            </tr>
                            <tr>
                              <td rowspan="2" bgcolor="#FFFFCC" width="115">
                                <div align="right" class="Estilo13"><font size="2" face="Arial, Helvetica, sans-serif"><b>Direcci&oacute;n :</b></font></div></td>
                              <td width="214" rowspan="2" bgcolor="#FFFFCC"><span class="Estilo13">                               <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_adr ) ; ?>
                                <input name="hd_adr" type="hidden" id="hd_email5" value="<?php echo $vs_adr ; ?>">
                              </font></b> </font></span></td>
                              <td bgcolor="#FFFFCC" width="95">
                                <div align="right" class="Estilo13"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b>C. P. : </b></font></b></font></div></td>
                              <td width="246" bgcolor="#FFFFCC"><span class="Estilo13"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><b><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $vs_cp ) ; ?>
                                <input name="hd_cp" type="hidden" id="hd_cp" value="<?php echo $vs_cp;?>">
                              </font></b></font></font></b></font></b></font></b> </font></b> </font></span></td>
                            </tr>
                            <tr>
                              <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                                <div align="right" class="Estilo13"> <font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b>Poblacion</b></font> : </b></font></div></td>
                              <td width="246" height="32" bgcolor="#FFFFCC"><span class="Estilo13">  <font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><?php echo htmlentities ( $vs_pob ) ; ?>
                                <input name="hd_pob" type="hidden" id="hd_email7" value="<?php echo $vs_pob ; ?>">
                              </font></b></font></span></td>
                            </tr>
                            <tr>
                              <td width="115" bgcolor="#FFFFCC">
                                <div align="right" class="Estilo13"><font size="2" face="Arial, Helvetica, sans-serif"><b>Pais : </b></font></div></td>
                              <td width="214" bgcolor="#FFFFCC"><span class="Estilo13">                                <font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font face="Arial, Helvetica, sans-serif"><?php echo  htmlentities ( $vs_pais ) ; ?>
                                <input name="hd_pais" type="hidden" id="hd_pais" value="<?php echo $vs_pais;?>">
                              </font></b> </font>
                              </span>
                              <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                                <div align="right" class="Estilo13"><font size="2" face="Arial, Helvetica, sans-serif"><b><font size="2" face="Arial, Helvetica, sans-serif"><b>Provincia</b></font> : </b></font></div>
                              <td width="246" bgcolor="#FFFFCC"><span class="Estilo13"><font size="2"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>                              <font face="Arial, Helvetica, sans-serif"><?php echo htmlentities (  $vs_prov ) ; ?>
                                <input name="hd_prov" type="hidden" id="hd_prov" value="<?php echo $vs_prov;?>">
                              </font></b></font></font>                           
                              </span></tr>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFCC"><div align="center" class="Estilo13"><font face="Arial, Helvetica, sans-serif">
                                <?PHP
							  if ($algo=="0"){
							  	echo "<input type='submit' name='iniciar2' value='Modificar usuario'>";
							  }
            				  ?>
                              </font> </div></td>
                            </tr>
                          </table>
                        </div>
                      </form>
                      <p class="Estilo8"><a href="../ControlMenu.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></p>
                      <p>&nbsp;                        </p>
                  </div></td>
                </tr>
              </table>
          </div></td>
        </tr>
      </table>
</div>
  </body>

