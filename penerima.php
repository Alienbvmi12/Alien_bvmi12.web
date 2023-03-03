<?php
	$host="localhost";
	$username="root";
	$pass="";
	$database="rehan";
	
	$koneksi=mysqli_connect($host,$username,$pass,$database) or die ("Gak konek");
	$nama = $_GET['nama'];
	$kelas = $_GET['kelas'];
	$link = $_GET['link'];

if($nama == "" OR $link == ""){
	header("location:Desain1.php");
}
elseif($nama == " " OR $link == " "){
	header("location:Desain1.php");
}
else{
$query = "INSERT INTO link (`No`, `Nama`, `Kelas`, `Password`) VALUES (NULL, '".$nama."','".$kelas."','".$link."')";
$hasil = mysqli_query($koneksi, $query);
header("location:Desain1.php");
}
?>
