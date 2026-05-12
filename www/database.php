<?php

//database connection   
$dbhost = 'mariadb';
$dbname = 'tools4ever';
$dbuser = 'root';
$dbpass = 'password';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}