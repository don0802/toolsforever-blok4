<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    echo "You are not logged in, please login. ";
    echo "<a href='login.php'>Login here</a>";
    exit;
}

if ($_SESSION['role'] != 'admin') {
    echo "You are not allowed to view this page, please login as admin";
    exit;
}

//check method
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "You are not allowed to view this page";
    exit;
}
require 'database.php';

$name = htmlspecialchars($_POST['name']);
$category = htmlspecialchars($_POST['category']);
$price = htmlspecialchars($_POST['price']);
$brand = htmlspecialchars($_POST['brand']);
$image = htmlspecialchars($_POST['image']);


$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand, tool_image) VALUES ('$name', '$category', '$price', '$brand', '$image')";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: tool_index.php");
    exit;
}

echo "Something went wrong";
