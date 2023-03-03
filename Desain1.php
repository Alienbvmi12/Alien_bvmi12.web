<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Link lister</title>
<link rel="icon" type="image/png" href="https://th.bing.com/th/id/R.e177155336b890d175b8c33a444b536b?rik=IM5fNwMNY84iGg&riu=http%3a%2f%2fwww.pngmart.com%2ffiles%2f13%2fAnime-Girl-Zero-Two-PNG-Pic.png&ehk=vcd1ObrttBq4FgtGLp0fUdSDrtVXChP2WL3qKi4Yv4I%3d&risl=&pid=ImgRaw&r=0">
<link href="bootstrap.css" rel="stylesheet">
<!--PHP-->
<?php

	$host="localhost";
	$username="root";
	$pass="";
	$database="rehan";
	
	$koneksi=mysqli_connect($host,$username,$pass,$database) or die ("Gak konek");
	
?>

<style>
body{margin : 0; font-family : Arial;}
.kepala{background-color : green; color : white; width : 100%; padding-top : 20px; position : fixed;}
.masukan{background-color : black; padding : 10px; float : left; width : 100%;position : relative;}
.input{width : 100px; font-size : 14px;}
.insut{width : 30px; font-size : 14px;}


.vessel{display : block; padding : 0; position : absolute; width : 40px; z-index : 2; margin-top : 8px; margin-left : 30px; cursor: pointer;}
.hamburg{width : 40px; height : 5px; display : block; background-color : white; margin-top : 5px; border-radius : 5px; z-index : 4;}

</style>

</head>
<body>
<div class="kepala">
<div class="vessel">
<div class="hamburg"></div>
<div class="hamburg"></div>
<div class="hamburg"></div>
<div class="menus" id="menus">
</div>
</div>
<center>
<h1>Alien_link</h1>
</center>
<br>
<div class="masukan">
<form method="get" action="penerima.php">
<input type="text" name="nama" placeholder="Nama" class="input">
<input type="text" name="kelas" placeholder="Kelas" class="input">
<input type="text" name="link" placeholder="Password" class="input">
<input type="submit" value="ok" class="insut">
</form>
</div>

</div>
<br>
<br>
<br>
<br>
<br>
<p>
</p>
<br>
<table class="table">
<tr><th>No</th><th>Nama</th><th>Kelas</th><th>Password</th></tr>


<?php

$queri = "select * from link";
$hasil = mysqli_query($koneksi, $queri);
while($data = mysqli_fetch_array($hasil)){
		echo "
		<tr>
			<td>".$data['No']."</td>
			<td>".$data['Nama']."</td>
			<td>".$data['Kelas']."</td>
			<td>".$data['Password']."</td>
		</tr>";
	}

?>

</table>
</body>
</html>