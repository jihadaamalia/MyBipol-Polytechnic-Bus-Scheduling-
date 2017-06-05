<!DOCTYPE html>
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
	
	<!--css for login-->
	<link rel="stylesheet" href="css/login.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="time/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="time/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="time/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="#page-top">SISTEM PENJADWALAN BIS POLITEKNIK</a>
            </div>
        </div>
    </nav>

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

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="admin.php">Data Akun Driver</a>
                    </li>
                    <li class="page-scroll">
                        <a href="inputjadwal.php">Input Jadwal</a>
                    </li>
					<li class="page-scroll">
                        <a href="map.php">Map</a>
                    </li>
					<li class="page-scroll">
                        <a href="awal.php">Log out</a>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	<header>
        <div class="container"><center>
            <div class="row">
                <div class="col-lg-12">
					<div class="inholder">
						<div class="randompad">
						<font size="20px">Input Jadwal</font>
<!----------------------------------INPUTAN JADWAL---------------------------------------------------------------------------------------->
							<fieldset>
                                <form method="POST" action="inputAct.php">
								<input type="text" placeholder="No Bis" style="text-align:center" name="no_bis"/>
								<input type="text" placeholder="Sesi" style="text-align:center" name="sesi"/>
								<div class="inputholder">
                                <div class="judulhalte">GSG</div>
								<input type="time"/ placeholder="GSG" style="text-align:center" name="halte1">
								<div class="judulhalte">VOKASI A</div>
                                <input type="time" placeholder="VOKASI A" style="text-align:center" name="halte2"/>
								<div class="judulhalte">VOKASI B</div>
                                <input type="time" placeholder="VOKASI B" style="text-align:center" name="halte3"/>
								<div class="judulhalte">PNJ B</div>
                                <input type="time" placeholder="PNJ B" style="text-align:center" name="halte4"/>
								<div class="judulhalte">MIPA B</div>
                                <input type="time" placeholder="MIPA B" style="text-align:center" name="halte5"/>
								<div class="judulhalte">FKM B</div>
                                <input type="time" placeholder="FKM B" style="text-align:center" name="halte6"/>
								<div class="judulhalte">RIK B</div>
                                <input type="time" placeholder="RIK B" style="text-align:center" name="halte7" />
								<div class="judulhalte">POCIN B</div>
                                <input type="time" placeholder="POCIN B" style="text-align:center" name="halte8" />
								<div class="judulhalte">MUI B</div>
                                <input type="time" placeholder="MUI B" style="text-align:center" name="halte9" />
								<div class="judulhalte">HUKUM B</div>
                                <input type="time" placeholder="HUKUM B" style="text-align:center" name="halte10"/>
								<div class="judulhalte">STUI B</div>
                                <input type="time" placeholder="STUI B" style="text-align:center" name="halte11" />
								<div class="judulhalte">GERBATAMA B</div>
                                <input type="time" placeholder="GERBATAMA B" style="text-align:center" name="halte12" />
                                <div class="judulhalte">ASRAMA</div>
                                <input type="time" placeholder="ASRAMA" style="text-align:center" name="halte13" />
								<div class="judulhalte">GERBATAMA A</div>
                                <input type="time" placeholder="GERBATAMA A" style="text-align:center" name="halte14" />
								<div class="judulhalte">STUI A</div>
                                <input type="time" placeholder="STUI A" style="text-align:center" name="halte15" />
								<div class="judulhalte">HUKUM A</div>
                                <input type="time" placeholder="HUKUM A" style="text-align:center" name="halte16" />
								<div class="judulhalte">POCIN A</div>
                                <input type="time" placeholder="POCIN A" style="text-align:center"name="halte17"/>
								<div class="judulhalte">RIK A</div>
                                <input type="time" placeholder="RIK A" style="text-align:center" name="halte18" />
								<div class="judulhalte">FKM A</div>
                                <input type="time" placeholder="FKM A" style="text-align:center" name="halte19" />
								<div class="judulhalte">MIPA A</div>
                                <input type="time" placeholder="MIPA A" style="text-align:center" name="halte20" />
								<div class="judulhalte">PNJ A</div>
                                <input type="time" placeholder="PNJ A" style="text-align:center" name="halte21" />
								<br>
							     <input type="submit" name="simpan" value="Save" />
                                </form>
								</div>
							</fieldset>
<!------------------------------------------------------------------------------------------------------------------------->
						</div>
					</div>
                </div>
            </div></center>
        </div>
    </header>
	
    <!-- Footer -->
    <footer class="time-center">
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
