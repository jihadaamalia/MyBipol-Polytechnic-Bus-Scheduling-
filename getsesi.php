<?php
	session_start();
	if(@$_POST['sesiA']){
	$_SESSION['sesi']="A";	
	nextpage ();
	}
	
	elseif(@$_POST['sesiB']){
	$_SESSION['sesi']="B";
	nextpage ();
	}
	
	elseif(@$_POST['sesiC']){
	$_SESSION['sesi']="C";
	nextpage ();
	}
	
	elseif(@$_POST['sesiD']){
	$_SESSION['sesi']="D";
	nextpage ();
	}
	
	elseif(@$_POST['sesiE']){
	$_SESSION['sesi']="E";
	nextpage ();
	}
	
	function nextpage (){
	echo("<script>location.href = 'halte.php';</script>");}
?>