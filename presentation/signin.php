<?php
session_start();
include_once "../master/sections/connect.php";
include_once "../master/sections/header.php";
?>
<div class="content">
    <h1>Please signin</h1>
    <div class="member">
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <span>Email : </span>
        <input type="email" name="email" class="handelTxtMember">
        <span>Password : </span>
        <input type="password" name="password" class="handelTxtMember">
        <input type="submit" class="customBtnMember" value="Signin">
       </form>
    </div>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $checkCustomer = $conn->query("SELECT * FROM customers WHERE email='$email' AND pass='$password'")->fetchAll(PDO::FETCH_ASSOC);
        if(count($checkCustomer) > 0)
        {
            $checkEmail = $conn->query("SELECT * FROM emails WHERE email='$email'")->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['emailId'] = $checkEmail[0]['emailId'];
            $_SESSION['customerId'] = $checkCustomer[0]['customerId'];
            $_SESSION['customerName'] = $checkCustomer[0]['customerName'];
            $_SESSION['customerEmail'] = $checkCustomer[0]['email'];
            header("location:../index.php");
        }else{
            echo "<div class='error'>This Customer Is Not Found ...</div>";
        }
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