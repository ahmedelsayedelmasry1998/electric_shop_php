<?php
try{
    $hostname = "localhost";
    $dbname  = "electric_shop";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e)
{
   echo $e->getMessage(); 
}
?>