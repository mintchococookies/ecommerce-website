<?php
session_start();

//Get all the form input
$product_name = $_POST['product_name'];
$product_image = $_POST['image'];
$quantity = $_POST['quantity'];
$toppings = $_POST['toppings'];
$extras = $_POST['extras'];
$request = $_POST['cake_request'];
$price = $_POST['price'];

$product_details_array = array($product_name, $product_image, $quantity, $toppings, $extras, $request, $price);

$_SESSION['shopping_cart'][] = $product_details_array;

header('location: checkout.php');
?>