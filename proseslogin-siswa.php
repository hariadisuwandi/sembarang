<?php
include ("conn.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) && empty($password)) {
	echo "username dan password masih kosong";
} else if (empty($username)) {
	header('location:login.html?error=2');
} else if (empty($password)) {
	header('location:login.html?error=3');
}

$q = mysqli_query($koneksi, "select * from siswa where username='$username' and password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $row['nama_siswa'];
    $_SESSION['kode'] = $row['kode_siswa'];
    $_SESSION['gambar'] = $row['gambar'];	

	header('location:siswa/index.php');
} else {
	echo "username atau password yang anda masukan salah";
}
?>