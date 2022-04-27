


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jstyle.css">
    <link rel="stylesheet" href="rstyle.css">
    <title> Sign In </title>
</head>
<body>
<main>    
<form action="validation.php" method="post">
        <h1>Login</h1>
        <div>
            <label for="name">Username:</label>
            <input type="text" name="name" id="name" maxlength="30" placeholder="input either your name or email" >
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" maxlength="15" placeholder="input your password">
        </div>
         <button type="submit" name="submit"> Login In</button>
         <footer>Not a member<a href="register.php"> Register here</a></footer> 

         
</form>
</main>
</body>
</html>        