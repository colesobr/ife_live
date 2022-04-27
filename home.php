<?php

session_start();
if(!isset($_SESSION['name']))
$name = $_SESSION['username'];
$email = $_SESSION['email'];
$birth = $_SESSION['birth'];

$info = $name.". Your email is: ".$email.". Your date of birth is: ".$birth;  

?>


<html>
<head>    
<link rel="stylesheet" href="hstyle.css">
<title>Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>



    <h1>Welcome <?php echo $name; ?> </h1>
    <br> Your email is: <?php echo $email; ?></br>
    <p> Your date of birth is: <?php echo $birth; ?></p>

    <footer><i><b><a href="login.php"> LOGOUT </a></i></b></footer>

    
</body>

</html>