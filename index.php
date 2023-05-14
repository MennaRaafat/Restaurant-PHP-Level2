<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="Style.css">   

    
</head>
<body>
  <header>

      <nav>
          <ul class="link">
                <li><a href ="#home" >Home</a></li>
               <li> <a href="Login.php">Sign in</a></li>
               <li> <a href ="Register.php"> Sign Up</a></li>
             <li> <a href ="#icons">Contact</a></li>
             <li> <a href ="#About">About Us</a></li>
          </ul>
      </nav>

    <h1 class="head">Eat24/7 <span class="iconify" data-icon="emojione-monotone:pot-of-food" style="color: #5584AC; font-size: 30px;"></span></h1>
    <div id="search ">
    <input type="search" placeholder="Search" name=" " />
    <span class="iconify" data-icon="mdi:magnify" style="color: white; font-size: 30px;"></span>
    </div>
    </header>
    <br><br><br>

<main>
    <table id="home" style="width:700px">
        <tr>
            <td><img src="https://images.unsplash.com/photo-1550547660-d9450f859349?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZCUyMHBob3Rvc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" width="250px">
            <a name="burger" class="btn btn-primary" href='Admin.php?eat=Burger';>Burger</a> </td>
            
            
            <td><img src=" https://images.unsplash.com/photo-1541745537411-b8046dc6d66c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80" width="250px" height="310px">
            
            <a name="pizza" class="btn btn-primary" href='Admin.php?eat=Pizza';>Pizza</a>
        </td>

            <td><img src="https://images.unsplash.com/photo-1600326145359-3a44909d1a39?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80"width="250px" >
            
            <a name="noodles" class="btn btn-primary" href='Admin.php?eat=Noodles'>Noodles</a> </td>
        </tr>
</tr>
        <tr>
    <td><img src=" https://images.unsplash.com/photo-1607490306963-e6ef08b196a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDN8fGZvb2QlMjBwaG90b3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" width="250px">
    <br>
    <a name="seafood"  class="btn btn-primary" href='Admin.php?eat=Seafood';>Seafood</a></td>
    <td><img src=" https://images.unsplash.com/photo-1557366972-9c9f3ccc30f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZCUyMHBob3Rvc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" width="250px">
    <br>
    <a name="salads"  class="btn btn-primary" href='Admin.php?eat=Salads';>Salads</a></td>
    <td><img src="https://images.unsplash.com/photo-1504855101244-34edfbd4b861?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjZ8fGZvb2QlMjBwaG90b3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" width="250px" height="375px">
    <br>
    <a name="desserts"  class="btn btn-primary" href='Admin.php?eat=Desserts';>Desserts</a></td>    
    </tr>
    
</table>

</main>
   <footer>
        <h2 id="About">About Us</h2>
        <p><strong>Who We Are ?</strong><br><br>
            Eat24/7 is the #1 online food ordering service in Egypt. We offer the quickest, easiest, most reliable food ordering experience. <br> Our service helps customers find restaurants in their area, filter by cuisine, browse menus, and place their orders. <br>  Customers use Eat24/7 through our iOS and Android applications or through our website. Eat24/7 was founded <br> in 1999 and has helped millions of Egyptians order their food in 30 seconds or less. Our customers enjoy <br> exclusive offers from thousands of restaurants in more than 25 cities in Egypt.</p>

    <br><br>
    <hr>
    <div id="icons">
    <span class="iconify" data-icon="ion:logo-facebook" style="color: grey; font-size: 30px;"></span>
    <span class="iconify" data-icon="jam:instagram" style="color: grey; font-size: 30px;"></span>
    <span class="iconify" data-icon="ion:logo-twitter" style="color: grey; font-size: 30px;"></span>
    <span class="iconify" data-icon="prime:linkedin" style="color: grey; font-size: 30px;"></span>
</div>
<hr>
<br>
<h3>About Us Terms and Conditions Privacy Careers Join Us </h3>
<p class="copy"> &copy; 2021 Eat24/7 </p>
</footer>


<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>