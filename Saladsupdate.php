<?php
require_once 'init.php';

$Id=$_GET['Id'];

if(isset($_POST['OK'])){
    $Salads=$_POST['Salads'];

    $Price=$_POST['Price'];
    $Extra=$_POST['ExtraAdd'];

    $Sql="update salads set Salads =' $Salads',Price ='$Price',ExtraAdd='$Extra' where Id='$Id' ";

    $updating=mysqli_query($connection,$Sql);

    if($updating){
        mysqli_close($connection);
        header('location:Salads.php');
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
$query="SELECT * FROM Salads WHERE Id='$Id'";
$result=mysqli_query($connection,$query);
    ?>
       

    <?php while($row=mysqli_fetch_assoc($result)){
        ?>
        <input type="text" name="Salads"value="<?php echo $row['Salads'];?>">
<br>
        <input type="text" name="Price"value="<?php echo $row['Price'];?>">  
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