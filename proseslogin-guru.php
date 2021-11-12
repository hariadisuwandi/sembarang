<?php
include ("conn.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) && empty($password)) {
	echo "username dan password masih kosong";
} else if (empty($username)) {
	header('location:login-guru.php?error=2');
} else if (empty($password)) {
	header('location:login-guru.php?error=3');
}

$q = mysqli_query($koneksi, "SELECT * FROM guru where username='$username' AND password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $row['nama_guru'];
    $_SESSION['kode'] = $row['kode_guru'];
    $_SESSION['gambar'] = $row['gambar'];
    $_SESSION['kode_pelajaran'] = $row['kode_pelajaran'];	

	header('location:guru/nilai.php');
} else {
	echo "username atau password yang anda masukan salah";
}
?>