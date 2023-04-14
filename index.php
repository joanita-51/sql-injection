<?php
$names = [
    'John Doe',
    'Jane Doe',
    'Julian Doe',
    'Joy Doe',
    'Julius Doe',
    'Joan Doe', 
];
/*
if(!isset($_GET['id'])){
    die("id not set.");
}

// if(!(is_integer($_GET['id']))){
//     die("Only integers are required.");
// }
 
$id = ((int)($_GET['id']));
// die($id." ");

if(!(isset($names[$id]))){
    die("id not found");
};*/

echo "<pre>";
echo "Your ID is ". htmlentities($_GET['id']); //.":" .$names[$_GET['id']];
// print_r($_GET);

die("  ");
?>
<!-- http://localhost/my-bank?id=<script>alert("Simple Hack")</script> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container pt-5">
    <h1 class="h3 mb-2">Home Page</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    Main Menu
                </a>
                <a href="register.php" class="list-group-item list-group-item-action">Register</a>
                <a href="login.php" class="list-group-item list-group-item-action">Login</a>
            </div>
        </div>
    </div>

</body>
</html>