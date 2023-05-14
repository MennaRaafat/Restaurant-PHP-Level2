<?php
require_once 'Connec.php';
require_once 'index.php';

if(isset($_SERVER['REQUEST_METHOD']) == 'POST'){
    $name = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $conpass = $_POST['ConfirmPass'];
    $Birthdate = $_POST['BirthDate'];


 
  
    if(strlen($password != $conpass) ){
    
     echo"<script>alert('Make Sure that You Matched The Password and The Confirm Password');</script>";
     ?>
     <meta http-equiv="refresh" content="0;url=http://localhost/Project/Register.php"/> 
    <?php
    exit;
    }

    if(empty( $name)){
        echo"<script>alert('You Must Enter the Username');</script>"; 
        ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/Project/Register.php"/> 
       <?php
       exit;
       }
    if(empty($email)){
        echo"<script>alert('You Must Enter Your Email');</script>";
        ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/Project/Register.php"/> 
    <?php
    exit;
    }
    if(empty($password)){
        echo"<script>alert('You Must Enter Your Password');</script>";
        ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/Project/Register.php/> 
    <?php
    exit;
    }

    else{
        $sql = "INSERT INTO users(Username , Email , Password , ConfirmPass , BirthDate )";
        $sql .= "VALUES ('$name' , '$email' , ' $password' , '$conpass' , ' $Birthdate')";

        $dquery = mysqli_query($connec , $sql);
    }

}   
?>