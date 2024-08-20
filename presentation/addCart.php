<?php
session_start();
include_once "../master/sections/connect.php";
include_once "../master/sections/header.php";
?>
<?php
if(isset($_SESSION['customerId']))
{
    $productId = $_GET['id'];
    $fetchProductId = $conn->query("SELECT * FROM carts WHERE productId = $productId")->fetchAll(PDO::FETCH_ASSOC);
    if(count($fetchProductId) > 0)
    {
        $product = $_GET['product'];
        $price = $_GET['price']+$fetchProductId[0]['price'];
        $userId = $_SESSION['emailId'];
        $quantity = $fetchProductId[0]['quatity']+1;
        $addCart = $conn->prepare("UPDATE carts SET product = ? , price= ? ,quatity=?,userId=?,productId=? WHERE productId = $productId");
        $addCart->execute([$product,$price,$quantity,$userId,$productId]);
        header("location:../index.php");  
    }else{
    $product = $_GET['product'];
    $price = $_GET['price'];
    $userId = $_SESSION['emailId'];
    $addCart = $conn->prepare("INSERT INTO carts(product,price,quatity,userId,productId) VALUES (?,?,?,?,?)");
    $addCart->execute([$product,$price,1,$userId,$productId]);
    header("location:../index.php");   
    }
     
}else{
    header("location:signin.php");
}

?>
<?php
include_once "../master/sections/footer.php";
include_once "../master/sections/end.php";
?>
