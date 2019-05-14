<?php
include('config.php');
include ('fungsi.php');
	header('HTTP/1.1 200 OK');
	$url = $_SERVER['REQUEST_URI'];
	$urlnya = $_SERVER['REQUEST_URI'];
    $domains = $_SERVER['HTTP_HOST'];
	$url = str_replace('aan/', '', $url);
	$asin = ambil_asin($url);
	$asin = strtoupper($asin);
$permalinkx	=	$_SERVER['REQUEST_URI'];
$permalinky	=	explode('?',$permalink);
$permalinky	=	$permalinky[0];
$permalink	=       explode('/',$permalinkx);
$permalinkz     =	$permalink[2];
$permalink	=	$permalink[2];
$permalink	=	explode('?',$permalink);
$permalink	=	$permalink[0];
$titlenya    	= 	str_replace(array('/','-','+','-'),' ',$permalink);
//$titlenya = preg_replace("/^(\w+\s)/", "", $titlenya);
$titlenya      =       ucwords(str_replace('-', ' ', $titlenya));
$judul		=	$titlenya;
$txt = text_lang();

$item = $items['item'][0];
$title = $item['Title'];
$cano = $domain.'/'.$author.'/'.sanitize_title2($judul).'';
?>
<!DOCTYPE html>
<HTML amp='amp' lang='<?php echo $lang; ?>'>
<head>

<meta charset='utf-8'/>
<meta content='blogger' name='generator'/>
<meta content='width=device-width,minimum-scale=1,initial-scale=1' name='viewport'/>

<link href='/favicon.ico' rel='icon' type='image/x-icon'/>
<meta content='#000000' name='theme-color'/>
<meta content='#000000' name='msapplication-navbutton-color'/>
<meta content='yes' name='apple-mobile-web-app-capable'/>
<meta content='#000000' name='apple-mobile-web-app-status-bar-style'/>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta content='blogger' name='generator'/>
<link href='<?php echo $cano; ?>' rel='canonical'/>
<link rel="alternate" type="application/atom+xml" title="<?php echo $site_name;; ?> - Atom" href="/sitemap/<?php echo rand(1,4827); ?>.xml" />
<link rel="alternate" type="application/rss+xml" title="<?php echo $site_name;; ?> - RSS" href="/feed" />
<link rel="service.post" type="application/atom+xml" title="<?php echo $site_name;; ?> - Atom" href="/sitemap-index.xml" />
<meta content='<?php echo $judul; ?>' property='og:title'/>
<meta content='<?php echo proses_konten($txt['smdesc'], $item); ?>' property='og:description'/>
<meta content='http://<?php echo $domains; ?>/<?php echo spinText("{epub|pdf|mobi}");?>.png' property='og:image'/>
<title>[<?php echo spinText("{Download|DOWNLOAD|DoWnLoAd|DOWNload|downLOAD|dowNLoad|DOWNLOad}");?>] <?php echo $judul; ?> <?php echo spinText("{#|@|€|®|★|☈|☛|☞|♚}");?> <?php echo spinText("{PDF|Pdf|[PDF]|[pdf]|P.D.F|pDF|pDf}");?> <?php echo spinText("{#|@|€|®|★|☈|☛|☞|♚}");?> <?php echo spinText("{#|@|€|®|★|☈|☛|☞|♚}");?> <?php echo spinText("{EPUB|Epub|[EPUB]|[Epub]|E.P.U.B|ePUB|ePUb}");?> <?php echo spinText("{#|@|€|®|★|☈|☛|☞|♚}");?> <?php echo spinText("{TÉLÉCHARGER|TeleCharger|T€LeCharger|TeleCharge®|Télécharger|Télécharge☈}");?> - <?php echo strtoupper( $domains ); ?></title>
<meta content='<?php echo $site_name;; ?>' property='og:site_name'/>



<style amp-custom='amp-custom'>
@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:local('Montserrat-Bold'),url(https://fonts.gstatic.com/s/montserrat/v9/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:'Quicksand';font-style:normal;font-weight:400;src:local('Quicksand Regular'),local('Quicksand-Regular'),url(https://fonts.gstatic.com/s/quicksand/v6/NUrn2XQrRfyGZp5MknntaRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Quicksand';font-style:normal;font-weight:400;src:local('Quicksand Regular'),local('Quicksand-Regular'),url(https://fonts.gstatic.com/s/quicksand/v6/s2PXW4WrV3VLrOUpHiqsfRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Quicksand';font-style:normal;font-weight:400;src:local('Quicksand Regular'),local('Quicksand-Regular'),url(https://fonts.gstatic.com/s/quicksand/v6/sKd0EMYPAh5PYCRKSryvW1tXRa8TVwTICgirnJhmVJw.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:'Material Icons';font-style:normal;font-weight:400;src:local('Material Icons'),local('MaterialIcons-Regular'),url(https://fonts.gstatic.com/s/materialicons/v18/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2')}.material-icons{font-family:'Material Icons';font-weight:400;font-style:normal;font-size:20px;letter-spacing:normal;text-transform:none;display:inline-block;white-space:nowrap;word-wrap:normal;direction:ltr;-webkit-font-feature-settings:'liga';-webkit-font-smoothing:antialiased}

body{font-family:Arial,sans-serif;font-size:16px;text-align:justify;color:#444;margin:0;padding:0;background:#fff;line-height:1.7}a:link,a:visited{color:#075eab;text-decoration:none}a:hover{color:#444}a img{border-width:0}.post-update{display:none}.left{float:left}.right{float:right}img{max-width:100%;height:auto}.clear{clear:both}.date-header{display:none}.navbar,.quickedit,.post-feeds,.feed-links,.date-header,.feed-links,.date-header{display:none}.section{margin:0}pre{background:#fafafa;padding:10px;border-left:3px solid #075eab;border-radius:5px}.post-body table{width:100%}.post-body table th{background:#075eab;border:0;color:#fff;padding:10px;text-align:left;vertical-align:top}.post-body table td{background:#fff;border:0;padding:10px;text-align:left;vertical-align:top}.post-body table tr:nth-child(even) >td{background-color:#f9f9f9}blockquote{color:#777;padding:10px 0 10px 20px;font-style:italic;border-left:5px solid #075eab;text-align:left}h1,h2,h3,h4,h5,h6{font-family:'Quicksand',sans-serif;font-weight:700;margin:0 0;text-align:left;color:#333}h1{font-size:39px}h2{font-size:24px}h3{font-size:23px}h4{font-size:22px}h5,h6{font-size:20px}#wrapper{width:100%;height:100%;margin:0 auto 0;background:#ececec}#content-wrapper{width:768px;margin:0 auto 0;padding:0;background-color:#fff}.main-wrapper{padding:20px}.post-wrapper{word-wrap:break-word;overflow:hidden;width:100%}#part-header{margin:0 0 0 0;width:100%;padding:0;background:#075eab}#header-wrapper{text-align:center;padding:0;margin:0 auto;width:768px}#header-inner{padding:20px}#header-inner h1,.title{text-align:left;color:#fff;font-size:30px;margin:0;width:40%;padding:0;text-transform:capitalize;line-height:1.7em;font-weight:400;font-family:'Montserrat',sans-serif}header{margin-bottom:0}.descriptionwrapper{display:none}.titlewrapper .title a{color:#fff}.btn-amp-sidebar{display:inline-block;background-repeat:no-repeat;background-size:30px 24px;background-position:center center;background-color:transparent;width:25px;height:35px;border:none;float:right;z-index:1001;cursor:pointer;font-size:30px}amp-sidebar{width:280px;background:#fff;color:#323232}amp-sidebar ul{padding:0;list-style:none}amp-sidebar li{line-height:40px;padding:2px 0;list-style:none;color:#323232;text-align:left;cursor:pointer}amp-sidebar li:nth-child(1){border-top:2px solid #5a5a5a}amp-sidebar li a{color:#323232;text-decoration:none;padding:5px 20px}amp-sidebar li:nth-child(even){background:#fafafa}amp-sidebar nav ul li a:link{color:#323232}amp-sidebar nav ul li a:visited{color:#323232}amp-sidebar button{margin-left:20px}.amp-sidebar-image{line-height:100px;vertical-align:middle}.amp-close-image{top:11px;left:245px;cursor:pointer}#search-box{width:95%;height:35px;float:left;padding:0;margin:0 0 15px 0;position:relative}#search-box form{border:1px solid #ececec;line-height:35px}.search-form{border:none;color:#ececec;width:100%;padding:0 30px 0 10px;height:35px;line-height:35px;font-size:14px;font-weight:400;margin:0;-moz-box-sizing:border-box;box-sizing:border-box}.search-button{background:0 0;width:30px;height:35px;line-height:35px;padding:3px 0 0 0;text-align:center;margin:0;top:0;right:0;font-size:16px;color:#ececec;position:absolute;border:none;border-radius:0;text-shadow:none;box-shadow:none;cursor:pointer}.search-form:focus,.search-form:hover,.search-button:focus,.search-button:hover{border:none;outline:0;color:#acacac}@media screen and (max-width:560px){#search-box{width:90%}}#header-inner amp-img{width:300px;text-align:center}.PopularPosts{background:#fff;margin:25px 0 0 0}.PopularPosts amp-img{width:280px;height:180px}.PopularPosts h2{position:relative;overflow:hidden;margin:0 0 10px}.PopularPosts h2 div{padding:0 10px 0 0;display:inline;float:left}.PopularPosts h2:after{content:'';display:inline-block;float:left;position:absolute;top:0;height:15px;margin:13px 0 0 0;width:100%;background:url(//4.bp.blogspot.com/-R2WTW6O9E1o/VX7dqIGT1eI/AAAAAAAACc4/pyvQDMMLX3E/s1600/repeat-bg.png);opacity:.9}#blog-pager{text-align:center;padding:0;margin:0}#blog-pager-older-link{float:right;text-align:center;height:auto;display:inline-block;border-radius:3px;color:#075eab}#blog-pager-home-link{text-align:center;display:inline-block;text-transform:none;margin:0;padding:2px}#blog-pager-newer-link{float:left;text-align:center;padding:0 5px;height:auto;display:inline-block;border-radius:3px;color:#075eab}#blog-pager-newer-link h6{margin:0;padding:0;text-align:left;color:#ccc;text-transform:uppercase;font-weight:700}#blog-pager-home{text-align:center;padding:0 5px;height:auto;display:inline-block;border-radius:3px;color:#075eab}footer.credit{background:#075eab;padding:20px;margin:0}.footer-credit{width:800px;margin:0 auto;text-align:center;text-transform:uppercase}.footer-credit h5{text-align:center;color:#fff;font-family:Arial;font-size:14px}.footer-credit a{text-align:center;color:#fff;font-family:Arial;font-size:14px}#bottom-ads{margin-top:25px}.post-info{display:block;margin:18px 0;overflow:hidden;float:left}.post-info a{color:#075eab}.post-info a:hover{color:#999}.post-info .material-icons{font-size:13px}h1.post-title.entry-title{border-bottom:1px solid #ccc}.image-wrapper{width:100%;margin:0 0 15px 0}.breadcrumbs{margin-bottom:5px;padding-bottom:5px;text-align:left;position:absolute;visibility:hidden}.breadcrumbs a{color:#444}#bread-crumbs{padding:20px}amp-social-share{width:65px;height:35px;border-radius:3px}amp-social-share[type="twitter"]{background-size:18px;transition:all .4s ease-out}amp-social-share[type="gplus"],amp-social-share[type="facebook"],amp-social-share[type="linkedin"],amp-social-share[type="pinterest"],amp-social-share[type="email"],amp-social-share[type="tumblr"]{background-size:18px;transition:all .4s ease-out}.share-buzz{margin:15px 0;float:right}.share-buzz h4{box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);overflow:hidden;float:left;font-size:11px;background:#37474F;color:#fff;padding:8px;margin-right:3px}.share-buzz2{margin:15px 0;display:inline-flex}.share-buzz2 h4{box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);overflow:hidden;float:left;font-size:11px;background:#37474F;color:#fff;padding:8px;margin-right:3px}.colsubs{background:#075eab;padding:0 20px;height:32px;color:#fff;margin:0 0 0 5px;border-radius:3px;display:block;text-align:center}.colsubs a{color:#fff;font-size:14px}.share-amp{width:275px;display:block}@media screen and (max-width:460px){.share-amp,.colsubs{width:100%}.share-buzz2{display:block}.colsubs{margin:0;width:auto}}.author-profile{color:#999;font-size:100%;overflow:hidden;padding:10px 0;margin:10px 0 0 0;border-top:5px solid #999;border-bottom:5px solid #999}.author-profile .avatar{margin-right:20px;float:left}.author-profile-title{color:#999;font-size:100%;margin-bottom:4px;text-transform:uppercase}.author-profile p:last-child{margin-bottom:0}.iklandiatas,.iklandibawah{margin:0}.iklandibawah{margin:15px 0 0 0}
.iklankiri{float:left;margin:0 20px 0 0}.thumbnail-cadangan{display:none}@media screen and (max-width:961px){#content-wrapper,.footer-credit{width:100%}}@media screen and (max-width:800px){.post-info,.share-buzz{float:none}}@media screen and (max-width:500px){.post-thumbnail{width:100%;margin:0 0 10px 0}h1.post-title.entry-title{font-size:150%}body{font-size:100%}}
</style>
<style amp-boilerplate='amp-boilerplate'>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}

</style><noscript><style amp-boilerplate='amp-boilerplate'>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async='async' src='https://cdn.ampproject.org/v0.js'></script>
<script async='async' custom-element='amp-sidebar' src='https://cdn.ampproject.org/v0/amp-sidebar-0.1.js'></script>
<script async='async' custom-element='amp-form' src='https://cdn.ampproject.org/v0/amp-form-0.1.js'></script>
<script async='async' custom-element='amp-analytics' src='https://cdn.ampproject.org/v0/amp-analytics-0.1.js'></script>
<script async='async' custom-element='amp-carousel' src='https://cdn.ampproject.org/v0/amp-carousel-0.1.js'></script>

</head>

<!-- Start Body -->
<body class='loading' itemscope='itemscope' itemtype='http://schema.org/WebPage'>
<div itemprop='mainContentOfPage' itemscope='itemscope' itemtype='https://schema.org/WebPageElement'>
<div id='part-header'>
<header itemscope='itemscope' itemtype='http://schema.org/WPHeader'>
<div class='section' id='header-wrapper'><div class='widget Header' data-version='1' id='Header1'>
<div class='subampimg' id='header-inner'>
<?php echo $site_name;; ?>
</div>
</div></div>
</header>
<div class='clear'></div>
</div>
<div class='ltr' id='wrapper'>
<div class='clear'></div>
<!-- Start Content Wrapper -->
<div id='content-wrapper'>
<div class='main-wrapper'>
<div id='topsed'>


&#187; <span><?php echo $judul; ?></span>
</div>
<div class='blog-posts hfeed'>
 <div class="date-posts"> 
<div class='post-outer'>
<article class='post hentry'>
<h1 class='post-title entry-title'>
<?php echo $judul; ?>
</h1>
<strong><?php echo $judul; ?></strong> <?php echo proses_konten($txt['scdesc'], $item); ?>

<div class='clear'></div>
<ul>
                                    <li><?php echo $judul; ?> PDF</li>
                                    <li><?php echo $judul; ?> EPUB</li>
                                    <li><?php echo $judul; ?> MOBI</li>
                                </ul>
<?php authorlist();?>
                               <?php
function limit_words($string, $word_limit)
{
$words = explode(" ",$string);
return implode(" ",array_splice($words,0,$word_limit));
}
?>
<?php
echo '';
  $firstx = ($nav - 1) * 10;
  $firstx = $firstx + 1; 
  $urlrss    = 'http://www.bing.com/search?q=ebook+by+'.urlencode(limit_words($judul,5)).'&count=10&first='.$firstx.'&format=rss';
  $feedbing  = simplexml_load_string(Copasan($urlrss));
   foreach ($feedbing->channel->item as $itembing):
       $titled	= $itembing->title;
       $tit	= $itembing->title;
$titled		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$titled);
       $url = sanitize_title($titled);
       $desced	= $itembing->description;
$desced		= str_replace(array('www','/','-','+','-','%7C','jpg','php','gif','html','Blogspot','Com','.com','http','Wikipedia','Wikipédia','YouTube','Amazon'),' ',$desced);
       $pubded	= $itembing->pubDate; 
  echo  '<strong>'.$titled.'</strong><br>'.$desced.'<br>';
endforeach;
	?>
<h3>Livres similaires <?php echo $judul; ?></h3><br>
<?php poplist();?>


<div class='clear'></div>
<div class='clear'></div>
</div>
</article>

</div>
 </div></div> 
</div>
</div>
<!-- End Content Wrapper -->
<div class='clear'></div>
<!-- Start Footer Wrapper -->
<footer class='credit' itemprop='mainEntity' itemscope='itemscope' itemtype='http://schema.org/WPFooter'><div class='footer-credit'>
                        <a href="/contact.php" rel="nofollow">Contact</a> - <a href="/disclaimer.php" rel="nofollow">Disclaimer</a> - <a href="/dmca.php" rel="nofollow">DMCA</a>
                        <a href="/feed">RSS FEED</a> - <a href="/sitemap/<?php echo rand(1,4827); ?>.xml">INDEX XML</a>
                    </ul>
                    <p class="text-muted">Copyright &copy; <?php echo date('Y'); ?> <a href="/"><?php echo $site_name; ?></a></p></div></footer>
<!-- End Footer Wrapper -->
</div>
</div>



</body>
<!-- End Body -->
</HTML>