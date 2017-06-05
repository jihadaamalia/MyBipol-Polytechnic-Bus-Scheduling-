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
    
    <!--Table CSS-->
    <link rel="stylesheet" type="text/css" href="css/component.css" />

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

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
                        <a href="peta.php">Map</a>
                    </li>
                    <li class="page-scroll">
                        <a href="awal.php">Back</a>
                    </li>
                    <li class="page-scroll">
                        <a href="login.php">Log in</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="component">
                <?php
                    session_start();
                    mysql_connect("localhost","root","");
                    mysql_select_db("mybipol");
                    if(isset($_POST['halte'])){
                    $halte=$_POST['halte'];
                    $_SESSION['jdlhalte']=$halte;
                    $_SESSION['halteA']=$halte." A";
                    $_SESSION['halteB']=$halte." B";}
                ?>
                <span class="name"><h2>JADWAL KEDATANGAN HALTE <?php echo $_SESSION['jdlhalte'] ?></h2></span>
                <br>
                <table>
                    <thead>
                        <tr>
                            <th>BIS</th>
                            <th><?php echo $_SESSION['halteA'] ?></th>
                        </tr>
                    </thead>
                    
                    <?php
                        $halteA=$_SESSION['halteA'];
                        $jadwalA = mysql_query("SELECT no_bis, tiba FROM jadwal WHERE nama_halte='$halteA'");

                        while($col=mysql_fetch_array($jadwalA)){ ?>
                        <tbody>
                        <tr>
                            <td class="bis"><?php echo $col['no_bis'] ?></td>
                            <td class="pnj"><?php echo $col['tiba'] ?></td>  
                        </tr>
                        </tbody>
                    <?php
                        } 
                    ?>
                     
                </table>
                <table>
                    <thead>
                        <tr>
                            <th>BIS</th>
                            <th><?php echo $_SESSION['halteB'] ?></th>
                        </tr>
                    </thead>
                    
                    <?php
                        $halteB=$_SESSION['halteB'];
                        $jadwalB = mysql_query("SELECT no_bis, tiba FROM jadwal WHERE nama_halte='$halteB'");

                        while($col=mysql_fetch_array($jadwalB)){ ?>
                        <tbody>
                        <tr>
                            <td class="bis"><?php echo $col['no_bis'] ?></td>
                            <td class="pnj"><?php echo $col['tiba'] ?></td>  
                        </tr>
                        </tbody>
                    <?php
                        } 
                    ?>
                     
                </table>
                <font color="white">
                <h3>Keterangan</h3>
                A = Arah menuju Politeknik Negeri Jakarta
                <br>
                B = Arah meninggalkan Politeknik Negeri Jakarta
                <br><br>
                </font>
                <a href="awal.php"><button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></a>
            </div>
        </div>
    </header>

    <!-- Footer -->
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
