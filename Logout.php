<?php

if(isset($_GET['Logout']) && $_GET['Logout'] == '1'){
    session_destroy();

    unset($_SESSION['Username']);

    header('location:index.php');
}


?>