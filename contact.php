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
					<a href="http://www.facebook.com/luhouru" target="_blank" class="poshytip  facebook" title="Facebook"></a>
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
   	<div id="page-wrap">
				
			<!-- content -->
			<div id="content">
				<h2 class="title-divider">Contact Me</h2>			
				<!-- form -->
				<script type="text/javascript" src="js/form-validation.js"></script>
				<form id="contactForm" action="#" method="post">
					<fieldset>
						<div>
							<input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
							<label>Name</label>
						</div>
						<div>
							<input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
							<label>Email</label>
						</div>
						<div>
							<textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
						</div>
						
						<!-- send mail configuration -->
						<input type="hidden" value="youremail@server.com" name="to" id="to" />
						<input type="hidden" value="From elliot wordpress online" name="subject" id="subject" />
						<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
						<!-- ENDS send mail configuration -->
						
						<p><input type="button" value="Send" name="submit" id="submit" /></p>
					</fieldset>
					<p id="error" class="warning">Message</p>
				</form>
				<p id="success" class="success">Thanks for your comments.</p>
				<!-- ENDS form -->	
				
	    	</div>
	    	<!-- ENDS content -->
	    	
	    	<!-- Sidebar -->
	    	<div id="sidebar">
				<h6 class="side-title">Contact Info</h6>
				
				<p>Reach me by text or by e-mail.</p>
				
				<p class="contact-data">
					<span class="ico-tel">617 420 1337</span>
					<span class="ico-email"><a href="mailto:luk@chrisluk.im">luk@chrisluk.im</a></span>
				</p>
				
				<p>Aincrad<br/>
				 	Lugunica
				 </p>
	    	</div>
	    	<!-- ENDS Sidebar -->
	        
        </div>
		<!-- ENDS Page wrap -->
			
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
                        <a href="mailto:luho@chrisluk.im">luho@chrisluk.im</a><br><br>
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