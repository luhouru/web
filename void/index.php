<?php
//set timezone for east coast
date_default_timezone_set('America/New_York');

require_once("checklogin.php");

$loggedin = FALSE;
$action = "home";
$warning = "redirect";
$alertset = FALSE;

//check to see if they're logging in
//note: load nothing until login is confirmed
if (isset($_GET['action'])) {
	if ($_GET['action'] == "login") {
		if (checklogin($_POST['password'])) {
		$loggedin = TRUE;
		$warning = "goodlogin";
		if (isset($_POST['remember'])) {
		$plustime = time();
		} else {
		$plustime = 3600;
		}
		setcookie("loggedin", TRUE, time()+$plustime);
		setcookie("username", $_POST['username'], time()+$plustime);
		} else {
		$warning = "loginfailed";
		}
	}
}
//check to see if they remain logged in
if(isset($_COOKIE["loggedin"]) && $_COOKIE['loggedin'] == TRUE) {
	$loggedin = TRUE;
	$warning = "goodlogin";
}
//if they're not logged in, send them back to the login page
//sorry!
if (!$loggedin) {
header('Location: login.php?warning='.$warning);
die();
    
}
//check to see if there are any other actions they want
//if not, show the general dashboard
if (isset($_GET['action'])) {
	switch($_GET['action']) {
	case "login":
		if (checklogin($_POST['username'],$_POST['password'])) {
		$loggedin = TRUE;
		$warning = "goodlogin";
		setcookie("loggedin", TRUE, time()+3600);
		setcookie("username", $_POST['username'], time()+3600);
		$_COOKIE['username'] = $_POST['username'];
		} else {
		$warning = "badlogin&username=".$_POST['username'];
		}
	break;
	
	$alert = addmessage($_POST['major'],$_POST['minor'],$_POST['message']);
	$alertset = TRUE;
	break;
	
	default:
	$action = "home";
	break;
	}
} else {
}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LUHO</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">LUHO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/void">Home</a>
                    </li>
                    <li>
                        <a href="/void/<?php $datestart = strtotime('2016-07-25');//you can change it to your timestamp;
                                $cur = date('Y-m-d');//you can change it to your timestamp;
                                $dateend = strtotime($cur);
                                $daystep = 86400;
                                $datebetween = abs(($dateend - $datestart) / $daystep);
                                $randomday = rand(0, $datebetween);
                                echo date("mdY", $datestart + ($randomday * $daystep));
                                ?>">RNG</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
<!--    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">-->
    <header class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1 style="color: black">Blog</h1><br>
                        <hr style="color: black" class="small">
                        <!--<span class="subheading" style="color: black">&nbsp;</span><hr>-->
                    </div>
                </div>
            </div>
        </div>
        
    </header>

    <!-- Main Content -->
    
    <div class="container">
        <div style="margin-top: -200px;" class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php include 'propogate.php';?>
                <!--<div class="post-preview">
                    <a href="/void/07252016">
                        <h2 class="post-title">
                            Addiction
                        </h2>
                        <h3 class="post-subtitle">
                            I'm so fucking dry. 
                        </h3>
                    </a>
                    <p class="post-meta">July 27, 2016</p>
                </div>
                <div class="post-preview">
                    <a href="/void/07262016">
                        <h2 class="post-title">
                            Fate
                        </h2>
                        <h3 class="post-subtitle">
                            The endless possibility yields no right choice.
                        </h3>
                    </a>
                    <p class="post-meta">July 26, 2016</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="/void/07252016">
                        <h2 class="post-title">
                            Doom
                        </h2>
                        <h3 class="post-subtitle">
                            The inevitable fate of our country. 
                        </h3>
                    </a>
                    <p class="post-meta">July 25, 2016</p>
                </div>-->
                
                <!-- Pager -->
                <!--<ul class="pager">
                    <li class="next">
                        <a href="/2">Older Posts &rarr;</a>
                    </li>
                </ul>-->
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; LUHO 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
