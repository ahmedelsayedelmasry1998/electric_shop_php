<?php
session_start();
include_once "./master/sections/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electric Shop</title>
    <!-- <link rel="stylesheet" href="./master/css/all.css"> -->
    <link rel="stylesheet" href="./master/css/bootstrap.css">
    <link rel="stylesheet" href="./master/css/main.css">
</head>
<body>
    <div class="contents">
        <div class="header">
            <div class="search">
                <img src="./master/images/logo_admin.png" alt="">
                <input type="text" class="handelTxt">
                <div class="searching">
                    <img src="./master/images/search.png" alt="">
                </div>
            </div>
            <div class="links">
                <ul>
                    <li><a class="active" href="<?php echo $_SERVER['PHP_SELF'] ?>">Home</a></li>
                    <li><a href="./presentation/contact.php">Contact</a></li>
                </ul>
                <a class="btn" href="./presentation/signup.php">Signup</a>
                <a class="btn" href="./presentation/signin.php">Signin</a>
            </div>
        </div>

        <div class="content">
        <div class="carsoual">
        <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./master/images/2ii.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./master/images/3ii.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./master/images/5ii.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./master/images/6ii.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
        <div class="latestBtn">
            <a class="" href="#">Latest Post</a>
        </div>

        <div class="compoents">
           <a href="./presentation/carts.php"> <div class="basket">
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
            $allProducts = $conn->query("SELECT * FROM products WHERE productId BETWEEN 1 AND 8"); 
            while($row = $allProducts->fetch()):
                $srcPhoto = substr($row['image'],1);
            ?>
            <div class="widget">
                    <form action="./presentation/addCart.php?product=<?php echo $row['title']; ?>&price=<?php echo $row['price']; ?>&id=<?php echo $row['productId']; ?>" method="post">
                    <img  src="<?php echo $srcPhoto; ?>" alt="">
                    <h2><?php echo $row['title'] ?></h2>
                    <h4><?php echo $row['productDate'] ?></h4>
                    <h6><?php echo $row['descraption'] ?></h6>
                    <span> RS . <?php echo $row['price'] ?></span>
                    <span> 5000 - 80% </span>
                    <input type="submit" class="addToCart" value="Add To Cart">
                    </form>
                </div> 
            <?php endwhile; ?>
        </div>

        <div class="actions">
            <a class="activeAction" href="<?php echo $_SERVER['PHP_SELF']; ?>">1</a>
            <a href="./presentation/userPage.php">2</a>
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

            <div class="footActions">
                <h3>Information</h3>
                <ul>
                    <li>Contact</li>
                    <li>Regastration</li>
                    <li>Lagel Notice</li>
                    <li>Rerms And Conditions</li>
                    <li>FAQ</li>
                </ul>
            </div>
            <div class="footActions">
                <h3>Our Offers</h3>
                <ul>
                    <li>New Product</li>
                    <li>Top Sellers</li>
                    <li>Special Offers</li>
                    <li>Supplers</li>
                </ul>
            </div>
            <div class="footActions">
                <h3>Social Media</h3>
                <div class="images">
                    <img class="imageFoot" src="./master/images/facebook.png" alt="">
                    <img class="imageFoot" src="./master/images/youtube.png" alt="">
                    <img class="imageFoot" src="./master/images/twitter.png" alt="">
                </div>
                <div class="reserve">
                    @ Electric Shop 2024 <br>
                    All Right Reserved
                </div>
            </div>
        </div>
    </div>
    <script src="./master/javascript/all.js"></script>
    <script src="./master/javascript/bootstrap.js"></script>
    <script src="./master/javascript/main.js"></script>
    
</body>
</html>