<?php
require_once 'init.php';

$Id=$_GET['Id'];

if(isset($_POST['OK'])){
    $SeaFood=$_POST['SeaFood'];

    $SeaFood_price=$_POST['Price'];
    $soup=$_POST['Soup'];

    $Sql="update seafood set SeaFood =' $SeaFood',Price ='$SeaFood_price',Soup='$soup' where Id='$Id' ";

    $updating=mysqli_query($connection,$Sql);

    if($updating){
        mysqli_close($connection);
        header('location:Seafood.php');
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
$query="SELECT * FROM seafood WHERE Id='$Id'";
$result=mysqli_query($connection,$query);
    ?>
       

    <?php while($row=mysqli_fetch_assoc($result)){
        ?>
        <input type="text" name="SeaFood"value="<?php echo $row['SeaFood'];?>">
<br>
        <input type="text" name="Price"value="<?php echo $row['Price'];?>">  
        <br>

             <input type="text" name="Soup"value="<?php echo $row['Soup'];?>">  
                   <br>

                   <input type="submit" value="OK" name="OK">
        </form>
<?php
    }
?>
 
</body>
</html>