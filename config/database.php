<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'rewear_user');
define('DB_PASS', 'secure_password');
define('DB_NAME', 'rewear_db');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset
$conn->set_charset("utf8mb4");

// Start session
session_start();

// Base URL configuration
define('BASE_URL', 'http://localhost/rewear');
?>