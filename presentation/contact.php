<?php
include_once "../master/sections/connect.php";
include_once "../master/sections/header.php";
?>
<div class="content">
    <div style="display:none" class="contactCheck">contact</div>
    <h1>Visit Us </h1>
    <div class="information">
        <div class="customInfo">
            <h2>Contact Details : </h2>
            <h3>18 Jorpati,
            CAS 4535, Nepal</h3>
            <h4>info@electric-shop.com</h4>
            <h5>Mobile 9817604185</h5>
            <h5>Tel 123-456-6780</h5>
            <h6>Fax 123-456-5679</h6>
            <h6>web:electricshop.com</h6>
        </div>
        <div class="customInfo">
            <h2>Opening Hours : </h2>
            <h3>Monday - Friday</h3>
            <h4>Closing Days : </h4>
            <h5>Satrday</h5>
            <h6>Sunday</h6>
        </div>
        <div class="customInfo">
            <h2>Email Us : </h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input name="name" type="text" placeholder="Name ..." class="handelTxtInfo">
            <input name="email" type="text" placeholder="Email ..." class="handelTxtInfo">
            <input name="subject" type="text" placeholder="Subject ..." class="handelTxtInfo">
            <textarea name="message" placeholder="Message ..." name="" id=""></textarea>
            <input type="submit" value="Send Message" class="sendBtn">
            </form>
        </div>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $addEmail = $conn->prepare("INSERT INTO emails (email,subject,message) VALUES (?,?,?)");
        $addEmail->execute([$email,$subject,$message]);
        header("location:../index.php");
    }
    ?>
    </div>
    <div class="googleMap">
    <iframe style="width:100%; border: 0px" scrolling="no" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14&amp;output=embed"></iframe><br />
        <small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
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

      