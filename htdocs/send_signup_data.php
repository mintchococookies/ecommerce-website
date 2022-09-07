<?php
session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "sugarfix_store";
$errors = array();

$handler = mysqli_connect($servername, $username, $password, $dbname);
if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signup'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {
        $errors[] = "The two passwords do not match.";
    }

    $check_email_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($handler, $check_email_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['email'] === $email) {
        $errors[] = "This email is already registered. Log in instead.";
        }
    }

    if (count($errors) == 0) {
        $insert_user_data = "INSERT INTO users(first_name, last_name, email, password)
        VALUES ('$firstname', '$lastname', '$email', '$password')";
        mysqli_query($handler, $insert_user_data);
        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $firstname;
        header('location: index.php');
    }
}
?>


