<?php

$username = $_POST['username'];
$password = $_POST['password'];

// getting data from the database
$sql="SELECT * FROM users WHERE username='{$username}'";

$mysqli = new mysqli("localhost","root","","my_bank");
$res = $mysqli->query($sql);
if($res->num_rows < 1){
    header('Location:login.php?error=Wrong username');
    die();
}

echo "<pre>";
print_r($res->num_rows);
// die($sql);