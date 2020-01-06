<?php
session_start();
 if (empty($_SESSION['username'])) {
    header('location: signin.php');
 } 
 if (isset($_GET['logout'])==1) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_SESSION['username']?></h1>
<a class="btn btn-danger p-0" href="index.php?logout='1'">Logout</a>
</body>
</html>