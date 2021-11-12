<?php
include "../conn.php";
$kode_kelas   = $_POST['kelas'];
$kode_siswa   = $_POST['kode_siswa'];


$ceksiswa = mysqli_query($koneksi, "SELECT * FROM kelas_siswa where kode_siswa='$kode_siswa'");
if (mysqli_num_rows($ceksiswa)>=1) {
	echo  "<script>alert('Maaf,  Kode Siswa $kode_siswa Sudah memiliki kelas'); window.location = 'kelas-siswa.php'</script>";
	die();
}
$sqlCek="SELECT * FROM kelas_siswa WHERE kode_kelas='$kode_kelas' AND kode_siswa='$kode_siswa'";
	$qryCek=mysqli_query($koneksi, $sqlCek); 
	if(mysqli_num_rows($qryCek)>=1){
		echo  "<script>alert('Maaf, Kode Kelas $kode_kelas dengan Kode Siswa  <b>$kode_siswa</b> yang sama sudah dibuat'); window.location = 'kelas-siswa.php'</script>";
	} else {
    
$query = mysqli_query($koneksi, "INSERT INTO kelas_siswa (kode_kelas, kode_siswa) VALUES ('$kode_kelas', '$kode_siswa')");
if ($query){
	echo "<script>alert('Data Berhasil dimasukan!'); window.location = 'kelas-siswa.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dimasukan!'); window.location = 'kelas-siswa.php'</script>";	
}
}
?>