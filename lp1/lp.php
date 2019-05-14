<?php
/* LP 1 */
include('./config.php');
include ('./fungsi.php');
$domains = $_SERVER['HTTP_HOST'];
$asin = $_GET['id'];
$asin = strtoupper($asin);
$judul = $_GET['file'];
$folder = 'lp1';
switch ($negara) {
    case 'fr':
        $lpmodaltext = 'Vous devez créer un <span class="red">compte gratuit</span> afin de <span class="blue">télécharger</span> ou <span class="blue">lire en ligne</span>.';
        $lpmodalregister = 'Inscrivez-vous';
        break;
    case 'de':
        $lpmodaltext = 'Sie müssen ein <span class="red">kostenloses Konto</span> anlegen zum <span class="blue">download</span> und <span class="blue">online lesen</span> das Buch.';
        $lpmodalregister = 'Jetzt registrieren';
        break;
    case 'it':
        $lpmodaltext = 'È necessario creare un <span class="red">account gratuito</span> per <span class="blue">scaricare</span> e <span class="blue">leggere</span> online il libro.';
        $lpmodalregister = 'Registrati ora';
        break;
    case 'es':
        $lpmodaltext = 'Debe crear una <span class="red">cuenta gratis</span> para <span class="blue">descargar</span> y <span class="blue">leer el libro en línea.</span>';
        $lpmodalregister = 'Regístrate ahora';
        break;
    default:
        $lpmodaltext = 'You must create a <span class="red">free account</span><br> to <span class="blue">download</span> or <span class="blue">read online</span>.';
        $lpmodalregister = 'Signup Free Now!';
        break;
}
$txt = text_lang();
$numberofpages = $txt['numberofpages'];
$pagenya = $txt['pagenya'];
$author = $txt['author'];
$readol = $txt['read'].' ';
$title = $judul;
$thumbnail = $domains.'/'.$asin.'_500.jpg';
$gambarbesar = $domains.'/'.$asin.'_500.jpg';
$file = sanitize_title2($judul).'.pdf';
$ads = 'signup.php';
$upload = strtotime("last Week");
$uploaded = date("M d, Y H:i", $upload);
$visit = rand( 20000, 70000);
$visits = number_format($visit);
$downloads = number_format($visit * rand( 60, 90 ) / 100);
if($totalpages) {
    $filesize = number_format($totalpages * 7 / 180, 2);
}
header( "refresh:17;url=$ads" );
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta name=robots content="NOINDEX, NOFOLLOW"/>
<title><?php echo $readol . $title;?> - <?php echo $site_name; ?></title>
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' type='text/css' media='all' />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link rel='stylesheet' href='<?php echo $folder; ?>/main.css' type='text/css' media='all' />
</head>
<body>
<div class="row reader">
    <div class="ripple"></div>
    <div class="ripple"></div>
    <div class="ripple"></div>
    <div class="small-12 columns frame">
        <div class="row controls">
            <div class="small-12 medium-4 push-8 columns settings">
                <ul class="small-block-grid-4">
                    <li><i class="fa fa-font" aria-hidden="true"></i></li>
                    <li><i class="fa fa-search" aria-hidden="true"></i></li>
                    <li><i class="fa fa-list" aria-hidden="true"></i></li>
                    <li><i class="fa fa-bookmark" aria-hidden="true"></i></li>
                </ul>
            </div>
            <div class="small-12 medium-8 pull-4 columns warning">
                <div class="small-2 medium-1 columns icon-warning"></div>
                <div class="small-10 medium-11 columns">
                    <p>
                        <span><strong><?php echo $readol.' : '.$title; ?></strong></span>
                        <!--<span><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $uploaded; ?></span>-->
                        <span><?php if($totalpages) { ?><i class="fa fa-archive" aria-hidden="true"></i> <?php echo $filesize; ?>MB <?php } ?><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $visits; ?> views <i class="fa fa-download" aria-hidden="true"></i> <?php echo $downloads; ?> downloads</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row book">
            <div class="small-12 columns">
                <div class="previous"><span class="icon-left"></span></div>
                <div class="small-12 columns loading">Loading <ul id="loading" class="small-centered small-block-grid-6">
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                    </ul>
                </div>  

                        <div class="small-12 columns"><center><img alt="<?php echo $title;?>" id="coverImage" src="http://<?php echo $gambarbesar;?>" onerror="this.src='https://2.bp.blogspot.com/-cz9oiFeEKec/WpyuZBkASvI/AAAAAAAAAXI/9REDQsLNiY8VR7qrPvtl1eP_OMX06h6jQCPcBGAYYCw/s1600/text.jpg'" /></center></div>
                        <div class="next"><span class="icon-right"></span></div>
                        
                        <div id="account" class="reveal-modal" data-reveal>
                            <div class="row">
                                <div class="small-12 medium-4 columns text-center">
                                    <img style="width:100%" alt="<?php echo $title;?>" id="coverImage" src="http://<?php echo $gambarbesar;?>" onerror="this.src='/<?php echo spinText("{epub|pdf|mobi}");?>.png'" />
                                </div>
 <div class="small-12 medium-8 columns">
                               
                                    <p>
                                        <strong><?php echo $title;?></strong><br />
                                       <i class="fa fa-book" aria-hidden="true"></i> Format : <strong> PDF EPUB MOBI</strong><br />
                            Access to our library is limited to certain countries.
Please see if you are allowed to start <span class="blue"> READ </span> or <span class="blue"> DOWNLOAD </span> from our library by creating an account.</p>
                                                                      <center>  <p>
                                        <a data-href="<?php echo $ads;?>" id="continue" class="the-domain"><i class="fa fa-download" aria-hidden="true"></i> <?php echo $lpmodalregister; ?></a>
                                    </p></center> 
                                </div>
                            </div>
                        </div>


                    </div>
            </div>
        <div class="row progress">
            <div class="small-3 medium-2 large-1 columns page"><span>01</span></div>
            <div class="small-6 medium-8 large-10 columns bar">
                <div class="loading">
                    <div class="buffer"></div>
                    <div class="cursor"></div>
                </div>
            </div>
            <div class="small-3 medium-2 large-1 columns total"><?php echo rand(100,500); ?></div>
        </div>
    </div>
</div>
<script>WebFont.load({google: {families: ['Open Sans']}});</script>
<script type="text/javascript" src="<?php echo $folder; ?>/main.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.2/webfont.js"></script>
</body>
</html>