<?php

session_start();
$db=mysqli_connect('localhost','id11016695_omidiora','oluwa123','id11016695_circle')or die("COULD NOT CONNECT TO DATABASE");
$email=mysqli_real_escape_string($db,$_POST['email']);
$password1=mysqli_real_escape_string($db,$_POST['password1']);


if(isset($_POST['logins'])){
    $query="SELECT * FROM users WHERE  email='$email' AND password='$password1'";
    $results=mysqli_query($db,$query);
    $row=mysqli_num_rows($results);
    if($row==1){

        $_SESSION['username']=$username;
        $_SESSION['success']="logged in successfully";
        header('location:dashboard.php');
    }

    else{
        header('location:login.php');
        $_SESSION['failed']="lncorrect Details";
        

        
    }
        


    };


    
















?>