<?php 
mysql_connect("localhost","root","");
mysql_select_db("mybipol"); 

$_SESSION['id']= $_GET['id'];

$tb=mysql_query("SELECT username FROM pegawai where nip='".$_SESSION['id']."'");
$col=mysql_fetch_assoc($tb);
$uname=$col['username'];

$delete1 = mysql_query("DELETE FROM jadwal WHERE username='$uname'");
$delete2 = mysql_query("DELETE FROM jadwalfix WHERE username='$uname'");
$delete3 = mysql_query("DELETE FROM pegawai WHERE username='$uname'"); 

echo("<script>location.href = 'admin.php';</script>");