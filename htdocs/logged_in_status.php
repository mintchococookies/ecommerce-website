<?php
if (isset($_SESSION['email'])) {
  echo
  "<script>
  document.getElementById('login-link').style.display = 'none';
  </script>";
} else {
  echo
  "<script>
  document.getElementById('logout-link').style.display = 'none';
  </script>";
}
?>
