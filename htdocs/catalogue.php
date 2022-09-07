<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catalogue Page</title>
  <link rel="stylesheet" href="styles.css" />
  <script src="product_selection.js"></script>
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
  <main>
    <h3>CATALOGUE</h3>
    <hr />
    <br id="catalogue-row-1" />
    <h4>CHOCOLATE CAKES</h4>
    <hr />
    <div class="catalogue-flex">
      <div class="catalogue-item" id="prod-1">
        <a href="order.php?id=1"><img src="images/cake1.png" alt="Cake 2" width="100%" /></a>
        CHOC MOUSSE CAKE <br />
        RM 48.00
      </div>
      <div class="catalogue-item" id="prod-2">
        <a href="order.php?id=2"><img src="images/cake2.png" alt="Cake 2" width="100%" /></a>
        QUINTUPLLE CHOCOLATE CAKE <br />
        RM 45.00
      </div>
      <div class="catalogue-item" id="prod-3">
        <a href="order.php?id=3"><img src="images/cake3.png" alt="Cake 3" width="100%" /></a>
        OREO CHOCOLATE CAKE <br />
        RM 45.00
      </div>
      <div class="catalogue-item" id="prod-4">
        <a href="order.php?id=4"><img src="images/cake4.png" alt="Cake 4" width="100%" /></a>
        CHOCOLATE BUTTER CAKE <br />
        RM 55.00
      </div>
    </div>
    <div class="line-break" id="catalogue-row-2"></div>
    <h4>SPECIAL CAKES</h4>
    <hr />
    <div class="catalogue-flex">
      <div class="catalogue-item" id="prod-5">
        <a href="order.php?id=5"><img src="images/cake5.png" alt="Cake 5" width="100%" /></a>
        GUDETAMA CAKE <br />
        RM 48.00
      </div>
      <div class="catalogue-item" id="prod-6">
        <a href="order.php?id=6"><img src="images/cake6.png" alt="Cake 6" width="100%" /></a>
        TOTORO CAKE <br />
        RM 35.00
      </div>
      <div class="catalogue-item" id="prod-7">
        <a href="order.php?id=7"><img src="images/cake7.png" alt="Cake 7" width="100%" /></a>
        BASQUE BURNT CHEESECAKE <br />
        RM 65.00
      </div>
      <div class="catalogue-item" id="prod-8">
        <a href="order.php?id=8"><img src="images/cake8.png" alt="Cake 8" width="100%" /></a>
        BLUEBERRY GALAXY CAKE <br />
        RM 48.00
      </div>
    </div>
    <div class="line-break" id="catalogue-row-3"></div>
    <h4>BIRTHDAY CAKES</h4>
    <hr />
    <div class="catalogue-flex">
      <div class="catalogue-item" id="prod-9">
        <a href="order.php?id=9"><img src="images/cake9.png" alt="Cake 9" width="100%" /></a>
        ICE CREAM CAKE <br />
        RM 58.00
      </div>
      <div class="catalogue-item" id="prod-10">
        <a href="order.php?id=10"><img src="images/cake10.png" alt="Cake 10" width="100%" /></a>
        TIRAMISU CAKE <br />
        RM 48.00
      </div>
      <div class="catalogue-item" id="prod-11">
        <a href="order.php?id=11"><img src="images/cake11.png" alt="Cake 11" width="100%" /></a>
        CAPPUCINO CAKE <br />
        RM 48.00
      </div>
      <div class="catalogue-item" id="prod-12">
        <a href="order.php?id=12"><img src="images/cake12.png" alt="Cake 12" width="100%" /></a>
        BOBA EARL GREY CAKE <br />
        RM 38.00
      </div>
    </div>
    <div class="line-break" id="catalogue-row-4"></div>
    <h4>MALAYSIAN DELIGHTS</h4>
    <hr />
    <div class="catalogue-flex">
      <div class="catalogue-item" id="prod-13">
        <a href="order.php?id=13"><img src="images/cake13.png" alt="Cake 13" width="100%" /></a>
        CENDOL CAKE <br />
        RM 29.00
      </div>
      <div class="catalogue-item" id="prod-14">
        <a href="order.php?id=14"><img src="images/cake14.png" alt="Cake 14" width="100%" /></a>
        MANGO CAKE <br />
        RM 29.00
      </div>
      <div class="catalogue-item" id="prod-15">
        <a href="order.php?id=15"><img src="images/cake15.png" alt="Cake 15" width="100%" /></a>
        PANDAN CAKE <br />
        RM 35.00
      </div>
      <div class="catalogue-item" id="prod-16">
        <a href="order.php?id=16"><img src="images/cake16.png" alt="Cake 16" width="100%" /></a>
        DURIAN CAKE <br />
        RM 35.00
      </div>
    </div>
  </main>
  <footer class="footer-banner">
    <small>
      <i>
        Avenue City · Selangor · +60123456789 · sugarfix@gmail.com <br /> </i></small>
  </footer>
  <hr />
  <small><i>Copyright &copy; 2021 SugarFix </i></small>
</body>

</html>
<?php include('logged_in_status.php') ?>
<?php include('cart_status.php') ?>