<?php
mysql_connect("localhost","root","");
mysql_select_db("mybipol"); 
session_start();

if(isset($_POST['Edit'])){ //menjalankan function editad
	EditAd();}

function EditAd()
{
	$nip=$_SESSION['id'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$nobis=$_POST['nobis'];
	$ttl=$_POST['ttl'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$jabatan="Supir";
	
	//menyimpan data hasil 
	$edit = mysql_query("UPDATE pegawai SET Nama = '$nama', username = '$username', password = '$pass', no_bis = '$nobis', tgl_lahir = '$ttl', no_telp = '$telp', alamat='$alamat' WHERE nip = '$nip'");

	echo("<script>location.href = 'admin.php';</script>");
}
?>