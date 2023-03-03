<?php

$nick = $_POST["nick"];
$pass = $_POST["pass"];

if ($nick == "Alien_bvmi12" AND $pass == "rayhan123") {
header("location: rehann.php");
}
else {
	echo "<script>window.alert('password atau kata sandi salah')</script>";
}
?>
