<?php session_start();
unset($_SESSION['shopping_cart']);
?>
<!DOCTYPE html>
<html>

<head>
  <title>Log In Page</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  <header class="header-flex pink">
    <a href="index.php" class="link"><img src="images/logo.png" alt="Company Logo" id="logo" /></a>
    <nav>
      <a href="index.php" class="link">HOME</a>
      <a href="catalogue.php" class="link">MENU</a>
      <a href="login.php" class="link" id="login-link">LOG IN</a>
      <a href="logout.php" class="link" id="logout-link">LOG OUT</a>
    </nav>
  </header>
  <main>
    <h3>ORDER CONFIRMATION</h3>
    <hr />
        <div id="order-confirmed-item">
            <img src="images/check3.png" id="confirmed-image">
            <div class="line-break"></div>
            <p><?php echo "Hey " . $_SESSION['firstname'] . ","?></p>
            <div class="line-break"></div>
            <h3>Your Order is Confirmed!</h3>
            <div class="line-break"></div>
            <p>We will be in contact with you soon! We hope you are excited for cake!</p>
            <div class="line-break"></div>
            <button class="back-btn" onclick="location.href = 'index.php';">
                BACK TO HOME
            </button>
        </div>
  </main>
  <div class="login-footer">
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