<?php
//connexion

$server = 'localhost'; 
$username ='root'; 
$passw =''; 
$database ='TP-FINAL'; 

$conn = mysqli_connect($server, $username, $passw, $database); 

if (!$conn){
   die('Error'); 
}
?>