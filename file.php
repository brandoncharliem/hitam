<?php
$domains = $_SERVER['HTTP_HOST'];
$asin = $_GET['id'];
$asin = strtoupper($asin);
$judul = $_GET['file'];
$thumbnail = $domains.'/'.$asin.'_500.jpg';
$gambarbesar = $domains.'/'.$asin.'_500.jpg';
$ads = '/signup.php';
header( "refresh:10;url=$ads" );
?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta name="robots" content="noindex,nofollow">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="language" content="EN">
  <title>&#10148; Download <?php echo $judul; ?></title>
  <link href="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/css/comment.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/asset/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="/asset/icon.png">
  <style>

		.panel-footer {background:#fff;}
		h4 small, .h4 small {color:green;}

		.panel-top {
			background: #3579f5 none repeat scroll 0 0;
			color: #fff;
			font-size: 11pt;
			font-weight: bold;
			padding:5px 15px;
			text-align:center;
		}
  </style>
</head>

<body>
  <div id="body">
     <div class="container">
      <div id="scroll">
        <div class="col-md-offset-2 col-md-8 col-sm-12">
          <div class="panel">
						<div class="panel-top">
							<center><h1><?php echo $judul; ?></h1></center>
            </div>
            <div id="input">
              <div class="panel-body" id="description">
                <div class="row">
                  <div class="topreader">
                    <img class="img-responsive" src="/asset/readertop.jpg" />
                  </div>
                  <div class="reader">
                    <img class="img-responsive" src="http://<?php echo $domains;?>/<?php echo $asin;?>_500.jpg"onerror="this.src='/asset/page<?php echo rand(1,11); ?>.jpg'"/>
                  </div>
                  <div class="topreader">
                    <img class="img-responsive" src="/asset/readerbottom.jpg" />
                  </div>
                </div>
              </div>

              <div class="panel-footer">
            								<b>Comment ça marche:</b>
								<ul>
									<li><kbd>1.</kbd> Inscrivez-vous GRATUITEMENT le 1er mois.</li>
									<li><kbd>2.</kbd> Téléchargez vos livres préférés</li>
									<li><kbd>3.</kbd> Facile d'annuler votre adhésion.</li>
    									<li><kbd>4.</kbd> Joint avec plus de 80.000 membres heureux.</li>
								</ul>


					<!-- <p style="font-size:11px;" align="justify"><b style="font-size:13px;">Note:</b>
Si vous n'êtes toujours pas sûr du service, vous pouvez choisir le service d'essai GRATUIT. Toi peut annuler à tout moment. Vous pouvez également trouver un support client par e-mail ou par téléphone la page suivante et demander plus de détails sur la disponibilité de ce livre. Cliquez sur le bouton "CONTINUER" pour continuer.
</p> -->
              </div>
            </div>



            <div class="panel-body" id="console" style="display: none;">
              <code class="command"></code>
            </div>


            <div class="panel-footer">
              <div class="row">
                <div id="fbFeedbackContent">

								<center><a rel="nofolow" href="/">Home</a> | <a rel="nofolow" href="/contact">Contact</a> | <a rel="nofolow" href="/dmca">DMCA</a> | <a rel="nofolow" href="/privacy.html">Privacy and Policy</a></center>

                  <hr>
                     <!-- start comment -->
        <div id="fbFeedbackContent">
          <div class="top"> <strong>17 Comments</strong> <a href="/login.php" onClick="JavaScript:alert('You must login before commenting')">Add a comment</a> </div>
          <ul>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/korryn-mcminn.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Korryn McMinn</a><span></span>
                <p>Finally I can download and read this ebook. Thank you!</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('You must login before commenting')">Like</a> · <a class="like"><i></i> 1</a> · <a href="/login.php" onClick="JavaScript:alert('You must login before commenting')">Reply</a> · 1 hr</div>
              </div>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/tara-leigh.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Tara Leigh</a> <span></span>
                <p>¡Estoy muy emocionado de haber encontrado esta biblioteca! muchas gracias</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('You must login before commenting')">Like</a> · <a class="like"><i></i> 12</a> · <a href="/login.php" onClick="JavaScript:alert('You must login before commenting')">Reply</a> · 1 hr</div>
              </div>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/kate-desjardins.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Kate Desjardins</a>
                <p>I don't think it will worked, but my best friend showed me this site and it does! I received my most wanted books</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('You must login before commenting')">Like</a> · <a class="like"><i></i> 2</a> · <a href="/login.php" onClick="JavaScript:alert('You must login before commenting')">Reply</a> · 1 hr</div>
              </div>
              <ul>
                <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/lauren-armstrong.jpg" alt=""></a>
                  <div class="postContainer"> <a href="/login.php">Lauren Armstrong</a>
                    <p>My friends are so angry because they don't know how I have all this high quality ebooks. And I still keep silent haha...</p>
                    <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('You must login before commenting')">Like</a> · <a class="like"><i></i> 2</a> · <a href="/login.php" onClick="JavaScript:alert('You must login before commenting')">Reply</a> · 48 min</div>
                  </div>
                </li>
              </ul>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/kirsty-watson.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Kirsty Watson</a> <span></span>
                <p>It's very easy to get high quality ebooks here, thanks! ;)</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('You must login before commenting')">Like</a> · <a class="like"><i></i> 2</a> · <a href="/login.php" onClick="JavaScript:alert('You must login before commenting')">Reply</a> · 3 hrs</div>
              </div>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/nancy-edwards-jenkins.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Nancy Edwards Jenkins</a> <span></span>
                <p>I just wanna say one word... WONDERFUL!! thanks you!</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('You must login before commenting')">Like</a> · <a class="like"><i></i> 2</a> · <a href="/login.php" onClick="JavaScript:alert('You must login before commenting')">Reply</a> · 3 hrs</div>
              </div>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/natascha-durham-bivens.jpg" alt=""> </a>
              <div class="postContainer"> <a href="/login.php">Natascha Durham Bivens</a> <span></span>
                <p>das ist mein Lieblingsort, um Romane herunterzuladen</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('You must login before commenting')">Like</a> · <a class="like"><i></i> 2</a> · <a href="/login.php" onClick="JavaScript:alert('You must login before commenting')">Reply</a> · 5 hrs</div>
              </div>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/lynda-dearing.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Lynda Dearing</a> <span></span>
                <p>Je ne comprends pas!</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('You must login before commenting')">Like</a> · <a class="like"><i></i> 1</a> · <a href="/login.php" onClick="JavaScript:alert('You must login before commenting')">Reply</a> · 8 hrs</div>
              </div>
              <ul>
                <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/brian-laffitte.jpg" alt=""></a>
                  <div class="postContainer"> <a href="/login.php">Brian Laffitte</a>
                    <p>Cliquez Create my account et créez un compte gratuit :)</p>
                    <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('You must login before commenting')">Like</a> · <a class="like"><i></i> 17</a> · <a href="/login.php" onClick="JavaScript:alert('You must login before commenting')">Reply</a> · 8 hrs</div>
                  </div>
                  <br />
                  <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/erin-victoria-zimmerman.jpg" alt=""></a>
                  <div class="postContainer"> <a href="/login.php">Erin Victoria Zimmerman</a>
                    <p>lol il ne m'a même pas fallu 5 minutes pour m'inscrire! XD</p>
                    <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('You must login before commenting')">Like</a> · <a class="like"><i></i> 13</a> · <a href="/login.php" onClick="JavaScript:alert('You must login before commenting')">Reply</a> · 8 hrs</div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
    <!-- end comment --> 
                </div>
              </div>

            </div>
          </div>



        </div>



				<div class="col-md-offset-2 col-md-8">

				</div>
      </div>

		</div>
  </div>
 	<div class="overlay">
	<div class="ct">
   <p><span class="blue">Inscription gratuite</span></p>
	<center><p>Vous devez créer un <span class="red">COMPTE GRATUIT</span> afin de continuer <span class="blue">LIRE</span> ou <span class="blue">TÉLÉCHARGER
</span>
    <br> <br>
	<a href="<?php echo $ads;?>" rel="nofollow" id="continue" class="x-domain clone">CONTINUER &#10148;</a>
<br>
	</p><div class="secure"><img src="/asset/secure-icon.png" /> Secure Verified</div>

<hr>
  <p style="margin-top:3px;font-size:10px;">
    </p><center><a rel="nofolow" href="http://frpdflib.website">HOME</a> - <a href="http://frpdflib.website/contact" rel="nofollow"target"_blank">Contact</a> - <a href="http://frpdflib.website/privacy" rel="nofollow">Privacy</a> - <a href="http://frpdflib.website/dmca" rel="nofollow">DMCA</a>
</center>
  <p></p>


	</center></div>

	</div>


<script type="text/javascript">
window.onload = function() {
document.body.innerHTML += '<div id="overlay" style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: #000;filter:alpha(opacity=1);-moz-opacity:0.5;-khtml-opacity: 0.5;opacity: 0.01;z-index: 10;"></div>';
}
</script>
<?php include('histats.php'); ?>
</body>
</html>