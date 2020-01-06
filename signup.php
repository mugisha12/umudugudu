<?php 
include("process/signup.php");
?>
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
        <p>Member Signup</p>
    </div>
    <form action="process/signup.php" method="post">
        <input type="text" placeholder="FirstName" name="fn" require><br>
        <input type="text" placeholder="SecondName" name="sn" require><br>
        <input type="text" placeholder="UserName" name="un" require><br>
        <input type="password" placeholder="Password" name="pw" require><br>
        <input type="password" placeholder="Confirm Password" name="cpw" require><br>
        <label>Icyiciro Cy'ubudehe</label>
        <select name="Icyiciro" class="icyiciro">
            <option value="1">Cy'ambere</option>
            <option value="2">Cy'akabiri</option>
            <option value="3">Cy'agatatu</option>
            <option value="4">Cy'akane</option>
        </select><br>
        <label>Mituel</label>
        <input type="radio" value="Yes" name="mitual" require>Yes
        <input type="radio" value="No" name="mitual" require>No<br>
        <label class="money">3000</label><br>
        <input type="submit" value="SIGNUP" name="sign">
        <p><a href="signin.php">I have Account</a></p>
    </form>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select.icyiciro").change(function(){

var val = $(this).children("option:selected").val();
$.ajax({
                url: "price.php",
                method: "post",
                data: { price: val },
                dataType: "text",
                success: function (data) {
                        $('.money').html(data);
                }

            });
});
});
</script>
</body>
</html>