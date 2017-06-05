<?php
	session_start();
	$koneksi = mysql_connect('localhost','root','');
	$database = mysql_select_db('mybipol');
	if(!$koneksi )
	{
  		die('Gagal Koneksi: ' . mysql_error());
	}
?>