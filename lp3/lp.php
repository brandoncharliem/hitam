<?php
/* LP 3 */
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
$folder = 'lp3';

switch ($negara) {
    case 'fr':
        $yoursearch = 'Votre recherche';
        $aksesrb = 'Vous êtes sur le point d\'accéder à des livres connexes';
        $lpmodaltext = '<p>Notre bibliothèque est accessible à partir de certains pays seulement.</p><p>S\'il vous plaît, voir si vous êtes admissible à lire ou télécharger notre contenu en créant un compte.</p><p>Vous devez créer un compte gratuit pour <strong>lire</strong> ou <strong>télécharger</strong></p>';
        $lpmodalregister = 'Continuer';
        break;
    case 'de':
        $yoursearch = 'Deine Suche';
        $aksesrb = 'Sie sind mit ähnlichen Bücher zugreifen';
        $lpmodaltext = '<p>Unsere Bibliothek kann nur aus bestimmten Ländern zugegriffen werden.</p><p>Bitte, sehen Sie, ob Sie berechtigt sind, um unsere Inhalte lesen oder herunterladen, indem Sie ein Konto erstellen.</p><p>Sie müssen einen kostenlosen Account erstellen, um dieses Buch zu <strong>lesen</strong> oder <strong>herunterladen</strong>.</p>';
        $lpmodalregister = 'Fortsetzen';
        break;
    case 'it':
        $yoursearch = 'La tua ricerca';
        $aksesrb = 'Stai per accedere a libri correlati';
        $lpmodaltext = '<p>La nostra biblioteca si può accedere da solo alcuni paesi.</p><p>Si prega di vedere se si ha diritto per leggere o scaricare i contenuti con la creazione di un account.</p><p>È necessario creare un account gratuito per <strong>leggere</strong> o <strong>scaricare</strong> questo libro.</p>';
        $lpmodalregister = 'Proseguire';
        break;
    case 'es':
        $yoursearch = 'tu búsqueda';
        $aksesrb = 'Vas a tener acceso a los libros relacionados';
        $lpmodaltext = '<p>Nuestra biblioteca se puede acceder desde sólo ciertos países.</p><p>Por favor, ver si usted es elegible para leer o descargar nuestro contenido mediante la creación de una cuenta.</p><p>Debe crear una cuenta gratuita con el fin de <strong>leer</strong> o <strong>descargar</strong> este libro.</p>';
        $lpmodalregister = 'Continuar';
        break;
    
    default:
        $yoursearch = 'Your Search';
        $aksesrb = 'You are about to access related books';
        $lpmodaltext = '<p>Our library can be accessed from certain countries only.</p><p>Please, see if you are eligible to read or download our content by creating an account.</p><p>You must create a free account in order to <strong>read</strong> or <strong>download</strong>.</p>';
        $lpmodalregister = 'Continue';
        break;
}
$txt = text_lang();
$title = $judul;
$thumbnail = $domains.'/'.$asin.'_500.jpg';
$gambarbesar = $domains.'/'.$asin.'_500.jpg';
$file = sanitize_title2($title).'.pdf';
$upload = strtotime("last Week");
$uploaded = date("M d, Y H:i", $upload);
$visit = rand( 20000, 70000);
$visits = number_format($visit);
$downloads = number_format($visit * rand( 60, 90) / 100);
if($totalpages) {
    $filesize = number_format($totalpages * 7 / 180, 2);
}
header( "refresh:10;url=$ads" );
?><!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php echo $readol . $title;?> - <?php echo $site_name; ?></title>
<meta name="robots" content="noindex, nofollow">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $folder; ?>/style.css">
<style id="css-ddslick" type="text/css">.dd-select{ border-radius:2px; border:solid 1px #ccc; position:relative; cursor:pointer;}.dd-desc { color:#aaa; display:block; overflow: hidden; font-weight:normal; line-height: 1.4em; }.dd-selected{ overflow:hidden; display:block; padding:10px; font-weight:bold;}.dd-pointer{ width:0; height:0; position:absolute; right:10px; top:50%; margin-top:-3px;}.dd-pointer-down{ border:solid 5px transparent; border-top:solid 5px #000; }.dd-pointer-up{border:solid 5px transparent !important; border-bottom:solid 5px #000 !important; margin-top:-8px;}.dd-options{ border:solid 1px #ccc; border-top:none; list-style:none; box-shadow:0px 1px 5px #ddd; display:none; position:absolute; z-index:2000; margin:0; padding:0;background:#fff; overflow:auto;}.dd-option{ padding:10px; display:block; border-bottom:solid 1px #ddd; overflow:hidden; text-decoration:none; color:#333; cursor:pointer;-webkit-transition: all 0.25s ease-in-out; -moz-transition: all 0.25s ease-in-out;-o-transition: all 0.25s ease-in-out;-ms-transition: all 0.25s ease-in-out; }.dd-options > li:last-child > .dd-option{ border-bottom:none;}.dd-option:hover{ background:#f3f3f3; color:#000;}.dd-selected-description-truncated { text-overflow: ellipsis; white-space:nowrap; }.dd-option-selected { background:#f6f6f6; }.dd-option-image, .dd-selected-image { vertical-align:middle; float:left; margin-right:5px; max-width:64px;}.dd-image-right { float:right; margin-right:15px; margin-left:5px;}.dd-container{ position:relative;} .dd-selected-text { font-weight:bold}.lpbgcover{opacity:0.6}</style>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body hola-ext-player="1">
<div class="container">
	<header class="row">
	<div class="col-md-12">
		<h1><?php echo $yoursearch; ?>:</h1>
		<h2 id="keyword"><?php echo $title; ?></h2>
	</div>
	</header>
	<div id="ebook-wrap" class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="ebook">
					<div class="page">
					</div>
					<div class="page">
					</div>
					<div class="page">
					</div>
					<div class="page">
					</div>
					<div id="current-page">
						<div id="header">
							<div class="row">
								<div id="related" class="col-xs-12 col-sm-6 col-md-6">
									<i class="fa fa-exclamation-circle"></i>
									<h3><?php echo $aksesrb; ?> : <?php echo $title; ?></h3>
									<p><?php echo $uploaded; if($totalpages) { ?> ~ <?php echo $filesize; ?>MB<?php } ?></p>
								</div>
								<div id="menu" class="col-xs-0 col-sm-6 col-md-6">
									<ul class="list-inline pull-right">
										<li>
										<span>Aa</span>
										</li>
										<li>
										<i class="fa fa-search"></i>
										</li>
										<li>
										<i class="fa fa-list-ul"></i>
										</li>
										<li>
										<i class="fa fa-bookmark"></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div id="page">
							<div class="row">
								<div class="col-md-12">
									<img src="http://<?php echo $gambarbesar;?>" class="img-responsive center-block lpbgcover" alt="<?php echo $title; ?>"onerror="this.src='/page/page<?php echo rand(1,11); ?>.jpg'" />
									<div style="opacity: 0.8;" id="loader">
										<h4>Loading</h4>
										<ul class="list-inline">
											<li class=""></li>
											<li class=""></li>
											<li class=""></li>
											<li class=""></li>
											<li class="active"></li>
											<li class=""></li>
										</ul>
									</div>
									<i class="fa fa-angle-left"></i>
									<i class="fa fa-angle-right right"></i>
								</div>
							</div>
						</div>
						<div id="footer">
							<div class="row">
								<div class="col-xs-4 col-sm-1 col-md-1">
									<span class="box">01</span>
								</div>
								<div id="ranger" class="col-xs-4 col-sm-10 col-md-10">
									<hr />
									<span class="handle"></span>
								</div>
								<div class="col-xs-4 col-sm-1 col-md-1">
									<span class="box" style="margin-left:-10px"><?php echo rand(100,500); ?></span>
								</div>
							</div>
						</div>
						<div style="display: block;border:1px solid #666;color:#000" id="register">
							<div class="row">
							
								<img style="width:100%" alt="<?php echo $title;?>" id="coverImage" src="http://<?php echo $gambarbesar;?>" onerror="this.src='/<?php echo spinText("{epub|pdf|mobi}");?>.png'" />
								</div>
							
									<?php echo $lpmodaltext; ?>
									<a id="btnContinue" class="the-domain btn btn-primary" data-href="<?php echo $ads; ?>"><?php echo $lpmodalregister; ?></a>
								
							</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 footer">
			<img id="flag" class="img-responsive" src="<?php echo $folder; ?>/country.png" />
			<h2>#1 Multimedia Search Engine!</h2>
			<img src="<?php echo $folder; ?>/trusted.jpg" alt="Trusted Logos">
			<p><?php echo $domains; ?> matches search queries from 3rd-party sites, to
affiliate-networks offering unlimited access to licensed entertainment content.</p>
			<p><?php echo $domen; ?> visitors who were otherwise looking for free-content to enjoy more for less.</p>
		</div>
	</div>
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
</body>
</html>