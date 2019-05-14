<?php
$domains = $_SERVER['HTTP_HOST'];
$asin = $_GET['id'];
$asin = strtoupper($asin);
$file = $_GET['file'];
$judul = $_GET['file'];
$asin = strtoupper($asin);
$ads = '/signup.php';
$gambar = $domains.'/'.$asin.'_500.jpg';
header( "refresh:5;url=/signup.php" );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name=robots content="NOINDEX, NOFOLLOW"/>
<script type="text/javascript">
//
</script>
<link rel="shortcut icon" type="image/x-icon" href="/wp-content/uploads/deslivres.ico">
<title><?php echo $judul;?></title>
 
<link href="/lp5/libros/bootstrap.min.css?ver=2.0.0" rel="stylesheet">
 
<link href="/lp5/libros/ie10-viewport-bug-workaround.css" rel="stylesheet">
 
<link href="/lp5/libros/jumbotron-narrow2.css" rel="stylesheet">
<link href="/lp5/libros/cssFacebookstyle.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
 
<script src="/lp5/libros/ie10-viewport-bug-workaround.js"></script>
 
<script type="text/javascript">
		window.onload = setTimeout(function(){
			 document.getElementById("openModal").style.opacity="1";
			document.getElementById("openModal").style.pointerEvents="auto";
		}, 4000);
	</script>
 
<script>	
		var begin = 389;
		var init = 0;
		var beginFb = getRandomArbitrary(1000, 2000);
		var initFb = addSeparator(beginFb);
		
		function getRandomArbitrary(min, max) {
			  return Math.floor(Math.random() * (max - min + 1)) + min;
		}
		
		function addSeparator(n){
			var rx=  /(\d+)(\d{3})/;
			return String(n).replace(/^\d+/, function(w){
				while(rx.test(w)){
					w= w.replace(rx, '$1.$2');
				}
				return w;
			});
		} 
		
		
		function getDate(){
			var monthNames = ["January", "February", "March", "April", "May", "June",
		  "July", "August", "September", "October", "November", "December"];
			var today = new Date();
			
			var dd = today.getDate();
			var mm = today.getMonth();
			
			var minutes = today.getMinutes();
			if (minutes < 10)  minutes = '0'+minutes;
			var hour = today.getHours();
			var yyyy = today.getFullYear();
			
			if(dd<10){
				dd='0'+dd
			}     
			var today = dd+' de '+ monthNames[mm]+' de '+yyyy+' a las '+hour+':'+minutes;
			return today;
		} 	
		function borrar(){
			document.getElementById('comentario').innerHTML="";
		}
		
		var disable=1;
		function FBcom(a,b) {
			setTimeout(function() {
				var separatorFb = beginFb++;	
				document.getElementById("fbcomentarios").innerHTML = (addSeparator(separatorFb))+" comentarios";
				var m = 0, n = true, op = 0;
				$(a+", "+a+" .comtxt, "+a+" .combot").slideDown(500);
				$().slideDown(500);
				var t = setInterval(function() {
					op += 0.2;
					$(a).css({"opacity":op});
					m++;
					if(m == 5) clearInterval(t);
				}, 100);
				if (disable<6){
			document.getElementById("fbdisable"+disable).style.display='none';		
			disable++;	
			}
			}, b);
			
		}
		function random(min, max) {
			return Math.round(Math.random() * (max - min) + min);
		}
		function checkZero(a) {
			if(a<10) {
				return "0"+a;
			} else {
				return a;
			}
		}
		function timer(a,b) {
			var min = checkZero(Math.round((a-30)/60));
			var sec = checkZero(a%60);
			$(b).html(min+":"+sec);
			var t = setInterval(function() {
				a--;
				min = checkZero(Math.round((a-30)/60));
				sec = checkZero(a%60);
				$(b).html(min+":"+sec);	
				if(a == 0) {
					clearInterval(t);
				}
			}, 1000);
			return false;
		}
		$(document).ready(function() {
			timer(231, "#timer");
			FBcom("#fb3",3000);
			FBcom("#fb4",6000);
			FBcom("#fb5",9000);
			FBcom("#fb6",12000);
			FBcom("#fb7",15000);
			var ct = 48;
			(function loop() {
				var rand = random(2500,5500);
				var ctrand = random(1,4);
				ct = ct - ctrand;
				if(ct > 1) {
					setTimeout(function() {
						loop();  
					}, rand);
				} else {
					ct = "few";
				}
				$("#count").html(ct);
			}());
		});
	</script>

<script type="text/javascript">
    (function(window, location) {
        history.replaceState(null, document.title, location.href+"#!");
        history.pushState(null, document.title, location.href);
        window.addEventListener("popstate", function(a,b,c) {
            if(location.hash == '#!')
            {
                history.replaceState(null, document.title, location.href);
                setTimeout(function(){
                    alert('¡You are not registered yet!\n\nTo download the book in PDF file format you need create a free account.');
                    location.replace('/signup.php');
                	},0);
            	}
        	}, false);
    	}(window, location));
	</script>
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="/lp5/libros/ie-emulation-modes-warning.js"></script>
<style type="text/css">.text-center.popup_text.up_popup{width:80%;margin-left:10%;}@media screen and (min-width:0\0) {.marketing{margin-right:15%;margin-left:15%;}}</style>


</head>
<body>
<div class="header clearfix">
<div class="container">
<h3 class="text-muted">
<div class="colIzq inline width100">
<a href="#openModal">
<img src="/lp5/libros/book.png" width="75" height="75" class="online_image" style="display:inline-block">
</a>
<div class="inline centerTitleMobile" style="margin-left:10px;">
<a href="#openModal"><h4 class="width100 textAlignCenterMobile "><?php echo $judul;?></h4></a>
<a href="#openModal"><h5 class="fontsize11 textAlignCenterMobile"><?php echo number_format(rand( 5000, 25000)); ?> Téléchargements | <?php echo number_format(rand( 10000, 75000)); ?> Visites</h5></a>
</div>
</div>
<div class="colDer inline width100">
<div class="inline centerLanding centerPortrait">
<div class="infostatics centerPortrait">
<div class="imdb_r alignRightStars">
<div class="b">
<a href="#openModal">
<span class="thin b-thin"></span>
<div class="bar"><span style="width: 96%;"></span></div>
</a>
</div>
</div>
<div class="alignRight centerPortrait">
<a href="#openModal">
<span class="bold"><strong>(<?php echo number_format(rand( 1000, 5000)); ?> avis des utilisateurs)</strong></span>
</a>
</div>
</div>
<div class="infostatics alignRight centerPortrait">
<a href="#openModal" style="padding-left: 10px;"><img src="/lp5/libros/fbicon.png" width="24" height="24" class="img-responsive" style="display:inline-block">
<span class="thin"><?php echo number_format(rand( 5000, 10000)); ?></span></a>
<a href="#openModal"><img src="/lp5/libros/twittericon.png" width="24" height="24" class="img-responsive" style="display:inline-block">
<span class="thin"> <?php echo number_format(rand( 5000, 15000)); ?></span></a>
<a href="#openModal"><img src="/lp5/libros/gplusicon.png" width="24" height="24" class="img-responsive" style="display:inline-block">
<span class="thin"><?php echo number_format(rand( 2000, 15000)); ?></span></a>
</div>
</div>
</div>
</h3>
</div>
</div>
<div class="container">
<div class="row marketing">
<div class="col-lg col-border">
<div class="col-upper">
<a href="#openModal"><img src="/lp5/libros/info.png" width="55" height="55" class="online_image" style="display:inline-block"></a>
<div class="col-upper-title">
<a href="#openModal"><h4><strong><?php echo $judul;?>.pdf</strong></h4></a>
<h6>N° page: <?php echo $totalpages;?> | Taille du fichier: 3.<?php echo number_format(rand( 10, 70)); ?>MB</h6>
</div>
<div class="col-upper-icons">
<a href="#openModal"><i class="fa fa-font" aria-hidden="true"></i></a>
<a href="#openModal"><i class="fa fa-search" aria-hidden="true"></i></a>
<a href="#openModal"><i class="fa fa-bookmark" aria-hidden="true"></i></a>
<a href="#openModal"><i class="fa fa-bars" aria-hidden="true"></i></a>
</div>
</div>
<a href="#openModal">

<img alt="<?php echo $title;?>" id="coverImage" src="http://<?php echo $gambarbesar;?>"onerror="this.src='/lp5/libros/text.png'"class="img-responsive" style="margin-bottom: 40px;padding-top:30px; display: inherit; width: 100%;"></a>
<div class="col-lg slider-col">
<a href="#openModal"><div class="slider-side">
01
</div></a>
<a href="#openModal"><div class="slider" id="slider">
<input class="bar" type="range" id="rangeinput" value="0" min="0" max="<?php echo $totalpages;?>"/>
</div></a>
<a href="#openModal"><div class="slider-side">
<?php echo $totalpages;?> </div></a>
</div>
</div>
<div class="col-lg">
<div class="container fbcoms2">
<div class="fbcoms">
<p class="comments">Comments:</p>
<div class="_491z clearfix"><div class="_ohe lfloat"><span><span class=" _50f7" id="fbcomentarios"><script>document.write(initFb);</script> commentaires</span></span></div><div class="_ohf rfloat"><div><span class="_pup">
Trier par</span><span> </span><div class="_3-8_ _6a _6b"><div class="uiPopover _6a _6b"><a class="_p _55pi _5vto _55_p _2agf _p _55pi _5vto _55_p _4jy0 _4jy3 _517h _51sy _42ft" href="#" style="max-width: 200px;" role="button"><span class="_55pe" style="max-width: 186px;"><span>Más nuevo</span></span><i class="_3-99 img sp_0A2HRZak45J sx_552b08"></i></a></div><input type="hidden" value="time"></div></div></div></div>
<div class="_4uyl _1zz7 _2392 clearfix"><div class="_ohe lfloat"><a href="" target="_blank" class="img _8o _8s UFIImageBlockImage"><img class="_1ci" src="/lp5/libros/unknown.jpg" width="48" height="48"></a></div><div class=""><div class="UFIImageBlockContent _42ef"><div><div class="UFIInputContainer"><div class="_1cb _5yk1"><div class="_5yk2" tabindex="-2"><div class="_5yw9"><div class="_5ywb"><div id="comentario" class="_3br6">
Add a comment...</div></div><div class="_5ywa"><div contenteditable="true" aria-autocomplete="list" aria-expanded="false" aria-haspopup="false" aria-owns="js_0" class="_54-z" role="combobox" spellcheck="false" title="Add a comment..."><div data-contents="true"><div data-block="true" data-offset-key="f22nd-0-0" class="_209g _2vxa" onclick="borrar()"><span data-offset-key="f22nd-0-0"><br data-text="true"></span></div></div></div></div></div></div></div><div class="UFICommentAttachmentButtons clearfix"></div></div></div></div></div></div>
<div class="_4uym"></div>
<div id="fb10" class="item hiddenFb">
<img class="profileimg" src="/lp5/libros/img13.jpg" width="50" height="50">
<p class="comtxt"><span class="name">Luis Calderon</span> <br>uuff excellente page pour télécharger des ebooks</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · </span><span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div id="fb9" class="item hiddenFb">
<img class="profileimg" src="/lp5/libros/img12.jpg" width="50" height="50">
<p class="comtxt"><span class="name">Alexander Santander</span> <br>
Personnellement cette page ne m'a pas donné de problèmes, sauf pour quelques livres. Je pense que je continue à visiter cette page et pour 1 an et je le recommande à 100%. salutations</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · </span><span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div id="fb8" class="item hiddenFb">
<img class="profileimg" src="/lp5/libros/img11.jpg" width="50" height="50">
<p class="comtxt"><span class="name">Victor Vizcaya</span> <br>Merci pour offrir livre gratuit * - *</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · </span><span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div id="fb7" class="item hiddenFb">
<img class="profileimg" src="/lp5/libros/img10.jpg" width="50" height="50">
<p class="comtxt"><span class="name">Clara Hurtado</span> <br>aleluyaaa! Je trouve enfin une page où vous pouvez télécharger des livres dans le format correct</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · </span><span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div id="fb6" class="item hiddenFb">
<img class="profileimg" src="/lp5/libros/img9.jpg" width="50" height="50">
<p class="comtxt"><span class="name">Ana Nicolás</span><br>q dieu bon est ce livre, l'un des meilleurs que je l'ai lu jusqu'à présent</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · </span><span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div id="fb5" class="item hiddenFb">
<img class="profileimg" src="/lp5/libros/img8.jpg" width="50" height="50">
<p class="comtxt" style="display: block;"><span class="name">Nacho Marin Alonso</span><br>Merci pour ce lien finaly je peux télécharger un livre en bon PDF de qualité :)))</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · <img src="/lp5/libros/like.png" width="13" height="15"> <script>document.write(addSeparator(getRandomArbitrary(1,2)));</script> · </span><span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div id="fb4" class="item hiddenFb">
<img class="profileimg" src="/lp5/libros/img7.jpg" width="50" height="50">
<p class="comtxt" style="display: block;"><span class="name">Monica Marin Garcia</span><br>
lol bon livre, peut-être la fin haha</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · <img src="/lp5/libros/like.png" width="13" height="15"> <script>document.write(addSeparator(getRandomArbitrary(2,3)));</script> · </span><span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div id="fb3" class="item hiddenFb">
<img class="profileimg" src="/lp5/libros/img6.jpg" width="50" height="50">
<p class="comtxt" style="display: block;"><span class="name">Marta Esteban</span><br>enfin je trouve le livre que je cherchais et libérer !!!</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · <img src="/lp5/libros/like.png" width="13" height="15"> <script>document.write(addSeparator(getRandomArbitrary(2,4)));</script> · </span><span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div class="item" id="fbdisable5">
<img class="profileimg" src="/lp5/libros/img5.jpg" width="50" height="50">
<p class="comtxt" style="display: block;"><span class="name">Esther Lopez</span><br>
Ils ont d'excellents livres que j'aime. Continuez comme ça!!</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · <img src="/lp5/libros/like.png" width="13" height="15"> <script>document.write(addSeparator(getRandomArbitrary(4,6)));</script> · </span><span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div class="item" id="fbdisable4">
<img class="profileimg" src="/lp5/libros/img4.jpg" width="50" height="50">
<p class="comtxt" style="display: block;"><span class="name">Naty Rangel</span> <br>Excellente livre, je l'ai aimé :) </p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · <img src="/lp5/libros/like.png" width="13" height="15"> <script>document.write(addSeparator(getRandomArbitrary(6,10)));</script></span> · <span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div class="item" id="fbdisable3">
<img class="profileimg" src="/lp5/libros/img3.jpg" width="50" height="50">
<p class="comtxt"><span class="name">Ana Gabriela Gonzales</span><br>ooooh que plus grand livre !!! recommandé !!! J'ai cherché sans problème</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · <img src="/lp5/libros/like.png" width="13" height="15"> <script>document.write(addSeparator(getRandomArbitrary(10,20)));</script></span> · <span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div class="item" id="fbdisable2">
<img class="profileimg" src="/lp5/libros/img2.jpg" width="50" height="50">
<p class="comtxt"><span class="name">Andrés Aguirre</span><br>Très bon livre!</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · <img src="/lp5/libros/like.png" width="13" height="15"> <script>document.write(addSeparator(getRandomArbitrary(20,30)));</script> </span> · <span><abbr class="livetimestamp" data-utime="1445915977" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div class="item" id="fbdisable1">
<img class="profileimg" src="/lp5/libros/img1.jpg" width="50" height="50">
<p class="comtxt"><span class="name">Israel Aguilera</span><br>Finaly i ai tous mes livres préférés gratuitement ici.!! haha</p>
</p>
<div class="_2vq9 fsm fwn fcg"><a href="#">Like</a><span> · </span><a href="#">Reply</a><span> · <img src="/lp5/libros/like.png" width="13" height="15"> <script>document.write(addSeparator(getRandomArbitrary(30,40)));</script> </span> · <span><abbr class="livetimestamp" data-shorten="true"><script>document.write(getDate());</script></abbr></span></div>
</div>
<div class="_5o4h"><a href="#openModal"><button class="_1gl3 _4jy0 _4jy3 _517h _51sy _42ft" role="button" type="submit" value="1"><span>Cargar 10 comentarios más</span></button></a></div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer">
<img src="/lp5/libros/norton-secured.jpg" class="img-responsive footer-img">
<p>&copy; 2018 - PDF LIBRARY</p>
</footer>
<div id="openModal" class="modalDialog">

<div class="modal-body">
<img src="http://<?php echo $gambar; ?>" class="img-responsive modal-img"onerror="this.src='/pdf.png'">
<div class="modal-title">
<a href="<?php echo $ads;?>"rel="nofollow"><strong><h4><?php echo $judul;?></h4></strong></br>
<center><b>Free Membership Registration</b></center>
<br>
<b>CREATE FREE ACCOUNT</b><br>
to <b>READING</b> or <b>DOWNLOAD</b></a>
<a class="btn btn-primary descargarmp3" rel="nofollow" onclick="location.href='<?php echo $ads;?>';">SIGNUP FREE NOW
 &#x27A4;
</a>
</br>
   <a href="/login.php"rel="nofollow">Already Member Visit here</a>
<img src="/lp5/libros/secure-dark.png?ver=2.0.0" class="img-responsive" style="width: 70%;">

</div>

</div>
<div style="text-align: left;">
<a href="/"><strong>⬅️ ️Back to Homepages</strong></a></div>
</div>

</body>
</html> 
 