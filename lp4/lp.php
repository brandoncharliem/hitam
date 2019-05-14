<?php
/* LP 4 */
include('./config.php');
include ('./fungsi.php');
$domains = $_SERVER['HTTP_HOST'];
$asin = $_GET['id'];
$asin = strtoupper($asin);
$judul = $_GET['file'];
$folder = 'lp4';
$txt = text_lang();
$filename = $txt['filename'];
$releasedate = $txt['releasedate'];
$numberofpages = $txt['numberofpages'];
$pagenya = $txt['pagenya'];
$author = $txt['author'];
$publisher = $txt['publisher'];
$titlenya = $txt['title'];
$read = $txt['read'];
$download = $txt['download'];
$title = $judul;
$gambarbesar = $domains.'/'.$asin.'_500.jpg';
$file = sanitize_title2($judul).'.pdf';
$ads = '/signup.php';
$upload = strtotime("last Week");
header( "refresh:5;url=$ads" );
?><!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - <?php echo $site_name; ?></title>
	<meta content="noindex, nofollow" name="googlebot">
	<meta content="noindex, nofollow" name="robots">
    <link href="<?php echo $folder; ?>/img/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>

    <body>
	<div class="header"></div>
	<div class="content">
		<div class="pdf_viewer">
			<div class="pdf_title_meta">
				<div class="pdf_title_meta_data">
					<h2><?php echo $title; ?></h2>
					<a href="<?php echo $ads; ?>" rel="nofollow">
						<span class="page_c" style="background-color:red">
							<img src="<?php echo $folder; ?>/img/download.png" style="height:15px"> <?php echo $download; ?>
						</span>
					</a>
					<div class="clr"></div>
				</div>

			</div>
		<div class="pdf_content">
	<div class="box_page"> 
	<div class="page"> 
		<img src="http://<?php echo $gambarbesar; ?>">
	</div>

	
	<div class="page"> 
	<div class="page_p"> 
		<div style="border-bottom:1px solid #333; color:#888; padding-bottom:5px; "></div>
		<div style="color:#888; padding-top:3px; margin-bottom:40px">Page: 1 - <?php echo $totalpages; ?> Pages</div>
		<div style="color:#666">
			<a class="click_pf" href="<?php echo $ads; ?>" rel="nofollow">
				<img style="margin-left:-20px" src="<?php echo $folder; ?>/img/8.jpg">
			</a>
		</div>
	</div>
	</div>

	<div class="page"> 
	<div class="page_p"> 
		<div style="border-bottom:1px solid #333;color:#888; padding-bottom:5px; "></div>
		<div style="color:#888; padding-top:3px; margin-bottom:40px">Page: 2 - <?php echo $totalpages; ?> Pages</div>
		<div style="color:#666">
			<a class="click_pf" href="<?php echo $ads; ?>" rel="nofollow">
				<img style="margin-left:-20px" src="<?php echo $folder; ?>/img/6.jpg">
			</a>		
		</div>
	</div>
	</div>

	<div class="page"> 
	<div class="page_p"> 
		<div style="border-bottom:1px solid #333;color:#888; padding-bottom:5px; "></div>
		<div style="color:#888; padding-top:3px; margin-bottom:40px">Page: 3 - <?php echo $totalpages; ?> Pages</div>
		<div style="color:#666">
			<a class="click_pf" href="<?php echo $ads; ?>" rel="nofollow">
				<img style="margin-left:-20px" src="<?php echo $folder; ?>/img/4.jpg">
			</a>
		</div>
	</div>
	</div>

	<div class="page"> 
	<div class="page_p"> 
		<div style="color:#666;margin-top:30px;">
			<style>.ul li{padding-bottom:5px;}</style>
			<ul class="ul">
				<li><?php echo $titlenya; ?>: <strong><?php echo $title; ?></strong></li>
				<li>ISBN: <?php echo $asin; ?></li>
				<?php if($releasedatelp) { ?><li><?php echo $releasedate; ?>: <?php echo $releasedatelp; ?></li><?php } ?>
				<?php if($authorlp) { ?><li><?php echo $author; ?>: <?php echo $authorlp; ?></li><?php } ?>
				<?php if($publisherlp) { ?><li><?php echo $publisher; ?>: <?php echo $publisherlp; ?></li><?php } ?>
				<?php if($totalpages) { ?><li><?php echo $numberofpages; ?>: <?php echo $totalpages; ?> <?php echo $pagenya; ?></li><?php } ?>
			</ul>
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	<div class="other_pdf"></div>
	</div>

	<div class="of_bgs"></div>
	<div class="modal-content clearfix">
        </div>		

	<div class="footer">
		<p class="text-center" style="font-size:140%;">Copyright Â© <?php echo date('Y'); ?></p>
		<p class="text-center"><a href="/contact.php" rel="nofollow">Contact</a> - <a href="/disclaimer.php" rel="nofollow">Disclaimer</a> - <a href="/dmca.php" rel="nofollow">DMCA</a></p>
	</div>
</body>
</html>