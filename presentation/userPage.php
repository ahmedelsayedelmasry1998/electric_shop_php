<?php
session_start();
include_once("../master/sections/header.php");
include_once("../master/sections/mid.php");
include_once("../master/sections/connect.php");
?>
<div class="compoents">
<a href="carts.php"><div class="basket">
            <i class="fa-solid fa-basket-shopping"></i>
            <?php
            if(isset($_SESSION['emailId']) && isset($_SESSION['customerId']))
            {
                $userId = $_SESSION['emailId'];
                $getAllCarts = $conn->query("SELECT COUNT(cartId) FROM carts WHERE userId = $userId")->fetchAll(PDO::FETCH_COLUMN);
                echo $getAllCarts[0];

            }else{
                echo 0;
            }
             ?>
            </div></a>
<?php
            $allProducts = $conn->query("SELECT * FROM products WHERE productId BETWEEN 9 AND 16"); 
            while($row = $allProducts->fetch()):
            ?>
            <div class="widget">
                <form action="./addCart.php?product=<?php echo $row['title']; ?>&price=<?php echo $row['price']; ?>&id=<?php echo $row['productId']; ?>" method="post">
                <img  src="<?php echo $row['image']; ?>" alt="">
                    <h2><?php echo $row['title']; ?></h2>
                    <h4><?php echo $row['productDate']; ?></h4>
                    <h6><?php echo $row['descraption']; ?></h6>
                    <span> RS . <?php echo $row['price']; ?></span>
                    <span> 5000 - 80% </span>
                    <input type="submit" class="addToCart" value="Add To Cart">
                </form>
                </div> 
            <?php endwhile; ?>
</div>
<?php
include_once("../master/sections/actions.php");
include_once("../master/sections/footer.php");
include_once("../master/sections/end.php");
?>