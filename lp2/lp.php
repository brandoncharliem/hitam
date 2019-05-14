<?php
/* LP 2 */
include('./config.php');
include ('./fungsi.php');
$domains = $_SERVER['HTTP_HOST'];
$asin = $_GET['id'];
$asin = strtoupper($asin);
$file = $_GET['file'];
$judul = $_GET['file'];
$asin = strtoupper($asin);
$ads = '/signup.php';
$gambar = $domains.'/'.$asin.'_500.jpg';
$folder = 'lp2';

switch ($negara) {
    case 'fr':
        $lpmodaltext = 'Vous devez créer un <span>compte gratuit</span> afin de <span>télécharger</span> ou <span>lire en ligne</span>';
        $lpmodalregister = 'Inscrivez-vous';
        break;
    case 'de':
        $lpmodaltext = 'Sie müssen ein <span>kostenloses Konto</span> anlegen zum <span>download</span> und <span>online lesen</span> das Buch.';
        $lpmodalregister = 'Jetzt registrieren';
        break;
    case 'it':
        $lpmodaltext = 'È necessario creare un <span>account gratuito</span> per <span>scaricare</span> e <span>leggere</span> online il libro.';
        $lpmodalregister = 'Registrati ora';
        break;
    case 'es':
        $lpmodaltext = 'Debe crear una <span>cuenta gratis</span> para <span>descargar</span> y <span>leer el libro en línea.</span>';
        $lpmodalregister = 'Regístrate ahora';
        break;
    default:
        $lpmodaltext = 'You must create a <span>free account</span> to <span>download</span> or <span>read online</span> the book.';
        $lpmodalregister = 'Register now';
        break;
}
$txt = text_lang();
$numberofpages = $txt['numberofpages'];
$pagenya = $txt['pagenya'];
$author = $txt['author'];
$readol = $txt['read'].' ';
$download = $txt['download'];
$thumbnail = $domains.'/'.$asin.'_500.jpg';
$gambarbesar = $domains.'/'.$asin.'_500.jpg';
$title = $judul;
$file = sanitize_title2($judul).'.pdf';
$upload = strtotime("last Week");
$uploaded = date("M d, Y H:i", $upload);
$visit = rand( 20000, 70000);
$visits = number_format($visit);
$downloads = number_format($visit * rand( 60, 90) / 100);
if($totalpages) {
	$filesize = number_format($totalpages * 7 / 180, 2);
}
header( "refresh:5;url=$ads" );
?><!DOCTYPE html>
<html>
<head>
    <title><?php echo $readol . $title; ?> - <?php echo $site_name; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta content="noindex, nofollow" name="googlebot">
	<meta content="noindex, nofollow" name="robots">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  	<link href="<?php echo $folder; ?>/packed.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $folder; ?>/book.css" type="text/css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>

		<div id="mainframe">
		<header>
  			<div class="container">
    			<div class="lang-chooser">
      				<p>Choose your language:</p>
					<div id="flag" class="social flags">
	  					<ul class="nav">
	  						<li class="dropdown">
		      					<img alt="flag" src="<?php echo $folder; ?>/images/flags/<?php echo $negara; ?>.png" />
							</li>
	  					</ul>
					</div>
				</div>

			    <div>
			    	<span class="ebook" style="background-image: url('<?php echo $thumbnail;?>');"></span>
			      	<p class="text-blue"><span><?php echo $title; ?></span></p>
			    </div>

			    <div class="buttons-area">
			      	<div class="button blue">
			          	<span class="dark-blue"><span class="icon-arrow-down"></span></span>
			          	<span class="download"><?php echo $download; ?></span> EPUB
			      	</div>

			      	<div class="button green">
			        	<span class="dark-green"> <span class="icon-arrow-down"></span></span>
			        	<span class="download"><?php echo $download; ?></span> PDF
			      	</div>
			    </div>
			</div>
		</header>

		<div class="buttons-area outside">
		  	<div class="button blue">
		      	<span class="dark-blue"><span class="icon-arrow-down"></span></span>
		      	<span class="download"><?php echo $download; ?></span> EPUB
		  	</div>
		  
		  	<div class="button green">
		    	<span class="dark-green"> <span class="icon-arrow-down"></span></span>
		    	<span class="download"><?php echo $download; ?></span> PDF
		  	</div>
		</div>

		<div class="container">
  			<div class="ebook-container">
		    	<header>
		      		<div>
		        		<span class="inform-icon"></span>
		        		<p><?php echo $title;?></p>
		      		</div>

			      	<div class="panel">
			        	<div class="font">Aa</div>

		        		<div class="scale">
		          		100%<span class="small-icon-arrow"></span>
		        		</div>

				        <span class="icon-arrow left"><span></span></span>
				        <span class="icon-arrow right"><span></span></span>
			      	</div>
		    	</header>

			    <div class="content">
			      	<div class="throbber">
			        	<img src="<?php echo $folder; ?>/images/load-small.gif" alt="Loading">
			        	<p>Loading...</p>
			      	</div>
<img alt="<?php echo $title;?>" id="coverImage" src="http://<?php echo $gambarbesar;?>" onerror="this.src='https://2.bp.blogspot.com/-cz9oiFeEKec/WpyuZBkASvI/AAAAAAAAAXI/9REDQsLNiY8VR7qrPvtl1eP_OMX06h6jQCPcBGAYYCw/s1600/text.jpg'" />
			      	<span class="icon-arrow left"><span></span></span>
			      	<span class="icon-arrow right"><span></span></span>
			    </div>

			    <div class="panel bottom">
			      	<span class="icon-arrow left"><span></span></span>
			      
			      	<div class="font">Aa</div>
			        
			        <div class="scale">
			         	100%<span class="small-icon-arrow"></span>
			        </div>
			        
			        <span class="icon-arrow right"><span></span></span>
			    </div>

			    <footer>
			      	<div class="page">01</div>
			      	
			      	<div class="panel">
			        	<div class="font">Aa</div>
			        
			        	<div class="scale">
			          		100%<span class="small-icon-arrow"></span>
			        	</div>
			      	</div>
			      
			      	<div class="status-bar"><div class="buffering"><div class="progress"></div><span class="circle"></span></div></div>
			    </footer>
  			</div>
		</div>

		<div class="container">
		  	<div id="footer">
			  	<div class="footer_left">
			    	Copyright © 2016. All rights reserved.
			  	</div>
			  
			  	<div class="footer_right">
			    	<span>
			      		<a href="<?php echo $ads;?>" rel="nofollow" title="Terms of Use">Terms of Use</a>&nbsp;&nbsp;•&nbsp;
			      		<a href="<?php echo $ads;?>" rel="nofollow" title="Privacy Policy">Privacy Policy</a>&nbsp;&nbsp;•&nbsp;  
			      		<a href="<?php echo $ads;?>" rel="nofollow" title="Contact us">Contact us</a>&nbsp;&nbsp;•&nbsp;
			        	<a href=""><img class="show_dialog" src="<?php echo $folder; ?>/images/facebook_rec.png"></a>
			    	</span>
			  	</div>
			</div>
		</div>

		<div class="black_matter"></div>

		<div id="registration_dialog">
			<div id="registration_box">
  				<div id="stage_one">
				    <div class="grey-wrapper">
				    	<h4><?php echo $title; ?></h4>
				    	<span class="imagex"><img src="http://<?php echo $gambarbesar;?>" onerror="this.src='/<?php echo spinText("{epub|pdf|mobi}");?>.png'" /></span>
				    	<p>
							<?php if($authorlp) { ?><?php echo $author; ?>: <strong><?php echo $authorlp;?></strong><br /><?php } ?>
							<?php if($totalpages) { ?><?php echo $numberofpages; ?>: <strong><?php echo $totalpages; ?> <?php echo $pagenya; ?></strong><br /><?php } ?></br>
						</p>
				      	<span class="image-arrows"></span>
				    </div>
    
    				<div id="registration_form">
      					<!--<p>In order to <span class="red">read</span> or <span class="red">download</span> book, you need to create a <span class="green">FREE</span> account.</p>-->
						<div id="have_an_account">
							<span class="image"></span>
							<p class="sorry"><?php echo $lpmodaltext; ?></p>
							<p>
							<!--Upload: <strong><?php echo $uploaded; ?></strong><br />-->
							Visit: <strong><?php echo $visits; ?></strong><br />
			    			Download: <strong><?php echo $downloads; ?> times</strong><br />
			    			<?php if($totalpages) { ?>Filesize: <strong><?php echo $filesize; ?>MB</strong><br /><?php } ?>
			    			Access speed:  <strong><?php echo number_format(rand( 20000, 100000)); ?> KB/s</strong>
			    			</p>
			    			<div class="buttonr"><a data-href="<?php echo $ads; ?>" class="the-domain" id="continue"><?php echo $lpmodalregister; ?></a></div>
						</div>
					</div>
				</div>
			</div><!-- end of registration_box -->
		</div>


    	<div id="dirty_dumpster"></div>
    	<div style="display:none;" id="dullevents_bag"></div>
	</div>
<script>
$(window).load(function () {
    window.URK = $(".the-domain").attr("data-href");
    $(".the-domain").attr("href", "");
    document.onclick = function (a) {
        if (a.target.id == "keyword" || a.target.id == "flag" || a.target.id == "btnContinue") {
            window.location.href = URK;
            return false;
        }
    };
});
</script>
<script src="<?php echo $folder; ?>/packed.js" type="text/javascript"></script>
</body>
</html>