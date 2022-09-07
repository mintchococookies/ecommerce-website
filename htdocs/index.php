<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Main Page</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <header class="header-flex pink">
    <a href="index.php" class="link"><img src="images/logo.png" alt="Company Logo" id="logo" /></a>
    <nav>
      <a href="index.php" class="link">HOME</a>
      <a href="checkout.php" class="link" id="cart-link">CART</a>
      <a href="catalogue.php" class="link">MENU</a>
      <a href="login.php" class="link" id="login-link">LOG IN</a>
      <a href="logout.php" class="link" id="logout-link">LOG OUT</a>
    </nav>
  </header>
  <div id="banner-div">
    <img src="images/banner.png" alt="Banner Image" width="100%" />
  </div>
  <div id="welcome">
    <?php if (isset($_SESSION['email'])) : ?>
      <p id="welcome-message"><?php echo "Welcome to Sugar Fix, " . $_SESSION['firstname'] ?></p>
      <p>Check out our collections below!</p>
    <?php endif ?>
  </div>
  <main>
    <div id="collections-div">
      <h3>COLLECTIONS</h3>
      <hr />
      <div class="collection-flex">
        <a href="catalogue.php#catalogue-row-1" class="collection-item pink">Chocolate Cakes</a>
        <a href="catalogue.php#catalogue-row-2" class="collection-item blue">Special Cakes</a>
      </div>
      <div class="line-break"></div>
      <div class="collection-flex">
        <a href="catalogue.php#catalogue-row-3" class="collection-item blue">Birthday Cakes</a>
        <a href="catalogue.php#catalogue-row-4" class="collection-item pink">Malaysian Delights</a>
      </div>
    </div>
    <div id="hotsellers-div">
      <h3>HOT SELLERS</h3>
      <hr />
      <div class="hotsellers-flex">
        <div class="hotsellers-item">
          <a href="order.php?id=1"><img src="images/cake1.png" width="100%" /></a>
          CHOC MOUSSE CAKE <br />
        </div>
        <div class="hotsellers-item">
          <a href="order.php?id=4"><img src="images/cake4.png" width="100%" /></a>
          CHOCOLATE BUTTER CAKE
        </div>
        <div class="hotsellers-item">
          <a href="order.php?id=6"><img src="images/cake6.png" width="100%" /></a>
          TOTORO CAKE
        </div>
        <div class="hotsellers-item">
          <a href="order.php?id=11"><img src="images/cake11.png" width="100%" /></a>
          CAPPUCINO CAKE
        </div>
      </div>
    </div>
    <div id="aboutus-div">
      <h3>ABOUT US</h3>
      <hr />
        <p class="aboutus">
          <small>
            SugarFix is known for our customizable cakes, ranging from
            birthday cakes, chocolate cakes, cheesecakes and the locals'
            favourites, Malaysian delights. We have been handcrafting cakes
            since 1999 and we can guarantee the quality in every single step
            of assembling the cake. Appropriate from the youth to senior
            individuals, anybody can enjoy our cakes without questions in
            mind. At SugarFix, you will get the best quality of cakes at a
            reasonable cost. You can order a cake at a price of just RM29, the
            highest can go up to RM58.
          </small>
        </p>
    </div>
  </main>
  <div>
    <footer class="footer-banner">
      <small>
        <i>
          Avenue City · Selangor · +60123456789 · sugarfix@gmail.com
          <br /> </i></small>
    </footer>
    <hr />
    <small><i>Copyright &copy; 2021 SugarFix </i></small>
  </div>
</body>
</html>
<?php include('logged_in_status.php') ?>
<?php include('cart_status.php') ?>