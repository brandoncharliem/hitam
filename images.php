<?php
header("Content-Type: image/jpg");
$asin = $_GET['asin'];
$s = $_GET['s'];
$url =  "http://ws.assoc-amazon.com/widgets/q?_encoding=UTF8&Format=_SL".$s."_&ASIN=".$asin."&MarketPlace=US&ID=AsinImage&WS=1&ServiceVersion=20070822";
readfile($url);
?>