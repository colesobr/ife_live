<?php 

function login(){
    if(empty($_POST['username']))
    {
       $error = "UserName is empty!"; 
       return $error;
    }
    
    if(empty($_POST['password']))
    {
        $error = "Password is empty!";
        return $error;
    }
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

/////Validate that information is the same as database
///if not return error 


    $success = "Correct credentials";
    return $success;
}

?>

<div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>