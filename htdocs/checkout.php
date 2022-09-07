<?php session_start(); 
if (isset($_POST['remove-btn'])){
  $count = $_POST['remove-btn'];
  unset($_SESSION["shopping_cart"][$count]);
}
if (isset($_POST['cancel-btn'])){
  unset($_SESSION['shopping_cart']);
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout Page</title>
  <link rel="stylesheet" href="styles.css" />
  <script src="validate_checkout.js"></script>
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
  <main>
    <h3>REVIEW AND PAYMENT</h3>
    <hr />
    <?php 
    $total = 0;
    if (!isset($_SESSION['email'])) : ?>
      <h4 id="login-message" class="form-center">Please log in or sign up before placing your order.</h4>
    <?php endif ?>
    <h4>Your Order Summary</h4>
    <div class="payment-flex">
      <?php if (isset($_SESSION['shopping_cart'])) {
        foreach ($_SESSION['shopping_cart'] as $product_details_array) {
      ?>
          <div id="payment-item-flex">
            <div class="payment-item">
              <img src="<?php echo $product_details_array[1] ?>" id="order-image" width="90%" />
            </div>
            <div class="payment-item">
              <p class="order-cake-description">
                <span class="payment-name"><b><?php echo $product_details_array[2] ?>x <?php echo $product_details_array[0] ?></b></span>
                <br />
                <?php if (!empty($product_details_array[3])) : ?>
                  <b>Toppings: </b><span class="payment-toppings">
                  <?php if (count($product_details_array[3]) > 0) : ?>
                    <?php foreach ($product_details_array[3] as $topping) : ?>
                      <br>
                      <?php echo $topping ?>
                    <?php endforeach ?>
                  <?php endif ?>
                  </span>
                <?php endif ?>
                <br />
                <?php if (!empty($product_details_array[4])) : ?>
                  <b>Extras: </b><span class="payment-extras">
                    <?php if (count($product_details_array[4]) > 0) : ?>
                      <?php foreach ($product_details_array[4] as $extra) : ?>
                        <br>
                        <?php echo $extra ?>
                      <?php endforeach ?>
                    <?php endif ?>
                  </span>
                <?php endif ?>
                <br />
                <?php if (!empty($product_details_array[5])) : ?>
                  <b>Request: </b><span class="payment-request">
                    <?php echo $product_details_array[5] ?></span>
                <?php endif ?>
                <br />
                <span class="payment-price">RM <?php echo $product_details_array[6] ?></span>
                <?php $index = array_search($product_details_array, $_SESSION['shopping_cart']); ?>
                <br>
              <form action="checkout.php" method="POST"><button class="remove-btn" value="<?php echo $index ?>" name="remove-btn" onclick="removeItem();">Remove Item</button></form>
            </div>
          </div>
        <?php $total += ($product_details_array[2] * $product_details_array[6]);
        } ?>
      <?php
      }
      ?>
    </div>
    <h4>Total
      RM <?php echo $total; ?></h4>
    <h4 id="add-more-items" onclick="location.href = 'catalogue.php';">Click here to add more items</h4>
    <hr />
    <h4>Payment Details</h4>
      <div>
        <form action="confirmed_order.php" method="post">
          <div style="width: 40%; margin: auto">
            <label for="cardholder_name">CARDHOLDER NAME</label> <br />
            <input
              style="width: 100%"
              type="text"
              id="cardhold_name"
              name="cardhold_name"
              pattern="[A-Za-z]*$+"
              value="<?php echo isset($_POST['cardhold_name']) ? $_POST['cardhold_name'] : '' ?>"
              required
            />
          </div>
          <div class="card-flex">
            <div class="card-item">
              <label for="cardnumber">CARD NUMBER</label> <br />
              <input
                style="width: 80%"
                type="text"
                id="cardnumber"
                name="cardnumber"
                minlength="16"
                maxlength="20"
                value="<?php echo isset($_POST['cardnumber']) ? $_POST['cardnumber'] : '' ?>"
                required
              />
            </div>
            <div class="card-item">
              <table>
                <tr>
                  <td colspan="4" style="text-align: left">
                    <label for="expdate">EXPIRATION DATE</label>
                  </td>
                  <td style="vertical-align: bottom">
                    <label for="cvc">CVC</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input
                      type="number"
                      id="expdate"
                      name="month"
                      min="1"
                      max="12"
                      value="<?php echo isset($_POST['month']) ? $_POST['month'] : '' ?>"
                      required
                    />
                  </td>
                  <td>
                    <input
                      type="number"
                      id="expdate"
                      name="year"
                      min="2021"
                      max="2030"
                      value="<?php echo isset($_POST['year']) ? $_POST['year'] : '' ?>"
                      required
                    />
                  </td>
                  <td></td>
                  <td></td>
                  <td>
                    <input
                      type="number"
                      id="cvc"
                      name="cvc"
                      min="001"
                      max="999"
                      value="<?php echo isset($_POST['cvc']) ? $_POST['cvc'] : '' ?>"
                      required
                    />
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <hr>
          <h4>Delivery Details</h4>
        <div class="form-center">
            <label for="address_line1" id="address-label">ADDRESS</label> <br />
            <input type="text" id="address_line1" name="address_line1" value="<?php echo isset($_POST['address_line1']) ? $_POST['address_line1'] : '' ?>" required/> <br />
            <input type="text" id="address_line2" name="address_line2" value="<?php echo isset($_POST['address_line2']) ? $_POST['address_line2'] : '' ?>"/> <br />
            <input type="text" id="address_line3" name="address_line3" value="<?php echo isset($_POST['address_line3']) ? $_POST['address_line3'] : '' ?>" /> <br />
        </div>
        <div class="delivery-flex">
            <div class="form-group">
            <label for="town">TOWN</label>
            <input type="text" id="town" name="town" pattern="[A-Za-z]*$+" value="<?php echo isset($_POST['town']) ? $_POST['town'] : '' ?>" required/>
            </div>
            <div class="form-group" style="margin-right: 0px">
              <label for="postcode">POSTCODE</label>
              <input type="number" id="postcode" name="postcode" min="00001" max="99999" value="<?php echo isset($_POST['postcode']) ? $_POST['postcode'] : '' ?>" required/>
            </div>
        </div>
        <div class="delivery-flex">
            <div class="form-group">
            <label for="delivery_date">DELIVERY DATE</label>
            <input type="date" id="delivery_date" name="delivery_date" value="<?php echo isset($_POST['delivery_date']) ? $_POST['delivery_date'] : '' ?>" required/>
            </div>
            <div class="form-group" style="margin-right: 0px">
            <label for="delivery_time">DELIVERY TIME (BETWEEN 9 AM TO 6 PM)</label>
            <input type="time" id="delivery_time" name="delivery_time" min="09:00" max="18:00" value="<?php echo isset($_POST['delivery_time']) ? $_POST['delivery_time'] : '' ?>" required/>
            </div>
        </div>
        <div class="delivery-flex">
            <div class="form-group" style="flex: 0.5">
            <label for="contact_number">CONTACT NUMBER</label>
            <input type="tel" id="contact_number" name="contact_number" value="<?php echo isset($_POST['contact_number']) ? $_POST['contact_number'] : '' ?>" required/>
            </div>
        </div>
            <br />
        <div class="button-flex">
          <?php if (isset($_SESSION['email'])) : ?>
            <button type="submit" class="order-btn" onclick="return validateForm();"><b>ORDER</b></button>
          <?php endif ?>
        </div>
      </form>
      <div class="button-flex">
        <form action="checkout.php" method="POST" type="button"><button name="cancel-btn" class="cancel-btn">CANCEL</button></form>
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
  <script>
    function removeItem() {
      <?php $total -= ($product_details_array[2] * $product_details_array[6]); ?>
      this.remove;
    }
  </script>
</body>

</html>
<?php include('logged_in_status.php') ?>
<?php include('cart_status.php') ?>