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

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $password_verification_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($handler, $password_verification_query);
    $current_row_result = mysqli_fetch_assoc($results);

    if (mysqli_num_rows($results) == 0) {
        $error = "Wrong username and password combination";
    }
    if (mysqli_num_rows($results) == 1) {
        $firstname_retrieved = $current_row_result["first_name"];
        $_SESSION['firstname'] = $firstname_retrieved;
        $_SESSION['email'] = $email;
        header('location: index.php');
    }
}
?>