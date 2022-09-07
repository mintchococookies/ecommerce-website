<?php include('send_signup_data.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Sign Up Page</title>
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
    <h3>SIGN UP</h3>
    <hr />
    <div class="form-center">
      <form method="post" action="signup.php" id=signup-form>
        <?php if (count($errors) > 0) : ?>
          <div class="error">
            <?php foreach ($errors as $error) : ?>
              <p><?php echo $error ?></p>
            <?php endforeach ?>
          </div>
        <?php endif ?>
        <br>
        <div>
          <label for="firstname">FIRST NAME</label><br>
          <input type="text" id="firstname" name="firstname" pattern="[A-Za-z- ]*$" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" required />
        </div>
        <div>
          <label for="lastname">LAST NAME</label><br>
          <input type="text" id="lastname" name="lastname" pattern="[A-Za-z- ]*$" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required />
        </div>
        <div>
          <label for="email">EMAIL</label><br>
          <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" required />
        </div>
        <div>
          <label for="password">PASSWORD</label><br>
          <input type="password" id="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" required />
        </div>
        <div>
          <label for="confirm_password">CONFIRM PASSWORD</label><br>
          <input type="password" id="confirm_password" name="confirm_password" value="<?php echo isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '' ?>" required />
        </div>
        <div>
          <button type="submit" class="signup-btn" name="signup">Register</button>
        </div>

      </form>
    </div>
  </main>
  <div class="footer">
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