<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="header">
    <div class="header-logo">
        <img src="images/logo.png">
    </div>
</div>
<div class="container">
    <div class="title">
        <h1>UMUDUGUDU</h1>
        <p>Member Login</p>
    </div>
    <form action="process/signin.php" method="post">
        <input type="text" placeholder="UserName" name="un" require><br>
        <input type="password" placeholder="Password" name="pw" require><br>
        <input type="submit" name="log" value="LOGIN">
        <p><a href="signup.php">Create Your Account</a></p>
    </form>
</div>
</body>
</html>