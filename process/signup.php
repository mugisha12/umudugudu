<?php
    include('database.php');
   if (isset($_POST['sign'])) {
    $fn =$_POST['fn'];
    $sn =$_POST['sn'];
    $un =$_POST['un'];
    $pw =$_POST['pw'];
    $cpw =$_POST['cpw'];
    $icy =$_POST['Icyiciro'];
    $mt =$_POST['mitual'];

        if($pw == $cpw){
            $password = md5($pw);
            $sql = "INSERT INTO `users`(`first`, `second`, `username`, `password`, `icyiciro`, `mituel`) VALUES ('$fn','$sn','$un','$password','$icy','$mt')";
            $query = mysqli_query($conn,$sql);
            if ($query){
            header('location: ../signin.php');
            }else{
                header('location: ../signup.php');
            }
            
        }else{
            header('location: ../signup.php');
        }
        
    }
 ?>