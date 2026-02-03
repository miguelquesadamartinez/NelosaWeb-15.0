<style type="text/css">
<!--
.Estilo1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo2 {
	font-size: 14px;
	color: #0000FF;
}
.Estilo3 {color: #FF0000}
.Estilo4 {font-weight: bold}
.Estilo5 {color: #0000FF}
-->
</style>
<div align="center" class="Estilo1">
  <p>Mantenimiento de bases de datos </p>
  <table width="95%"  border="0">
    <tr>
      <td colspan="2"><div align="center">
        <p>&nbsp;</p>
        <p class="Estilo5"><a href="insert.file.php">Insertar Archivo de texto</a></p>
        <p>&nbsp; </p>
      </div></td>
    </tr>
    <tr>
      <td><p align="center"><strong><span class="Estilo2">Modificar emails en nelosa_nelosa_emails</span></strong></p>
        <form action="mod.emails.php" method="post" name="form1" class="Estilo4">
          <p align="center" class="Estilo2">sql <br>
    ALTER TABLE `<span class="Estilo3">DB</span> ` ADD `ind` INT ( 7 ) NOT NULL <br>
    <input type="submit" name="Submit" value="Enviar">
          </p>
        </form>      </td>
      <td><p align="center"><strong><span class="Estilo2">Rellenar en `ind&acute; de `emails&acute;en nelosa_nelosa_emails</span></strong></p>
        <form action="rellenar.ind.emails.php" method="post" name="form1" class="Estilo4">
          <p align="center" class="Estilo2">
            <input type="submit" name="Submit2" value="Enviar">
          </p>
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>

