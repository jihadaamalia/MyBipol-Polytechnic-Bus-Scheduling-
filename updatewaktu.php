<?php

mysql_connect("localhost","root","");
mysql_select_db("mybipol");
date_default_timezone_set('Asia/Jakarta');
session_start();

$sesi=$_SESSION['sesi'];
$bis=$_SESSION['bis'];

if(@$_POST['start']){
	$_SESSION['halte']="01";
	insertdata();
}

if(@$_POST['vokasiA']){
	$_SESSION['halte']="02";
	insertdata();
}

if(@$_POST['vokasiB']){
	$_SESSION['halte']="03";
	insertdata();
}

if(@$_POST['pnjB']){
	$_SESSION['halte']="04";
	insertdata();
}

if(@$_POST['mipaB']){
	$_SESSION['halte']="05";
	insertdata();
}

if(@$_POST['fkmB']){
	$_SESSION['halte']="06";
	insertdata();
}

if(@$_POST['rikB']){
	$_SESSION['halte']="07";
	insertdata();
}

if(@$_POST['pocinB']){
	$_SESSION['halte']="08";
	insertdata();
}

if(@$_POST['muiB']){
	$_SESSION['halte']="09";
	insertdata();
}

if(@$_POST['hukumB']){
	$_SESSION['halte']="10";
	insertdata();
}

if(@$_POST['stuiB']){
	$_SESSION['halte']="11";
	insertdata();
}

if(@$_POST['gerbatamaB']){
	$_SESSION['halte']="12";
	insertdata();
}

if(@$_POST['asrama']){
	$_SESSION['halte']="13";
	insertdata();
}

if(@$_POST['gerbatamaA']){
	$_SESSION['halte']="14";
	insertdata();
}

if(@$_POST['stuiA']){
	$_SESSION['halte']="15";
	insertdata();
}

if(@$_POST['hukumA']){
	$_SESSION['halte']="16";
	insertdata();
}

if(@$_POST['pocinA']){
	$_SESSION['halte']="17";
	insertdata();
}

if(@$_POST['rikA']){
	$_SESSION['halte']="18";
	insertdata();
}

if(@$_POST['fkmA']){
	$_SESSION['halte']="19";
	insertdata();
}

if(@$_POST['mipaA']){
	$_SESSION['halte']="20";
	insertdata();
}

if(@$_POST['pnjA']){
	$_SESSION['halte']="21";
	insertdata();
}

if(@$_POST['Finish']){
	$_SESSION['halte']="01";
	insertdatafix();
}

function insertdata()
{	
	$sesi=$_SESSION['sesi'];
	$bis=$_SESSION['bis'];
	$no_jadwal=$bis.$sesi.$_SESSION['halte'];
	$search = mysql_query("SELECT * FROM jadwal WHERE no_jadwal='$no_jadwal'");
	
	while($col=mysql_fetch_array($search)){
	$set = $col['tiba'];
	$now = date("h:i:sa");
	$_SESSION['diff'] = round((strtotime($now) - strtotime($set))/60);
	
	$update = mysql_query("UPDATE jadwal SET tiba = '$now' WHERE no_jadwal= '$no_jadwal'");
	}

	$i=$_SESSION['halte'];
	
	
	$j=$i+1;
	
	if ($j<10){
		$next="0".$j;}
	else{
		$next=$j;
	}

	do
	{
		$i=$i+1;

		if ($i<10){
			$no_jadwal=$bis.$sesi."0".$i;
		}
		else{
			$no_jadwal=$bis.$sesi.$i;
		}
		$search = mysql_query("SELECT * FROM jadwal WHERE no_jadwal='$no_jadwal'");
		while($col=mysql_fetch_array($search)){
			$time = strtotime($col['tiba']);
			$diff=$_SESSION['diff'];
			$endTime = date("H:i", strtotime("+$diff minutes", $time));
			$update = mysql_query("UPDATE jadwal SET tiba = '$endTime' WHERE no_jadwal= '$no_jadwal'");}
	}
	while ($i<22);

	//cara bikim link dengan variable
	
    echo("<script>location.href = 'halte$next.php';</script>");
}


function insertdatafix(){
	$i=$_SESSION['halte'];
	$sesi=$_SESSION['sesi'];
	$bis=$_SESSION['bis'];

	do
	{
		if ($i=="01"){
			$no_jadwal=$bis.$sesi.$i;
		}
		elseif ($i<10){
			$no_jadwal=$bis.$sesi."0".$i;
		}
		else{
			$no_jadwal=$bis.$sesi.$i;
		}
		$search = mysql_query("SELECT * FROM jadwalfix WHERE jadwal_fix='$no_jadwal'");
			while($col=mysql_fetch_array($search)) {
			$reset = $col['tiba'];
			$update = mysql_query("UPDATE jadwal SET tiba = '$reset' WHERE no_jadwal= '$no_jadwal'");}
		$i++;
	}
	while ($i<22);
	unset($_SESSION['sesi']);
	unset($_SESSION['halte']);
	unset( $_SESSION['diff']);
	echo("<script>location.href = 'sesi.php';</script>");

}
?>