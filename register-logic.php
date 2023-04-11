<?php
echo "<prev>";
// print_r($_POST);
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password']; 
$country = $_POST['country'];

$password = password_hash($password, PASSWORD_DEFAULT);
$sql= "INSERT INTO users 
                (
                    username,
                    email,
                    country,
                    password

                ) VALUES (
                    '{$username}',
                    '{$email}',
                    '{$country}',
                    '{$password}'
                )";

$mysqli = new mysqli("localhost","root","","my_bank");
$mysqli->query($sql);
header('Location:admin.php');
// // Check connection
// if ($mysqli -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }
// // die('success');

