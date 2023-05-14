<?php
require_once 'init.php';

$Id=$_GET['Id'];

if(isset($_POST['OK'])){
    $PizzaType=$_POST['PizzaType'];

    $Price=$_POST['Price'];
    $Size=$_POST['Size'];

    $Sql="update pizza set PizzaType =' $PizzaType',Price ='$Price',Size='$Size' where Id='$Id' ";

    $updating=mysqli_query($connection,$Sql);

    if($updating){
        mysqli_close($connection);
        header('location:Pizza.php');
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
$query="SELECT * FROM pizza WHERE Id='$Id'";
$result=mysqli_query($connection,$query);
    ?>
       

    <?php while($row=mysqli_fetch_assoc($result)){
        ?>
        <input type="text" name="PizzaType"value="<?php echo $row['PizzaType'];?>">
<br>
        <input type="text" name="Price"value="<?php echo $row['Price'];?>">  
        <br>

             <input type="text" name="Size"value="<?php echo $row['Size'];?>">  
                   <br>

                   <input type="submit" value="OK" name="OK">
        </form>
<?php
    }
?>
 
</body>
</html>