<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>      
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="Style.css">

<!-- <link rel="stylesheet" href="Styling.css"> -->

    
</head>
<body>
    
<div class="back">
    <form class="new" method="POST" action="RData.php">
        
<h1>Sign UP</h1>
        
        <label>Username</label>
        <br>
        <input type="text" name="Username" placeholder="Enter Your Username"/>
        <br><br>
        <label>Email</label>
        <br>

        <input type="email" name="Email" placeholder="Enter Your Email"/>
        <br><br>
        <label>Password</label>
        <br>

        <input type="password" name="Password" placeholder="Enter Your Password"/>
        <br><br>
        <label>Confirm Password</label>
        <br>

        <input type="password" name="ConfirmPass" placeholder="Enter Your Password Again"/>
        <br><br>
        <label>Birth Date</label>
        <br>

        <input type="date" name="BirthDate"/>
        <br><br>
        <button type="submit" name="Register" >Create Account</button>
    </form>

</div>
</body>
</html>