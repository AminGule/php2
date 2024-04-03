<?php
 
 require_once 'config.php';

 //echo "USAO SI NA PLATFORMU";

 //var_dump($_SESSION);

 if(isset($_SESSION['admin_id'])) {
    //die("Korisnik nije ulogovan");
    header('location: index.php');
    exit();  
 }  

 // echo "mozes dalje";
 //else {
 //echo "korisnik nije ulogovan";
 //}