<?php
$warningtext = "";
if (isset($_GET['warning'])) {
	switch($_GET['warning']) {
		case "badlogin":
		$warningtext = "Wrong password.";
		break;
		default:
		$warningtext = "";
		break;
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-
                                   scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
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
                        <!--<span class="subheading" style="color: black">Personal Blog</span><hr>-->
                    </div>
                </div>
            </div>
        </div>
        
    </header>

    <!-- Main Content -->
    <div class="container">
        <div style="margin-top:-175px;" class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <!--<form action="/void/index.php?action=login" method="POST" role="form" name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label><?php echo $warningtext; ?></label>
                            <input type="password" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Enter password.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div style="text-align:center" class="form-group col-xs-12">
                            <button type="submit" name="sent" value="Login" class="btn btn-default">Login</button>
                        </div>
                    </div>
                </form>-->
                <form action="index.php?action=login" method="POST" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <input type="submit" name="sent" value="Login" class="btn btn-default btn-success btn-block">
                            </fieldset>
                        </form>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      
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
