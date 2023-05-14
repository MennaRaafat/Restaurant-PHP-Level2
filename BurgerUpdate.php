<?php
require_once 'init.php';

$Id=$_GET['Id'];

if(isset($_POST['OK'])){
    $chickenBurger=$_POST['ChickenBurger'];
    $beefBurger=$_POST['BeefBurger'];
    $ChickenPrice=$_POST['ChickenPrice'];
    $BeefPrice=$_POST['BeefPrice'];
    $ExtraAdd=$_POST['ExtraAdd'];

    $Sql="update burger set ChickenBurger ='$chickenBurger',BeefBurger='$beefBurger',ChickenPrice='$ChickenPrice',BeefPrice='$BeefPrice',ExtraAdd='$ExtraAdd' where Id='$Id' ";

    $updating=mysqli_query($connection,$Sql);

    if($updating){
        mysqli_close($connection);
        header('location:Burger.php');
    }
    else{
    echo "NOT UPDATED";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
<?php
$query="SELECT * FROM Burger WHERE Id='$Id'";
$result=mysqli_query($connection,$query);
    ?>
       

    <?php while($row=mysqli_fetch_assoc($result)){
        ?>
        <input type="text" name="ChickenBurger"value="<?php echo $row['ChickenBurger'];?>">  
        <br>
        <input type="text" name="ChickenPrice"value="<?php echo $row['ChickenPrice'];?>">
<br>
             <input type="text" name="BeefBurger"value="<?php echo $row['BeefBurger'];?>">  
                   <br>
                   <input type="text" name="BeefPrice"value="<?php echo $row['BeefPrice'];?>">
<br>
<input type="text" name="ExtraAdd"value="<?php echo $row['ExtraAdd'];?>">
<br>

                   <input type="submit" value="OK" name="OK">
        </form>
<?php
    }
?>
 
</body>
</html>