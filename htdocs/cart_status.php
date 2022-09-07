<?php
if (!isset($_SESSION['shopping_cart'])) {
  echo
  "<script>
    document.getElementById('cart-link').style.display = 'none';
  </script>";
}
?>