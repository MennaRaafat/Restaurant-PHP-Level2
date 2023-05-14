<?php
require_once 'init.php';


$id = $_GET['Id'];
    
$sql = "DELETE FROM salads where Id ='$id'";
$delete = mysqli_query($connection , $sql);

if($delete){
    mysqli_close($connection);
    header("Location:Salads.php");
}

else{
    echo"Error";
}


?>
