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
$titlenya = preg_replace("/^(\w+\s)/", "", $titlenya);
$titlenya      =       ucwords(str_replace('-', ' ', $titlenya));
$judul		=	$titlenya;
$txt = text_lang();
$gambar = $domains.'/'.$asin.'_500.jpg';
$md5 = 'http://<?php echo $domains; ?>/downloadnow?id='.$asin.'&file='.$judul.'.pdf';
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $judul.' - '.$site_name; ?> - <?php echo strtoupper( $domains ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
<meta name="description" content="Download  EPub PDF Ebooks. ">
<meta name="author" content="">
<meta name="robots" content="noindex, nofollow">
<link rel="shortcut icon" href="/favicon.ico" title="Favicon" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://<?php echo $domains; ?>/dblib/style-new.css" media="screen, projection">
<link rel="stylesheet" href="http://<?php echo $domains; ?>/dblib/comment.css" media="screen, projection">

<!--Icon Fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600|Bree+Serif' rel='stylesheet' type='text/css'>
</head>
<body>
<section id="banner" role="banner" style="background-image:url(https://3.bp.blogspot.com/-xwSw6QqwAz8/WsTm-hK0uAI/AAAAAAAAAfI/4EW-BLp_GfAtQXQAKdeNyjy7j5j1-pX2QCLcBGAs/s1600/azon.jpg)">
  <div class="row">
    <div id="header_region">
      <div id="logo" class="two_thirds">
        <h1><a href="/"><img src="http://<?php echo $domains; ?>/dblib/logo.png" alt="Off the Shelf eBook Landing Page" title="Off the Shelf eBook Landing Page" height="41" width="41"/>E-Books Library</a></h1>
        
      </div>
    </div>
    <div class="one_half">
    	    <center> 	<img src="http://<?php echo $gambar; ?>"onerror="this.src='/<?php echo spinText("{epub|pdf|mobi}");?>.png'"width="331" height="451"/>             	 
</center>
</div>

    <div class="one_half last">
    <h1>E-Books Library</h1>
<h2 class="subheader">
All your favorite books and authors in one place!</br></h2>
PDF, ePubs, MOBI, eMagazines, ePaper, eJournal and more
<div class="button_buy"> 

        <a href="/dl.php?file=<?php echo $judul; ?>"title="Download Book Now"><span class="button_text"><i class="fa fa-download"></i> Download Now!
  </span></a><br>*Free Joint Membership Registration<br><br> <a href="/read.php?id=<?php echo $asin; ?>&file=<?php echo $judul; ?>"title="Read Book Now!"target="_blank"><span class="button_text"><i class="fa fa-book"></i> Read Book Now!
  </span></a>
</div>
     <p>More than 10 million titles spanning every genre imaginable, at your fingertips. Get the best Books, Magazines & Comics in every genre including Action, Adventure, Anime, Manga, Children & Family, Classics, Comedies, Reference, Manuals, Drama, Foreign, Horror, Music, Romance, Sci-Fi, Fantasy, Sports and many more. </p>

<!-- <p>Access to our library is limited to certain countries.
Please see if you are allowed to start <b> READ </b> or <b> DOWNLOAD </b> from our library by creating an account.</p> -->
<style type="text/css">iframe.goog-te-banner-frame{ display: none !important;}</style>
<style type="text/css">body {position: static !important; top:0px !important;}#google_translate_element img
        {
            display: none !important;
        }.goog-logo-link {
   display:none !important;
}
.goog-te-gadget{
   color: transparent !important;
}
.goog-te-gadget .goog-te-combo{
   color: blue !important;
}</style>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'us', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      
            <span id="counter"></span> </div>
  </div>
</section>
<article role="main">
  <div id="main_content"> 
 
    <div class="panel-footer">
      <div class="row">
		    <div class="span panel-body">
			<p style="text-align: left;"><font size="5"><b>Description du livre:</b></font><br>
<b>Titre:</b> - <?php echo $judul;?><br>
<b>Type de fichier:</b> PDF EPUB MOBI.<br>
<b>MD5 Hash Code:</b> <?php $str = "$md5"; echo md5($str);?><br>
<b>ASIN/ISBN:</b> <?php echo $asin;?><br>
			 <img src="http://<?php echo $domains; ?>/dblib/liveG.gif"> <font size="4"color="blue"><b>Activite recente des membres</b></font>
		</div>
	<div class="panel-heading">
		<div class="panel-body" id="activityBody">
			<div id="loadingActivity">
				<p class="text-center">Chargement de l'activite...</p>
				<img class="center-block" id="loader" src="http://<?php echo $domains; ?>/dblib/ajax_loading.gif" alt=""/>
			</div>

                      </div>   <br>

            <h2>Livre connexe : <?php echo $judul;?></h2>

<?php poplist();?>
<br>
   

      </div>
    </div>

  </div>
</article>

<footer role="contentinfo">
  <div id="page_footer" class="row">
    <ul>
      <li><a href="/" title="Home Pages">Home</a></li>
      <li><a href="/contact" title="Contact">Contact</a></li>
      <li><a href="/privacy" title="Privacy Policy">Privacy Policy</a></li>
      <li><a href="/dmca" title="DMCA Notice">DMCA Notice</a></li>
    </ul>
    <p> &copy; Books Library - 2019. All rights reserved. </p>
  </div>
</footer>
<a href="#" class="scrollup">Scroll up</a> 
<script src="http://<?php echo $domains; ?>/dblib/foundation.min.js"></script> 
<script src="http://<?php echo $domains; ?>/dblib/phrases.js"></script> 
<script src="http://<?php echo $domains; ?>/dblib/site.min.js"></script>

<script src="http://<?php echo $domains; ?>/dblib/jQuery.scrollSpeed.js"></script> 
<script src="http://<?php echo $domains; ?>/dblib/blur.js"></script>
<script src="http://<?php echo $domains; ?>/dblib/jquery.typewriter.min.js"></script>
<script src="http://<?php echo $domains; ?>/dblib/jquery.validate.min.js"></script>
<script src="http://<?php echo $domains; ?>/dblib/buzz.min.js"></script>


<?php include('histats.php'); ?>

</body>
</html>
