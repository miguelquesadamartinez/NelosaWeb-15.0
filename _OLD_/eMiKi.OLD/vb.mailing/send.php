<HTML><HEAD>
<TITLE>Send Mailing Nelosa</title>
<META NAME="ROBOTS" content="NOFOLLOW,NOINDEX"/>
</HEAD>
<BODY>
<p align="center"><font color="#0000FF" size="1"><strong><font face="Arial, Helvetica, sans-serif"> 
  <?php
include("../Funciones_PHP.php");
include "../libmail.php";
//echo $emilio ;
   $unlink=mysql_connect( "nelosa.net" ,"nelosa","mqm1804"); 
   mysql_select_db("nelosa_nelosa",$unlink); 
					//if (!($resultado=mysql_query("Select * From Unsuscribed where email = '" . $emilio . "'" ,$unlink)))   
					$resultado=mysql_query("Select * From Unsuscribed where email = '" . $emilio . "'" ,$unlink) ;
					if (!(mysql_fetch_array( $resultado ) ) ) 
					{
						$m = new Mail(); // create the mail
						
						$file = "Doks/" . $doky;
						//$resto = substr ($file, 0, (strlen($doc) -4 ));
						
						$m->Attach( $file, "text/html" );
						$m->From( "Recargas Universales Ink-Jet y Laser <mailing@nelosa.net>" ) ; 
						$m->To( $emilio ) ;
						//$m->Subject( $asumpte ) ;
						$m->Subject( "Maximo ahorro y Calidad (Publicidad)" ) ;

						if ( file_exists ( $file ) ) {
							
							$m->Send(); // send the mail 
							
							echo ("Enviado el mail a " . $emilio . " <BR>");
							echo ("Dok " . $doky . " <BR>");
							echo ("Asunto " . $asumpte . " <BR>");
						}
						else {
							echo ("NO Enviado el mail a " . $emilio . " <BR><BR>");
							echo ("NO existe el fichero $file ! ! <BR>");
						}
					} // El del unsuscribe
?>
</font></strong></font> </p>
</BODY>
</HTML>