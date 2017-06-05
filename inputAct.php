<?php
	include ('connection.php');
	require ('input.php');
	//membuat array jadwal per halte yang diambil dari masukkan user

	$h1 = $_POST['halte1']; $h2 = $_POST['halte2']; $h3 = $_POST['halte3']; $h4 = $_POST['halte4']; 
	$h5 = $_POST['halte5']; $h6 = $_POST['halte6']; $h7 = $_POST['halte7']; $h8 = $_POST['halte8'];
	$h9 = $_POST['halte9']; $h10 = $_POST['halte10']; $h11 = $_POST['halte11']; $h12 = $_POST['halte12'];
	$h13 = $_POST['halte13']; $h14 = $_POST['halte14']; $h15 = $_POST['halte15']; $h16 = $_POST['halte16'];
	$h17 = $_POST['halte17']; $h17 = $_POST['halte17']; $h18 = $_POST['halte18']; $h19 = $_POST['halte19'];
	$h20 = $_POST['halte20']; $h21 = $_POST['halte21'];
	$sesi = $_POST['sesi'];
	$no = $_POST['no_bis'];
	$no_bis = $no.$sesi;

	if (empty($_POST['halte1'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte2'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte3'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte4'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte5'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte6'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte7'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte8'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte9'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte6'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte10'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte11'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte12'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte13'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte14'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte15'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte16'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte17'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte18'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte19'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte20'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['halte21'])){
	echo "<script>alert('halte belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	else{
	$tb=mysql_query("SELECT username FROM pegawai where no_bis='$no'");
	$col=mysql_fetch_assoc($tb);
	$username = $col['username'];

	$jadwal_fix1 = $no_bis."01";
	$jadwal_fix2 = $no_bis."02";
	$jadwal_fix3 = $no_bis."03";
	$jadwal_fix4 = $no_bis."04";
	$jadwal_fix5 = $no_bis."05";
	$jadwal_fix6 = $no_bis."06";
	$jadwal_fix7 = $no_bis."07";
	$jadwal_fix8 = $no_bis."08";
	$jadwal_fix9 = $no_bis."09";
	$jadwal_fix10 = $no_bis."10";
	$jadwal_fix11 = $no_bis."11";
	$jadwal_fix12 = $no_bis."12";
	$jadwal_fix13 = $no_bis."13";
	$jadwal_fix14 = $no_bis."14";
	$jadwal_fix15 = $no_bis."15";
	$jadwal_fix16 = $no_bis."16";
	$jadwal_fix17 = $no_bis."17";
	$jadwal_fix18 = $no_bis."18";
	$jadwal_fix19 = $no_bis."19";
	$jadwal_fix20 = $no_bis."20";
	$jadwal_fix21 = $no_bis."21";
	$sql_insert1 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix1."', '".$no_bis."', '".$h1."', 'GSG', '".$username."')";
	$sql_insert2 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix2."', '".$no_bis."', '".$h2."', 'VOKASI A', '".$username."')";
	$sql_insert3 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix3."', '".$no_bis."', '".$h3."', 'VOKASI B', '".$username."')";
	$sql_insert4 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix4."', '".$no_bis."', '".$h4."', 'PNJ B', '".$username."')";
	$sql_insert5 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix5."', '".$no_bis."', '".$h5."', 'MIPA B', '".$username."')";
	$sql_insert6 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix6."', '".$no_bis."', '".$h6."', 'FKM B', '".$username."')";
	$sql_insert7 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix7."', '".$no_bis."', '".$h7."', 'RIK B', '".$username."')";
	$sql_insert8 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix8."', '".$no_bis."', '".$h8."', 'POCIN B', '".$username."')";
	$sql_insert9 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix9."', '".$no_bis."', '".$h9."', 'MUI B', '".$username."')";
	$sql_insert10 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix10."', '".$no_bis."', '".$h10."', 'HUKUM B', '".$username."')";
	$sql_insert11 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix11."', '".$no_bis."', '".$h11."', 'STUI B', '".$username."')";
	$sql_insert12 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix12."', '".$no_bis."', '".$h12."', 'GERBATAMA B', '".$username."')";
	$sql_insert13 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix13."', '".$no_bis."', '".$h13."', 'ASRAMA', '".$username."')";
	$sql_insert14 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix14."', '".$no_bis."', '".$h14."', 'GERBATAMA A', '".$username."')";
	$sql_insert15 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix15."', '".$no_bis."', '".$h15."', 'STUI A', '".$username."')";
	$sql_insert16 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix16."', '".$no_bis."', '".$h16."', 'HUKUM A', '".$username."')";
	$sql_insert17 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix17."', '".$no_bis."', '".$h17."', 'POCIN A', '".$username."')";
	$sql_insert18 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix18."', '".$no_bis."', '".$h18."', 'RIK A', '".$username."')";
	$sql_insert19 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix19."', '".$no_bis."', '".$h19."', 'FKM A', '".$username."')";
	$sql_insert20 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix20."', '".$no_bis."', '".$h20."', 'MIPA A', '".$username."')";
	$sql_insert21 = "INSERT INTO jadwalfix VALUES ('".$jadwal_fix21."', '".$no_bis."', '".$h21."', 'PNJ A', '".$username."')";
	mysql_query($sql_insert1);
	mysql_query($sql_insert2);
	mysql_query($sql_insert3);
	mysql_query($sql_insert4);
	mysql_query($sql_insert5);
	mysql_query($sql_insert6);
	mysql_query($sql_insert7);
	mysql_query($sql_insert8);
	mysql_query($sql_insert9);
	mysql_query($sql_insert10);
	mysql_query($sql_insert11);
	mysql_query($sql_insert12);
	mysql_query($sql_insert13);
	mysql_query($sql_insert14);
	mysql_query($sql_insert15);
	mysql_query($sql_insert16);
	mysql_query($sql_insert17);
	mysql_query($sql_insert18);
	mysql_query($sql_insert19);
	mysql_query($sql_insert20);
	mysql_query($sql_insert21);

	$sql_insert1 = "INSERT INTO jadwal VALUES ('".$jadwal_fix1."', '".$no_bis."', '".$h1."', 'GSG', '".$username."')";
	$sql_insert2 = "INSERT INTO jadwal VALUES ('".$jadwal_fix2."', '".$no_bis."', '".$h2."', 'VOKASI A', '".$username."')";
	$sql_insert3 = "INSERT INTO jadwal VALUES ('".$jadwal_fix3."', '".$no_bis."', '".$h3."', 'VOKASI B', '".$username."')";
	$sql_insert4 = "INSERT INTO jadwal VALUES ('".$jadwal_fix4."', '".$no_bis."', '".$h4."', 'PNJ B', '".$username."')";
	$sql_insert5 = "INSERT INTO jadwal VALUES ('".$jadwal_fix5."', '".$no_bis."', '".$h5."', 'MIPA B', '".$username."')";
	$sql_insert6 = "INSERT INTO jadwal VALUES ('".$jadwal_fix6."', '".$no_bis."', '".$h6."', 'FKM B', '".$username."')";
	$sql_insert7 = "INSERT INTO jadwal VALUES ('".$jadwal_fix7."', '".$no_bis."', '".$h7."', 'RIK B', '".$username."')";
	$sql_insert8 = "INSERT INTO jadwal VALUES ('".$jadwal_fix8."', '".$no_bis."', '".$h8."', 'POCIN B', '".$username."')";
	$sql_insert9 = "INSERT INTO jadwal VALUES ('".$jadwal_fix9."', '".$no_bis."', '".$h9."', 'MUI B', '".$username."')";
	$sql_insert10 = "INSERT INTO jadwal VALUES ('".$jadwal_fix10."', '".$no_bis."', '".$h10."', 'HUKUM B', '".$username."')";
	$sql_insert11 = "INSERT INTO jadwal VALUES ('".$jadwal_fix11."', '".$no_bis."', '".$h11."', 'STUI B', '".$username."')";
	$sql_insert12 = "INSERT INTO jadwal VALUES ('".$jadwal_fix12."', '".$no_bis."', '".$h12."', 'GERBATAMA B', '".$username."')";
	$sql_insert13 = "INSERT INTO jadwal VALUES ('".$jadwal_fix13."', '".$no_bis."', '".$h13."', 'ASRAMA', '".$username."')";
	$sql_insert14 = "INSERT INTO jadwal VALUES ('".$jadwal_fix14."', '".$no_bis."', '".$h14."', 'GERBATAMA A', '".$username."')";
	$sql_insert15 = "INSERT INTO jadwal VALUES ('".$jadwal_fix15."', '".$no_bis."', '".$h15."', 'STUI A', '".$username."')";
	$sql_insert16 = "INSERT INTO jadwal VALUES ('".$jadwal_fix16."', '".$no_bis."', '".$h16."', 'HUKUM A', '".$username."')";
	$sql_insert17 = "INSERT INTO jadwal VALUES ('".$jadwal_fix17."', '".$no_bis."', '".$h17."', 'POCIN A', '".$username."')";
	$sql_insert18 = "INSERT INTO jadwal VALUES ('".$jadwal_fix18."', '".$no_bis."', '".$h18."', 'RIK A', '".$username."')";
	$sql_insert19 = "INSERT INTO jadwal VALUES ('".$jadwal_fix19."', '".$no_bis."', '".$h19."', 'FKM A', '".$username."')";
	$sql_insert20 = "INSERT INTO jadwal VALUES ('".$jadwal_fix20."', '".$no_bis."', '".$h20."', 'MIPA A', '".$username."')";
	$sql_insert21 = "INSERT INTO jadwal VALUES ('".$jadwal_fix21."', '".$no_bis."', '".$h21."', 'PNJ A', '".$username."')";
	mysql_query($sql_insert1);
	mysql_query($sql_insert2);
	mysql_query($sql_insert3);
	mysql_query($sql_insert4);
	mysql_query($sql_insert5);
	mysql_query($sql_insert6);
	mysql_query($sql_insert7);
	mysql_query($sql_insert8);
	mysql_query($sql_insert9);
	mysql_query($sql_insert10);
	mysql_query($sql_insert11);
	mysql_query($sql_insert12);
	mysql_query($sql_insert13);
	mysql_query($sql_insert14);
	mysql_query($sql_insert15);
	mysql_query($sql_insert16);
	mysql_query($sql_insert17);
	mysql_query($sql_insert18);
	mysql_query($sql_insert19);
	mysql_query($sql_insert20);
	mysql_query($sql_insert21);


	echo("<script>location.href = 'inputjadwal.php';</script>");
	}
	
?>