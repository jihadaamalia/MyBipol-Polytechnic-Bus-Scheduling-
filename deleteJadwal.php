<?php
mysql_connect("localhost","root","");
mysql_select_db("mybipol"); 

$id= $_GET['id'];
$sql = mysql_query("DELETE FROM jadwalfix where no_bis = '$id'");
$sql2 = mysql_query("DELETE FROM jadwal where no_bis = '$id'");

$a=mysql_query($sql);
$b=mysql_query($sql2);

echo("<script> location.href = 'inputJadwal.php';</script>");
?>