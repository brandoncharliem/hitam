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
?><!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $judul.' - '.$site_name; ?> - <?php echo strtoupper( $domains ); ?></title>
        <meta name="description" content="<?php echo proses_konten($txt['smdesc'], $item); ?>">
        <meta property="og:title" content="<?php echo $judul.' - '.$site_name; ?>">
        <meta property="og:description" content="<?php echo proses_konten($txt['smdesc'], $item); ?>">
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
<h1>DOWNLOAD PDF EPUB MOBI</h1>
<span style=color:#666;font-size:small><div itemscope itemtype=http://data-vocabulary.org/Review-aggregate><span itemprop=itemreviewed><?php echo $domains; ?></span> <img itemprop=photo src="/favicon.ico"> <span itemprop=rating itemscope itemtype=http://data-vocabulary.org/Rating><span itemprop=average>9</span> out of <span itemprop=best>10</span></span> based on <span itemprop=votes><?php echo number_format(rand( 100, 1000)); ?></span> ratings. <span itemprop=count><?php echo number_format(rand( 1000, 5000)); ?></span> user reviews.</div></span>                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div class="thumbnail"><img src="http://<?php echo $gambar; ?>"onerror="this.src='/<?php echo spinText("{epub|pdf|mobi}");?>.png'"width="235" height="304"/><div class="caption"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <b>Book Descriptions:</b>
                <p><?php echo $judul; ?>.</p>
</a>

</div></div>

</div>

                            </div>
                            <div class="col-md-8">
<h3>Welcome to the best book library:</h3><br>
<font color="green"><i class="fa fa-check"></i></font> All your favorite books and authors in one place!<br> 
<font color="green"><i class="fa fa-check"></i></font> Over 10 million titles covering all genres in our book directory.<br>
<font color="green"><i class="fa fa-check"></i></font> New titles are added every day! We like to keep things fresh.<br>
<font color="green"><i class="fa fa-check"></i></font> Free Joint to access PDF files, eBooks, ePubs, eMagazines and more.<br><br>
<center><img class="img-responsive" src="/award.png"></center>	
                               
<div class="download">
                                    <h3>Download<small> Your file is ready read them now.</small></h3>
                                <center> <a rel="nofollow" href="/file.php?id=<?php echo $asin;?>&file=<?php echo $judul; ?>"> <img class="img-responsive" src="/<?php echo rand(1,3);?>.png"></a></center>
                                    
                                </div>
<center><b><font color="blue"><i class="fa fa-check"></i></font> All Genre Available</b></center>
                                Arts & Entertainment - Biographies & Memoirs - Business & Finance - Kids & Teens - Comics & Graphic Novels - Computers & Internet - Cookbooks, Food & Wine - Fiction & Literature - Health, Mind & Body - History - Humor - Style Life and Home - Mysteries and Thrillers - Non-Fiction - Parents - Politics and Current Affairs - Professional and Technical - Reference - Religion and Spirituality - Romance - Science Fiction and Fantasy - Science and Nature - Sports and Outdoors - Travel and Adventure <br>


<center><b><font color="blue"><i class="fa fa-check"></i></font> Multi-format Available</b></center>
                              <center><img class="img-responsive" src="/multi.png"></center>	


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
<?php include('histats.php'); ?>
    </body>
</html>