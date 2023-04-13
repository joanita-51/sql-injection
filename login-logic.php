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

$row = $res->fetch_assoc();
$password_hash = $row['password'];
if(password_verify($password, $password_hash) != true){
    header('Location:login.php?error=Wrong password'); 
    die();   
}
die("success");
echo "<pre>";
print_r($row);
// print_r($res->num_rows);
// die($sql);