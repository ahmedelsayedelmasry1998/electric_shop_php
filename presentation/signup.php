<?php
include_once "../master/sections/connect.php";
include_once "../master/sections/header.php";
?>
<div class="content">
    <h1>Please signup</h1>
    <div class="member">
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
       <span>Name : </span>
        <input type="text" name="name" class="handelTxtMember">
        <span>Email : </span>
        <input type="email" name="email" class="handelTxtMember">
        <span>Address : </span>
        <input type="text" name="address" class="handelTxtMember">
        <span>Phone : </span>
        <input type="text" name="phone" class="handelTxtMember">
        <span>Password : </span>
        <input type="password" name="password" class="handelTxtMember">
        <span>Re Password : </span>
        <input type="password" name="rePassword" class="handelTxtMember">
        <input type="submit" class="customBtnMember" value="Registar">
       </form>
    </div>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $rePassword = $_POST['rePassword'];
        if($password == $rePassword)
        {
            $addCustomer = $conn->prepare("INSERT INTO customers(customerName,email,pass,phone,address) VALUES (?,?,?,?,?)");
            $addCustomer->execute([$name,$email,$password,$phone,$address]);
            header("location:../index.php");
        }else{
            echo "<div class='error'>Password And Re Password Is Not Matched ...</div>";
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