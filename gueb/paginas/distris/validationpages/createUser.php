<?php 
include ( "../../../eMiKi/headers/vbles_sesion.php" );
?>
<HTML><HEAD>
<TITLE>Validacion y creacion de usuarios</TITLE>

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
	font-weight: bold;
	color: #0000FF;
}
.Estilo1 {
	color: #0000FF;
	font-weight: bold;
}
.Estilo11 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.Estilo6 {font-size: 12px}
.Estilo12 {
	font-size: 24px;
	color: #FF0000;
}
.Estilo15 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo20 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #0000FF; }
.Estilo21 {color: #0000FF}
.Estilo8 {font-size: 16px;
	font-weight: bold;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>
<body bgcolor="#000099">
	<div align="center">
	  <table width="650" border="0">
        <tr>
          <td><div align="center"><a href="../../../index.php"><img src="../../../../img/diseno.paginas/botones/home.gif" width="89" height="29" border="0"></a></div></td>
          <td><div align="center"><a href="../../productos/index.php"><img src="../../../../img/diseno.paginas/botones/prods.gif" width="119" height="29" border="0"></a></div></td>
          <td><div align="center"><a href="../../instrucciones/index.php"><img src="../../../../img/diseno.paginas/botones/ins.gif" width="132" height="29" border="0"></a></div></td>
          <td><div align="center"><a href="../../varias/comprar.php"><img src="../../../../img/diseno.paginas/botones/comprar.gif" width="99" height="29" border="0"></a></div></td>
          <td><div align="center"><a href="../../varias/soporte.php"><img src="../../../../img/diseno.paginas/botones/soporte.gif" width="96" height="29" border="0"></a></div></td>
          <td><div align="center"><a href="../index.php"><img src="../../../../img/diseno.paginas/botones/club.gif" width="88" height="29" border="0"></a></div></td>
        </tr>
      </table>
	  <table width="765" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="13"><img src="../../../../img/diseno.paginas/base/arriba-up.png" width="765" height="16"></td>
        </tr>
      </table>
	  <table width="765" border="0" cellpadding="0" cellspacing="0" bgcolor="#FF0000">
        <tr>
          <td height="13"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="776" height="130">
              <param name="movie" value="../../../../img/animaciones/banner-arriva.swf">
              <param name="quality" value="high">
              <embed src="../../../../img/animaciones/banner-arriva.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="776" height="130"></embed>
          </object></td>
        </tr>
      </table>
	  <table width="765" border="0" bgcolor="#FFFF00">
        <tr>
          <td><table width="99%"  border="0" align="center">
              <tr>
                <td width="15%"><div align="center" class="Estilo11"><a href="../../varias/about.php">Quien somos</a></div></td>
                <td width="29%"><div align="center" class="Estilo11"><a href="../../stp/index.php">Servicio Tecnico Paralelo </a></div></td>
                <td width="30%"><div align="center" class="Estilo11"><a href="../../instrucciones/aa.procedures/index.php">Sistemas Anti Recarga </a></div></td>
                <td width="26%"><div align="center" class="Estilo11"><a href="../../Mailing/index.php">Alta / Baja Mailing </a></div></td>
              </tr>
              <tr>
                <td><div align="center" class="Estilo11"><a href="../../varias/donde.php">Donde estamos </a></div></td>
                <td><div align="center" class="Estilo11"><a href="../../varias/software.php">Software para printables</a></div></td>
                <td><div align="center" class="Estilo11"><a href="../../rincon/index.php">Rincon Tecnico </a></div></td>
                <td><div align="center" class="Estilo11"><a href="../../distris/index.php">Acceso Tiendas y Distribuidores </a></div></td>
              </tr>
          </table></td>
        </tr>
      </table>
	  <table width="765" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="13"><img src="../../../../img/diseno.paginas/base/arriba-down.png" width="765" height="16"></td>
        </tr>
      </table>
	  <table width="745" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="13" bgcolor="#FFFFFF"><div align="center">
              <table width="100%"  border="0">
                <tr>
                  <td height="95" valign="top"><div align="center" class="Estilo6">
                    <p align="center" class="Estilo12">Son correctos estos datos ?? </p>
                    <form action="mail.php" name="Formulario_3" id="Formulario_3" >
                      <div align="center">
                        <table border="0">
                          <tr>
                            <td width="115" bgcolor="#FFFFCC"><div align="right"><span class="Estilo11"><b><font color="#0000FF">e-mail</font></b><font color="#0000FF"> / Usuario: </font></span></div></td>
                            <td width="214" bgcolor="#FFFFCC"><span class="Estilo20"><?php echo htmlentities ( $hd_usr ) ; ?>
                              <input name="hi_usr" type="hidden" id="hi_usr2" value="<?php echo $hd_usr;?>">
                            </span></td>
                            <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="95">
                              <div align="right" class="Estilo15 Estilo6"><span class="Estilo1">Clave : </span></div></td>
                            <td bordercolor="#FFFFFF" bgcolor="#FFFFCC" width="246">
                              <div align="left" class="Estilo15 Estilo21"><strong><b><b><b><?php echo  htmlentities ( $hd_pwd) ; ?></b>
                              <input name="hi_pwd" type="hidden" id="hi_pwd2" value="<?php echo $hd_pwd;?>">
                            </b> </b></strong></div></td>
                          </tr>
                          <tr>
                            <td width="115" bgcolor="#FFFFCC">
                              <div align="right" class="Estilo15"><b><font color="#0000FF">Nombre : </font></b></div></td>
                            <td width="214" bgcolor="#FFFFCC"><span class="Estilo20"><?php echo htmlentities ( $hd_nom ) ; ?>
                              <input name="hi_nom" type="hidden" id="hi_nombre2" value="<?php echo $hd_nom;?>">
                            </span></td>
                            <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                              <div align="right" class="Estilo15"><font color="#0000FF"><b>Apellido 1 : </b></font></div></td>
                            <td width="246" bgcolor="#FFFFCC"><span class="Estilo20">                            <?php echo  htmlentities ( $hd_ape1 ) ; ?>
                              <input name="hi_ape1" type="hidden" id="hi_ape12" value="<?php echo $hd_ape1;?>">
                            </span></td>
                          </tr>
                          <tr>
                            <td width="115" bgcolor="#FFFFCC" height="29">
                              <div align="right" class="Estilo15"><b><font color="#0000FF">Telefono :</font></b></div></td>
                            <td width="214" height="29" bgcolor="#FFFFCC"><span class="Estilo20"><?php echo htmlentities ( $hd_tel ) ; ?>
                              <input name="hi_tel" type="hidden" id="hi_nombre3" value="<?php echo $hd_tel;?>">
                            </span></td>
                            <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                              <div align="right" class="Estilo15"><b><font color="#0000FF"> Apelido 2 : </font></b></div></td>
                            <td width="246" height="29" bgcolor="#FFFFCC"><span class="Estilo20"><b><b><b><b><b><?php echo  htmlentities ( $hd_ape2 ) ; ?></b>
                              <input name="hi_ape2" type="hidden" id="hi_ape22" value="<?php echo $hd_ape2;?>">
                            </b> </b></b></b> </span></td>
                          </tr>
                          <tr>
                            <td width="115" bgcolor="#FFFFCC" height="29">
                              <div align="right" class="Estilo15"><b><font color="#0000FF">C.I.F. / N.I.F. : </font></b></div></td>
                            <td width="214" height="29" bgcolor="#FFFFCC"><span class="Estilo20"><?php echo htmlentities ( $hd_doc ) ; ?>
                              <input name="hi_doc" type="hidden" id="hi_nombre4" value="<?php echo $hd_doc;?>">
                            </span></td>
                            <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="29">
                              <div align="right" class="Estilo15"><font color="#0000FF"><b>Empresa : </b></font></div></td>
                            <td width="246" height="29" bgcolor="#FFFFCC"><span class="Estilo20">  <?php echo htmlentities ( $hd_empresa ) ; ?>
                              <input name="hi_empresa" type="hidden" id="hi_nombre6" value="<?php echo $hd_empresa;?>">
                            </span></td>
                          </tr>
                          <tr>
                            <td rowspan="2" bgcolor="#FFFFCC" width="115">
                              <div align="right" class="Estilo15"><b><font color="#0000FF">Direcci&oacute;n :</font></b></div></td>
                            <td width="214" rowspan="2" bgcolor="#FFFFCC"><span class="Estilo20">                            <?php echo htmlentities ( $hd_adr ) ; ?>
                              <input name="hi_adr" type="hidden" id="hi_nombre5" value="<?php echo $hd_adr;?>">
                            </span></td>
                            <td bgcolor="#FFFFCC" width="95">
                              <div align="right" class="Estilo15"><b><b><font color="#0000FF">C. P. : </font></b></b></div></td>
                            <td width="246" bgcolor="#FFFFCC"><span class="Estilo20"><b><b><b><b><?php echo  htmlentities ( $hd_cp ) ; ?>
                              <input name="hi_cp" type="hidden" id="hi_cp2" value="<?php echo $hd_cp;?>">
                            </b></b></b></b>  </span></td>
                          </tr>
                          <tr>
                            <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC" height="32">
                              <div align="right" class="Estilo15"> <b><b><font color="#0000FF">Poblacion</font></b><font color="#0000FF"> : </font></b></div></td>
                            <td width="246" height="32" bgcolor="#FFFFCC"><span class="Estilo20">  <b><b><b><b><b><?php echo  htmlentities ( $hd_pob ) ; ?>
                              <input name="hi_pob" type="hidden" id="hi_cp3" value="<?php echo $hd_pob;?>">
                            </b></b></b></b></b> </span></td>
                          </tr>
                          <tr>
                            <td width="115" bgcolor="#FFFFCC">
                              <div align="right" class="Estilo15"><b>Pais : </b></div></td>
                            <td width="214" bgcolor="#FFFFCC"><span class="Estilo20">                              <?php echo  htmlentities ( $hd_pais ) ; ?>
                              <input name="hi_pais" type="hidden" id="hi_pais2" value="<?php echo $hd_pais;?>">
                            
                            </span>
                            <td width="95" bordercolor="#FFFFFF" bgcolor="#FFFFCC">
                              <div align="right" class="Estilo15"><b><b><font color="#0000FF">Provincia</font></b> <font color="#0000FF">:</font> </b></div>
                            <td width="246" bgcolor="#FFFFCC"><span class="Estilo20">                            <?php echo htmlentities (  $hd_prov ) ; ?>
                              <input name="hi_prov" type="hidden" id="hi_prov2" value="<?php echo $hd_prov;?>">
                                                     
                          </span></tr>
                        </table>
                          <p><font color="#FF0000" face="Arial, Helvetica, sans-serif">
                          <input type="submit" name="iniciar2" value="Crear usuario">
                          </font></p>
                      </div>
                    </form>
                    <p><span class="Estilo8"><a href="../index.php"><img src="../../../../img/diseno.paginas/comunes/varias/back.jpg" width="67" height="35" border="0"></a></span></p>
                  </div></td>
                </tr>
              </table>
          </div></td>
        </tr>
      </table>
</div>
	<p align="center"><span class="Estilo4">www.nelosa.net - info@nelosa.net - Tel: 00 34 93 352 20 03 - Fax: 00 34 93 340 45 60<br>
  C/ Velia, 81 - 08016 - Barcelona - Espa&ntilde;a</span></p>
	<noscript></noscript> 
</body>