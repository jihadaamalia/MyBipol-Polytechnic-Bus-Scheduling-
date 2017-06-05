<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="img/bis.png">
    <title>My Bipol</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
	 <!-- Custom CSS -->
    <link href="css/component.css" rel="stylesheet">
	
	<!--css for login-->
	<link rel="stylesheet" href="css/login.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">SISTEM PENJADWALAN BIS POLITEKNIK</a>
            </div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="peta.php">Map</a>
                    </li>
                    <li class="page-scroll">
                        <a href="login.php">Log in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	
	<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				<center>
					<div class="awalholder">
					
						<div class="randompad">
						<div class="cekjadwal"><b>CEK JADWAL</b></div>
							<fieldset>
							<br>
<!----------------------------------PILIH HALTE------------------------------------------------------------------------------------------------------------------>
								<form method="POST" action="pop2.php">
                                <input type="submit" name="halte" value="GSG" /></form>
								<form method="POST" action="pop.php">
                                <input type="submit" name="halte" value="PNJ" />
								<input type="submit" name="halte" value="VOKASI" />
								<input type="submit" name="halte" value="MIPA" />
								<input type="submit" name="halte" value="RIK" />
								<input type="submit" name="halte" value="FKM" />
								<input type="submit" name="halte" value="POCIN" />
								<input type="submit" name="halte" value="MUI" />
								<input type="submit" name="halte" value="HUKUM" />
								<input type="submit" name="halte" value="STUI" />
								<input type="submit" name="halte" value="GERBATAMA" />
                                </form>
                                <form method="POST" action="pop2.php">
                                <input type="submit" name="halte" value="ASRAMA" /></form> 
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------->
								<br>
							</fieldset>
						</div>
					</div>
				</center>	
                </div>
            </div>
        </div>
    </header>

    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; My Bipol 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
	
	
	
    </body>

</html>
