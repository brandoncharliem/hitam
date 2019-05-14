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
$judulpdf		=	$titlenya;
$judulpdf = str_replace(' ', '-', $judulpdf);
$txt = text_lang();
$gambar = $domains.'/'.$asin.'_500.jpg';

?><!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $judul; ?> <?php echo spinText("{☀|☁|☂|☃|☄|★|☆|☇|☈|☉|☊|☋|☌|☍|☘|☙|☚|☛|☝|☟|☠|☡|☢|☣|☤|☥|☦|☧|☨|☩|☪|☫|☬|☭|☮|☯|☸|☹|☺|☻|☼|☽|☾|☿|♀|♁|♂|♃|♄|♅|♆|♇|♈|♉|♊|♋|♌|♍|♎|♏|♐|♑|♒|♓|♔|♕|♖|♗|♘|♙|♚|♛|♜|♝|♞|♟|♠|♣|♥|♦|♪|♫|♭|♯|⛉|⛊|⛋|⛌|⛒|⛕|⛖|⛗|⛘|⛙|⛚|⛛|⛜|⛝|⛞|⛣|⛨|⛩|⛫|⛬|⛭|⛮|⛯|⛰|⛶|⛻|⛼}");?><?php echo spinText("{Epub|Pdf|Mobi}");?> <?php echo spinText("{☀|☁|☂|☃|☄|★|☆|☇|☈|☉|☊|☋|☌|☍|☘|☙|☚|☛|☝|☟|☠|☡|☢|☣|☤|☥|☦|☧|☨|☩|☪|☫|☬|☭|☮|☯|☸|☹|☺|☻|☼|☽|☾|☿|♀|♁|♂|♃|♄|♅|♆|♇|♈|♉|♊|♋|♌|♍|♎|♏|♐|♑|♒|♓|♔|♕|♖|♗|♘|♙|♚|♛|♜|♝|♞|♟|♠|♣|♥|♦|♪|♫|♭|♯|⛉|⛊|⛋|⛌|⛒|⛕|⛖|⛗|⛘|⛙|⛚|⛛|⛜|⛝|⛞|⛣|⛨|⛩|⛫|⛬|⛭|⛮|⛯|⛰|⛶|⛻|⛼}");?><?php echo spinText("{☀|☁|☂|☃|☄|★|☆|☇|☈|☉|☊|☋|☌|☍|☘|☙|☚|☛|☝|☟|☠|☡|☢|☣|☤|☥|☦|☧|☨|☩|☪|☫|☬|☭|☮|☯|☸|☹|☺|☻|☼|☽|☾|☿|♀|♁|♂|♃|♄|♅|♆|♇|♈|♉|♊|♋|♌|♍|♎|♏|♐|♑|♒|♓|♔|♕|♖|♗|♘|♙|♚|♛|♜|♝|♞|♟|♠|♣|♥|♦|♪|♫|♭|♯|⛉|⛊|⛋|⛌|⛒|⛕|⛖|⛗|⛘|⛙|⛚|⛛|⛜|⛝|⛞|⛣|⛨|⛩|⛫|⛬|⛭|⛮|⛯|⛰|⛶|⛻|⛼}");?>- <?php echo strtoupper( $domains ); ?></title>
        <meta property="og:title" content="<?php echo $judul.' - '.$site_name; ?>">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="/ebook.ico">
        <style>.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5{position:relative;min-height:1px;padding-right:10px;padding-left:10px}.col-xs-5{width:20%;float:left}@media (min-width: 768px){.col-sm-5{width:20%;float:left}}@media (min-width: 992px){.col-md-5{width:20%;float:left}}@media (min-width: 1200px){.col-lg-5{width:20%;float:left}}.thumbnail{text-align:center;padding:10px}.thumbnail img{max-width: 100%;height:auto}.header{border-bottom:1px solid #ddd;margin-bottom:15px;padding-bottom:15px}.download{overflow:hidden;text-align:center}.download h3{display:inline-block;padding:0 15px;position:relative}.download h3:after,.download h3:before{background:#ddd;content:"";display:block;height:1px;position:absolute;top:50%;width:400%}.download h3:before{right:100%}.download h3:after{left:100%}.btn-group{margin-bottom: 15px}.footer{background:#f8f8f8;border-top:1px solid #e7e7e7;margin-top:15px;padding:15px;}
.form-wrapper-01 {
    background-color: #f3f3f3;
    width: 100%;
    max-width: 450px;
    position: relative;
    display: block;
    text-align: right;
    padding: 10px;
}

#search {
    background-color: #ff0000;
    position: absolute;
    left: 10px;
    right: 100px;
}

#search input {
    width: 100%;
}

#submit {
    width: 80px;
}
.modal-header, h4, .close {
      background-color: dodgerblue;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  
</style>

    </head>
    <body>
        <?php include('header.php'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel-heading" style="padding: 5px;">
                        <ol class="breadcrumb">
                          <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/"><span itemprop="title">Home page</span></a></li>
                          <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/<?php echo $single."/".$asin."-".sanitize_title2($judul).""; ?>"><span itemprop="title"><?php echo $judul; ?></span></a></li>
                        </ol>
                    </div>
                    <div class="content">
                        <div class="header">
<h1><?php echo $judul; ?></h1>
            <span style=color:#666;font-size:small><div itemscope itemtype=http://data-vocabulary.org/Review-aggregate><span itemprop=itemreviewed><?php echo $domains; ?></span> <img itemprop=photo src="/favicon.ico"> <span itemprop=rating itemscope itemtype=http://data-vocabulary.org/Rating><span itemprop=average>9</span> out of <span itemprop=best>10</span></span> based on <span itemprop=votes><?php echo rand(1,10);?>00</span> ratings. <span itemprop=count><?php echo rand(1,10);?>00</span> user reviews.</div></span>           
</div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div class="thumbnail"><img src="http://<?php echo $gambar; ?>"onerror="this.src='/<?php echo spinText("{epub|pdf|mobi}");?>.png'"width="235" height="304"/><div class="caption"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <b>Descriptions de livres:</b>
                <p><?php echo $judul; ?> C'est un bon choix pour vous qui recherchez une expérience de lecture agréable. Nous espérons que vous apprécierez lire ce livre</p>
</a>

</div></div>

</div>

                            </div>
                            <div class="col-md-8">

                               
<div class="download">
                                    <h3>Télécharger Gratuit</h3>
<ul>
<li><?php echo $judul; ?> PDF</li>
<li><?php echo $judul; ?> EPUB</li>
<li><?php echo $judul; ?> MOBI</li>
<ul>
<center> <a href="/read.php?id=<?php echo $asin;?>&file=<?php echo $judul; ?>"rel="nofollow"> <h2>DOWNLOAD BOOK HERE</h2></a></center>


<center><a href="/<?php echo $judulpdf; ?>.pdf"rel="follow"> <h3>DOWNLOAD PDF BOOK HERE </h3></a></center>                                
<center><a href="/<?php echo $judulpdf; ?>.doc"rel="follow"> <h3>DOWNLOAD DOC BOOK HERE </h3></a></center>
<center><a href="/<?php echo $judulpdf; ?>.rtf"rel="follow"> <h3>DOWNLOAD RTF BOOK HERE </h3></a></center>
<center><a href="/<?php echo $judulpdf; ?>.pdf"rel="follow"> <h3>DOWNLOAD EPUB BOOK HERE </h3></a></center>

                                </div>
<center><b><font color="blue"><i class="fa fa-check"></i></font> Tous les genres disponibles</b></center>
                                Arts et divertissements - Biographies et mémoires - Affaires et finances - Enfants et adolescents - Bandes dessinées et romans graphiques - Ordinateurs et Internet - Livres de cuisine, gastronomie et vin - Fiction et littérature - Santé, esprit et corps - Histoire - Humour - Style de vie et maison - Mystères et Thrillers - Non-fiction - Parents - Politique et actualité - Professionnel et technique - Référence - Religion et spiritualité - Romance - Science-fiction et fantastique - Science et nature - Sports et plein air - Voyages et aventures  <br>	
<b>Free Download <?php echo $judul; ?></b> <br>
<b>تحميل مجاني <?php echo $judul; ?></b> <br>
<b>Gratis nedlasting <?php echo $judul; ?></b> <br>
<b>Gratis download <?php echo $judul; ?></b> <br>
<b>Kostenfreier Download <?php echo $judul; ?></b> <br>
<b>無料ダウンロード <?php echo $judul; ?></b> <br>
<b>Download gratuito <?php echo $judul; ?></b> <br>
<b>Téléchargement Gratuit <?php echo $judul; ?></b> <br>
<b>ดาวน์โหลดฟรี <?php echo $judul; ?></b> <br>
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
  $urlrss    = 'http://www.bing.com/search?q='.urlencode(limit_words($judul,5)).'&count=10&first='.$firstx.'&format=rss';
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
<?php echo randomKeywords();?>
<?php agclist();?>


                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-3">
<form class="form-wrapper-01" method="get" action="/search"target="_blank" role="search">
    <div id="search">
       <input class="search-input" type="search" name="file" placeholder="Search Here..">    </div>
    <input id="submit" type="submit" value="Search" />
</form>
                    <ul class="list-group">

                        <li class="list-group-item list-group-item-success">Recent Downloads</li>
                            <?php poplist();?>
                    </ul>
                </div>
            </div>
        </div>
<?php include('footer.php'); ?>
    </body>
</html>