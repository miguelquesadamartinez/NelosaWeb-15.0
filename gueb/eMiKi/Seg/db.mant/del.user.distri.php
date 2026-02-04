<style type="text/css">
<!--
.Estilo1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<div align="center" class="Estilo1">
  <p>Mantenimiento de bases de datos </p>
  <table width="95%"  border="0">
    <tr>
      <td><div align="center">
        <p>
<?php        
include("../../Funciones_PHP.php");
include "../../libmail2.php";

$link=conectarse(); 

$result=mysql_query("Delete From Clientes_Tiendas where email = '". $distri ."'" ,$link); 
$result=mysql_query("Delete From Datas_Tiendas where mail = '". $distri ."'" ,$link); 

echo ("Delete From Clientes_Tiendas where email = '". $distri ."'<BR>" ); 
echo ("Delete From Datas_Tiendas where mail = '". $distri ."'<BR><BR>" ); 

echo ("Eliminado Distribuidor ". $distri );

?>
		
		
		</p>
      </div></td>
    </tr>
  </table>
</div>

