<?php
session_start();

if(!isset($_SESSION['submit'])){
    header ("location: tugas19.php");
}


$email = $_POST['email'];
$pass = $_POST['pass'];

echo "Selamat datang $email dan $pass";

?>