<?php

//database connection   
$dbhost = 'mariadb';
$dbname = 'tools4ever';
$dbuser = 'root';
$dbpass = 'password';
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

$stmt = $conn->prepare("INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand) VALUES (:tool_name, :tool_category, :tool_price, :tool_brand)");

$stmt->execute(['tool_name' => 'Hamer 2000', 'tool_category' => 'Hamers', 'tool_price' => '100', 'tool_brand' => 'Makita']);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>