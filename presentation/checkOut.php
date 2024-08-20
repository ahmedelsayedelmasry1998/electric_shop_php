<?php
session_start();
include_once "../master/sections/connect.php";
include_once "../master/sections/header.php";
?>
<div class="content">
    <?php
    if(isset($_SESSION['emailId']))
    {
    $userId = $_SESSION['emailId'];
    $deleteCarts = $conn -> prepare("DELETE FROM carts WHERE userId = $userId");
    $deleteCarts->execute();
    session_unset();
    session_destroy();
    header("location:../index.php");
    }else{
        header("location:../index.php");
    }
    ?>
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