<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jstyle.css">
    <link rel="stylesheet" href="rstyle.css">
    <title> Register</title>
</head>


<body>
<main>
    
    <form action="user.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="name"> Name:</label>
            <input type="text" name="name" id="name" placeholder="e.g. Jermaine" pattern="[a-zA-Z]*" required value="">
        </div>

        <div>
            <label for="dob"> Date of Birth: </label>
            <input type="date" name="birth" id="birth" placeholder="input your date of birth" required value="">
        </div>

        <div>
            <label for="email"> Email: </label>
            <input type="email" name="email" id="email" placeholder="email@domain.com" required value="">
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}" required title="Must contain at least one number and
             one uppercase and lowercase letter, and at least 8 or more characters" id="password" placeholder="input your password">
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" pattern=".{8,15}" required title="8 to 15 characters" id="password2" placeholder="input your password again" onchange="check()"/>
            <span id='message'></span>
        </div>

        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit" onclick="return Validate()"  >Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer> 
        
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("password2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
            
    </form>
</main>
</body>
</html>