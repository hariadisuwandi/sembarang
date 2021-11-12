<?php
$koneksi = mysqli_connect("localhost","root","","sekolah");

if(isset($_GET['kode_kelas'])){
$kode_kelas = $_GET['kode_kelas'];
$siswa = mysqli_query($koneksi, "SELECT  siswa.nama_siswa,siswa.kode_siswa,kelas_siswa.kode_siswa FROM siswa,kelas_siswa WHERE kelas_siswa.kode_kelas='$kode_kelas' and kelas_siswa.kode_siswa=siswa.kode_siswa");

while($k = mysqli_fetch_array($siswa)){
echo "<option value=\"".$k['kode_siswa']."\">".$k['nama_siswa']."</option>\n";
}
}

if (isset($_GET['kode_guru'])) {
	$kode_guru = $_GET['kode_guru'];
	$guru = mysqli_query($koneksi, "SELECT * FROM guru,pelajaran where kode_guru = '$kode_guru'and pelajaran.kode_pelajaran = guru.kode_pelajaran ");

while ($p = mysqli_fetch_array($guru)) {
	echo "<option value=\"".$p['kode_pelajaran']."\">".$p['nama_pelajaran']."</option>\n";
}
}

?>