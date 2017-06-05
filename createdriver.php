<?php 
mysql_connect("localhost","root","");
mysql_select_db("mybipol");

if (isset($_POST['Create'])){
	$nip=$_POST['nip'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$nobis=$_POST['nobis'];
	$ttl=$_POST['ttl'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$jabatan="Supir";
	
	if (empty($_POST['username'])){
	echo "<script>alert('username belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=input.php'>";
	}
	elseif(empty($_POST['nip'])){
	echo "<script>alert('nip belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=create.php'>";
	}
	elseif(empty($_POST['nama'])){
	echo "<script>alert('nama belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=create.php'>";
	}
	elseif(empty($_POST['pass'])){
	echo "<script>alert('password belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=create.php'>";
	}
	elseif(empty($_POST['nobis'])){
	echo "<script>alert('nomor bis belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=create.php'>";
	}
	else{
		$input = mysql_query("INSERT INTO pegawai (`nip`, `Nama`, `tgl_lahir`, `jabatan`, `no_telp`, `alamat`, `username`, `password`, `no_bis`) VALUES ('$nip', '$nama', '$ttl', '$jabatan','$telp','$alamat','$username','$pass','$nobis')"); //input data ke tabel data pegawai

echo("<script>location.href = 'admin.php';</script>");
	}

} ?>