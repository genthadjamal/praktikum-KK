<?php 
session_start();
include 'connect_db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		// alihkan ke halaman dashboard admin
		header("location:form/home.php");

	// cek jika user login sebagai pegawai
	}else{
		// alihkan ke halaman login kembali
		// echo("")

		echo "<script> alert('username atau password anda salah !!!'); </script>";
		echo "<script> location='form/login.php'; </script>";
	}

    
    // // tutup koneksi
    // mysqli_close($conn);
?>