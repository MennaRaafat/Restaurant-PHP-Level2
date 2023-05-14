<?php
require_once 'init.php';
// session_start();

if(isset($_POST['login'])){
$Username=$_POST['name'];
$password=$_POST['password'];

 $sql ="SELECT Username,Password from users where Username='$Username' AND Password ='$password'";

$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result) >= 1){
    $_SESSION['Username']=$Username;

    header('location:index2.php');
    exit();
}else{
    echo"not correct";
    exit();

}
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Login.css">
    <title>Login</title>
</head>
<body>
    <header>
        <br>
        <center>
        <h1><i>Welcome in our website</i> </h1>
        <h3>It's good to see you again</h3></center>
            <div class="form">
        <fieldset>
            <legend>login</legend><br>
    <form method="POST" action="#">
Username : <input type="text" name="name" placeholder="please enter your name"><br><br><br>
Password : <input type="password" name="password" placeholder="please enter your password"><br><br><br><br>

<input type="submit" name="login" value="login">
    </form>
            
        </fieldset>
        </div>
    </header>
</body>
</html>