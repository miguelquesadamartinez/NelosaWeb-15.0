<?php 	
//session_start(); 
session_register('cokie'); 
?>
<HTML><HEAD><TITLE>Control de informes Nelosa</TITLE>

<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>

</HEAD>

<body bgcolor="#FFFFFF" text="#000000">

<div align="center">
        <table width="600" border="0" align="center">
            <td height="57"><td height="104"><td height="47"><div align="center">
                <p>&nbsp;</p>
                <p align="center"><font size="4"><strong><font color="#FF0000">Datos contacto</font></strong></font></p>
                                <form name="form1" method="post" action="contacto3.php">
                                  <p>&nbsp;</p>
                                  <table width="100%"  border="0">
                                    <tr>
                                      <td width="51%"><div align="right"><font color="#0000FF"><strong>Nombre</strong></font></div></td>
                                      <td width="49%"><?php echo $nombre ; ?>
                                      <input name="nombre_h" type="hidden" value="<?php echo $nombre ; ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>1&ordm; Apellido </strong></font></div></td>
                                      <td><?php echo $ape1 ; ?></td>
                                      <input name="ape1_h" type="hidden" value="<?php echo $ape1 ; ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>2&ordm; Apellido </strong></font></div></td>
                                      <td><?php echo $ape2 ; ?></td>
                                      <input name="ape2_h" type="hidden" value="<?php echo $ape2 ; ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>email</strong></font></div></td>
                                      <td><?php echo $email ; ?></td>
                                      <input name="email_h" type="hidden" value="<?php echo $email ; ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>email_nelosa</strong></font></div></td>
                                      <td><?php echo $email_nelosa ; ?></td>
                                      <input name="email_nelosa_h" type="hidden" value="<?php echo $email_nelosa ; ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>Tel</strong></font></div></td>
                                      <td><?php echo $tel ; ?></td>
                                      <input name="tel_h" type="hidden" value="<?php echo $tel ; ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>Fax</strong></font></div></td>
                                      <td><?php echo $fax ; ?></td>
                                      <input name="fax_h" type="hidden" value="<?php echo $fax ; ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>Poblacion</strong></font></div></td>
                                      <td><?php echo $pob ; ?></td>
                                      <input name="pob_h" type="hidden" value="<?php echo $pob ; ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>Pais</strong></font></div></td>
                                      <td><?php echo $pais ; ?></td>
                                      <input name="pais_h" type="hidden" value="<?php echo $pais ; ?>"></td>
                                    </tr>
                                    <tr>
                                      <td><div align="right"><font color="#0000FF"><strong>Empresa</strong></font></div></td>
                                      <td><?php echo $empresa ; ?></td>
                                      <input name="empresa_h" type="hidden" value="<?php echo $empresa ; ?>"></td>
                                    </tr>
                                  </table>
                                  <p align="center">
                                    <input type="submit" name="Submit" value="Actualizar datos">
                                  </p>
              </form>                <p align="center"><strong><font color="#FF0000" size="4"></font></strong></p><td height="43"></td>
                  <div align="center">
                    <p><strong><font color="#0000FF" size="3"><a href="contacto.php">&lt; &lt;<br>
                    </a></font></strong></p>
                </div>
              
        </table>
    <div align="center">
      <div align="left"><b></b></div>
    </div>
</div>
<table width="600" border="0" align="center">
  <tr> 
    <td colspan="2"><p align="center"><a href="../../../../eMiKi/Seg/index.php"> Home</a> | <a href="mailto:info@nelosa.net">@</a></p>
      <p align="center"><font color="#0000FF" size="1" face="Arial, Helvetica, sans-serif">Copyright 
        &copy; 2004 Nelosa.</font></p></td>
  </tr>
</table>
</BODY>
</HTML>
