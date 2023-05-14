<?php
function Pizza(){
  global $connection;
        $querry2="SELECT * FROM pizza";
        $resultt2= mysqli_query($connection , $querry2);
               
         while($rows2 = mysqli_fetch_assoc($resultt2)){ 
        
            ?>
                <tr> <td><?=  $rows2['Id'] ?> </td>
                <td><?= $rows2['PizzaType'] ?> </td>
                <td> <?=  $rows2['Price'] ?> </td>
                <td> <?= $rows2['Size'] ?> </td>
                <td><a href="Pupdate.php?Id=<?= $rows2['Id']?>" role="button" name="Update" class ='btn btn-success'>Update</a></td>
                 <td><a href="PDelete.php?Id=<?= $rows2['Id']?>" class ='btn btn-danger'>Delete</button> </td>  </tr>
        
        <?php
       }
      }

?>

<?php
function Burger(){
                  global $connection;
          
                  $querry="SELECT * FROM burger";
                  $resultt= mysqli_query($connection , $querry);

                  
                  while($rows = mysqli_fetch_assoc($resultt)){ 
                    ?>
                    <tr> <td><?=$rows['Id']?></td>
                   <td>  <?=  $rows['ChickenBurger']?></td> 
                     <td>  <?=  $rows['ChickenPrice']?> </td>  
                    <td>   <?= $rows['BeefBurger']?></td>
                    <td> <?=  $rows['BeefPrice']?> </td>
                    <td>  <?= $rows['ExtraAdd']?> </td>
                    <td><a href="BurgerUpdate.php?Id=<?= $rows['Id']?>" role="button" name="Update" class ='btn btn-success'>Update</a></td>
                    <td><a href="Delete.php?Id=<?= $rows['Id']?>" class ='btn btn-danger'>Delete</button> </td> </tr>
                    <?php
            } 
                }
?>

<?php
        function Noodles(){
          global $connection;

                $querry2="SELECT * FROM noodles";
                $resultt2= mysqli_query($connection , $querry2);
               
                
        
        
                
                 while($rows2 = mysqli_fetch_assoc($resultt2)){ 
                
                    ?>
        
        
        
                        <tr> <td><?=  $rows2['Id'] ?> </td>
                        <td><?= $rows2['Noodles'] ?> </td>
                        <td> <?=  $rows2['Price'] ?> </td>
                        <td> <?= $rows2['ExtraAdd'] ?> </td>
                        <td><a href="Nupdate.php?Id=<?= $rows2['Id']?>" role="button" name="Update" class ='btn btn-success'>Update</a></td>
                        <td><a href="NDelete.php?Id=<?= $rows2['Id']?>" class ='btn btn-danger'>Delete</button> </td>  
                      </tr>
                
                <?php
               }
              }
                ?>


<?php
function Seafood(){
  global $connection;
        $sql="SELECT * FROM seafood";
        $result= mysqli_query($connection , $sql);
       
        
         while($rows2 = mysqli_fetch_assoc($result)){ 
        
            ?>

                <tr> <td><?=  $rows2['Id'] ?> </td>
                <td><?= $rows2['SeaFood'] ?> </td>
                <td> <?=  $rows2['Price'] ?> </td>
                <td> <?= $rows2['Soup'] ?> </td>
                <td><a href="Seaupdate.php?Id=<?= $rows2['Id']?>" role="button" name="Update" class ='btn btn-success'>Update</a></td>
                <td><a href="SEADelete.php?Id=<?= $rows2['Id']?>" class ='btn btn-danger'>Delete</button> </td> 
              </tr>
        
        <?php
       }
      }

?>


<?php
function Salads(){
  global $connection;
        $sql="SELECT * FROM salads";
        $result= mysqli_query($connection , $sql);
       
        
         while($rows2 = mysqli_fetch_assoc($result)){ 
        
            ?>

                <tr> <td><?=  $rows2['Id'] ?> </td>
                <td><?= $rows2['Salads'] ?> </td>
                <td> <?=  $rows2['Price'] ?> </td>
                <td> <?= $rows2['ExtraAdd'] ?> </td>
                <td><a href="Saladsupdate.php?Id=<?= $rows2['Id']?>" role="button" name="Update" class ='btn btn-success'>Update</a></td>
                <td><a href="SalDelete.php?Id=<?= $rows2['Id']?>" class ='btn btn-danger'>Delete</button> </td>   </tr>
        
        <?php
       }
      }

?>


<?php
function Desserts(){
  global $connection;
        $sql="SELECT * FROM desserts";
        $result= mysqli_query($connection , $sql);
             
         while($rows2 = mysqli_fetch_assoc($result)){ 
        
            ?>

                <tr> <td><?=  $rows2['Id'] ?> </td>
                <td><?= $rows2['Desserts'] ?> </td>
                <td> <?=  $rows2['Price'] ?> </td>
                <td> <?= $rows2['ExtraAdd'] ?> </td>
                <td><a href="Dessertsupdate.php?Id=<?= $rows2['Id']?>" role="button" name="Update" class ='btn btn-success'>Update</a></td>
                <td><a href="DDelete.php?Id=<?= $rows2['Id']?>" class ='btn btn-danger'>Delete</button> </td> 
              </tr>
        
        <?php
       }
      }

?>