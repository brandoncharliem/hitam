<?php

$servername = 'http://'.$_SERVER['HTTP_HOST'];
$direktori = $_SERVER['DOCUMENT_ROOT'].'/sitemap-folder/';
$slug = 'telecharger';

$url = $_SERVER['REQUEST_URI'];

$xml = explode('/', $url);

$xml = str_replace('.xml', '.txt', $xml[2]);


$interval = -1; //interval -5 jam ke belakang


$urls=@file($direktori.$xml,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES) or die('gagal baca list');


header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?><?xml-stylesheet type="text/xsl" href="'.$servername.'/sitemap_detail.xsl"?><urlset	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"
	    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
echo "\n";
$priority = '0.5';
foreach ($urls as $link) {

echo "\t<url>\n";
echo "\t\t<loc>".$servername."/".$slug."/".seo_friendly_url($link)."</loc>\n";
echo "\t\t<lastmod>".date("Y-m-d\TH:m:s+00:00", getTanggal($interval*$i))."</lastmod>\n";
echo "\t\t<changefreq>weekly</changefreq>\n";
echo "\t\t<priority>".$priority."</priority>\n";
echo "\t</url>\n";
}
echo '</urlset>';

function seo_friendly_url($string) {    

	$string = str_replace(array('ä', 'ö', 'ü', 'Ä', 'Ö', 'Ü', 'ß', 'œ'), array('ae', 'oe', 'ue', 'Ae', 'Oe', 'Ue', 'ss', 'oe'), $string);
	$string = str_replace(array('[\', \']'), '', $string);
    $string = preg_replace('/\[.*\]/U', '', $string);
    $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
	$string = htmlentities($string, ENT_COMPAT, 'utf-8');
	$string = str_replace(array('&nbsp;','&reg;','&copy;','&euro;','&yen;','&pound;','&cent;','&amp;','&and;','&ang;','&asymp;','&cap;','&cong;','&cup;','&divide;','&empty;','&equiv;','&exist;','&fnof;','&forall;','&frasl;','&ge;','&gt;','&infin;','&int;','&isin;','&lang;','&lceil;','&le;','&lfloor;','&lowast;','&lt;','&minus;','&nabla;','&ne;','&ni;','&notin;','&nsub;','&oplus;','&or;','&otimes;','&part;','&permil;','&perp;','&piv;','&plusmn;','&prod;','&prop;','&quot;','&radic;','&rang;','&rceil;','&rfloor;','&sdot;','&sim;','&sub;','&sube;','&sum;','&sup;','&supe;','&there4;','&thetasym;','&times;','&upsih;'), ' ', $string);
    $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\1', $string );
    $string = str_replace(array('\''), '', $string);	
	$string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
    return strtolower(trim($string, '-'));	
}

function getTanggal($interval) {

$h = rand(0,23);

$m = rand(10,59); 

$s = rand(10,59); 

	
	$tanggal = date("d"); $bulan = date("m"); $tahun = date("Y");
	return mktime($interval,0,$s,$bulan,$tanggal,$tahun);
}

?>