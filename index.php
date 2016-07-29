<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Chris Luk § Gamer | Otaku | Engineer</title>
		<!-- CSS -->
        <!--<link rel="icon" type="image/ico" src="img/fav.ico"/>-->
        <link rel='shortcut icon' href='img/fav.ico' type='image/x-icon'/ >
		<link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="Stylesheet" type="text/css" href="js/scroller/css/smoothDivScroll.css" />
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<!-- Skin -->
		<link rel="stylesheet" href="skins/light.css"  type="text/css" media="screen" id="css-skins" />
	</head>
	<body>
		<!-- Image buttons -->
		<ul id="image-buttons">
			<li id="close-image" class="poshytip" title="Close image" ></li>
			<li id="info-button" class="poshytip" title="Image info"></li>
		</ul>
		<!-- ENDS Image buttons -->	
		<!-- Navigation -->
		<div id="nav-wrapper">
			<ul id="nav" class="sf-menu">
				<li class="logo"><a href="/"><img style="margin-top:5px;" src="img/logo.png" alt="Luho" id="logo" ></a></li>
				<li class="current-menu-item"><a href="/">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Theme</a>
					<ul>
						<!--<li><a href="page.html">Sidebar page</a></li>
						<li><a href="page-fullwidth.html">Fullwidth page</a></li>
						<li><a href="page-wide.html">Wide layout</a></li>
						<li><a href="page-fixed-footer.html">Fixed footer page</a></li>
						<li><a href="index-fixed-footer.html">Fixed footer home</a></li>-->
						<li><a href="javascript:changeSkin('light')">Light</a></li>
                        <li><a href="javascript:changeSkin('dark')">Dark</a></li>
					</ul>
				</li>
				<li><a href="/void">Blog</a></li>
                <li><a href="/about.php">About</a></li>
				<li><a href="/contact.php">Contact</a></li>
				<li class="social">
					<!-- Social -->
					<a href="http://www.facebook.com/cel2971" target="_blank" class="poshytip  facebook" title="Facebook"></a>
					<a href="https://twitter.com/luhouru" target="_blank" class="poshytip  twitter" title="Twitter"></a>
                    <a href="skype:chris.luho?chat" class="poshytip  skype" title="Skype"></a>
					<a href="http://twitch.tv/luhouru" target="_blank" class="poshytip  forrst" title="Twitch"></a>
					<!-- ENDS Social -->
				</li>
				<li class="search-box">
					<form  method="get" id="searchform" action="#">
						<input type="text" value="WIP..." name="s" id="s" onfocus="defaultInput(this,'WIP...')" onblur="clearInput(this,'WIP...')" />
					</form>		
				</li>
			</ul>
		</div>
		<!-- Navigation -->
   	
		<!-- Scroll -->
		<div id="scroll-holder">
			<div id="makeMeScrollable">
                        <a href="http://www.crunchyroll.com/golden-time" target="_blank" title="Golden Time" ><img src="img/dummies/goldentime.png" alt="Golden Time" /></a>
						<a href="http://kissanime.to/Anime/Steins-Gate" target="_blank" title="Stein's Gate" ><img src="img/dummies/steinsgate.png" alt="Stein's Gate" /></a>
						<a href="http://www.crunchyroll.com/your-lie-in-april" title="Shigatsu Wa Kimi no Uso"><img src="img/dummies/swknu.png" alt="Your Lie in April" /></a>
						<a href="http://www.crunchyroll.com/rezero-starting-life-in-another-world-" target="_blank" title="Re:Zero" ><img src="img/dummies/rezero.png" alt="Starting Life in Another World" /></a>
						<a href="http://www.crunchyroll.com/relife" target="_blank" title="ReLIFE" ><img src="img/dummies/relife.png" /></a>
                        <a href="http://kissanime.to/Anime/Kyoukai-no-Kanata" target="_blank" title="Kyoukai no Kanata" ><img src="img/dummies/kyoukainokanata.png" alt="Kyoukai no Kanata" /></a>
						<a href="http://www.crunchyroll.com/sword-art-online" target="_blank" title="Sword Art Online" ><img src="img/dummies/sao.png" alt="Sword Art Online II" /></a>
                        <a href="http://kissanime.to/Anime/White-Album-2" target="_blank" title="White Album 2" ><img src="img/dummies/whitealbum2.png" alt="White Album" /></a>
						<a href="http://www.crunchyroll.com/orange" target="_blank" title="Orange" ><img src="img/dummies/orange.png" alt="Orange" /></a>
						<a href="http://www.crunchyroll.com/food-wars-shokugeki-no-soma" target="_blank" title="Shokugeki no Soma" ><img src="img/dummies/shokugeki.png" alt="Shokugeki no Soma" /></a>
                        <a href="http://myanimelist.net/anime/22319/Tokyo_Ghoul" target="_blank" title="Tokyo Ghoul" ><img src="img/dummies/tokyoghoul.png" alt="Tokyo Ghoul Root A" /></a>
						<a href="http://kissanime.to/Anime/Boku-no-Hero-Academia-My-Hero-Academia" target="_blank" title="Boku No Hero Academia" ><img src="img/dummies/bokunohero.png" alt="Boku No Hero" /></a>
                        <a href="http://myanimelist.net/anime/20507/Noragami" target="_blank" title="Noragami" ><img src="img/dummies/noragami.png" alt="Noragami Aragoto" /></a>
                        <a href="http://www.crunchyroll.com/akame-ga-kill" target="_blank" title="Akame Ga Kill!" ><img src="img/dummies/akamegakill.png" alt="Akame Ga Kill!" /></a>
                        <a href="http://kissanime.to/Anime/Hai-to-Gensou-no-Grimgar" target="_blank" title="Hai to Gensou no Grimgar" ><img src="img/dummies/grimgar.png" alt="Grimgar" /></a>
			</div>
		</div>
		<!-- ENDS Scroll -->


		<!-- image description -->
		<div id="image-description">
			<h2 class="title"></h2>
			<div class="desc"></div>
		</div>
		<!-- ENDS image description -->	
		
			
		<!-- Footer -->
		<div id="footer-container">
			<div id="footer-open"><a href="#"></a></div>
	         <div id="footer-overlay">
	         	<div id="footer-wrapper">
	         		<div class="footer-col">
	         			<h6>Currently Watching:</h6>
                        <?php include 'topfive.php';?>
	         		</div>
	         		<div class="footer-col">
	         			<h6>Recent Posts:</h6>
	         			<?php include 'blogpost.php';?>
	         		</div>
	         		
	         		<div id="tweets" class="footer-col tweet">
	         			<h6>Contact Me</h6>
	         			<p>Email:<br>
                        luk@chrisluk.im<br><br>
                        </p>
	         		</div>
	         	</div>
	         </div>
	         
	     </div>
	     <!-- ENDS Footer -->
	     
	    <!-- JS -->
		<!-- jQuery library - Please load it from Google API's -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" ></script>
		<!-- Smoothscroller -->
		<!-- jQuery UI Widget and Effects Core (custom download)
		     You can make your own at: http://jqueryui.com/download -->
		<script src="js/scroller/js/jquery-ui-1.8.23.custom.min.js" ></script>
		<!-- Latest version (3.0.6) of jQuery Mouse Wheel by Brandon Aaron
		     You will find it here: http://brandonaaron.net/code/mousewheel/demos -->
		<script src="js/scroller/js/jquery.mousewheel.min.js" ></script>
		<!-- jQuery Kinectic (1.5) used for touch scrolling -->
		<script src="js/scroller/js/jquery.kinetic.js" ></script>
		<!-- Smooth Div Scroll 1.3 minified-->
		<script src="js/scroller/js/jquery.smoothdivscroll-1.3-min.js" ></script>
		<!-- ENDS Smoothscroller -->
		<script src="js/quicksand.js"></script>
		<!-- prettyPhoto -->
		<script  src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script  src="js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->	
		<script  src="js/backstretch.js"></script>
		<script  src="js/custom.js"></script>
        
        
        
        
        <script type="text/javascript">
            window.onload = changeSkin('dark');
        </script>
        
        
        
        
        
        
        
        
        
        
		<!-- ENDS JS -->
	</body>
</html>