<?php
$servername = 'http://'.$_SERVER['HTTP_HOST'];
$direktori = $_SERVER['DOCUMENT_ROOT'].'/sitemap-folder/';
//$slug = 'download';
$description = 'Trouvez des livres �lectroniques gratuits au format livres et applications NOOK, vous pouvez t�l�charger gratuitement les ebooks en formats PDF, ePub et Kindle.';
$today = date("D, j M Y H:m:s")." +0000";


$handle = opendir($direktori);

while (false !== ($entry = readdir($handle))) {
	if ($entry != "." && $entry != "..") {		
		$data .= $entry."\n";		
		
	}	
}
closedir($handle);

$data = trim($data);
if ($data != "") {
$data = explode ("\n", $data);

sort($data, SORT_NATURAL | SORT_FLAG_CASE);
}



$url = $_SERVER['REQUEST_URI'];

//$xml = explode('/', $url);

$xml = str_replace('.xml', '.txt', $data[0]);
$xml = rand(1,$xml).".txt";
//echo $xml;


$urls=@file($direktori.$xml,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES) or die('gagal baca list');
shuffle($urls);
$urls = array_slice($urls, 1, 500); 

header("Content-Type: application/rss+xml; charset=ISO-8859-1");

print '<?xml version="1.0" encoding="UTF-8"?><rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"	>

<channel>
	<title>'.strtoupper($_SERVER['HTTP_HOST']).'</title>
	<atom:link href="'.$servername.'/feed" rel="self" type="application/rss+xml" />
	<link>'.$servername.'</link>
	<description>'.$description.'</description>
	<lastBuildDate>'.$today.'</lastBuildDate>
	<language>en-US</language>
	<sy:updatePeriod>hourly</sy:updatePeriod>
	<sy:updateFrequency>1</sy:updateFrequency>
	<generator>https://wordpress.org/?v=4.7.3</generator>';



/* print '<?xml version="1.0" encoding="UTF-8"?><?xml-stylesheet type="text/xsl" href="'.$servername.'/sitemap_detail.xsl"?><urlset	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"
	    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'; */
echo "\n";
$i=1;
$interval = -1; //interval -5 jam ke belakang
foreach ($urls as $link) {
$judul = preg_replace("/^(\w+\s)/", "", $link);
echo "\t<item>\n";
echo "\t\t<title>".ucwords(str_replace('-', ' ',  $judul))."</title>\n";
echo "\t\t<description>".ucwords(str_replace('-', ' ', $judul))."</description>\n";
echo "\t\t<link>".$servername."/telecharger/".seo_friendly_url($link)."</link>\n";
echo "\t\t<pubDate>".date("Y-m-d\TH:m:s+00:00", getTanggal($interval*$i))."</pubDate>\n";
echo "\t</item>\n";
$i++;
}
echo "\n";
echo '</channel>
</rss>';

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