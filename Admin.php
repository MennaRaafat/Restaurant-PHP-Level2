<?php

if(isset($_GET['eat'])){
    $eat = $_GET['eat'];
}else{
    $eat = '';
}

switch($eat){
    case 'Burger':
        require_once 'Burger.php';
        break;
    
    case 'Pizza':
        require_once 'Pizza.php';
        break;

    case 'Noodles':
        require_once 'Noodles.php';
        break; 

     case 'Seafood':
        require_once 'Seafood.php';
        break;   

    case 'Salads':
        require_once 'Salads.php';
        break;  
    
    case 'Desserts':
        require_once 'Desserts.php';
        break; 
    
    default:
        echo 'not found';

    }


?>