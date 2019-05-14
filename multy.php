<?php
header("HTTP/1.1 403 Forbidden");
$ip = $_SERVER['REMOTE_ADDR']; 
$json_data = file_get_contents("http://apinotes.com/ipaddress/ip.php?ip=$ip");
$ip_data = json_decode($json_data, TRUE);
$cc = $ip_data['country_code'];
if ( $cc == "DE"||$cc == "BE"||$cc == "SE"||$cc == "AT" ) 
{
$offer = 'de.php';
}
else if ( $cc == "FR"||$cc == "CH") 
{
$offer = 'fr.php';
}
else if ( $cc == "IT") 
{
$offer = 'it.php';
}
else if ( $cc == "ES"||$cc == "CL") 
{
$offer = 'es.php';
}
else if ( $cc == "NL") 
{
$offer = 'nl.php';
}
else if ( $cc == "NO") 
{
$offer = 'no.php';
}
else if ( $cc == "LU") 
{
$offer = 'lu.php';
}
else if ( $cc == "JP") 
{
$offer = 'jp.php';
}
else if ( $cc == "SA"||$cc == "KW"||$cc == "QA"||$cc == "YE"||$cc == "PS"||$cc == "OM"||$cc == "AE") 
{
$offer = 'sa.php';
}
else
{
$offer = 'single.php';
}
include($offer);
?>
