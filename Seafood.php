<?php
require_once 'init.php';
?>


    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <title>Data</title>
    </head>
    <body>
    
    <table class='table table-dark'>
    <tr>
        <th>ID</th>
        <th>Seafood</th>
        <th>Price</th>
        <th>Soup</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
       <?php Seafood();?>
       </table>