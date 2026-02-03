<?php 

function writeLog($message, $level = "INFO", $file = "") {
    // Directorio de logs (crear si no existe)
    $logDir = __DIR__ . "/../logs/";
    if (!file_exists($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    // Nombre del archivo: log_YYYY-MM-DD.txt
    $logFile = $logDir . "nelosa_" . date("Y-m-d") . ".log";
    
    // Formato: [YYYY-MM-DD HH:MM:SS] [LEVEL] [IP] [FILE] Message
    $ip = Get_Ip();
    $timestamp = date("Y-m-d H:i:s");
    $fileInfo = $file ? " [$file]" : "";
    
    $logEntry = "[$timestamp] [$level] [$ip]$fileInfo $message" . PHP_EOL;
    
    // Escribir en el archivo (append mode)
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

/**
 * Funciones auxiliares para diferentes niveles de log
 */
function logInfo($message, $file = "") {
    writeLog($message, "INFO", $file);
}

function logWarning($message, $file = "") {
    writeLog($message, "WARNING", $file);
}

function logError($message, $file = "") {
    writeLog($message, "ERROR", $file);
}

function logDebug($message, $file = "") {
    writeLog($message, "DEBUG", $file);
}

function logLogin($user, $success = true, $reason = "") {
    $status = $success ? "SUCCESS" : "FAILED";
    $msg = "Login attempt for user: $user - Status: $status";
    if ($reason) {
        $msg .= " - Reason: $reason";
    }
    writeLog($msg, $success ? "INFO" : "WARNING", "auth");
}

/**
 * Función para escribir un mensaje y el contenido de una variable/array en el log
 * @param string $message - Mensaje descriptivo
 * @param mixed $variable - Variable o array a mostrar
 * @param string $level - Nivel del log (INFO, WARNING, ERROR, DEBUG)
 * @param string $file - Archivo opcional donde ocurrió el evento
 */
function logVariable($message, $variable, $level = "DEBUG", $file = "") {
    // Directorio de logs (crear si no existe)
    $logDir = __DIR__ . "/../logs/";
    if (!file_exists($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    // Nombre del archivo: log_YYYY-MM-DD.txt
    $logFile = $logDir . "nelosa_" . date("Y-m-d") . ".log";
    
    // Formato: [YYYY-MM-DD HH:MM:SS] [LEVEL] [IP] [FILE] Message
    $ip = Get_Ip();
    $timestamp = date("Y-m-d H:i:s");
    $fileInfo = $file ? " [$file]" : "";
    
    // Formatear la variable
    $varType = gettype($variable);
    $varContent = "";
    
    if (is_array($variable)) {
        $varContent = "Array(" . count($variable) . " elementos):\n" . print_r($variable, true);
    } elseif (is_object($variable)) {
        $varContent = "Object(" . get_class($variable) . "):\n" . print_r($variable, true);
    } elseif (is_bool($variable)) {
        $varContent = $variable ? "true" : "false";
    } elseif (is_null($variable)) {
        $varContent = "NULL";
    } else {
        $varContent = var_export($variable, true);
    }
    
    $logEntry = "[$timestamp] [$level] [$ip]$fileInfo $message\n";
    $logEntry .= "   Type: $varType\n";
    $logEntry .= "   Content: $varContent\n";
    $logEntry .= str_repeat("-", 80) . "\n";
    
    // Escribir en el archivo (append mode)
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

function getext($idioma_p,$texte) {

	$link_P=conectarse_param("nelosa_nelosa_textos") ; 

$result_P=mysql_query("Select * From txt_" . $idioma_p . " Where id = '" . $texte . "'",$link_P) ;
//echo "Select * From txt_" . $idioma_p . " Where id = '" . $texte . "'<BR>" ;
	$row_P = mysql_fetch_array($result_P);
	$texto=(string)$row_P["texto"];

	$texto = ereg_replace ("%B4", "'", $texto);
	if ($texto == "" ) {
		//$texto="Missing Text " . $texte . " !!";
		$result_P=mysql_query("Select * From txt_esp Where id = '" . $texte . "'",$link_P) ;
		$row_P = mysql_fetch_array($result_P);
		$texto=(string)$row_P["texto"];

		//echo getcwd() . "\n";
		$text = $texte . " \nidioma: " . $idioma_p . "\nFolder " . getcwd();
		mail("info@nelosa.net","Falta texto ".$texte." idioma ".$idioma_p,$text,"From: <missing.text@nelosa.net>");
		//mail("emiki@nelosa.net","Falta texto ".$texte." idioma ".$idioma_p,$text,"From: <missing.text@nelosa.net>");
	}

return $texto ;
}// - - - - - - - - - - - - - - - - 
function getDenom($idioma,$ref) {
	$link=conectarse_param("nelosa_nelosa_textos") ; 
	$result=mysql_query("Select * From Descs_" . $idioma . " Where Ref = '" . $ref . "'",$link) ;
	$row = mysql_fetch_array($result);
	$texto=(string)$row["denom"];
return $texto ;
}// - - - - - - - - - - - - - - - - 
function getDesc($idioma,$ref) {
	$link=conectarse_param("nelosa_nelosa_textos") ; 
	$result=mysql_query("Select * From Descs_" . $idioma . " Where Ref = '" . $ref . "'",$link) ;
	$row = mysql_fetch_array($result);
	$texto=(string)$row["texto"];
return $texto ;
}// - - - - - - - - - - - - - - - - 
function conectarse() 
{ 
   if (!($linkc=mysql_connect( "mysql" ,"nelosa_nelosa","mqm1804")))    { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db("nelosa_nelosa",$linkc))    { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $linkc; 
} 
function conectarse_param($param) 
{ 
   $jost = "localhost";
   //$jost = "nelosa.net";
   
   if (!($linkparam=mysql_connect( "mysql" ,"nelosa_nelosa","mqm1804"))) 
   {
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db($param,$linkparam)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $linkparam; 
}
function conectarse_jost_param($jost,$param) 
{ 
   if (!($linkfun=mysql_connect( "mysql" ,"nelosa_nelosa","mqm1804"))) 
   {
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
    if (!mysql_select_db($param,$linkfun)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $linkfun; 
}

function Get_Ip ()
{
  // Intentar obtener IP del cliente
  if (getenv("HTTP_CLIENT_IP") && getenv("HTTP_CLIENT_IP") != "none" && getenv("HTTP_CLIENT_IP") != "unknown") {
    return getenv("HTTP_CLIENT_IP");
  }
  
  // Intentar obtener IP forwarded
  if (getenv("HTTP_X_FORWARDED_FOR") && getenv("HTTP_X_FORWARDED_FOR") != "none" && getenv("HTTP_X_FORWARDED_FOR") != "unknown") {
    return getenv("HTTP_X_FORWARDED_FOR");
  }
  
  // Intentar obtener IP remota
  if (getenv("REMOTE_ADDR") && getenv("REMOTE_ADDR") != "none" && getenv("REMOTE_ADDR") != "unknown") {
    return getenv("REMOTE_ADDR");
  }
  
  return "none";
}
?>