<?php
include "../conn.php";
$kode_kelas   = $_POST['kode_kelas'];
$tahun_ajar   = $_POST['tahun_ajar'];
$kelas        = $_POST['kelas'];
$nama_kelas   = $_POST['nama_kelas'];
$kode_guru    = $_POST['kode_guru'];


$cekwalikelas = mysqli_query($koneksi, "SELECT * from kelas where kode_guru='$kode_guru'");
	if(mysqli_num_rows($cekwalikelas)>=1){
		echo "<script>alert('Guru tersebut sudah menjadi walikelas'); window.location = 'input-kelas.php' </script>";
	}else {
$sqlCek="SELECT * FROM kelas WHERE nama_kelas='$nama_kelas' AND tahun_ajar='$tahun_ajar'";
	$qryCek=mysqli_query($koneksi, $sqlCek); 
	if(mysqli_num_rows($qryCek)>=1){
		$pesanError[] = "Maaf, Nama Kelas<strong> $nama_kelas </strong> dengan <strong>tahun ajaran</strong> yang sama sudah dibuat";
	} else {
    
$query = mysqli_query($koneksi, "INSERT INTO kelas (kode_kelas, tahun_ajar, kelas, nama_kelas, kode_guru) VALUES 
                      ('$kode_kelas', '$tahun_ajar', '$kelas', '$nama_kelas', '$kode_guru')");
if ($query){
	echo "<script>alert('Data Berhasil dimasukan!'); window.location = 'kelas.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dimasukan!'); window.location = 'kelas.php'</script>";	
}
}
}
?>