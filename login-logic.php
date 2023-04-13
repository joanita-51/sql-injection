<?php

$username = $_POST['username'];
$password = $_POST['password'];

$mysqli = new mysqli("localhost","root","","my_bank");

//Multiple rows:
$sql="SELECT * FROM users WHERE username= ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$res=$stmt->get_result();
while($row = $res->fetch_assoc()){
    echo $row['name'];
}
// die("done");

// getting data from the database
$sql="SELECT * FROM users WHERE username='{$username}'";


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

header('Location: admin.php');
die();
echo "<pre>";
print_r($row);
// print_r($res->num_rows);
// die($sql);