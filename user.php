<?php

session_start();
header('location:login.php'); 

$con = mysqli_connect("localhost","root","123456");

mysqli_select_db($con,"database");


$name = $_POST["name"];
$pass = $_POST["password"];
$hash = password_hash($password, PASSWORD_DEFAULT);
$email = $_POST["email"];
$birth = $_POST["birth"];

$s = "select * from user where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
       echo" Username Already Taken";
}else{
    $reg= " insert into user(name,password,email,birth) values ('$name','$hash', '$email', '$birth')";
    mysqli_query($con, $reg);
    echo"Registration Successful";
} 