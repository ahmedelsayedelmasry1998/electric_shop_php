<?php
session_start();
if(!isset( $_SESSION['emailId']))
{
    header("location:../index.php");
}
include_once "../master/sections/connect.php";
include_once "../master/sections/header.php";
?>

<div class="content">
    <h1>Carts</h1>
    <div class="cartContainer">
        <table>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Product Descraption</th>
                <th>Date Added</th>
                <th>Email</th>
            </tr>
            <?php
            
            $userId = $_SESSION['emailId'];
            $allCarts = $conn->query("SELECT carts.product,carts.price,carts.quatity
            ,products.productName,products.descraption,products.productDate
            ,emails.email,emails.subject FROM ((carts INNER JOIN products USING(productId))
            INNER JOIN emails ON emails.emailId = carts.userId) WHERE userId = $userId   
             ");
             while($row = $allCarts->fetch()):
            
            ?>
            <tr>
                <td><?php echo $row['product'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['quatity'] ?></td>
                <td class="descRow"><?php echo $row['descraption'] ?></td>
                <td><?php echo $row['productDate'] ?></td>
                <td><?php echo $row['email'] ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <div class="handelBtn">
    <a class="customBtnCheckout" href="checkOut.php">Checkout</a>
    </div>      

</div>

<div class="footer">
            <div class="footActions">
                <h3>Account</h3>
                <ul>
                    <li>Your Account</li>
                    <li>Personal Information</li>
                    <li>Address</li>
                    <li>Order History</li>
                </ul>
            </div>
<?php
include_once "../master/sections/footer.php";
include_once "../master/sections/end.php";
?>