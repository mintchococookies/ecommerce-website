<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "sugarfix_store";
$handler = mysqli_connect($servername, $username, $password, $dbname);
if (!$handler) {
  die("Connection failed: " . mysqli_connect_error());
}

$ID = $_GET['id'];
$select_query = "SELECT * FROM products WHERE id = '$ID'";
$results = mysqli_query($handler, $select_query);

$row = mysqli_fetch_assoc($results);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order Page</title>
  <link rel="stylesheet" href="styles.css" />

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
  <main>
    <div id="order-div">
      <h3>PLACE AN ORDER</h3>
      <hr />
      <div class="order-flex">
        <div class="order-item">
          <img src="<?php echo $row['product_image'] ?>" id="order-image" width="90%" />
        </div>
        <div class="order-item">
          <span id="order-cake-name"><big><b><?php echo $row['product_name'] ?></b></big></span>
          <p id=order-price><b>RM <?php echo $row['product_price'] ?></b></p>
          <p id="order-cake-description">
            <?php echo $row['product_description'] ?>
          </p>
          <form action="cart.php" method="post">
            <label for="quantity"><b>Select Quantity: </b></label>
            <br />
            <input type="number" id="quantity" name="quantity" min="1" max="5" required />
            <p><b>Select Toppings: </b></p>
            <table>
              <tr>
                <td>
                  <input type="checkbox" id="toppings" name="toppings[]" value="Cherry" />
                  <label for="toppings">Cherry</label>
                </td>
                <td>
                  <input type="checkbox" id="toppings" name="toppings[]" value="Banana" />
                  <label for="toppings">Banana</label>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" id="toppings" name="toppings[]" value="Chocolate Shavings" />
                  <label for="toppings">Chocolate Shavings</label>
                </td>
                <td>
                  <input type="checkbox" id="toppings" name="toppings[]" value="Sprinkles" />
                  <label for="toppings">Sprinkles</label>
                </td>
              </tr>
            </table>
            <p><b>Extras: </b></p>
            <div>
              <input type="checkbox" id="extras" name="extras[]" value="Candles" />
              <label for="extras">Candles</label>
            </div>
            <div>
              <input type="checkbox" id="extras" name="extras[]" value="Cake knife" />
              <label for="extras">Cake knife</label>
            </div>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name'] ?>" />
            <input type="hidden" name="price" value="<?php echo $row['product_price'] ?>" />
            <input type="hidden" name="image" value="<?php echo $row['product_image'] ?>" />
        </div>
        <div id="order-field">
          <label for="request">Enter your special request here (e.g Words to be written on
            cake):
          </label>
          <br />
          <textarea id="request" name="cake_request" rows="4"></textarea>
          <div class="button-flex">
            <br /><button type="submit" class="order-btn"><b>ADD TO CART</b></button>
            <button class="cancel-btn" onclick="location.href = 'catalogue.php';">CANCEL</button>
          </div>
        </div>
        </form>
        <br />
      </div>
    </div>
  </main>
  <footer class="footer-banner">
    <small>
      <i>Avenue City · Selangor · +60123456789 · sugarfix@gmail.com <br /> </i></small>
  </footer>
  <hr />
  <small><i>Copyright &copy; 2021 SugarFix </i></small>
</body>

</html>
<?php include('logged_in_status.php') ?>
<?php include('cart_status.php') ?>