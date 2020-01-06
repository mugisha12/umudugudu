<?php
    include('database.php');
    session_start();
   if (isset($_POST['log'])) {
    $un =$_POST['un'];
    $pw =$_POST['pw'];

        $password = md5($pw);
        $query = "SELECT * FROM `users` WHERE `username`='$un' AND `password`='$password'";
        $result = mysqli_query($conn,$query);

        if (mysqli_num_rows($result) ==1){
            $_SESSION['username']=$un;
            header('location: ../index.php');
        }else{
            header('location: ../signin.php');
        }
        
}
 ?>