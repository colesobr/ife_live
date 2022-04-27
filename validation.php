<?php

session_start();

$con = mysqli_connect("localhost","root","123456");

mysqli_select_db($con,"database");


$name = $_POST["name"];
$pass = $_POST["password"];
$password = "";
$name_res = "";
$email = "";
$birth = "birth";


$s = " select * from  user where (name = '$name' or email = '$name')";



$result = mysqli_query($con, $s);


$res = mysqli_fetch_all($result, MYSQLI_ASSOC);





$password = $res[0]['password'];
password_verify
$name_res     = $res[0]['name'];
$email    = $res[0]['email'];
$birth    = $res[0]['birth'];

if(($password == $pass) && ($name_res == $name || $email == $name)){
    $_SESSION['username'] = $name_res;
    $_SESSION['email'] = $email;
   $_SESSION['birth'] = $birth;
    
    header('location:home.php'); 
}else{
    
     header('location:login.php');
}

?>