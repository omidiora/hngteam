<?php
session_start();
//$db=mysqli_connect('localhost','root','','blog')or die("COULD NOT CONNECT TO DATABASE");
$db=mysqli_connect('localhost','id11016695_omidiora','oluwa123','id11016695_circle')or die("COULD NOT CONNECT TO DATABASE");
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password1=$_POST['password1'];
//Register users
if(isset($_POST['submit'])){
    $password=md5($password1);//this will encrpyt the 
    $query="INSERT INTO login(firstname,lastname,email,password) VALUES ('$firstname','$lastname',$email,'$password')";
    mysqli_query($db,$query);
    $_SESSION['username']=$firstname;
    $_SESSION["success"]="REGISTRATION SUCCESFULL ";
    header('location:dashboard.php');


};



        
?>















?>