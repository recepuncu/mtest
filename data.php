<?php 

require_once('Connections/db.php'); 

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_db, $db);
$query_ilce = "SELECT p.ilce_id id, p.il_id parent_id, p.ilce_adi label, p.lat, p.lng FROM pk_ilce p WHERE p.il_id IN (35,45,9,20,48) ORDER BY p.il_id ASC, p.ilce_adi ASC";
$ilce = mysql_query($query_ilce, $db) or die(mysql_error());
$row_ilce = mysql_fetch_assoc($ilce);
$totalRows_ilce = mysql_num_rows($ilce);

while($r = mysql_fetch_assoc($ilce)) {
    echo sprintf("{id: %s, parent_id:%s, label:'%s', lat:%s, lng:%s},", $r['id'], $r['parent_id'], $r['label'], $r['lat'], $r['lng']).'<br>';
}

mysql_free_result($ilce);

