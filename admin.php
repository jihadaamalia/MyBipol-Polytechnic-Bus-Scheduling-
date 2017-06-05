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
                        <a href="admin.php">Data Akun Driver</a>
                    </li>
                    <li class="page-scroll">
                        <a href="inputjadwal.php">Input Jadwal</a>
                    </li>
					<li class="page-scroll">
                        <a href="map.php">Map</a>
                    </li>
					<li class="page-scroll">
                        <a href="index.php">Log out</a>
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
<!----------------------------------TABEL---------------------------------------------------------------------------------------->
				<table>
					<thead>
						<tr>
							<th>NIP</th>
							<th>Nama</th>
                            <th>TTL</th>
                            <th>No Telpon</th>
							<th>Username</th>
							<th>Bis</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
                    <?php
                        session_start();
                        mysql_connect("localhost","root","");
                        mysql_select_db("mybipol");
                        $driverdt=mysql_query("SELECT * FROM pegawai WHERE jabatan='Supir'");
                        while($col=mysql_fetch_array($driverdt)){

                     ?>
					<tbody>
						<tr>
						<td><?php echo $col['nip']?></td>
						<td><?php echo $col['Nama']?></td>
						<td><?php echo $col['tgl_lahir']?></td>
						<td><?php echo $col['no_telp']?></td>
                        <td><?php echo $col['username']?></td>
                        <td><?php echo $col['no_bis']?></td>
						<!--EDIT-->
						<td class="update">
						<div class="dua">
						<a href="EditDriver.php?id=<?php echo $col['nip'] ?>" class="satu" style="text-decoration:none">
                        Edit
						</a>
						</div>
						</td>
						<!--DELETE-->
						<td class="delete">
						<a href="DeleteDriver.php?id=<?php echo $col['nip'] ?>" class="satu" style="text-decoration:none">
                        Delete
						</a></td>
						</tr>
                    </tbody>
                    <?php
                        }
                    ?>
<!------------------------------------------------------------------------------------------------------------------------->
		
				</table>
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<a href="create.php" class="btn btn-lg btn-outline">
                    CREATE
					</a>
				</div>
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
