<?php
	include ('connection.php');
	$cek_pegawai = "SELECT * FROM pegawai WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
	$pegawai = mysql_fetch_array(mysql_query($cek_pegawai));
	if(!empty($pegawai['username']) AND !empty($pegawai['password'] AND $pegawai['jabatan'] == "Administrator"))
	{	
		$_SESSION['login']=TRUE;
		$_SESSION['user'] = $_POST['username'];
		header("Location: admin.php");
	}
	else if(!empty($pegawai['username']) AND !empty($pegawai['password'] AND $pegawai['jabatan'] == "Supir"))
	{
		$_SESSION['user'] = $_POST['username'];

		$tb=mysql_query("SELECT no_bis FROM pegawai where username='".$_SESSION['user']."'");
		$col=mysql_fetch_assoc($tb);
		$_SESSION['bis']=$col['no_bis'];
		
		header("Location: sesi.php");
	}
	else if (empty($baris['username']) AND empty($baris['password']))
	{
		echo '<script language="javascript"> alert("Login Gagal! Cek kembali masukkan yang diberikan");
		history.go(-1);
		</script>;';
	}
?>