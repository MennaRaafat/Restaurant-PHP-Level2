<?php
require_once 'init.php';

$id = $_GET['Id'];
    
$sql = "DELETE FROM pizza where Id ='$id'";
$delete = mysqli_query($connection , $sql);

if($delete){
    mysqli_close($connection);
    header("Location: Pizza.php");
}

else{
    echo"Error";
}


?>