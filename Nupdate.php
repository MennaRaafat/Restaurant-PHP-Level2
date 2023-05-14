<?php
require_once 'init.php';

$Id=$_GET['Id'];

if(isset($_POST['OK'])){
    $Noodles=$_POST['Noodles'];

    $Noodles_price=$_POST['Price'];
    $ExtraAdd=$_POST['ExtraAdd'];

    $Sql="update noodles set Noodles =' $Noodles',Price ='$Noodles_price',ExtraAdd='$ExtraAdd' where Id='$Id' ";

    $updating=mysqli_query($connection,$Sql);

    if($updating){
        mysqli_close($connection);
        header('location:Noodles.php');
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
$query="SELECT * FROM noodles WHERE Id='$Id'";
$result=mysqli_query($connection,$query);
    ?>
       

    <?php while($row=mysqli_fetch_assoc($result)){
        ?>
        <input type="text" name="Noodles"value="<?php echo $row['Noodles'];?>">
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