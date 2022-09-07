<?php include('send_login_data.php') ?>
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
      <a href="checkout.php" class="link" id="cart-link">CART</a>
      <a href="catalogue.php" class="link">MENU</a>
      <a href="login.php" class="link">LOG IN</a>
    </nav>
  </header>
  <main>
    <h3>LOG IN</h3>
    <hr />
    <div class="form-center">
      <form method="post" action="login.php" id="login-form">
        <?php if (isset($error)) : ?>
          <div class="error">
              <?php echo $error ?>
          </div>
        <?php endif ?>
        <br />
        <div>
          <label for="email">EMAIL</label> <br />
          <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" required />
        </div>
        <div>
          <label for="password">PASSWORD</label> <br />
          <input type="password" id="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" required />
        </div>
        <div>
          <button type="submit" class="login-btn" name="login">
            Log In
          </button>
        </div>
      </form>
      <h5>
        Don't have an account? <br />
        <a href="signup.php" id="signup-link">Sign Up</a>
      </h5>
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
<?php include('cart_status.php');  ?>